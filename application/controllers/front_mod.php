<?php
/**
 * Created by PhpStorm.
 * User: thanh
 * Date: 05/17/2019
 * Time: 09:17 AM
 */

class Front_mod extends MX_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    function index() {
        $segment1 = $this->uri->segment(1);

        switch ($segment1) {
            case 'huong-dan-dang-ky' :
                $main = $this->_front_huongdan();
                break;
            case 'cttt':
                $main = $this->_front_CTKM();
                break;
            case 'lien-he':
                $main = $this->_front_Lienhe();
        }

        $footer = $this->_front_Footer();
        $promotion = $this->_front_promotion();
        $data = array();

        $data['main'] = $main;
        $data['footer'] = $footer;
        $data['promotion'] = $promotion;
        return $this->load->view('front_layout', $data);
    }

    function _front_huongdan() {
        return $this->load->view('front_huongdan');
    }

    function _front_CTKM() {
        return $this->load->view('front_CTKM');
    }

    function _front_Lienhe() {
        return $this->load->view('front_Lienhe');
    }

    function _front_Footer() {
        return $this->load->view('front_footer');
    }

    function _front_promotion() {
        return $this->load->view('front_promotion');
    }
}
?>