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
}