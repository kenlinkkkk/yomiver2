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
        if ($segment1 == 'admin'){
            switch ($segment2) {
                case 'slide':
                    return null;
                    break;
                default:
                    return $this->load->view('admin_layout');
            }
        }
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
}
?>