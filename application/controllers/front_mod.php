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
        $this->load->model('user_model');
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
            case 'ket-hop-hoang-dao':
                $main = $this->_front_Kethophoangdao();
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
        $data = [
            'view' => $this->load->view('front_huongdan'),
            'title' => 'Hướng dẫn đăng ký dịch vụ',
        ];

        return $data;
    }

    function _front_CTKM() {
        $data = [
            'view' => $this->load->view('front_CTKM'),
            'title' => 'Chương trình khuyến mãi',
        ];

        return $data;
    }

    function _front_Lienhe() {
        $data = [
            'view' => $this->load->view('front_Lienhe'),
            'title' => 'Liên hệ',
        ];

        return $data;
    }

    function _front_Footer() {
        return $this->load->view('front_footer');
    }

    function _front_Promotion() {
        return $this->load->view('front_promotion');
    }

    function _front_Gioithieu() {
        $data = [
            'view' => $this->load->view('front_gioithieu'),
            'title' => 'Giới thiệu',
        ];

        return $data;
    }

    function _front_Sachkhampha() {
        $data = [
            'view' => $this->load->view('front_sachkhampha'),
            'title' => 'Sách khám phá bản thân',
        ];

        return $data;
    }

    function _front_Tuviphongthuy() {
        $data = [
            'view' => $this->load->view('front_tuviphongthuy'),
            'title' => 'Tử vi phong thủy',
        ];

        return $data;
    }

    function _front_Hoangdao() {
        $data = [
            'view' => $this->load->view('front_hoangdao'),
            'title' => 'Cung hoàng đạo',
        ];

        return $data;
    }

    function _front_Lichvansu() {
        $data = [
            'view' => $this->load->view('front_lichvansu'),
            'title' => 'Lịch vạn sự',
        ];

        return $data;
    }

    function _front_Dieule() {
        $data = [
            'view' => $this->load->view('front_dieule'),
            'title' => 'Điều lệ thỏa thuận',
        ];

        return $data;
    }

    function _front_Kethophoangdao() {
        $data = [
            'view' => $this->load->view('front_kethophoangdao'),
            'title' => 'Kết hợp cung hoàng đạo',
        ];
        return $data;
    }

    function _front_Home() {
        $data = [
            'view' => $this->load->view('front_home'),
            'title' => 'Trang chủ',
        ];

        return $data;
    }

    function _login() {
        $errors = false;
        $this->session->unset_userdata('Username');
        $this->session->unset_userdata('');
    }

}
?>