<?php
/**
 * Created by PhpStorm.
 * User: thanh
 * Date: 05/10/2019
 * Time: 02:23 PM
 */

class Admin extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function check_login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('admin');
	}


}
