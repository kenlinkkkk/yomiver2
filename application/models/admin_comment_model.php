<?php
/**
 * Created by PhpStorm.
 * User: Truong Minh Duong
 * Date: 22/10/2018
 * Time: 3:53 CH
 */

class Admin_comment_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();

    }

    // hàm lấy hết comment của bài viết
    function get_all_comment()
    {
        $query = "SELECT c.id, c.comment as cmt, c.created_at as c_time, u.username, title, c.status FROM comments c INNER JOIN article a ON c.art_id = a.id_art INNER JOIN users u ON u.id = c.user_id";
        return $this->db->query($query);
    }

    function get_all_user()
    {
        $this->db->from('users');
        return $this->db->get();
    }

    function specific_search($key, $article, $user){
        if ($key == '' && $article == '') {
            $this->db->select("c.id, c.comment as cmt, c.created_at as c_time, u.username, title, c.status");
            $this->db->from("users as u");
            $this->db->join("comments as c", 'u.id = c.user_id');
            $this->db->join("article as a", 'c.art_id = a.id_art');
            $this->db->where('u.id', $user); 
        } else if ($key == '' && $user == '') {
            $this->db->select("c.id, c.comment as cmt, c.created_at as c_time, u.username, title, c.status");
            $this->db->from("article as a");
            $this->db->join("comments as c", 'a.id_art = c.art_id');
            $this->db->join("users as u", 'u.id = c.user_id');
            $this->db->like('title', $article);            
        }
        else if ($article != '' && $user != '' && $key != '') {
            $this->db->select("c.id, c.comment as cmt, c.created_at as c_time, u.username, title, c.status");
            $this->db->from("users as u");
            $this->db->join("comments as c", 'u.id = c.user_id');
            $this->db->join("article as a", 'c.art_id = a.id_art');
            $this->db->where('u.id', $user);
            $this->db->like('c.comment', $key);
            $this->db->like('a.title', $article);
        } else if ($key != '' && $user != '') {
            $this->db->select("c.id, c.comment as cmt, c.created_at as c_time, u.username, title, c.status");
            $this->db->from("comments as c");
            $this->db->join("article as a", 'c.art_id = a.id_art');
            $this->db->join("users as u", 'u.id = c.user_id');
            $this->db->like('c.comment', $key);
            $this->db->where('u.id', $user);
        } else if ($key != '' && $article != '') {
            $this->db->select("c.id, c.comment as cmt, c.created_at as c_time, u.username, title, c.status");
            $this->db->from("comments as c");
            $this->db->join("article as a", 'c.art_id = a.id_art');
            $this->db->join("users as u", 'u.id = c.user_id');
            $this->db->like('c.comment', $key);
            $this->db->like('a.title', $article);
        } else if ($user != '' && $article != '') {
            $this->db->select("c.id, c.comment as cmt, c.created_at as c_time, u.username, title, c.status");
            $this->db->from("article as a");
            $this->db->join("comments as c", 'a.id_art = c.art_id');
            $this->db->join("users as u", 'u.id = c.user_id');
            $this->db->like('title', $article);
            $this->db->where('u.id', $user);
        }
        return $this->db->get();
    }
    function search($key)
    {
        if ($key != '')
        {
            $this->db->select("c.id, c.comment as cmt, c.created_at as c_time, u.username, title, c.status");
            $this->db->from("comments as c");
            $this->db->join("article as a", 'c.art_id = a.id_art');
            $this->db->join("users as u", 'u.id = c.user_id');
            if ($key != '') {
                $this->db->like('c.comment', $key);
                $this->db->like('a.title', $article);
    //            $this->db->or_like('u.username', $query);
            }
        } else if ($article != ''){
            $this->db->select("c.id, c.comment as cmt, c.created_at as c_time, u.username, title, c.status");
            $this->db->from("article as a");
            $this->db->join("comments as c", 'a.id_art = c.art_id');
            $this->db->join("users as u", 'u.id = c.user_id');
            if ($article != '') {
                $this->db->like('title', $article);
    //            $this->db->or_like('u.username', $query);
            }
        }
        return $this->db->get();
    }

    function edit_comment($cmt_name, $cmt_art, $cmt_user, $cmt_stt, $date, $id)
    {
        $this->db->set('comment', $cmt_name);
        $this->db->set('art_id', $cmt_art);
        $this->db->set('user_id', $cmt_user);
        $this->db->set('status', $cmt_stt);
        $this->db->set('created_at', $date);
        $this->db->where('id', $id);
        $this->db->update('comments');
    }

    function add_comment($cmt_name, $cmt_art, $cmt_user, $cmt_stt, $date)
    {
        $this->db->set('comment', $cmt_name);
        $this->db->set('art_id', $cmt_art);
        $this->db->set('user_id', $cmt_user);
        $this->db->set('status', $cmt_stt);
        $this->db->set('created_at', $date);
        $this->db->insert('comments');
        return $this->db->insert_id();
    }

    function get_row_comment($id)
    {
        $this->db->from('comments');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return false;
        } else
            return $query->row();
    }

    function delete_comment($cat_id)
    {
        $this->db->where('id', $cat_id);
        $this->db->delete('comments');
    }
}