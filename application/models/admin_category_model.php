<?php

class Admin_category_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    //Ham lay ra danh sach Danh muc trong bang Category
    function get_list_category()
    {
        $this->db->from('article_category');
        return $this->db->get();
    }
    function get_list_category1()
    {
        $this->db->from('article_category');
        $this->db->where('category_images !=', '#');
        return $this->db->get();
    }
    function get_list_menu()
    {
        $this->db->from('article_category');
        $this->db->where('category_images', '#');
        return $this->db->get();
    }
    function get_list_menu_cha()
    {
        $this->db->from('article_category');
        $this->db->where('category_images', '#');
        $this->db->where('parent', '0');
        return $this->db->get();
    }


    // thêm danh mục
    function add_category($cat_name, $cat_url, $cat_icon, $art_images, $url_default, $cat_parent, $cat_summary, $cat_status, $duplicate_menu)
    {
        $this->db->set('name', $cat_name);
        $this->db->set('url', $cat_url);
        $this->db->set('parent', $cat_parent);
        $this->db->set('cate_summary', $cat_summary);
        $this->db->set('status', $cat_status);
        $this->db->set('url_default', $url_default);
        $this->db->set('icon', $cat_icon);
        $this->db->set('duplicate_menu', $duplicate_menu);
        $this->db->set('category_images', $art_images);
        $this->db->insert('article_category');
        return $this->db->insert_id();
    }

    // sửa danh mục
    function edit_category($cat_id, $cat_name, $cat_url, $cat_icon, $art_images, $url_default, $cat_parent, $cat_summary, $cat_status, $duplicate_menu)
    {
        $this->db->set('name', $cat_name);
        $this->db->set('url', $cat_url);
        $this->db->set('parent', $cat_parent);
        $this->db->set('cate_summary', $cat_summary);
        $this->db->set('status', $cat_status);
        $this->db->set('url_default', $url_default);
        $this->db->set('icon', $cat_icon);
        $this->db->set('category_images', $art_images);
        $this->db->set('duplicate_menu', $duplicate_menu);
        $this->db->where('id', $cat_id);
        $this->db->update('article_category');
    }

    //Ham Xoa trong bang Category
    function delete_category($cat_id)
    {
        $this->db->where('id', $cat_id);
        $this->db->delete('article_category');
    }

    // kiểm tra đường dẫn
    function check_cat_url($cat_url)
    {
        $this->db->from('article_category');
        $this->db->where('url', $cat_url);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return false;
        } else
            return $query->row();
    }

    function get_row_category($cat_id)
    {
        $this->db->from('article_category');
        $this->db->where('id', $cat_id);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return false;
        } else
            return $query->row();
    }

    // lấy id danh mục
    function get_list_cate_parent()
    {
        $this->db->select('id');
        $this->db->from('article_category');
        return $this->db->get();
    }

    function get_duplicate_url($id)
    {
        $this->db->select('url');
        $this->db->from('article_category');
        $this->db->where('id', $id);
        return $this->db->get();
    }
}