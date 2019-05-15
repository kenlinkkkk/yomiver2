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
        $this->load->helper('common');
        $this->load->helper('editor');
//        $this->load->helper('date');
        $this->load->model('member_model');
        $this->load->model('admin_category_model');
        $this->load->model('admin_slide_model');
        $this->load->model('admin_article_model');
        $this->load->model('admin_comment_model');
        $this->load->model('admin_promotion_model');
        $this->load->library('ckeditor');
        $this->load->library('ckfinder');
        $this->ckeditor->basePath = base_url() . 'asset/ckeditor/';
        $this->ckeditor->config['language'] = 'vi';
        $this->ckeditor->config['width'] = 'auto';
        $this->ckfinder->SetupCKEditor($this->ckeditor, '../../../asset/ckfinder/');
        $this->ckeditor->config['height'] = '300px';
    }

    function index()
    {
        if ($this->uri->segment(2) == 'login') return $this->_login();
        if ($this->uri->segment(2) == 'password') return $this->_change_password();
        if (!$this->_check_login()) redirect($this->uri->level(1) . '/login');
        if ($this->uri->segment(2) == 'logout') return $this->_logout();

        $segment2 = $this->uri->segment(2);
        $main = '';
        switch ($segment2) {
            case 'category':
                $main = $this->_category(); //load category page
                break;
            case 'menu':
                $main = $this->_category(); // load category page
                break;
            case 'reward':
                $main = $this->_reward(); // load reward page
                break;
            case 'article':
                $main = $this->_article(); // load article page
                break;
            case 'comment':
                $main = $this->_comment(); // load comment page
                break;
            case 'slide':
                $main = $this->_slide(); // load slide page
                break;
            case 'altt':
                $main = $this->_slide(); // load slide page
                break;
            case 'promotion':
                $main = $this->_promotion(); // load promotion page
                break;
            default :
                $main = $this->_home(); // load home page
                break;
        }

        $data = array();
        $data['main'] = $main;
        return $this->load->view('admin_layout', $data);
    }

    // login function
    function _login()
    {
        $errors = false;
        $this->session->unset_userdata('Username');
        $this->session->unset_userdata('Password');
        $this->session->unset_userdata('check_ss');
        if (isset($_SESSION['ss'])) $_SESSION['ss'] = 'null';
        if ($this->input->post('login')) {

            $errors = true;
            $HoTen = trim(htmlspecialchars($this->input->post('Username')));
            $Password = md5(trim($this->input->post('Password')));

            $row = $this->member_model->check_login_admin($HoTen, $Password);
            if ($row) {
                $this->session->set_userdata('Username', $row->username);//die;
                $this->session->set_userdata('Password', $row->password);
                $this->session->set_userdata('User_Id', $row->id);
                $this->session->set_userdata('Role', $row->role);
                $this->session->set_userdata('check_ss', 'ss');

                @session_start();
                $_SESSION['Username'] = $row->username;
                $_SESSION['Password'] = $row->password;
                $_SESSION['User_Id'] = $row->id;
                $_SESSION['Role'] = $row->role;
                $_SESSION['ss'] = 'ss';
                redirect($this->uri->level(1));
            } else {
                $errors = 'Đăng nhập thất bại!';
            }
        }
        return $this->load->view('admin_login', array('errors' => $errors), true);
    }

    // change password function
    function _change_password(){
        $errors = false;
        $success = false;
        if ($this->input->post('change')) {

            $password = md5(trim($this->input->post('currentPassword')));
            $newPassword = md5(trim($this->input->post('newPassword')));
            $comfirmPassword = md5(trim($this->input->post('comfirmPassword')));

            if($newPassword != $comfirmPassword){
                $errors = 'Mật khẩu xác nhận không khớp!';
            } else {
                $admin = $this->member_model->get_admin($password);
                foreach ($admin->result() as $row){
                    if ($row->password != $password){
                        $errors = 'Mật khẩu hiện tại không đúng!';
                    } else {
                        $this->member_model->admin_changes_password($newPassword);
                        $success = 'Đổi mật khẩu thành công!';
                    }
                }
            }
        }
        return $this->load->view('admin_changes_password', array('errors' => $errors , 'success' => $success), true);
    }

    // check login function
    function _check_login()
    {
        $HoTen = $this->session->userdata('Username');
        $Password = trim($this->session->userdata('Password'));
        $row = $this->member_model->check_login_admin($HoTen, $Password);
        if ($row) {
            @session_start();
            return true;//echo "ton tai "; echo $Password; die;//
        } else
            return false;//echo "ko ton tai"; die;//
    }

    // logout function
    function _logout()
    {
        $this->session->unset_userdata('Username');
        $this->session->unset_userdata('Password');
        $this->session->unset_userdata('ss');
        redirect($this->uri->level(2));
    }

    // function load home view
    function _home()
    {
        return $this->load->view('admin_home');
    }

    
    function _category()
    {
        $segment3 = $this->uri->segment(3);
//        $this->config->set_item('page_title', 'Danh Mục ');
        switch ($segment3) {
            case 'add':
            case 'edit':
                return $this->_category_add();
                break;
            case 'add_cate':
            case 'edit_cate':
                return $this->_category_add();
                break;
            case 'delete':
                return $this->_category_delete();
                break;
            case 'url':
                return $this->_category_url();
                break;
            default :
                return $this->_category_list();
                break;
        }
    }

    function _category_url()
    {
        $string = $this->input->post('title');
        echo string2url(trim($string));
        exit;
    }

    function _category_add()
    {   

        $cat_id = 0;
        $cat_edit = false;
        $segment3 = $this->uri->segment(3);
        if ($segment3 == 'edit' || $segment3 == 'edit_cate') {
            $cat_edit = true;
            $cat_id = intval($this->uri->segment(4));
        }
        $query_admin_category = $this->admin_category_model->get_list_category1();
        $query_admin_menu = $this->admin_category_model->get_list_menu_cha();
        $cat_name = trim($this->input->post('cat_name'));
//        $cat_url = trim($this->input->post('cat_url'));
        $cat_url = string2url(trim($cat_name));
        $cat_summary = trim($this->input->post('cat_summary'));
        $cat_icon = trim($this->input->post('icon'));
        $url_default = trim($this->input->post('url_default'));
        $cat_status = trim($this->input->post('cat_status'));
        $art_images = trim(htmlspecialchars($this->input->post('art_images')));
        if (empty($art_images)) {
            $art_images = $this->_upload_images();
        }
//        $cat_check_1 = trim($this->input->post('cat_check_1'));
        $cat_parent = intval($this->input->post('cat_parent'));
        $duplicate_menu = intval($this->input->post('duplicate_menu'));
        if($duplicate_menu != 0){
            $url = $this->admin_category_model->get_duplicate_url($duplicate_menu);
            foreach ($url->result() as $row) {
                $cat_url = $row->url;
            }
        }
        $errors = array();
        $query_check_cat_url = $this->admin_category_model->check_cat_url($cat_url);
        if ($this->input->post('isPost')) {
            if ($cat_name == '') $errors[] = 'Chưa nhập tên danh mục';
            if ($this->uri->segment(3) == 'add') {
                if ($cat_url == '') $errors[] = 'Chưa nhập URL';
                else {
                    if ($cat_url == $query_check_cat_url->cat_url) $errors[] = 'URL là duy nhất  vui lòng đổi tên URL ';
                }
            }
            if (count($errors) == 0) {
                if ($segment3 == 'edit') {
                    $this->admin_category_model->edit_category($cat_id, $cat_name, $cat_url, $cat_icon, $art_images, $url_default, $cat_parent, $cat_summary, $cat_status, $duplicate_menu);
                } else {
                    $this->admin_category_model->add_category($cat_name, $cat_url, $cat_icon, $art_images, $url_default, $cat_parent, $cat_summary, $cat_status, $duplicate_menu);
                }
                redirect($this->uri->level(2));
            }
        } elseif ($segment3 == 'edit' || $segment3 == 'edit_cate') {
            $row = $this->admin_category_model->get_row_category($cat_id);
            if (!$row) show_404();
            $cat_id = $row->id;
            $cat_name = $row->name;
            $cat_url = $row->url;
            $cat_parent = $row->parent;
            $cat_summary = $row->cate_summary;
            $cat_status = $row->status;
            $cat_icon = $row->icon;
            $art_images = $row->category_images;
            $duplicate_menu = $row->duplicate_menu;
            $url_default = $row->url_default;
        }
        $data = array();
        $data['cat_edit'] = $cat_edit;
        $data['cat_id'] = $cat_id;
        $data['cat_name'] = $cat_name;
        $data['cat_url'] = $cat_url;
        $data['cat_parent'] = $cat_parent;
        $data['cat_summary'] = $cat_summary;
        $data['url_default'] = $url_default;
        $data['cat_icon'] = $cat_icon;
        $data['art_images'] = $art_images;
        $data['cat_status'] = $cat_status;
        $data['duplicate_menu'] = $duplicate_menu;

        $data['errors'] = $errors;
        $data['array_category'] = $query_admin_category;
        $data['array_menu'] = $query_admin_menu;
        return $this->load->view('admin_category_add', $data);
    }


    function _category_delete()
    {
        $segment4 = intval($this->uri->segment(4));
        $this->admin_category_model->delete_category($segment4);
        redirect($this->uri->level(2));
    }


    function _category_list()
    {
        /// Bình Thường
        $segment2 = $this->uri->segment(2);
        if ($segment2 == 'category'){
            $query_category = $this->admin_category_model->get_list_category1();
            $data = array();
            $data['array_category'] = $query_category;
            return $this->load->view('admin_category', $data);
        } else if ($segment2 == 'menu'){
            $query_category = $this->admin_category_model->get_list_menu();
            $data = array();
            $data['array_category'] = $query_category;
            return $this->load->view('admin_category', $data);
        }
    }

    function _article()
    {
        $segment3 = $this->uri->segment(3);
//        $this->config->set_item('page_title', 'Danh Mục ');
        switch ($segment3) {
            case 'add_music':
            case 'edit_music':
                return $this->_article_add_music();
            case 'add_video':
            case 'edit_video':
                return $this->_article_add_video();
                break;
            case 'add_img':
            case 'edit_img':
                return $this->_article_add_image();
                break;
            case 'delete':
                return $this->_article_delete();
                break;
            case 'url':
                return $this->_article_url();
                break;
            default :
                return $this->_article_list();
                break;
        }
    }
    function _reward()
    {
        $segment3 = $this->uri->segment(3);
        switch ($segment3) {
            case 'add_reward':
            case 'edit_reward':
                return $this->_reward_add();
            case 'delete':
                return $this->_reward_delete();
                break;
            default:
                return $this->_reward_list();
                break;
        }
    }
    function _reward_add()
    {
        $trung_thuong_id = 0;
        $reward_edit = false;
        $segment3 = $this->uri->segment(3);
        if ($segment3 == 'edit_reward'){
            $reward_edit = true;
            $trung_thuong_id = intval($this->uri->segment(4));
        }
        
        $sdt = intval($this->input->post('sdt'));
        $time = strtotime($this->input->post('reward_date'));
        if ($time) {
            $reward_date = date('d/m/Y', $time);
        }
        $reward_id = intval($this->input->post('reward_id'));
        $data_reward = $this->admin_article_model->get_reward();
        $errors = array();
        if ($this->input->post('isPost')) {

            if ($sdt == '') $errors[] = 'Chưa nhập số điện thoại';
            if ($reward_id == '') $errors[] = 'Chưa chọn giải thưởng';
            if (count($errors) == 0) {
                if ($segment3 == 'edit_reward') {
                    $this->admin_article_model->edit_reward($trung_thuong_id, $reward_id, $sdt,  $reward_date);
                } else {
                    $this->admin_article_model->add_reward($trung_thuong_id, $reward_id, $sdt,  $reward_date);
                }
                redirect($this->uri->level(2));
            }
        } elseif ($segment3 == 'edit_reward') {
            $row = $this->admin_article_model->get_row_reward($trung_thuong_id);
            if (!$row) show_404();
            $trung_thuong_id = $row->trung_thuong_id;
            $sdt = $row->sdt;
            $reward_id = $row->reward_id;
            $reward_date = $row->created_at;
        }
        $data = array();
        $data['reward_edit'] = $reward_edit;
        $data['trung_thuong_id'] = $trung_thuong_id;
        $data['sdt'] = $sdt;
        $data['reward_id'] = $reward_id;
        $data['data_reward'] = $data_reward;
        $data['reward_date'] = $reward_date;

        $data['errors'] = $errors;
        return $this->load->view('admin_trung_thuong_add', $data);
    }

    function _article_add_image()
    {
        $art_id = 0;
        $art_edit = false;
        $segment3 = $this->uri->segment(3);
        if ($segment3 == 'edit_img') {
            $art_edit = true;
            $art_id = intval($this->uri->segment(4));
        }

        // lấy danh mục
        $data_all_cate = $this->admin_article_model->get_all_article_cate('8');

        $data_all_user = $this->member_model->get_all_user();

        $art_user = intval($this->input->post('art_user'));
        $art_username = trim(htmlspecialchars($this->input->post('art_username')));
        $art_parent = intval($this->input->post('art_parent'));
        $art_title = trim(htmlspecialchars($this->input->post('art_title')));
        $art_url = string2url(trim($art_title));
        $art_images = trim(htmlspecialchars($this->input->post('art_images')));
        if (empty($art_images)) {
            $art_images = $this->_upload_images();
        }
        $art_views = trim(htmlspecialchars($this->input->post('art_views')));
//        $art_likes = trim(htmlspecialchars($this->input->post('art_likes')));
//        $art_shares = trim(htmlspecialchars($this->input->post('art_shares')));
        $art_status = trim($this->input->post('art_status'));
        $art_check_1 = trim($this->input->post('art_check_1'));
        $art_check_2 = trim($this->input->post('art_check_2'));
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $art_date = date('Y-m-d H:i:s');

        $errors = array();
        $query_check_art_url = $this->admin_article_model->check_art_url($art_url);
        if ($this->input->post('isPost')) {

            if ($art_title == '') $errors[] = 'Chưa nhập tên danh mục';
            if ($this->uri->segment(3) == 'add_img') {
                if ($art_url == '') $errors[] = 'Chưa nhập Url';
                else {
                    if ($art_url == $query_check_art_url->art_url) $errors[] = 'Url là duy nhất  vui lòng đổi tên Url ';
                }
            }
            if (count($errors) == 0) {
                if ($segment3 == 'edit_img') {
                    $this->admin_article_model->edit_article_img($art_id, $art_parent, $art_title, $art_url, $art_images, $art_status, $art_check_1, $art_check_2, $art_date, $art_user, $art_views, $art_username);
                } else {
                    $this->admin_article_model->add_article_img($art_parent, $art_title, $art_url, $art_images, $art_status, $art_check_1, $art_check_2, $art_date, $art_user, $art_views, $art_username);
                }
                redirect($this->uri->level(2));
            }
        } elseif ($segment3 == 'edit_img') {
            $row = $this->admin_article_model->get_row_article($art_id);
            if (!$row) show_404();
            $art_id = $row->id_art;
            $art_parent = $row->category_id;
            $art_title = $row->title;
            $art_url = $row->article_url;
            $art_images = $row->images;
            $art_status = $row->status;
            $art_check_1 = $row->check_1;
            $art_check_2 = $row->check_2;
            $art_user = $row->id_user;
//            $art_likes = $row->likes;
            $art_views = $row->views;
//            $art_shares = $row->share;
            $art_username = $row->art_username;

        }
        $data = array();
        $data['art_edit'] = $art_edit;
        $data['art_id'] = $art_id;
        $data['art_title'] = $art_title;
        $data['art_url'] = $art_url;
        $data['art_parent'] = $art_parent;
        $data['art_status'] = $art_status;
        $data['art_check_1'] = $art_check_1;
        $data['art_check_2'] = $art_check_2;
        $data['art_images'] = $art_images;

        $data['art_user'] = $art_user;
//        $data['art_likes'] = $art_likes;
//        $data['art_shares'] = $art_shares;
        $data['art_views'] = $art_views;
        $data['art_username'] = $art_username;

        $data['data_all_user'] = $data_all_user;
        $data['data_all_cate'] = $data_all_cate;

        $data['errors'] = $errors;

        return $this->load->view('admin_article_image_add', $data);
    }

    function _article_add_music()
    {
        $art_id = 0;
        $art_edit = false;
        $segment3 = $this->uri->segment(3);
        if ($segment3 == 'edit_music') {
            $art_edit = true;
            $art_id = intval($this->uri->segment(4));
        }

        // lấy danh mục
        $data_all_cate = $this->admin_article_model->get_all_article_cate('13');

        $data_all_user = $this->member_model->get_all_user();

        $art_user = intval($this->input->post('art_user'));
        $art_username = trim(htmlspecialchars($this->input->post('art_username')));
        $art_parent = intval($this->input->post('art_parent'));
        $art_title = trim(htmlspecialchars($this->input->post('art_title')));
        $art_url = string2url(trim($art_title));
        $art_music = trim(htmlspecialchars($this->input->post('art_musics')));
        if (empty($art_music)) {
            $art_music = $this->_upload_musics();
        }
        $art_images = trim(htmlspecialchars($this->input->post('art_images')));
        if (empty($art_images)) {
            $art_images = $this->_upload_images();
        }
        $art_views = trim(htmlspecialchars($this->input->post('art_views')));
        $art_likes = trim(htmlspecialchars($this->input->post('art_likes')));
//        $art_likes = trim(htmlspecialchars($this->input->post('art_likes')));
//        $art_shares = trim(htmlspecialchars($this->input->post('art_shares')));
        $art_status = trim($this->input->post('art_status'));
        $art_check_1 = trim($this->input->post('art_check_1'));
        $art_check_2 = trim($this->input->post('art_check_2'));
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $art_date = date('Y-m-d H:i:s');

        $errors = array();
        $query_check_art_url = $this->admin_article_model->check_art_url($art_url);
        if ($this->input->post('isPost')) {
            if ($art_title == '') $errors[] = 'Chưa nhập tên danh mục';
            if ($this->uri->segment(3) == 'add_music') {
                if ($art_url == '') $errors[] = 'Chưa nhập Url';
                else {
                    if ($art_url == $query_check_art_url->art_url) $errors[] = 'Url là duy nhất  vui lòng đổi tên Url ';
                }
            }
            if (count($errors) == 0) {
                if ($segment3 == 'edit_music') {
                    $this->admin_article_model->edit_article_music($art_id, $art_parent, $art_title, $art_url, $art_images, $art_music, $art_status, $art_check_1, $art_check_2, $art_date, $art_user, $art_views, $art_likes, $art_username);
                } else {
                    $this->admin_article_model->add_article_music($art_parent, $art_title, $art_url, $art_images, $art_music, $art_status, $art_check_1, $art_check_2, $art_date, $art_user, $art_views, $art_likes, $art_username);
                }
                redirect($this->uri->level(2));
            }
        } elseif ($segment3 == 'edit_music') {
            $row = $this->admin_article_model->get_row_article($art_id);
            if (!$row) show_404();
            $art_id = $row->id_art;
            $art_parent = $row->category_id;
            $art_title = $row->title;
            $art_url = $row->article_url;
            $art_music = $row->music;
            $art_images = $row->images;
            $art_status = $row->status;
            $art_check_1 = $row->check_1;
            $art_check_2 = $row->check_2;
            $art_user = $row->id_user;
            $art_likes = $row->likes;
            $art_views = $row->views;
//            $art_shares = $row->share;
            $art_username = $row->art_username;

        }
        $data = array();
        $data['art_edit'] = $art_edit;
        $data['art_id'] = $art_id;
        $data['art_title'] = $art_title;
        $data['art_url'] = $art_url;
        $data['art_parent'] = $art_parent;
        $data['art_status'] = $art_status;
        $data['art_check_1'] = $art_check_1;
        $data['art_check_2'] = $art_check_2;
        $data['art_music'] = $art_music;
        $data['art_images'] = $art_images;
        $data['art_user'] = $art_user;
        $data['art_likes'] = $art_likes;
//        $data['art_shares'] = $art_shares;
        $data['art_views'] = $art_views;
        $data['art_username'] = $art_username;

        $data['data_all_user'] = $data_all_user;
        $data['data_all_cate'] = $data_all_cate;

        $data['errors'] = $errors;

        return $this->load->view('admin_article_music_add', $data);
    }

    function _article_add_video()
    {
        $art_id = 0;
        $art_edit = false;
        $segment3 = $this->uri->segment(3);
        if ($segment3 == 'edit_video') {
            $art_edit = true;
            $art_id = intval($this->uri->segment(4));
        }

        // lấy danh mục
        $data_all_cate = $this->admin_article_model->get_all_article_cate('9');

        $data_all_user = $this->member_model->get_all_user();

        $art_user = intval($this->input->post('art_user'));
        $art_username = trim(htmlspecialchars($this->input->post('art_username')));
        $art_parent = intval($this->input->post('art_parent'));
        $art_title = trim(htmlspecialchars($this->input->post('art_title')));
        $art_url = string2url(trim($art_title));
        $art_images = trim(htmlspecialchars($this->input->post('art_images')));
        if (empty($art_images)) {
            $art_images = $this->_upload_images();
        }        
        $art_video = trim(htmlspecialchars($this->input->post('art_videos')));
        if (empty($art_video)) {
            $art_video = $this->_upload_videos();
        }

//        $art_youtube = trim(htmlspecialchars($this->input->post('art_youtube')));
        $art_views = trim(htmlspecialchars($this->input->post('art_views')));

//        $link_ytb = '<iframe width="100%" height="330" src="https://www.youtube.com/embed/' . $art_youtube . '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
        $art_status = trim($this->input->post('art_status'));
        $art_check_1 = trim($this->input->post('art_check_1'));
        $art_check_2 = trim($this->input->post('art_check_2'));
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $art_date = date('Y-m-d H:i:s');

        $errors = array();
        $query_check_art_url = $this->admin_article_model->check_art_url($art_url);
        if ($this->input->post('isPost')) {
            if ($art_title == '') $errors[] = 'Chưa nhập tên danh mục';
            if ($this->uri->segment(3) == 'add_video') {
                if ($art_url == '') $errors[] = 'Chưa nhập Url';
                else {
                    if ($art_url == $query_check_art_url->art_url) $errors[] = 'Url là duy nhất  vui lòng đổi tên Url ';
                }
            }
            if (count($errors) == 0) {
                if ($segment3 == 'edit_video') {
                    $this->admin_article_model->edit_article_video($art_id, $art_parent, $art_title, $art_url, $art_images, $art_video, $art_status, $art_check_1, $art_check_2, $art_date, $art_user, $art_views, $art_username);
                } else {
                    $this->admin_article_model->add_article_video($art_parent, $art_title, $art_url, $art_images, $art_video, $art_status, $art_check_1, $art_check_2, $art_date, $art_user, $art_views, $art_username);
                }
                redirect($this->uri->level(2));
            }
        } elseif
        ($segment3 == 'edit_video') {
            $row = $this->admin_article_model->get_row_article($art_id);
            if (!$row) show_404();
            $art_id = $row->id_art;
            $art_parent = $row->category_id;
            $art_title = $row->title;
            $art_url = $row->article_url;
            $art_images = $row->images;
            $art_video = $row->video;
//            $art_youtube = substr($row->youtube, 69, 11);
            $art_status = $row->status;
            $art_check_1 = $row->check_1;
            $art_check_2 = $row->check_2;
            $art_user = $row->id_user;
            $art_views = $row->views;
            $art_username = $row->art_username;

        }
        $data = array();
        $data['art_edit'] = $art_edit;
        $data['art_id'] = $art_id;
        $data['art_title'] = $art_title;
        $data['art_url'] = $art_url;
        $data['art_parent'] = $art_parent;
        $data['art_status'] = $art_status;
        $data['art_check_1'] = $art_check_1;
        $data['art_check_2'] = $art_check_2;
        $data['art_images'] = $art_images;
        $data['art_video'] = $art_video;
//        $data['art_youtube'] = $art_youtube;
        $data['art_user'] = $art_user;
        $data['art_views'] = $art_views;
        $data['art_username'] = $art_username;

        $data['data_all_user'] = $data_all_user;
        $data['data_all_cate'] = $data_all_cate;

        $data['errors'] = $errors;

        return $this->load->view('admin_article_video_add', $data);
    }

    function _article_list()
    {
        $data_search = '';
        $data = array();
        $query_admin_category = $this->admin_category_model->get_list_category1();
        if ($this->input->post('isPost')) {
            $key = trim(htmlspecialchars($this->input->post("search")));
            $cate = trim(htmlspecialchars($this->input->post("cat_parent")));
            if ($cate == ""){
                $query_article = $this->admin_article_model->search($key);
            } else {
                $query_article = $this->admin_article_model->specific_search($key, $cate);
            }
        } else {
            $query_article = $this->admin_article_model->get_list_article();
        }
        $data['array_category'] = $query_admin_category;
        $data['array_article'] = $query_article;
        return $this->load->view('admin_article', $data);
    }

    function _reward_list()
    {
        $data_search = '';
        $data = array();
        $query_admin_category = $this->admin_category_model->get_list_category1();
        if ($this->input->post('isPost')) {
            $key = trim(htmlspecialchars($this->input->post("search")));
            $date = trim(htmlspecialchars($this->input->post('reward_date')));
            $reward = trim(htmlspecialchars($this->input->post("reward")));
            if ($reward == '' && $date == ''){
                $query_article = $this->admin_article_model->reward_search($key);
            } else {
                $query_article = $this->admin_article_model->specific_reward_search($key, $reward, $date);
            }
        } else {
            $query_article = $this->admin_article_model->get_list_reward();
        }
        $query_admin_category = $this->admin_article_model->get_reward();
        $data['array_reward'] = $query_article;
        $data['array_category'] = $query_admin_category;
        return $this->load->view('admin_trung_thuong_list', $data);
    }

    function _article_delete()
    {
        $segment4 = intval($this->uri->segment(4));
        $this->admin_article_model->delete_article($segment4);
        redirect($this->uri->level(2));
    }
    function _reward_delete()
    {
        $segment4 = intval($this->uri->segment(4));
        $this->admin_article_model->delete_rewards($segment4);
        redirect($this->uri->level(2));
    }

    function _article_url()
    {
        $string = $this->input->post('title');
        echo string2url(trim($string));
        exit;
    }

    function _comment()
    {
        $segment3 = $this->uri->segment(3);
        switch ($segment3) {
            case 'add':
            case 'edit':
                return $this->_comment_add();
                break;
            case 'delete':
                return $this->_comment_delete();
                break;
            default :
                return $this->_comment_list();
                break;
        }
    }

    function _comment_list()
    {
        $data = array();

        $data_search = '';
        $query_admin_category = $this->admin_comment_model->get_all_user();
        $key = trim(htmlspecialchars($this->input->post("search")));
        $article = trim(htmlspecialchars($this->input->post("article")));
        $user = trim(htmlspecialchars($this->input->post("user")));
        if ($key != '' || $article != '' || $user != '') {
            if ($user == '' && $article == ''){
                $data_all_comment = $this->admin_comment_model->search($key);
            } else {
                $data_all_comment = $this->admin_comment_model->specific_search($key, $article, $user);
            }
        } else {
            $data_all_comment = $this->admin_comment_model->get_all_comment();
        }
        $data['array_category'] = $query_admin_category;
        $data['data_all_comment'] = $data_all_comment;
        return $this->load->view('admin_comment', $data);
    }

    function _comment_add()
    {
        $id_cmt = 0;
        $segment3 = $this->uri->segment(3);
        if ($segment3 == 'edit') {
            $id_cmt = intval($this->uri->segment(4));
        }

        $data_all_user = $this->member_model->get_all_user();

        $data_all_art = $this->member_model->get_all_art();

        $cmt_name = trim(htmlspecialchars($this->input->post('cmt_name')));
        $cmt_art = intval($this->input->post('cmt_art'));
        $cmt_user = intval($this->input->post('cmt_user'));
        $cmt_status = trim($this->input->post('cmt_status'));

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $cmt_date = date('Y-m-d H:i:s');

        $data = array();

        if ($this->input->post('isPost')) {
            if ($segment3 == 'edit') {
                $this->admin_comment_model->edit_comment($cmt_name, $cmt_art, $cmt_user, $cmt_status, $cmt_date, $id_cmt);
            } else {
                $this->admin_comment_model->add_comment($cmt_name, $cmt_art, $cmt_user, $cmt_status, $cmt_date);
            }
            redirect($this->uri->level(2));
        } elseif ($segment3 == 'edit') {
            $row = $this->admin_comment_model->get_row_comment($id_cmt);
            if (!$row) show_404();
            $cmt_id = $row->id;
            $cmt_name = $row->comment;
            $cmt_user = $row->user_id;
            $cmt_art = $row->art_id;
            $cmt_status = $row->status;
        }

        $data['cmt_id'] = $cmt_id;
        $data['cmt_name'] = $cmt_name;
        $data['cmt_art'] = $cmt_art;
        $data['cmt_user'] = $cmt_user;
        $data['cmt_status'] = $cmt_status;

        $data['data_all_user'] = $data_all_user;
        $data['data_all_art'] = $data_all_art;

        return $this->load->view('admin_comment_add', $data);
    }

    function _comment_delete()
    {

    }

    function _slide()
    {
        $segment3 = $this->uri->segment(3);
        $this->config->set_item('page_title', 'Slide');
        switch ($segment3) {
            case 'add':
            case 'edit':
                return $this->_slide_add();
                break;
            case 'delete':
                return $this->_slide_delete();
                break;
            default :
                return $this->_slide_list();
                break;
        }
    }

    function _upload_images()
    {
        $url_img = '';
        if (!empty($_FILES['picture']['name'])) {
            $config['upload_path'] = 'upload';
            $config['max_size'] = 1000000;
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['picture']['name'];
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('picture')) {
                $image_data = $this->upload->data();
                $url_img = $image_data['file_name'];
            }
            if (!$url_img == '') {
                $url = base_url() . 'upload/' . $url_img;
                return $url;
            } else {
                $url_now = $this->uri->uri_string();
                redirectMsg($url_now, 'Upload không thành công');
            }
        }
    }
    function _upload_musics()
    {
        $url_img = '';
        if (!empty($_FILES['fileMusic']['name'])) {
            $config['upload_path'] = 'upload';
            $config['max_size'] = 1000000;
            $config['allowed_types'] = 'mp3';
            $config['file_name'] = $_FILES['fileMusic']['name'];
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('fileMusic')) {
                $image_data = $this->upload->data();
                $url_img = $image_data['file_name'];
            }
            if (!$url_img == '') {
                $url = base_url() . 'upload/' . $url_img;
                return $url;
            } else {
                $url_now = $this->uri->uri_string();
                redirectMsg($url_now, 'Upload không thành công');
            }
        }
    }
    
    function _upload_videos()
    {
        // gioi han file upload khong qua 100kb
//        $max_size = 100000;
//        $size = $_FILES['file']['size'];
//        $name = $_FILES['file']['name'];
//        $extension = substr($name, strpos($name, '.') + 1);
        $url_img = '';
        if (!empty($_FILES['fileVideo']['name'])) {
            $config['upload_path'] = 'upload';
            $config['max_size'] = 1000000;
            $config['allowed_types'] = 'mp4';
            $config['file_name'] = $_FILES['fileVideo']['name'];
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('fileVideo')) {
                $image_data = $this->upload->data();
                $url_img = $image_data['file_name'];
            }
            if (!$url_img == '') {
                $url = base_url() . 'upload/' . $url_img;
                return $url;
            } else {
                $url_now = $this->uri->uri_string();
                redirectMsg($url_now, 'Upload không thành công');
            }
        }
    }


    function _slide_list()
    {
        $all_slides = $this->admin_slide_model->get_all_slide();
        $data = array();
        $data['all_slides'] = $all_slides;
        return $this->load->view('admin_slide', $data);
    }

    function _slide_add()
    {
        $id_slide = 0;
        $segment3 = $this->uri->segment(3);
        if ($segment3 == 'edit') {
            $id_slide = intval($this->uri->segment(4));
        }

        $slide_name = trim(htmlspecialchars($this->input->post('slide_name')));
        $slide_images = trim(htmlspecialchars($this->input->post('slide_images')));
        $slide_stt = trim(htmlspecialchars($this->input->post('slide_stt')));
        if (empty($slide_images)) {
            $slide_images = $this->_upload_images();
        }
        $slide_summary = trim(htmlspecialchars($this->input->post('slide_summary')));
        $slide_url = trim(htmlspecialchars($this->input->post('slide_url')));
        $data = array();

        if ($this->input->post('isPost')) {
            if ($segment3 == 'edit') {
                $this->admin_slide_model->edit_slide($slide_name, $slide_images, $slide_summary, $slide_url, $slide_stt, $id_slide);
            } else {
                $this->admin_slide_model->add_slide($slide_name, $slide_images, $slide_summary, $slide_url, $slide_stt);
            }
            redirect($this->uri->level(2));
        } elseif ($segment3 == 'edit') {
            $row = $this->admin_slide_model->get_row_slide($id_slide);
            if (!$row) show_404();
            $slide_id = $row->id;
            $slide_name = $row->name;
            $slide_images = $row->image;
            $slide_url = $row->url;
            $slide_summary = $row->summary;
            $slide_stt = $row->stt;
        }

        $data['slide_id'] = $slide_id;
        $data['slide_name'] = $slide_name;
        $data['slide_url'] = $slide_url;
        $data['slide_summary'] = $slide_summary;
        $data['slide_images'] = $slide_images;
        $data['slide_stt'] = $slide_stt;

        return $this->load->view('admin_slide_add', $data);
    }

    function _slide_delete()
    {
        $segment4 = intval($this->uri->segment(4));
        $this->admin_slide_model->delete_slide($segment4);
        redirect($this->uri->level(2));
    }

    function _search()
    {
        if ($this->input->post("submitsearch") !== false) {
            $key = trim(htmlspecialchars($this->input->post("search")));
            $data_search = $this->front_model->search($key);
        }

        $data = array();
        $data['data_search'] = $data_search;

        return $this->load->view('search', $data);
    }
//    all function for promotions

    //load promotion view
    function _promotion() {
        $segment3 = $this->uri->segment(3);

        $this->config->set_item('page_title', 'Promotion');

        switch ($segment3) {
            case 'add':
            case 'edit':
                return $this->_promotion_add();
                break;
            case 'delete':
                return $this->_promotion_delete();
            default:
                return $this->_promotion_list();
        }
    }

    // add data to db
    function _promotion_add() {
        $promotion_id = 0;
        $segment3 = $this->uri->segment(3);
        if ($segment3 == 'edit') {
            $promotion_id = intval($this->uri->segment(4));
        }

        $promotion_des = trim(htmlspecialchars($this->input->post("promotion_des")));

        $data = array();
        if ($this->input->post('isPost')) {
            if ($segment3 == 'edit') {
                $status = $this->admin_promotion_model->update_promotion($promotion_id, $promotion_des);
                $this->session->set_flashdata('Status', $status);
            } else {
                $status = $this->admin_promotion_model->add_promotion($promotion_des);
                $this->session->set_flashdata('Status', $status);
            }
            redirect($this->uri->level(2));
        } elseif ($segment3 == 'edit') {
            $row = $this->admin_promotion_model->get_promotion_by_id($promotion_id);
            if (!$row) show_404();
            $promotion_id = $row->id;
            $promotion_des = $row->description;
        }

        $data['promotion_des'] = $promotion_des;
        $data['promotion_id'] = $promotion_id;

        return $this->load->view('admin_promotion_add', $data);
    }

    // show data after update db
    function _promotion_list() {
        $all_promotion = $this->admin_promotion_model->get_promotion();

        $data = array();

        $data['all_promotion'] = $all_promotion;
        return $this->load->view('admin_promotion', $data);
    }

    //delete data from db
    function _promotion_delete() {
        $segment4 = intval($this->uri->segment(4));
        $this->admin_promotion_model->delete_promotion($segment4);
        redirect($this->uri->level(2));
    }
}

?>