<?php
/**
 * Created by PhpStorm.
 * User: Truong Minh Duong
 * Date: 05/11/2018
 * Time: 4:24 CH
 */

class Register_model extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }

    function check_nickname($name)
    {
        $this->db->from('users');
        $this->db->where('username', $name);
        return $this->db->count_all_results();
    }

    function check_login($name, $pass)
    {
        $this->db->where("username", $name);
        $this->db->where("password", $pass);
        $this->db->where("status", 1);
        $query = $this->db->get("users");
        return $query->row();
    }

    function insert_user($name, $pass)
    {
        $this->db->set('username', $name);
        $this->db->set('password', $pass);
        $this->db->set('avatar', 'http://s3.amazonaws.com/nvest/Blank_Club_Website_Avatar_Gray.jpg');
        $this->db->set('role', 1);
        $this->db->set('status', 1);
        return $this->db->insert('users');
    }
}