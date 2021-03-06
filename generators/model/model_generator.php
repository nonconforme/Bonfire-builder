<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_Generator extends BF_Generator {

	public $title		= 'Model Generator';
	public $description	= 'Generates a single Model skeleton file.';
	public $templates	= array(
		'model'	=> 'model.php'
	);

	// Our form fields and validation needs
	protected $fields	= array(
			'prefix'	=> array(
				'type'		=> 'db_prefix',
			),
			// Model Name
			'name'		=> array(
				'type'			=> 'input',
				'default'		=> 'Untitled',
				'help'			=> 'The class name of the model, excluding "_model", as this will be added to the name automatically.',
				'display_name'	=> 'Model Name',
				'rules'			=> 'required|trim|strip_tags|xss_clean',
			),
			// database table
			'table'		=> array(
				'type'			=> 'db_table',
				'default'		=> '',
				'help'			=> 'The name of the database table to be used.',
				'display_name'	=> 'DB Table Name',
				'rules'			=> 'required|trim|strip_tags|xss_clean'
			),
			'set_created'	=> array(
				'type'			=> 'checkbox',
				'default'		=> 'checked',
				'help'			=> 'Should the \'created_on\' field be automatically populated on inserts?',
				'display_name'	=> 'Set Created',
			),
			'set_modified'	=> array(
				'type'			=> 'checkbox',
				'default'		=> '',
				'help'			=> 'Should the \'modified_on\' field be automatically populated on updates?',
				'display_name'	=> 'Set Modified',
			),
			'base_class'	=> array(
				'type'		=> 'info',
				'default'	=> 'BF_Model'
			)
		);

	// The files to create
	protected $files = array(
		'{name}_model.php'	=> array(
			'template'	=> 'model',
			'folder'	=> 'models'
		)
	);

	//--------------------------------------------------------------------

	/**
	 * Returns the variables that will be used and replaced throughout
	 * the generation process.
	 *
	 * @param  array $params The params derived from the form
	 *
	 * @return [type]         [description]
	 */
	public function get_vars($params)
	{
		$vars = array(
			'module'		=> $params['module'],
			'model_name'	=> isset($params['name']) ? $params['name'] : '',
			'table'			=> isset($params['table']) ? $params['table'] : '',
			'set_created'	=> isset($params['set_created']) ? 'TRUE' : 'FALSE',
			'set_modified'	=> isset($params['set_modified']) ? 'TRUE' : 'FALSE',
			'table_name'	=> isset($params['table']) ? $params['table'] : '',
			'key'			=> 'id',
		);

		return $vars;
	}

	//--------------------------------------------------------------------

}