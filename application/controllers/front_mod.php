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
                $main = $this->_front_Huongdan();
                break;
            case 'cttt':
                $main = $this->_front_CTKM();
                break;
            case 'lien-he':
                $main = $this->_front_Lienhe();
                break;
            case 'gioi-thieu':
                $main = $this->_front_Gioithieu();
                break;
            case 'sach-kham-pha':
                $main = $this->_front_Sachkhampha();
                break;
            case 'tu-vi':
                $main = $this->_front_Tuviphongthuy();
                break;
            case 'hoang-dao':
                $main = $this->_front_Hoangdao();
                break;
            case 'lich-van-su':
                $main = $this->_front_Lichvansu();
                break;
            case 'dieu-le':
                $main = $this->_front_Dieule();
                break;
            default:
                $main = $this->_front_Home();
                break;
        }

        $footer = $this->_front_Footer();
        $promotion = $this->_front_Promotion();
        $data = array();

        $data['main'] = $main;
        $data['footer'] = $footer;
        $data['promotion'] = $promotion;
        return $this->load->view('front_layout', $data);
    }

    function _front_Huongdan() {
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

    function _front_Promotion() {
        return $this->load->view('front_promotion');
    }

    function _front_Gioithieu() {
        return $this->load->view('front_gioithieu');
    }

    function _front_Sachkhampha() {
        return $this->load->view('front_sachkhampha');
    }

    function _front_Tuviphongthuy() {
        return $this->load->view('front_tuviphongthuy');
    }

    function _front_Hoangdao() {
        return $this->load->view('front_hoangdao');
    }

    function _front_Lichvansu() {
        return $this->load->view('front_lichvansu');
    }

    function _front_Dieule() {
        return $this->load->view('front_dieule');
    }

    function _front_Home() {
        return $this->load->view('front_home');
    }
}
?>