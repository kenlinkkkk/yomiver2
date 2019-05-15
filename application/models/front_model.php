<?php
/**
 * Created by PhpStorm.
 * User: Truong Minh Duong
 * Date: 18/10/2018
 * Time: 4:31 CH
 */

class Front_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();

    }

    function get_list_art_cate($id, $limit, $offset)
    {
        $query = "SELECT * FROM article_category ac INNER JOIN article a ON ac.id = a.category_id INNER JOIN users u ON u.id = a.id_user WHERE a.category_id LIKE '$id' and a.status = 'on' ORDER BY id_art DESC limit $limit OFFSET $offset";
        return $this->db->query($query);
    }

    function get_list_images_home()
    {
        $query = "SELECT * FROM article_category ac INNER JOIN article a ON ac.id = a.category_id INNER JOIN users u ON u.id = a.id_user WHERE a.status = 'on' and a.check_1 = 'on' and ac.parent = '8' ORDER BY id_art DESC limit 5";
        return $this->db->query($query);
    }

    function get_video_recommend()
    {
        $query = "SELECT * FROM article_category ac INNER JOIN article a ON ac.id = a.category_id INNER JOIN users u ON u.id = a.id_user WHERE a.status = 'on' and a.check_1 = 'on' and ac.parent = '9' ORDER BY id_art DESC limit 5";
        return $this->db->query($query);

    }

    function get_top_music($id, $limit, $offset){
        $query = "SELECT * FROM article_category ac INNER JOIN article a ON ac.id = a.category_id INNER JOIN users u ON u.id = a.id_user WHERE a.category_id LIKE '$id' and a.status = 'on' ORDER BY views DESC limit $limit OFFSET $offset";
        return $this->db->query($query);
        // SELECT * FROM article_category ac INNER JOIN article a ON ac.id = a.category_id INNER JOIN users u ON u.id = a.id_user INNER JOIN article_category ac1 ON  WHERE a.category_id LIKE '$id' and a.status = 'on' and ac.parent = ac1.id ORDER BY views DESC limit $limit OFFSET $offset
    }

    function get_all_article($parent_id){
        $query = "SELECT * FROM article_category ac INNER JOIN article a ON ac.id = a.category_id INNER JOIN users u ON u.id = a.id_user WHERE a.status = 'on' and ac.parent = '$parent_id' ORDER BY id_art DESC";
        return $this->db->query($query);
    }
    function get_all_article_page($parent_id, $start, $number){
        $query = "SELECT * FROM article_category ac INNER JOIN article a ON ac.id = a.category_id INNER JOIN users u ON u.id = a.id_user WHERE a.status = 'on' and ac.parent = '$parent_id' ORDER BY id_art DESC limit $start, $number";
        return $this->db->query($query);
    }
    function get_top_article($parent_id, $limit){
        $query = "SELECT * FROM article_category ac INNER JOIN article a ON ac.id = a.category_id INNER JOIN users u ON u.id = a.id_user WHERE a.status = 'on' and ac.parent = '$parent_id' ORDER BY views DESC limit $limit";
        return $this->db->query($query);
    }

    function get_list_recommend()
    {
        $query = "SELECT * FROM article_category ac INNER JOIN article a ON ac.id = a.category_id INNER JOIN users u ON u.id = a.id_user WHERE a.status = 'on' and a.check_1 = 'on' and ac.parent = '9' ORDER BY id_art DESC";
        return $this->db->query($query);
    }
    function get_list_recommend_page($start, $number)
    {
        $query = "SELECT * FROM article_category ac INNER JOIN article a ON ac.id = a.category_id INNER JOIN users u ON u.id = a.id_user WHERE a.status = 'on' and a.check_1 = 'on' and ac.parent = '9' ORDER BY id_art DESC limit $start, $number";
        return $this->db->query($query);
    }
    function get_list_clip()
    {
        $query = "SELECT * FROM article_category ac INNER JOIN article a ON ac.id = a.category_id INNER JOIN users u ON u.id = a.id_user WHERE a.status = 'on' and ac.parent = '9' ORDER BY id_art DESC";
        return $this->db->query($query);
    }
    function get_list_clip_page($start, $number)
    {
        $query = "SELECT * FROM article_category ac INNER JOIN article a ON ac.id = a.category_id INNER JOIN users u ON u.id = a.id_user WHERE a.status = 'on' and ac.parent = '9' ORDER BY id_art DESC limit $start, $number";
        return $this->db->query($query);
    }
    function get_video_recommend_home()
    {
        $query = "SELECT * FROM article_category ac INNER JOIN article a ON ac.id = a.category_id INNER JOIN users u ON u.id = a.id_user WHERE a.status = 'on' and a.check_1 = 'on' and ac.parent = '9' ORDER BY id_art DESC limit 6";
        return $this->db->query($query);

    }

    function get_image_recommend_home()
    {
        $query = "SELECT * FROM article_category ac INNER JOIN article a ON ac.id = a.category_id INNER JOIN users u ON u.id = a.id_user WHERE a.status = 'on' and a.check_1 = 'on' and ac.parent = '8' ORDER BY id_art DESC limit 5";
        return $this->db->query($query);

    }

    function get_article_recommend($id_cate)
    {
        $this->db->from('article');
        $this->db->where('status', 'on');
        $this->db->where('check_2', 'on');
        $this->db->where('category_id', $id_cate);
        $this->db->order_by('id_art', 'DESC');
        $this->db->limit('10');
        return $this->db->get();
    }

    function get_article_recommend_detail($id_cate)
    {
        $this->db->from('article');
        $this->db->where('status', 'on');
        $this->db->where('category_id', $id_cate);
        $this->db->order_by('id_art', 'RANDOM');
        $this->db->limit('10');
        return $this->db->get();
    }


    function get_video_new()
    {
        $query = "SELECT * FROM article_category ac INNER JOIN article a ON ac.id = a.category_id INNER JOIN users u ON u.id = a.id_user WHERE a.status = 'on' and ac.parent = '9' ORDER BY id_art DESC limit 5";
        return $this->db->query($query);
    }

    function get_video_new_all()
    {
        $query = "SELECT * FROM article_category ac INNER JOIN article a ON ac.id = a.category_id INNER JOIN users u ON u.id = a.id_user WHERE a.status = 'on' and ac.parent = '9' ORDER BY id_art DESC";
        return $this->db->query($query);
    }

    function get_list_vide_new_page($start, $number)
    {
        $query = "SELECT * FROM article_category ac INNER JOIN article a ON ac.id = a.category_id INNER JOIN users u ON u.id = a.id_user WHERE a.status = 'on' and ac.parent = '9' ORDER BY id_art DESC limit $start, $number";
        return $this->db->query($query);
    }

    function get_video_like()
    {
        $query = "SELECT * FROM article_category ac INNER JOIN article a ON ac.id = a.category_id INNER JOIN users u ON u.id = a.id_user WHERE a.status = 'on' and ac.parent = '9' and a.check_1 = 'on' ORDER BY id_art DESC limit 10";
        return $this->db->query($query);
    }

    function get_video_like_home($limit, $start)
    {
        $query = "SELECT * FROM article a INNER JOIN article_category ac ON ac.id = a.category_id INNER JOIN users u ON u.id = a.id_user WHERE a.status = 'on' and  ac.parent = '9' ORDER BY id_art DESC limit $limit";
        return $this->db->query($query);
    }

    function get_list_art_cate_all($id)
    {
        $query = "SELECT * FROM article_category ac INNER JOIN article a ON ac.id = a.category_id INNER JOIN users u ON u.id = a.id_user WHERE a.category_id LIKE '$id' and a.status = 'on' ORDER BY id_art DESC";
        return $this->db->query($query);
    }

    function get_list_art_cate_page($id, $start, $number)
    {
        $query = "SELECT * FROM article_category ac INNER JOIN article a ON ac.id = a.category_id INNER JOIN users u ON u.id = a.id_user WHERE a.category_id LIKE '$id' and a.status = 'on' ORDER BY id_art DESC limit $start, $number";
        return $this->db->query($query);
    }

    function ger_row_article($url)
    {
        $this->db->from('article as a');
        $this->db->join('users', 'a.id_user = users.id');
        $this->db->where('a.article_url', $url);
        $this->db->where('a.status', 'on');
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return false;
        } else
            return $query->row();
    }

    function search($query)
    {
        $this->db->select("*");
        $this->db->from("article as a");
        $this->db->join("users as u", 'a.id_user = u.id');
        if ($query != '') {
            $this->db->like('a.title', $query);
            $this->db->or_like('a.art_username', $query);
//            $this->db->or_like('u.username', $query);
        }
        $this->db->order_by('a.id_art', 'DESC');
        return $this->db->get();
    }

    // lấy các bài viết cùng chuyên mục
    function get_list_article_cate($id_a, $id)
    {
        $query = "SELECT * FROM article JOIN users ON article.id_user = users.id WHERE category_id = '$id' and article.status = 'on' and not id_art = '$id_a' ORDER BY RAND() LIMIT 3";
        return $this->db->query($query);
    }

    // lấy commment của 1 bài viết bất kỳ
    function get_all_comment($id)
    {
        $query = "SELECT u.username, c.comment, c.created_at as cmt_date, u.avatar FROM users u INNER JOIN comments c ON c.user_id = u.id INNER JOIN article a ON a.id_art = c.art_id WHERE c.art_id = '$id' and c.status = 'on' ORDER BY c.created_at DESC";
        return $this->db->query($query);
    }

    function count_views($id, $view)
    {
        $this->db->set('views', $view + 1);
        $this->db->where('id_art', $id);
        $this->db->update('article');
    }

    // lấy danh sách các thư mục
    function get_all_article_cate_home($id)
    {
        $this->db->from('article_category');
        $this->db->where('parent !=', $id);
        return $this->db->get();
    }

    function insert_art($title, $cate, $url, $image, $video, $music, $id_user, $created_at)
    {
        $this->db->set('title', $title);
        $this->db->set('category_id', $cate);
        $this->db->set('article_url', $url);
        $this->db->set('images', $image);
        $this->db->set('video', $video);
        $this->db->set('music', $music);
        $this->db->set('id_user', $id_user);
        $this->db->set('created_at', $created_at);
        $this->db->set('status', '0');
        $this->db->set('views', '1');
        $this->db->insert('article');
        return $this->db->insert_id();
    }

    function get_list_reward()
    {
        $query = ("SELECT * FROM trung_thuong tt INNER JOIN reward_id r ON tt.reward_id = r.id ORDER BY trung_thuong_id");
        return $this->db->query($query);
    }

    // lấy bài viết của thành viên
    function get_all_art_user($id)
    {
        $query = "SELECT a.id_art, a.title, ac.name, a.status as a_stt, a.created_at, a.views, a.article_url FROM article a INNER JOIN users u ON a.id_user = u.id INNER JOIN article_category ac ON a.category_id = ac.id WHERE a.id_user = '$id' order  by  id_art DESC";
        return $this->db->query($query);
    }

    // đếm tổng lượng views của 1 thành viên
    function count_all_views($id)
    {
        $sql = "SELECT SUM(views) as count FROM users u INNER JOIN article a ON u.id = a.id_user WHERE u.id = '$id'";
        $query = $this->db->query($sql);
        if ($query->num_rows() == 0) {
            return false;
        } else
            return $query->row();
    }

    function get_nickname($id)
    {
        $this->db->from('users');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return false;
        } else
            return $query->row();
    }

    function mem_add_cmt($mem_cmt, $mem_id, $id_art, $cmt_date)
    {
        $this->db->set('art_id', $id_art);
        $this->db->set('comment', $mem_cmt);
        $this->db->set('user_id', $mem_id);
        $this->db->set('created_at', $cmt_date);
        $this->db->set('status', '0');
        $this->db->insert('comments');
        return $this->db->insert_id();
    }
    function get_category1($segment2){
        $this->db->from('article_category');
        $this->db->where('url', $segment2);
        $this->db->where('duplicate_menu', 0); 
        return $this->db->get();
    }
    function get_route($segment2){
        $this->db->from('article_category');
        $this->db->where('url', $segment2); 
        $this->db->where('category_images !=', '#');
        return $this->db->get();
    }
    function get_category($segment2){
        $this->db->from('article_category');
        $this->db->where('url', $segment2); 
        return $this->db->get();
    }
    function get_menu_chinh(){
        $this->db->from('article_category');
        $this->db->where('parent', 0);
        $this->db->where('status', 'on');
        return $this->db->get();
    }
    function get_menu_con($parent_id){
        $query = "SELECT * FROM article_category WHERE status = 'on' and parent = '$parent_id'";
        return $this->db->query($query);
    }
}