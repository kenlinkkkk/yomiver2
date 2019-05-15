<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Front_mod extends MX_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('front_model');
        $this->load->model('admin_category_model');
        $this->load->model('admin_slide_model');
        $this->load->model('admin_article_model');
        $this->load->model('register_model');
        $this->load->helper('common');
        $this->load->library('session');
    }

    function index()
    {
        $segment1 = $this->uri->segment(1);
//		date_default_timezone_set("Asia/Bangkok");
//        $this->config->set_item('title', 'Xem video clip mới nhất | Xemlien.vn');
//        $this->config->set_item('og_url', base_url());
//        $data_menu_chinh = $this->front_model->get_menu_chinh();
//        $data_main =$this->front_model->get_route($segment1);
//        $main = '';
//        foreach ($data_main->result() as $row) {
//            $id = $row->id;
//            $duplicate_menu = $row->duplicate_menu;
//        }
//            if($id == 8 || $duplicate_menu == 8){
//                $main = $this->_front_images();
//            } else if($id == 9 || $duplicate_menu == 9){
//                $main = $this->_front_videos();
//            } else if($id == 13 || $duplicate_menu == 13){
//                $main = $this->_front_music();
//            } else if($id == 24 || $duplicate_menu == 24){
//                $main = $this->_front_ctkm();
//            } else {
                switch ($segment1) {
                    case 'register';
                        $main = $this->_front_register();
                        break;
                    case 'logout';
                        return $this->_logout();
                        break;
                    case 'login';
                        return $this->_login();
                        break;
                    case 'tranh-tai-showbiz':
                        $main = $this->_front_showbiz();
                        break;
                    case 'huong-dan':
                        $main = $this->_front_huong_dan();
                        break;
                    case 'gioi-thieu':
                        $main = $this->_gioi_thieu();
                        break;
                    case 'quy-dinh-chung':
                        $main = $this->_quy_dinh_chung();
                        break;
                    case 'hinh-thuc-thanh-toan':
                        $main = $this->_hinh_thuc_tt();
                        break;
                    case 'van-chuyen':
                        $main = $this->_van_chuyen();
                        break;
                    case 'bao-hanh':
                        $main = $this->_bao_hanh();
                        break;
                    case 'doi':
                        $main = $this->_doi();
                        break;
                    case 'bao-mat':
                        $main = $this->_bao_mat();
                        break;
                    case 'mo-hinh-hoat-dong':
                        $main = $this->_mh_hd();
                        break;
                    case 'member';
                        $main = $this->_front_member();
                        break;
                    case 'logout';
                        $main = $this->_logout();
                        break;
                    case 'dang-ky-dich-vu';
                        $main = $this->_dky_dich_vu();
                        break;
                    case 'dkdv';
                        $main = $this->_dky_dich_vu2();
                        break;
                    case 'add_cmt';
                        $main = $this->add_cmt();
                        break;
                    case 'search':
                        $main = $this->_front_search();
                        break;
                    case 'ai-la-than-tuong':
                        $main = $this->_front_altt();
                        break;
                    default:
                        $main = $this->_front_home();
                        break;
                }
//            }
//
//        $idu = $this->session->userdata('log_id');
//
//        if ($this->input->post('submit_reg') !== false) {
//            $nickname = trim(htmlspecialchars($this->input->post('reg_name')));
//            $pass = md5(trim(htmlspecialchars($this->input->post('reg_pass'))));
//
//            $check_nickname = $this->register_model->check_nickname($nickname);
//
//            if ($check_nickname == 0) {
//                $this->register_model->insert_user($nickname, $pass);
//                redirectMsg('/', 'Đăng ký tài khoản thành công!');
//            } else {
//                redirectMsg('/', 'Tài khoản đã tồn tại, vui lòng kiểm tra lại!');
//            }
//        }
//
//        if ($this->input->post('submit_login') !== false) {
//            $nickname = trim(htmlspecialchars($this->input->post('log_name')));
//            $pass = md5(trim(htmlspecialchars($this->input->post('log_pass'))));
//
//            $row = $this->register_model->check_login($nickname, $pass);
//
//            if ($row) {
//                $this->session->set_userdata('log_id', $row->id);
//                redirect(base_url() . 'member');
//            } else {
//                redirectMsg('/', 'Thông tin đăng nhập không đúng, vui lòng thử lại!');
//            }
//        }
//
//        $errors = '';
//        if ($this->input->post("submit_post_mem") !== false) {
//            $title = trim(htmlspecialchars($this->input->post('art_title')));
//            $cate = trim(htmlspecialchars($this->input->post('art_parent')));
//            $image = $this->_upload_images();
//            $video = $this->_upload_videos();
//            $music = $this->_upload_musics();
////            $youtube = trim(htmlspecialchars($this->input->post('art_youtube')));
//
//            $art_url = string2url($title);
//
//            $check_url = $this->admin_article_model->check_art_url($art_url);
//
//            date_default_timezone_set('Asia/Ho_Chi_Minh');
//            $art_date = date('Y-m-d H:i:s');
//
////            $link_ytb = '<iframe width="100%" height="340" src="https://www.youtube.com/embed/' . $youtube . '" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
//
//            if ($check_url != 0) {
//                redirectMsg('/', 'Tiêu đề bài viết phải là duy nhất!');
//            } else {
//                $this->front_model->insert_art($title, $cate, $art_url, $image, $video, $music, $idu, $art_date);
//                redirectMsg('/', 'Đăng bài thành công, bài viết của bạn đang trong trạng thái chờ duyệt!');
//            }
//        }
//
//        // lấy danh mục
//        $data_all_cate = $this->front_model->get_all_article_cate_home('0');
//
//        $data = array();
//        $data['data_menu_chinh'] = $data_menu_chinh;
        $data['main'] = $main;
//        $data['idu'] = $idu;
//        $data['data_all_cate'] = $data_all_cate;
//        $data['errors'] = $errors;
        return $this->load->view('layout', $data);
    }

    function _upload_images()
    {
        $url_img = '';
        if (!empty($_FILES['picture']['name'])) {
            $config['upload_path'] = 'upload';
            $config['max_size'] = 1000000;
            $config['max_width'] = 2000;
            $config['max_height'] = 2000;
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

    function _login()
    {
        $segment2 = $this->uri->segment(2);
        if ($segment2 == 'facebook') {
            return $this->login_facebook();
        }
    }

    function login_facebook()
    {
        $app_id = "307396673188050";
        $app_secret = "831bfbeb08922ed6f2bc5ad477b1f057";
        $redirect_uri = urlencode("http://v2.xemlien.vn");

        // Get code value
        $code = $this->input->get('code');

        // Get access token info
        $facebook_access_token_uri = "https://graph.facebook.com/oauth/access_token?client_id=$app_id&redirect_uri=$redirect_uri&client_secret=$app_secret&code=$code";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $facebook_access_token_uri);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

        $response = curl_exec($ch);

        curl_close($ch);
        echo $response;
        die;
    }

    function _front_search()
    {
        $data_search = '';
        if ($this->input->post("submitsearch") !== false) {
            $key = trim(htmlspecialchars($this->input->post("search")));
            $data_search = $this->front_model->search($key);
        }

        $data = array();
        $data['data_search'] = $data_search;

        return $this->load->view('search', $data);
    }

    public function _logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    function _front_member()
    {
        $idu = $this->session->userdata('log_id');
        $array_article = $this->front_model->get_all_art_user($idu);

        $count_all_art = count($array_article->result());

        $nickname = $this->front_model->get_nickname($idu);

        $name = $nickname->username;

        $count_all_views = $this->front_model->count_all_views($idu);

        $views = $count_all_views->count;
        $data = array();

        $data['array_article'] = $array_article;

        $data['count_all_art'] = $count_all_art;
        $data['views'] = $views;
        $data['name'] = $name;
        return $this->load->view('member', $data);
    }

    function _front_home()
    {
        // lấy hết bài viết thuộc mục cha Video
        $data_article_doi_song_1 = $this->front_model->get_list_art_cate(3, 1, 0);
        $data_article_doi_song_6 = $this->front_model->get_list_art_cate(3, 4, 1);


        // lấy bài viết đc đề xuất
        $data_video_recommend = $this->front_model->get_video_recommend();
        $data_video_recommend_home = $this->front_model->get_video_recommend_home();
        $data_image_recommend = $this->front_model->get_image_recommend_home();

        // lấy video mới nhất
        $data_video_new = $this->front_model->get_video_new();

        // lấy video có thể thích
        $data_video_like = $this->front_model->get_video_like_home(6, 0);
        $data_video_like1 = $this->front_model->get_video_like_home(6, 6);
        $data_video_like2 = $this->front_model->get_video_like_home(6, 12);
        $data_video_like3 = $this->front_model->get_video_like_home(6, 18);

        // lấy video tin tức
        $data_article_giai_tri_1 = $this->front_model->get_list_art_cate(1, 1, 0);
        $data_article_giai_tri_6 = $this->front_model->get_list_art_cate(1, 4, 1);

        $data_article_lam_dep = $this->front_model->get_list_art_cate(5, 6, 0);
        $data_article_lam_dep1 = $this->front_model->get_list_art_cate(5, 6, 6);
        $data_article_lam_dep2 = $this->front_model->get_list_art_cate(5, 6, 12);
        $data_article_lam_dep3 = $this->front_model->get_list_art_cate(5, 6, 18);

        $data_article_nguoi_dep = $this->front_model->get_list_art_cate(12, 6, 0);
        $data_article_nguoi_dep1 = $this->front_model->get_list_art_cate(12, 6, 6);
        $data_article_nguoi_dep2 = $this->front_model->get_list_art_cate(12, 6, 12);
        $data_article_nguoi_dep3 = $this->front_model->get_list_art_cate(12, 6, 18);

        $data_article_hai_huoc = $this->front_model->get_list_art_cate(2, 8, 0);
        $data_article_hai_huoc1 = $this->front_model->get_list_art_cate(2, 8, 8);

        // lấy hết bài viết thuộc mục cha Ảnh
        $data_article_anh_hai = $this->front_model->get_list_art_cate(6, 8, 0);
        $data_article_anh_hai1 = $this->front_model->get_list_art_cate(6, 8, 8);
        $data_article_anh_doc = $this->front_model->get_list_images_home();
        $data_article_anh_doc1 = $this->front_model->get_list_art_cate(7, 8, 8);

        // lấy bài viết phim
        $data_article_movie = $this->front_model->get_list_art_cate(11, 12, 0);

        // Lấy slide
        $data_all_slide = $this->admin_slide_model->get_all_slide();


        $data = array();

        $data['data_article_doi_song_1'] = $data_article_doi_song_1;
        $data['data_article_doi_song_6'] = $data_article_doi_song_6;

        $data['data_video_recommend'] = $data_video_recommend;
        $data['data_image_recommend'] = $data_image_recommend;
        $data['data_video_new'] = $data_video_new;
        $data['data_video_recommend_home'] = $data_video_recommend_home;

        $data['data_video_like'] = $data_video_like;
        $data['data_video_like1'] = $data_video_like1;
        $data['data_video_like2'] = $data_video_like2;
        $data['data_video_like3'] = $data_video_like3;

        $data['data_article_giai_tri_1'] = $data_article_giai_tri_1;
        $data['data_article_giai_tri_6'] = $data_article_giai_tri_6;

        $data['data_article_hai_huoc'] = $data_article_hai_huoc;
        $data['data_article_hai_huoc1'] = $data_article_hai_huoc1;


        $data['data_article_lam_dep'] = $data_article_lam_dep;
        $data['data_article_lam_dep1'] = $data_article_lam_dep1;
        $data['data_article_lam_dep2'] = $data_article_lam_dep2;
        $data['data_article_lam_dep3'] = $data_article_lam_dep3;


        $data['data_article_nguoi_dep'] = $data_article_nguoi_dep;
        $data['data_article_nguoi_dep1'] = $data_article_nguoi_dep1;
        $data['data_article_nguoi_dep2'] = $data_article_nguoi_dep2;
        $data['data_article_nguoi_dep3'] = $data_article_nguoi_dep3;

        $data['data_article_anh_hai'] = $data_article_anh_hai;
        $data['data_article_anh_hai1'] = $data_article_anh_hai1;
        $data['data_article_anh_doc'] = $data_article_anh_doc;
        $data['data_article_anh_doc1'] = $data_article_anh_doc1;

        $data['data_article_movie'] = $data_article_movie;

        $data['data_all_slide'] = $data_all_slide;

        return $this->load->view('home', $data);
    }

    function _front_images()
    {
        $segment2 = $this->uri->segment(2);
        $parent_id = $this->front_model->get_category($segment2);
        if ($parent_id->num_rows() != 0){
            foreach ($parent_id->result() as $row){
                if ($parent_id == '0' || is_numeric($segment2) || $segment2 == '')
                    redirect(base_url());
                else if ($row->parent == '8') {
                    return $this->_cate_images();
                }
            }
        } else {
            return $this->_images_detail();
        }
    }

    function _front_videos()
    {
        $segment2 = $this->uri->segment(2);
        $parent_id = $this->front_model->get_category($segment2);
        if ($parent_id->num_rows() != 0){
            foreach ($parent_id->result() as $row){
                if ($parent_id == '0' || is_numeric($segment2) || $segment2 == '')
                    redirect(base_url());
                else if ($row->duplicate_menu == '9' || $row->parent == '9' || $segment2 == 'thinh-hanh' || $segment2 == 'de-xuat' || $segment2 == 'video-moi') {
                    return $this->_cate_videos();
                }
            }
        } else {
            return $this->_videos_detail();
        }
    }

    function _front_music()
    {
        $segment2 = $this->uri->segment(2);
        $parent_id = $this->front_model->get_category($segment2);
        if ($parent_id->num_rows() != 0){
            foreach ($parent_id->result() as $row){
                if ($parent_id == '0' || is_numeric($segment2) || $segment2 == '')
                    redirect(base_url());
                else if ($row->parent == '13') {
                    return $this->_cate_music();
                }
            }
        } else {
            return $this->_music_detail();
        }
    }
    function _front_ctkm()
    {
        $segment2 = $this->uri->segment(2);
        $parent_id = $this->front_model->get_category($segment2);
        if ($parent_id->num_rows() != 0){
            foreach ($parent_id->result() as $row){
                if ($parent_id == '0' || is_numeric($segment2) || $segment2 == ''){
                    redirect(base_url());
                }
                else if ($row->parent == '24') {
                    return $this->_ctkm_details();
                }
            }
        }
    }

    function _list_movies()
    {
        $name = 'Phim';
        $num_row_in_page = 16;

        // Lấy slide
        $data_all_slide = $this->admin_slide_model->get_all_slide();

        $this->load->library('pagination');
        $config['base_url'] = site_url($this->uri->level(1));
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tagl_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tagl_close'] = '</li>';
        $config['first_tag_open'] = '<li class="page-item disabled">';
        $config['first_tagl_close'] = '</li>';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tagl_close'] = '</a></li>';
        $config['attributes'] = array('class' => 'page-link');
        $config['per_page'] = $num_row_in_page;

        $data_all_article = $this->front_model->get_list_art_cate_all(11);
        $total_num_row = count($data_all_article->result());
        $config['total_rows'] = $total_num_row;
        $start = intval($this->uri->segment(2));
        $config['uri_segment'] = 2;
        $this->pagination->initialize($config); //Nạp cấu hình phân trang cho class pagination
        $data_all_article = $this->front_model->get_list_art_cate_page('11', $start, $num_row_in_page);


        $data = array();
        $data['name'] = $name;
        $data['data_all_article'] = $data_all_article;
        $data['data_all_slide'] = $data_all_slide;
        return $this->load->view('all_videos_article', $data);
    }

    function _movies_detail()
    {
        $segment2 = $this->uri->segment(2);
        $row_news = $this->front_model->ger_row_article($segment2);
        if (!$row_news) redirect('images');
        $id_art = $row_news->id_art;
        $images = $row_news->images;
        $video = $row_news->video;
        $link = $row_news->article_url;
        $title = $row_news->title;
        $username = $row_news->username;
        $name_fake = $row_news->art_username;
        $avatar = $row_news->avatar;
        $views = $row_news->views;
        $likes = $row_news->likes;
        $share = $row_news->share;
        $date = $row_news->created_at;
        $id_cate = $row_news->category_id;
        $created_at = $row_news->created_at;

        if (empty($name_fake)) {
            $username = $username;
        } else {
            $username = $name_fake;
        }

        $this->config->set_item('title', $title);
        $this->config->set_item('og_url', base_url() . 'phim/' . $link);
        $this->config->set_item('og_image', $images);

        $this->count_view($id_art, $views);

        // lấy bài viết liên quan
        $data_list_article_cate = $this->front_model->get_list_article_cate($id_art, $id_cate);

        // lấy comment của bài viết
        $data_list_comment = $this->front_model->get_all_comment($id_art);

        // lấy ảnh đề xuất
        $data_videos_recommend = $this->front_model->get_video_recommend($id_cate);
        $data_videos_recommend1 = $this->front_model->get_video_recommend($id_cate);

        $data = array();

        $data['id_art'] = $id_art;
        $data['images'] = $images;
        $data['video'] = $video;
        $data['title'] = $title;
        $data['username'] = $username;
        $data['avatar'] = $avatar;
        $data['views'] = $views;
        $data['likes'] = $likes;
        $data['share'] = $share;
        $data['date'] = $date;
        $data['link'] = $link;
        $data['created_at'] = $created_at;

        $data['data_list_article_cate'] = $data_list_article_cate;
        $data['data_list_comment'] = $data_list_comment;
        $data['data_videos_recommend'] = $data_videos_recommend;
        $data['data_videos_recommend1'] = $data_videos_recommend1;

        return $this->load->view('article_videos_detail', $data);
    }

    function _list_images()
    {
        // lấy hết bài viết thuộc mục cha Ảnh
        $data_article_anh_hai = $this->front_model->get_list_art_cate(6);
        $data_article_anh_doc = $this->front_model->get_list_art_cate(7);

        $data = array();

        $data['data_article_anh_hai'] = $data_article_anh_hai;
        $data['data_article_anh_doc'] = $data_article_anh_doc;

        return $this->load->view('all_images_article', $data);
    }

    function _cate_images()
    {
        $segment2 = $this->uri->segment(2);
        $cate_info = $this->front_model->get_category1($segment2);
        $data_all_article = '';
        $cate_name = 'Ảnh';
        $link = 'anh';
        $cate_url = base_url() . 'anh';

        // Lấy slide
        $data_all_slide = $this->admin_slide_model->get_all_slide();

        $num_row_in_page = 16;
        $this->load->library('pagination');
        $config['base_url'] = site_url($this->uri->level(2));
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li class="page-item" style="margin-right: 0px !important">';
        $config['next_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tagl_close'] = '</li>';
        $config['next_link'] = FALSE;
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = FALSE;
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</a></li>';
        $config['attributes'] = array('class' => 'page-link');
        $config['per_page'] = $num_row_in_page;

        foreach ($cate_info->result() as $info){
            if ($segment2 == 'anh-doc') {
                $name = 'Ảnh';
                $url = base_url() . 'anh/anh-doc';
                $data_all_article = $this->front_model->get_all_article($info->parent);
                $total_num_row = count($data_all_article->result());
                $config['total_rows'] = $total_num_row;
                $start = intval($this->uri->segment(3));
                $config['uri_segment'] = 3;
                $this->pagination->initialize($config); //Nạp cấu hình phân trang cho class pagination
                $data_all_article = $this->front_model->get_all_article_page($info->parent, $start, $num_row_in_page);
            } else {
                $name = $info->name;
                $url = base_url() . 'anh/' . $info->url;
                $category_images = $info->category_images;
                $data_all_article = $this->front_model->get_list_art_cate_all($info->id);
                $total_num_row = count($data_all_article->result());
                $config['total_rows'] = $total_num_row;
                $start = intval($this->uri->segment(3));
                $config['uri_segment'] = 3;
                $this->pagination->initialize($config); //Nạp cấu hình phân trang cho class pagination

                $data_all_article = $this->front_model->get_list_art_cate_page($info->id, $start, $num_row_in_page);
            }
        }

        $data = array();
        $data['url'] = $url;
        $data['name'] = $name;
        $data['cate_name'] = $cate_name;
        $data['cate_url'] = $cate_url;
        $data['link'] = $link;
        $data['data_all_article'] = $data_all_article;
        $data['data_all_slide'] = $data_all_slide;
        return $this->load->view('all_images_article', $data);
    }

    function _images_detail()
    {
        $segment2 = $this->uri->segment(2);
        $row_news = $this->front_model->ger_row_article($segment2);
        if (!$row_news) redirect('images');
        $id_art = $row_news->id_art;
        $images = $row_news->images;
        $link = $row_news->article_url;
        $title = $row_news->title;
        $username = $row_news->username;
        $name_fake = $row_news->art_username;
        $avatar = $row_news->avatar;
        $views = $row_news->views;
        $likes = $row_news->likes;
        $share = $row_news->share;
        $date = $row_news->created_at;
        $id_cate = $row_news->category_id;
        $created_at = $row_news->created_at;

        if (empty($name_fake)) {
            $username = $username;
        } else {
            $username = $name_fake;
        }

        $this->config->set_item('title', $title);
        $this->config->set_item('og_url', base_url() . 'anh/' . $link);
        $this->config->set_item('og_image', $images);

        $this->count_view($id_art, $views);

        // lấy bài viết liên quan
        $data_list_article_cate = $this->front_model->get_list_article_cate($id_art, $id_cate);

        // lấy comment của bài viết
        $data_list_comment = $this->front_model->get_all_comment($id_art);

        // lấy ảnh đề xuất
        $data_images_recommend = $this->front_model->get_article_recommend_detail($id_cate);
        $data_images_recommend1 = $this->front_model->get_article_recommend_detail($id_cate);

        $data = array();

        $data['id_art'] = $id_art;
        $data['images'] = $images;
        $data['title'] = $title;
        $data['username'] = $username;
        $data['avatar'] = $avatar;
        $data['views'] = $views;
        $data['likes'] = $likes;
        $data['share'] = $share;
        $data['date'] = $date;
        $data['link'] = $link;
        $data['created_at'] = $created_at;

        $data['data_list_article_cate'] = $data_list_article_cate;
        $data['data_list_comment'] = $data_list_comment;
        $data['data_images_recommend'] = $data_images_recommend;
        $data['data_images_recommend1'] = $data_images_recommend1;


        return $this->load->view('article_images_detail', $data);
    }

    function count_view($id, $view)
    {
        return $this->front_model->count_views($id, $view);
    }

    function _list_videos()
    {

        // lấy hết bài viết thuộc mục cha Video
        $data_article_doi_song = $this->front_model->get_list_art_cate(1);
        $data_article_hai_huoc = $this->front_model->get_list_art_cate(2);
        $data_article_giai_tri = $this->front_model->get_list_art_cate(3);
        $data_article_the_thao = $this->front_model->get_list_art_cate(4);
        $data_article_lam_dep = $this->front_model->get_list_art_cate(5);
        $data_article_nguoi_dep = $this->front_model->get_list_art_cate(12);

        $data = array();

        $data['data_article_doi_song'] = $data_article_doi_song;
        $data['data_article_giai_tri'] = $data_article_giai_tri;
        $data['data_article_the_thao'] = $data_article_the_thao;
        $data['data_article_hai_huoc'] = $data_article_hai_huoc;
        $data['data_article_lam_dep'] = $data_article_lam_dep;
        $data['data_article_nguoi_dep'] = $data_article_nguoi_dep;

        return $this->load->view('all_videos_article', $data);
    }

    function _cate_videos()
    {
        $cate_info = array();
        $segment2 = $this->uri->segment(2);
        $cate_info = $this->front_model->get_category1($segment2);
        $data_all_article = '';
        $cate_name = 'Video';
        $link = 'video';

        // Lấy slide
        $data_all_slide = $this->admin_slide_model->get_all_slide();

        $num_row_in_page = 16;
        $this->load->library('pagination');
        $config['base_url'] = site_url($this->uri->level(2));
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li class="page-item" style="margin-right: 0px !important">';
        $config['next_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tagl_close'] = '</li>';
        $config['next_link'] = FALSE;
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = FALSE;
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</a></li>';
        $config['attributes'] = array('class' => 'page-link');
        $config['per_page'] = $num_row_in_page;


        $cate_url = base_url() . 'video';
        foreach ($cate_info->result() as $info){
            if ($segment2 == 'tin-tuc') {
                $name = $info->cate_summary;
                $category_images = $info->category_images;
                $url = base_url() . 'video/' . $info->url;
                $data_article_giai_tri_1 = $this->front_model->get_list_art_cate($info->id, 1, 0);
                $data_article_giai_tri_6 = $this->front_model->get_list_art_cate($info->id, 4, 1);
                $data_all_article = $this->front_model->get_list_art_cate_all(1);
                $total_num_row = count($data_all_article->result());
                $config['total_rows'] = $total_num_row;
                $start = intval($this->uri->segment(3));
                $config['uri_segment'] = 3;
                $this->pagination->initialize($config); //Nạp cấu hình phân trang cho class pagination

                $data_all_article = $this->front_model->get_list_art_cate_page($info->id, $start, $num_row_in_page);
            } else if ($segment2 == 'thinh-hanh') {
                $name = $info->cate_summary;
                $category_images = $info->category_images;
                $url = base_url() . 'video/thinh-hanh';
                $data_all_article = $this->front_model->get_list_recommend();
                $total_num_row = count($data_all_article->result());
                $config['total_rows'] = $total_num_row;
                $start = intval($this->uri->segment(3));
                $config['uri_segment'] = 3;
                $this->pagination->initialize($config); //Nạp cấu hình phân trang cho class pagination

                $data_all_article = $this->front_model->get_list_recommend_page($start, $num_row_in_page);
            } else if ($segment2 == 'de-xuat') {
                $name = $info->cate_summary;
                $category_images = $info->category_images;
                $url = base_url() . 'video/de-xuat';
                $data_all_article = $this->front_model->get_all_article($info->parent);
                $total_num_row = count($data_all_article->result());
                $config['total_rows'] = $total_num_row;
                $start = intval($this->uri->segment(3));
                $config['uri_segment'] = 3;
                $this->pagination->initialize($config); //Nạp cấu hình phân trang cho class pagination

                $data_all_article = $this->front_model->get_all_article_page($info->parent, $start, $num_row_in_page);
            } else if ($segment2 == 'video-moi') {
                $name = $info->cate_summary;
                $url = base_url() . 'video/video_moi';
                $data_all_article = $this->front_model->get_video_new_all();
                $total_num_row = count($data_all_article->result());
                $config['total_rows'] = $total_num_row;
                $start = intval($this->uri->segment(3));
                $config['uri_segment'] = 3;
                $this->pagination->initialize($config); //Nạp cấu hình phân trang cho class pagination

                $data_all_article = $this->front_model->get_list_vide_new_page($start, $num_row_in_page);
            } else {
                $name = $info->cate_summary;
                $url = base_url() . 'video/' . $info->url;
                $category_images = $info->category_images;
                $data_all_article = $this->front_model->get_list_art_cate_all($info->id);
                $total_num_row = count($data_all_article->result());
                $config['total_rows'] = $total_num_row;
                $start = intval($this->uri->segment(3));
                $config['uri_segment'] = 3;
                $this->pagination->initialize($config); //Nạp cấu hình phân trang cho class pagination

                $data_all_article = $this->front_model->get_list_art_cate_page($info->id, $start, $num_row_in_page);
            }
        }

        $data = array();
        $data['url'] = $url;
        $data['name'] = $name;
        $data['category_images'] = $category_images;
        $data['cate_name'] = $cate_name;
        $data['link'] = $link;
        $data['cate_url'] = $cate_url;
        $data['data_all_article'] = $data_all_article;
        $data['data_all_slide'] = $data_all_slide;
        $data['data_article_giai_tri_1'] = $data_article_giai_tri_1;
        $data['data_article_giai_tri_6'] = $data_article_giai_tri_6;
        $data['cate_info'] = $cate_info;
        return $this->load->view('all_videos_article', $data);
    }

    function _videos_detail()
    {
        $segment2 = $this->uri->segment(2);
        $row_news = $this->front_model->ger_row_article($segment2);
        if (!$row_news) redirect('video');
        $id_art = $row_news->id_art;
        $video = $row_news->video;
        $youtube = $row_news->youtube;
        $images = $row_news->images;
        $title = $row_news->title;
        $art_url = $row_news->article_url;
        $link = $row_news->article_url;
        $username = $row_news->username;
        $name_fake = $row_news->art_username;
        $avatar = $row_news->avatar;
        $views = $row_news->views;
        $likes = $row_news->likes;
        $share = $row_news->share;
        $created_at = $row_news->created_at;
        $id_cate = $row_news->category_id;

        if (empty($name_fake)) {
            $username = $username;
        } else {
            $username = $name_fake;
        }

        $this->config->set_item('title', $title);
        $this->config->set_item('og_url', base_url() . 'video/' . $art_url);
        $this->config->set_item('og_image', $images);

        $this->count_view($id_art, $views);

        // lấy bài viết liên quan
        $data_list_article_cate = $this->front_model->get_list_article_cate($id_art, $id_cate);

        // lấy comment của bài viết
        $data_list_comment = $this->front_model->get_all_comment($id_art);

        // lấy bài viết đề xuất
        $data_videos_recommend = $this->front_model->get_article_recommend_detail($id_cate);
        $data_videos_recommend1 = $this->front_model->get_article_recommend_detail($id_cate);

        $data = array();

        $data['id_art'] = $id_art;
        $data['video'] = $video;
        $data['youtube'] = $youtube;
        $data['title'] = $title;
        $data['username'] = $username;
        $data['avatar'] = $avatar;
        $data['views'] = $views;
        $data['likes'] = $likes;
        $data['share'] = $share;
        $data['created_at'] = $created_at;
        $data['link'] = $link;

        $data['data_list_article_cate'] = $data_list_article_cate;
        $data['data_list_comment'] = $data_list_comment;
        $data['data_videos_recommend'] = $data_videos_recommend;
        $data['data_videos_recommend1'] = $data_videos_recommend1;

        return $this->load->view('article_videos_detail', $data);
    }
    function _cate_ctkm()
    {
        $data_reward = $this->front_model->get_list_reward();
        $data = array();
        $data['data_reward'] = $data_reward;
        return $this->load->view('ai_la_than_tuong', $data);
    }

    function _ctkm_details()
    {
        $data_reward = $this->front_model->get_list_reward();
        $data = array();
        $data['data_reward'] = $data_reward;
        return $this->load->view('ai_la_than_tuong', $data);
    }

    function _cate_music()
    {
        $segment2 = $this->uri->segment(2);
        $parent_id = '13';
        $cate_info = $this->front_model->get_category1($segment2);
        $data_all_article = '';
        $cate_name = 'Nhạc';
        $link = 'nhac';

        // Lấy slide
        $data_all_slide = $this->admin_slide_model->get_all_slide();

        $num_row_in_page = 16;
        $this->load->library('pagination');
        $config['base_url'] = site_url($this->uri->level(2));
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_tag_open'] = '<li class="page-item" style="margin-right: 0px !important">';
        $config['next_tag_close'] = '</a></li>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tagl_close'] = '</li>';
        $config['next_link'] = FALSE;
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = FALSE;
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</a></li>';
        $config['attributes'] = array('class' => 'page-link');
        $config['per_page'] = $num_row_in_page;


        $cate_url = base_url() . 'nhac';
        foreach ($cate_info->result() as $info){
            if ($segment2 == 'nhac-tong-hop') {
                $name = 'Nhạc';
                $url = base_url() . 'nhac/nhac-tong-hop';
                $category_images = 'https://fanart.tv/fanart/movies/268/moviebackground/batman-51189dc9d44dd.jpg';
                $data_article_giai_tri_1 = $this->front_model->get_top_article($info->parent,1);
                $data_all_article = $this->front_model->get_all_article($info->parent);
                $total_num_row = count($data_all_article->result());
                $config['total_rows'] = $total_num_row;
                $start = intval($this->uri->segment(3));
                $config['uri_segment'] = 3;
                $this->pagination->initialize($config); //Nạp cấu hình phân trang cho class pagination

                $data_all_article = $this->front_model->get_all_article_page($info->parent, $start, $num_row_in_page);
            } else {
                $name = $info->name;
                $url = base_url() . 'nhac/' . $info->url;
                $category_images = $info->category_images;
                $data_article_giai_tri_1 = $this->front_model->get_top_article($info->parent,1);
                $data_all_article = $this->front_model->get_list_art_cate_all($info->id);
                $total_num_row = count($data_all_article->result());
                $config['total_rows'] = $total_num_row;
                $start = intval($this->uri->segment(3));
                $config['uri_segment'] = 3;
                $this->pagination->initialize($config); //Nạp cấu hình phân trang cho class pagination

                $data_all_article = $this->front_model->get_list_art_cate_page($info->id, $start, $num_row_in_page);
            }
        }

        $data = array();
        $data['url'] = $url;
        $data['name'] = $name;
        $data['category_images'] = $category_images;
        $data['cate_name'] = $cate_name;
        $data['link'] = $link;
        $data['cate_url'] = $cate_url;
        $data['data_all_article'] = $data_all_article;
        $data['data_all_slide'] = $data_all_slide;
        $data['data_article_giai_tri_1'] = $data_article_giai_tri_1;
        return $this->load->view('all_music_article', $data);
    }

    function _music_detail()
    {
        $segment2 = $this->uri->segment(2);
        $row_news = $this->front_model->ger_row_article($segment2);
        if (!$row_news) redirect('video');
        $id_art = $row_news->id_art;
        $video = $row_news->video;
        $youtube = $row_news->youtube;
        $images = $row_news->images;
        $music = $row_news->music;
        $title = $row_news->title;
        $art_url = $row_news->article_url;
        $link = $row_news->article_url;
        $username = $row_news->username;
        $name_fake = $row_news->art_username;
        $avatar = $row_news->avatar;
        $views = $row_news->views;
        $likes = $row_news->likes;
        $share = $row_news->share;
        $created_at = $row_news->created_at;
        $id_cate = $row_news->category_id;

        if (empty($name_fake)) {
            $username = $username;
        } else {
            $username = $name_fake;
        }

        $this->config->set_item('title', $title);
        $this->config->set_item('og_url', base_url() . 'nhac/' . $art_url);
        $this->config->set_item('og_image', $images);

        $this->count_view($id_art, $views);

        // lấy bài viết liên quan
        $data_list_article_cate = $this->front_model->get_list_article_cate($id_art, $id_cate);

        // lấy comment của bài viết
        $data_list_comment = $this->front_model->get_all_comment($id_art);

        // lấy bài viết đề xuất
        $data_videos_recommend = $this->front_model->get_article_recommend_detail($id_cate);
        $data_videos_recommend1 = $this->front_model->get_article_recommend_detail($id_cate);

        $data = array();

        $data['id_art'] = $id_art;
        $data['video'] = $video;
        $data['youtube'] = $youtube;
        $data['music'] = $music;
        $data['title'] = $title;
        $data['username'] = $username;
        $data['avatar'] = $avatar;
        $data['views'] = $views;
        $data['likes'] = $likes;
        $data['share'] = $share;
        $data['created_at'] = $created_at;
        $data['link'] = $link;

        $data['data_list_article_cate'] = $data_list_article_cate;
        $data['data_list_comment'] = $data_list_comment;
        $data['data_videos_recommend'] = $data_videos_recommend;
        $data['data_videos_recommend1'] = $data_videos_recommend1;

        return $this->load->view('article_music_detail', $data);
    }
    function add_cmt()
    {

        $id_art = trim(htmlspecialchars($this->input->post("id_art")));
        $mem_cmt = trim(htmlspecialchars($this->input->post("comment")));
        $mem_id = trim(htmlspecialchars($this->input->post("idu")));
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $cmt_date = date('Y-m-d H:i:s');
        $this->front_model->mem_add_cmt($mem_cmt, $mem_id, $id_art, $cmt_date);
    }

    function _front_showbiz()
    {

        return $this->load->view('showbiz');
    }

    function _front_altt()
    {
        $data_reward = $this->front_model->get_list_reward();
        $data = array();
        $data['data_reward'] = $data_reward;
        return $this->load->view ('ai_la_than_tuong', $data);
    }

    function _front_huong_dan()
    {
        return $this->load->view('huongdan');
    }

    function _gioi_thieu()
    {
        return $this->load->view('gioi_thieu');
    }

    function _quy_dinh_chung()
    {
        return $this->load->view('quy_dinh_chung');
    }

    function _hinh_thuc_tt()
    {
        return $this->load->view('hinh_thuc_tt');
    }

    function _van_chuyen()
    {
        return $this->load->view('van_chuyen');
    }

    function _bao_hanh()
    {
        return $this->load->view('bao_hanh');
    }

    function _doi()
    {
        return $this->load->view('doi');
    }

    function _bao_mat()
    {
        return $this->load->view('bao_mat');
    }

    function _mh_hd()
    {
        return $this->load->view('mh_hd');
    }

    function _dky_dich_vu2()
    {
        if ($this->session->userdata("phone")) {
            $package = $_GET['pkg'];
            if ($package == 'G1' || $package == 'G2' || $package == 'XEM1' || $package == 'XEM7' || $package == 'TS') {
                $phone = $this->session->userdata("phone");
                $url = "http://xemlien.vn/api/get/2cx.jsp?pkg=" . $package . "&m=" . $phone . "&urlback=http://xemlien.vn/dang-ky-dich-vu";
                header('Location: ' . $url);
            } else {
                $url = "http://xemlien.vn/dang-ky-dich-vu";
                header('Location: ' . $url);
            }
        } else {
            return $this->load->view('dang-ky-dich-vu-2');
        }
    }
}

?>