<?php

class Admin_article_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();

    }

    //Ham lay ra danh sach các tin trong bảng article
    function get_list_article()
    {
        $query = ("SELECT id_art, art.title, art_cate.name, art.status as art_stt, u.username, views, art.created_at, parent FROM article art INNER JOIN article_category art_cate ON art.category_id = art_cate.id INNER JOIN users u ON u.id = art.id_user ORDER BY id_art DESC");
        return $this->db->query($query);
    }
    function get_list_reward()
    {
        $query = ("SELECT * FROM trung_thuong tt INNER JOIN reward_id r ON tt.reward_id = r.id");
        return $this->db->query($query);
    }
    function get_reward()
    {
        $this->db->from('reward_id');
        return $this->db->get();
    }

    function add_article_img($art_id, $art_parent, $art_title, $art_url, $art_images, $art_status, $art_check_1, $art_check_2, $art_date, $art_user, $art_views, $art_username)
    {
        $this->db->set('category_id', $art_parent);
        $this->db->set('title', $art_title);
        $this->db->set('article_url', $art_url);
        $this->db->set('images', $art_images);
        $this->db->set('status', $art_status);
        $this->db->set('check_1', $art_check_1);
        $this->db->set('check_2', $art_check_2);
        $this->db->set('created_at', $art_date);
        $this->db->set('id_user', $art_user);
        $this->db->set('art_username', $art_username);
//        $this->db->set('likes', $art_likes);
        $this->db->set('views', $art_views);
//        $this->db->set('share', $art_shares);
        $this->db->insert('article');
        return $this->db->insert_id();
    }
    function add_reward($trung_thuong_id, $reward_id, $sdt,  $art_date)
    {
        $this->db->set('reward_id', $reward_id);
        $this->db->set('sdt', $sdt);
        $this->db->set('created_at', $art_date);
        $this->db->insert('trung_thuong');
        return $this->db->insert_id();
    }

    function add_article_video($art_parent, $art_title, $art_url, $art_images, $art_video, $art_status, $art_re, $art_hot, $art_date, $art_user, $art_views, $art_username)
    {
        $this->db->set('category_id', $art_parent);
        $this->db->set('title', $art_title);
        $this->db->set('article_url', $art_url);
        $this->db->set('images', $art_images);
        $this->db->set('video', $art_video);
//        $this->db->set('youtube', $art_youtube);
        $this->db->set('status', $art_status);
        $this->db->set('check_1', $art_check_1);
        $this->db->set('check_2', $art_check_2);
        $this->db->set('created_at', $art_date);
        $this->db->set('id_user', $art_user);
        $this->db->set('art_username', $art_username);
//        $this->db->set('likes', $art_likes);
        $this->db->set('views', $art_views);
//        $this->db->set('share', $art_shares);
        $this->db->insert('article');
        return $this->db->insert_id();
    }
    function add_article_music($art_parent, $art_title, $art_url, $art_images, $art_music, $art_status, $art_check_1, $art_check_2, $art_date, $art_user, $art_views, $art_likes, $art_username)
    {
        $this->db->set('category_id', $art_parent);
        $this->db->set('title', $art_title);
        $this->db->set('article_url', $art_url);
        $this->db->set('images', $art_images);
        $this->db->set('music', $art_music);
//        $this->db->set('youtube', $art_youtube);
        $this->db->set('status', $art_status);
        $this->db->set('check_1', $art_check_1);
        $this->db->set('check_2', $art_check_2);
        $this->db->set('created_at', $art_date);
        $this->db->set('id_user', $art_user);
        $this->db->set('art_username', $art_username);
        $this->db->set('likes', $art_likes);
        $this->db->set('views', $art_views);
//        $this->db->set('share', $art_shares);
        $this->db->insert('article');
        return $this->db->insert_id();
    }

    function edit_article($art_id, $art_parent, $art_title, $art_summary, $art_url, $art_images, $art_video, $art_content, $art_status, $art_re, $art_hot, $art_date, $art_user, $art_views, $art_likes, $art_shares, $art_username)
    {
        $this->db->set('category_id', $art_parent);
        $this->db->set('title', $art_title);
        $this->db->set('summary', $art_summary);
        $this->db->set('article_url', $art_url);
        $this->db->set('images', $art_images);
        $this->db->set('video', $art_video);
//        $this->db->set('youtube', $art_youtube);
        $this->db->set('content', $art_content);
        $this->db->set('status', $art_status);
        $this->db->set('check_1', $art_re);
        $this->db->set('check_2', $art_hot);
        $this->db->set('created_at', $art_date);
        $this->db->set('id_user', $art_user);
        $this->db->set('art_username', $art_username);
//        $this->db->set('likes', $art_likes);
        $this->db->set('views', $art_views);
//        $this->db->set('share', $art_shares);
        $this->db->where('id_art', $art_id);
        $this->db->update('article');
        return $this->db->insert_id();
    }

    function edit_reward($trung_thuong_id, $reward_id, $sdt,  $reward_date)
    {
        $this->db->set('reward_id', $reward_id);
        $this->db->set('sdt', $sdt);
        $this->db->set('created_at', $reward_date);
        $this->db->where('trung_thuong_id', $trung_thuong_id);
        $this->db->update('trung_thuong');
        return $this->db->insert_id();
    }

    function edit_article_img($art_id, $art_parent, $art_title, $art_url, $art_images, $art_status, $art_check_1, $art_check_2, $art_date, $art_user, $art_views, $art_username)
    {
        $this->db->set('category_id', $art_parent);
        $this->db->set('title', $art_title);
        $this->db->set('article_url', $art_url);
        $this->db->set('images', $art_images);
        $this->db->set('status', $art_status);
        $this->db->set('check_1', $art_check_1);
        $this->db->set('check_2', $art_check_2);
        $this->db->set('created_at', $art_date);
        $this->db->set('id_user', $art_user);
        $this->db->set('art_username', $art_username);
//        $this->db->set('likes', $art_likes);
        $this->db->set('views', $art_views);
//        $this->db->set('share', $art_shares);
        $this->db->where('id_art', $art_id);
        $this->db->update('article');
        return $this->db->insert_id();
    }

    function edit_article_video($art_id, $art_parent, $art_title, $art_url, $art_images, $art_video, $art_status, $art_check_1, $art_check_2, $art_date, $art_user, $art_views)
    {
        $this->db->set('category_id', $art_parent);
        $this->db->set('title', $art_title);
        $this->db->set('article_url', $art_url);
        $this->db->set('images', $art_images);
        $this->db->set('video', $art_video);
        $this->db->set('music', $art_music);
//        $this->db->set('youtube', $art_youtube);
        $this->db->set('status', $art_status);
        $this->db->set('check_1', $art_check_1);
        $this->db->set('check_2', $art_check_2);
        $this->db->set('created_at', $art_date);
        $this->db->set('id_user', $art_user);
//        $this->db->set('likes', $art_likes);
        $this->db->set('views', $art_views);
//        $this->db->set('share', $art_shares);
        $this->db->where('id_art', $art_id);
        $this->db->update('article');
        return $this->db->insert_id();
    }
    function edit_article_music($art_id, $art_parent, $art_title, $art_url, $art_images, $art_music, $art_status, $art_check_1, $art_check_2, $art_date, $art_user, $art_views, $art_likes, $art_username)
    {
        $this->db->set('category_id', $art_parent);
        $this->db->set('title', $art_title);
        $this->db->set('article_url', $art_url);
        $this->db->set('images', $art_images);
        $this->db->set('music', $art_music);
//        $this->db->set('youtube', $art_youtube);
        $this->db->set('status', $art_status);
        $this->db->set('check_1', $art_check_1);
        $this->db->set('check_2', $art_check_2);
        $this->db->set('created_at', $art_date);
        $this->db->set('id_user', $art_user);
        $this->db->set('likes', $art_likes);
        $this->db->set('views', $art_views);
//        $this->db->set('share', $art_shares);
        $this->db->set('art_username', $art_username);
        $this->db->where('id_art', $art_id);
        $this->db->update('article');
        return $this->db->insert_id();
    }


    function delete_article($art_id)
    {
        $this->db->where('id_art', $art_id);
        $this->db->delete('article');
    }
    function delete_reward($trung_thuong_id)
    {
        $this->db->where('trung_thuong_id', $trung_thuong_id);
        $this->db->delete('trung_thuong');
    }

    function check_art_url($art_url)
    {
        $this->db->from('article');
        $this->db->where('article_url', $art_url);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return false;
        } else
            return $query->row();
    }

    function get_row_article($art_id)
    {
        $this->db->from('article');
        $this->db->where('id_art', $art_id);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return false;
        } else
            return $query->row();
    }
    function get_row_reward($trung_thuong_id)
    {
        $this->db->from('trung_thuong');
        $this->db->where('trung_thuong_id', $trung_thuong_id);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return false;
        } else
            return $query->row();
    }

    // lấy danh sách các thư mục
    function get_all_article_cate($id)
    {
        $this->db->from('article_category');
        $this->db->where('parent', $id);
        return $this->db->get();
    }

    function delete_rewards($art_id)
    {
        $this->db->where('trung_thuong_id', $art_id);
        $this->db->delete('trung_thuong');
    }
    function specific_search($key, $cate){
        if ($key != '') {
            $this->db->select("id_art, art.title, art_cate.name, art.status as art_stt, u.username, views, art.created_at, parent");
            $this->db->from("article as art");
            $this->db->join("users as u", 'art.id_user = u.id');
            $this->db->join("article_category as art_cate", 'art.category_id = art_cate.id');
            $this->db->like('art.title', $key);
            $this->db->or_like('art.art_username', $key);
            $this->db->where('art.category_id', $cate);
//            $this->db->or_like('u.username', $query);
        } else if($key == ''){
            $this->db->select("id_art, art.title, art_cate.name, art.status as art_stt, u.username, views, art.created_at, parent");
            $this->db->from("article_category as art_cate");
            $this->db->join("article as art", 'art.category_id = art_cate.id');
            $this->db->join("users as u", 'art.id_user = u.id');
            $this->db->where('art_cate.id', $cate);
        }
        $this->db->order_by('art.id_art', 'DESC');
        return $this->db->get();
    }
    function search($key)
    {
        $this->db->select("id_art, art.title, art_cate.name, art.status as art_stt, u.username, views, art.created_at, parent");
        $this->db->from("article as art");
        $this->db->join("users as u", 'art.id_user = u.id');
        $this->db->join("article_category as art_cate", 'art.category_id = art_cate.id');
        if ($key != '') {
            $this->db->like('art.title', $key);
            $this->db->or_like('art.art_username', $key);
//            $this->db->or_like('u.username', $query);
        }
        $this->db->order_by('art.id_art', 'DESC');
        return $this->db->get();
    }

    function reward_search($key){
        $this->db->from("trung_thuong as tt");
        $this->db->join("reward_id as r", 'tt.reward_id = r.id');
        if ($key != '') {
            $this->db->where('sdt', $key);
//            $this->db->or_like('u.username', $query);
        }
        $this->db->order_by('tt.trung_thuong_id', 'DESC');
        return $this->db->get();
    }

    function specific_reward_search($key, $reward, $date){
        $this->db->from("trung_thuong as tt");
        $this->db->join("reward_id as r", 'tt.reward_id = r.id');
        if($key != '' && $reward != '' && $date != ''){
            $this->db->where('sdt', $key);
            $this->db->where('reward_id', $reward);
            $this->db->where('created_at', $date);
        } else if ($key == '' && $reward == '') {
            $this->db->where('created_at', $date);
        } else if ($key == '' && $date == '') {
            $this->db->where('reward_id', $reward);    
        } else if ($key != '' && $reward != '') {
            $this->db->where('sdt', $key);
            $this->db->where('reward_id', $reward);
        } else if ($key != '' && $date != '') {
            $this->db->where('sdt', $key);
            $this->db->where('created_at', $date);
        } else if ($reward != '' && $date != '') {
            $this->db->where('reward_id', $reward);
            $this->db->where('created_at', $date);
        }
        $this->db->order_by('tt.trung_thuong_id', 'DESC');
        return $this->db->get();
    }
}
