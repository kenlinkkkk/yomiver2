<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_mod extends MX_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('slides_model');
    }

    function index() {
        $segment1 = $this->uri->segment(1);
        $segment2 = $this->uri->segment(2);
        $segment3 = $this->uri->segment(3);

        if ($segment2 == 'login') {
            return $this->_login();
        }

        if (!$this->_check_login()) {
            redirect($this->uri->level(1). '/login');
        }

        if ($segment2 == 'logout') {
            return $this->_logout();
        }
        $main = '';

        if ($segment1 == 'admin'){
            switch ($segment2) {
                case 'slide':
                    $main = $this->_slides();
                    break;
            }
        }

        $data['main'] = $main;

        return $this->load->view('admin_layout', $data);
    }
//    function for login

    function _admin_login() {
        return $this->load->view('admin_login');
    }

    function _check_login() {
        $username = $this->session->userdata('Username');
        $password = trim($this->session->userdata('Password'));

        $row = $this->user_model->checkLoginAdmin($username, $password);

        if ($row) {
            @session_start();
            return true;
        } else {
            return false;
        }
    }

    function _login() {
        $errors = false;

        $this->session->unset_userdata('Username');
        $this->session->unset_userdata('Password');
        $this->session->unset_userdata('check_ss');
        if (isset($_SESSION['ss'])) {
            $_SESSION = null;
        }

        if ($this->input->post('isPost')) {
            $errors = true;

            $username = trim(htmlspecialchars($this->input->post('adminUsername')));
            $password = md5(trim($this->input->post('adminPass')));

            $row = $this->user_model->checkLoginAdmin($username, $password);

            if ($row) {
                $array = array(
                    'id'          => $row->id,
                    'Username'    => $row->username,
                    'Password'    => $row->password,
                    'name'        => $row->name,
                    'avatar'      => $row->avatar,
                    'email'       => $row->email,
                    'phonenumber' => $row->phonenumber,
                    'dob'         => $row->dob,
                );

                $this->session->set_userdata($array);

                @session_start();

                $_SESSION['id'] = $row->id;
                $_SESSION['Username'] = $row->username;
                $_SESSION['Password'] = $row->password;
                $_SESSION['name'] = $row->name;
                $_SESSION['avatar'] = $row->avatar;
                $_SESSION['email'] = $row->email;
                $_SESSION['phonenumber'] = $row->phonenumber;
                $_SESSION['dob'] = $row->dob;
                $_SESSION['ss'] = 'ss';

                redirect($this->uri->level(1));
            } else {
                $errors = 'Đăng nhập thất bại';
            }
        }
        return $this->load->view('admin_login', array('errors' => $errors), true);


    }

    function _logout() {
        $this->session->unset_userdata('Username');
        $this->session->unset_userdata('Password');
        $this->session->unset_userdata('check_ss');
        redirect($this->uri->level(2));
    }

    function _change_password() {
        return null;
    }
//    end function for login


//    function for load view

//    function for slide

    function _slides() {
        $segment3 = $this->uri->segment(3);

        $this->config->set_item('page_title', 'Slides');

        switch ($segment3) {
            case 'add':
            case 'edit':
                return $this->_slides_add();
                break;
            case 'delete':
                return $this->_slides_delete();
                break;
            default:
                return $this->_slides_list();
        }
    }

    function _slides_list() {
        $slides = $this->slides_model->get_slides();

        $data['slides'] = $slides;

        return $this->load->view('admin_slides', $data);
    }

    function _slides_delete() {
        $segment4 = intval($this->uri->segment(4));
        $this->slides_model->deleteSlideById($segment4);
        redirect($this->uri->level(2));
    }

    function _slides_add() {
        $segment3 = $this->uri->segment(3);
        if ($segment3 == 'edit') {
            $id_slide = intval($this->uri->segment(4));
        }

        $slide_name = trim(htmlspecialchars($this->input->post('name')));
        $slide_url =  trim(htmlspecialchars($this->input->post('urlPost')));
        $slide_img  = trim(htmlspecialchars($this->input->post('urlImage')));
        $slide_title = trim(htmlspecialchars($this->input->post('title')));

        $slide = null;

        if (empty($slide_img)) {
            $uploadPath = 'images/slides';
            $slide_img =  '';
            $url_img = '';

            if (!empty($_FILES['urlImage']['name'])) {
                $config['upload_path'] = $uploadPath;
                $config['max_size'] = 1000000;
                $config['allowed_types'] = 'gif|jpg|png';
                $config['file_name']  = $_FILES['urlImage']['name'];

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('urlImage')) {
                    $image_data = $this->upload->data();

                    $url_img = $image_data['file_name'];
                }else{
                    $error = array('error' => $this->upload->display_errors());
                }

                if (!$url_img == '') {
                    $url = base_url(). $uploadPath .'/' . $url_img;
                    $slide_img = $url;
                } else {
                    $url_now  = $this->uri->uri_string();
                    redirectMsg($url_now,'Upload không thành công!!');
                }
            }
        }

        if ($this->input->post('isPost')) {
            $slide = [
                'id' => $this->uri->segment(4),
                'name' => $slide_name,
                'url' => $slide_url,
                'image' => $slide_img,
                'title' => $slide_title,
            ];

            if ($segment3 == 'edit')  {
                $this->slides_model->updateSlide($slide);
            } else {
                $this->slides_model->addSlide($slide);
            }

            redirect($this->uri->level(2));
        } elseif ( $segment3 == 'edit') {
            $row = $this->slides_model->getSlideById($id_slide);
            if (!$row) show_404();

            $slide_id = $row->id;
            $slide_name = $row->name;
            $slide_url = $row->url;
            $slide_title = $row->title;
        }

        $data  = [
            'slide_id' => $slide_id,
            'slide_name' => $slide_name,
            'slide_url' => $slide_url,
            'slide_title' => $slide_title,
        ];


        return $this->load->view('admin_slides_add', $data);
    }
//    end slides

// upload file

    function _upload_image($uploadPath) {
        $url_img = '';

        if (!empty($_FILES['urlImage']['name'])) {
            $config['upload_path'] = $uploadPath;
            $config['max_size'] = 1000000;
            $config['allowed_type'] = 'jpg|jpeg|png|gif';
            $config['max_width']            = 5000;
            $config['max_height']           = 5000;
            $config['file_name']  = $_FILES['urlImage']['name'];

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('urlImage')) {
                $image_data = $this->upload->data();

                $url_img = $image_data['file_name'];
            }

            if (!$url_img == '') {
                $url = base_url(). $uploadPath .'/' . $url_img;
                return $url;
            } else {
                $url_now  = $this->uri->uri_string();
                redirect($url_now);
            }
        }
    }
}
?>