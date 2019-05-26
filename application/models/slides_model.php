<?php
/**
 * Created by PhpStorm.
 * User: thanh
 * Date: 05/23/2019
 * Time: 04:07 PM
 */

class slides_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function get_slides() {
        $this->db->from('slides');
        return $this->db->get();
    }

    function deleteSlideById($idSlide) {
        $this->db->from('slides');
        $this->db->where('id', $idSlide);
        $this->db->delete('slides');

        if ($this->db->affected_rows() > 0) {
            $status = "Xóa thành công";
        } else {
            $status = "Xóa thất bại";
        }

        return $status;
    }

    function addSlide($data) {
        $this->db->set('name', $data['name']);
        $this->db->set('url', $data['url']);
        $this->db->set('image', $data['image']);
        $this->db->set('title', $data['title']);
        $this->db->insert('slides');

        if ($this->db->affected_rows() > 0) {
            $status = "Thêm thành công";
        } else {
            $status = "Thêm thất bại";
        }

        return $status;
    }

    function updateSlide($data) {
        $this->db->set('name', $data['name']);
        $this->db->set('url', $data['url']);
        $this->db->set('image', $data['image']);
        $this->db->set('title', $data['title']);
        $this->db->where('id', $data['id']);
        $this->db->update('slides');

        if ($this->db->affected_rows() > 0) {
            $status = "Cập nhật thành công";
        } else {
            $status = "Cập nhật thất bại";
        }

        return $status;
    }
}