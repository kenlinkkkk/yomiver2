<?php
/**
 * Created by PhpStorm.
 * User: Truong Minh Duong
 * Date: 05/11/2018
 * Time: 10:13 SA
 */

class Admin_slide_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();

    }

    function get_all_slide()
    {
        $this->db->from('slides');
        $this->db->order_by('stt', 'ASC');
        return $this->db->get();
    }

    // thêm slide
    function add_slide($slide_name, $slide_image,  $slide_summary, $slide_url, $slide_stt)
    {
        $this->db->set('name', $slide_name);
        $this->db->set('image', $slide_image);
        $this->db->set('summary', $slide_summary);
        $this->db->set('url', $slide_url);
        $this->db->set('stt', $slide_stt);
        $this->db->insert('slides');
        return $this->db->insert_id();
    }

    // sửa slide
    function edit_slide($slide_name, $slide_image,  $slide_summary, $slide_url, $slide_stt, $id)
    {
        $this->db->set('name', $slide_name);
        $this->db->set('image', $slide_image);
        $this->db->set('summary', $slide_summary);
        $this->db->set('url', $slide_url);
        $this->db->set('stt', $slide_stt);
        $this->db->where('id', $id);
        $this->db->update('slides');
    }

    function get_row_slide($id){
        $this->db->from('slides');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return false;
        } else
            return $query->row();
    }

    function delete_slide($cat_id)
    {
        $this->db->where('id', $cat_id);
        $this->db->delete('slides');
    }
}