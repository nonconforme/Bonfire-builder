<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * builder_model
 *
 * Generated by Bonfire's Code Builder on 2012-10-18 12:27am.
 * Generated for kilishan.
 */
class builder_model extends BF_Model {

	protected $table 			= 'Builders';
	protected $key				= 'id';
	protected $set_created		= TRUE;
	protected $set_modified		= FALSE;
	protected $date_format		= 'datetime';

	protected $created_field	= 'created_on';
	protected $modified_field	= 'modified_on';

	/**
	 * Observer Arrays
	 *
	 * Each array can contain the names of callback functions within the extending model
	 * That will be called during each event.
	 *
	 * <code>
	 *	$before_insert = array('set_created', 'validate_fields');
	 * </code>
	 */
	protected $before_insert	= array();
	protected $after_insert		= array();
	protected $before_update	= array();
	protected $after_update		= array();
	protected $before_find		= array();
	protected $after_find		= array();
	protected $before_delete	= array();
	protected $after_delete		= array();
}