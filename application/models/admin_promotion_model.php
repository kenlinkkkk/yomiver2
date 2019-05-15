<?php
/**
 * Created by PhpStorm.
 * User: thanh
 * Date: 05/07/2019
 * Time: 10:49 AM
 */

class Admin_promotion_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public function get_promotion() {
        $this->db->from('promotions');
        return $this->db->get();
    }

    /**
     * @param $des
     * @return string
     */
    public function add_promotion($des){
        $this->db->set('description', $des);
        $this->db->insert('promotions');

        if ($this->db->affected_rows() > 0) {
            $status = "Thêm thông tin thành công";
        } else {
            $status = "Thêm không thành công";
        }

        return $status;
    }

    public function update_promotion($promo_id, $des) {
        $this->db->set('description', $des);
        $this->db->where('id', $promo_id);
        $this->db->update('promotions');

        if ($this->db->affected_rows() > 0) {
            $status = "Cập nhật thông tin thành công";
        } else {
            $status = "Cập nhật không thành công";
        }

        return $status;
    }

    public function delete_promotion($promo_id) {
        $this->db->from('promotions');
        $this->db->where('id', $promo_id);
        $this->db->delete('promotions');

        if ($this->db->affected_rows() > 0) {
            $status = "Xóa thành công";
        } else {
            $status = "Xoá thất bại";
        }

        return $status;
    }

    public function get_promotion_by_id($id) {
        $this->db->from('promotions');
        $this->db->where('id', $id);
        $query = $this->db->get();

        if ($query->num_rows() == 0) {
            return false;
        } else {
            return $query->row();
        }
    }
}
?>