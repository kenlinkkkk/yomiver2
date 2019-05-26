<?php
/**
 * Created by PhpStorm.
 * User: thanh
 * Date: 05/24/2019
 * Time: 01:43 PM
 */

class user_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function getUserByData($username, $password) {
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get();
    }

    function checkLoginAdmin($username, $password) {
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('role', 2);
        $query = $this->db->get();
        return $query->row();
    }
}