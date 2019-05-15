<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Member_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function check_login($HoTen, $Password)
    {
        $this->db->where("username", $HoTen);
        $this->db->where("password", $Password);
        $this->db->where("role", '1');
        return $this->db->get("users");
    }

    function get_admin($password){
        $this->db->where("username", 'admin');
        $this->db->where("password", $password);
        $this->db->where("role", '2');
        return $this->db->get("users");
    }

    function admin_changes_password($newPassword){
        $this->db->set("password", $newPassword);
        $this->db->where("username", 'admin');
        $this->db->where("role", '2');
        $this->db->update("users");
    }

    function check_login_admin($HoTen, $Password)
    {
        $this->db->where("username", $HoTen);
        $this->db->where("password", $Password);
        $this->db->where("role", '2');
        $query = $this->db->get("users");
        return $query->row();
    }

    // lấy danh sách thành viên
    function get_all_user()
    {
        $this->db->from('users');
        $this->db->order_by('id', 'DESC');
        return $this->db->get();
    }

    // lấy danh sách bài viết
    function get_all_art()
    {
        $this->db->from('article');
        $this->db->order_by('id_art', 'DESC');
        return $this->db->get();
    }

}

?>