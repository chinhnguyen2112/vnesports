<?php
error_reporting(1);
defined('BASEPATH') or exit('No direct script access allowed');
class Ajax extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
        $this->load->database();
        $this->load->helper(['url', 'func_helper', 'images']);
        $this->load->library(['session', 'pagination311', 'upload']);
    }
    public function load_more()
    {
        $time = time();
        $page = $this->input->post('page');
        $page = 20 * ($page - 1);
        $blog = $this->Madmin->get_limit("time_post <= $time AND index_blog = 1 AND type = 0 AND chuyenmuc != 9", 'blogs', $page, 20);
        $html = '';
        if ($blog != null) {
            foreach ($blog as $val) {
                // $cate = chuyen_muc(['id' => $val['chuyenmuc']]);
                $alias=$val['alias'];
                if ($val['id'] <= 1024) {
                    $alias = $val['alias'] . '/';
                }
                $html .= ' <div class="this_train">
                                <a href="/' . $alias . '">
                                    <img src="/' . $val['image'] . '" alt="' . $val['title'] . '">
                                    <div class="box_right_data">
                                        <p class="title_blog">' . $val['title'] . '</p>
                                        <p class="date_post"><span>' . date('d-m-Y', $val['updated_at']) . '</span></p>
                                        <div class="des_blog">' . $val['sapo'] . '</div>
                                    </div>
                                </a>
                            </div>
                            ';
            }
            $next = 0;
            if (count($blog) == 20) {
                $next = 1;
            }
            $response = [
                'status' => 1,
                'html' => $html,
                'next' => $next
            ];
        } else {
            $response = [
                'status' => 0,
            ];
        }
        echo json_encode($response);
    }

    public function load_more_cate()
    {
        $time =  time();
        $page = $this->input->post('page');
        $chuyen_muc = $this->input->post('id_chuyenmuc');
        $name_page = $this->input->post('name_page');
        $page = 10 * ($page - 1);
        if ($name_page == 'tag') {
            $list_tag = $this->Madmin->query_sql("SELECT *  FROM tags  WHERE parent = $chuyen_muc ");
            $where = '  FIND_IN_SET(' . $chuyen_muc . ',tag) ';
            foreach ($list_tag as $val) {
                $where .= ' OR FIND_IN_SET(' . $val['id'] . ',tag) ';
            }
            $blog_cate_sql = "SELECT blogs.*,category.name as name_cate,category.alias as alias_cate,category.image as image_cate FROM blogs INNER JOIN category ON blogs.chuyenmuc = category.id WHERE time_post <= $time AND index_blog = 1 AND type = 0 AND $where ORDER BY blogs.id  DESC LIMIT $page,  10";
        } else {
            $blog_cate_sql = "SELECT blogs.*,category.name as name_cate,category.alias as alias_cate,category.image as image_cate FROM blogs INNER JOIN category ON blogs.chuyenmuc = category.id WHERE time_post <= $time AND index_blog = 1 AND type = 0 AND blogs.chuyenmuc = $chuyen_muc ORDER BY blogs.id DESC LIMIT $page,  10";
        }
        $blog_cate = $this->Madmin->query_sql($blog_cate_sql);
        $html = '';
        if ($blog_cate != null) {
            foreach ($blog_cate as $val) {
                $alias=$val['alias'];
                if ($val['id'] <= 1024) {
                    $alias = $val['alias'] . '/';
                }
                $html .= '
                <div class="this_train">
                    <a href="/' . $alias . '">
                        <img src="/' . $val['image'] . '" alt="' . $val['title'] . '">
                        <div class="box_right_data">
                            <p class="title_blog">' . $val['title'] . '</p>
                            <p class="date_post"><span>' . date('d-m-Y', $val['updated_at']) . '</span></p>
                            <div class="des_blog">' . $val['sapo'] . '</div>
                        </div>
                    </a>
                </div>
                ';
            }
            $next = 0;
            if (count($blog_cate) == 10) {
                $next = 1;
            }
            $response = [
                'status' => 1,
                'html' => $html,
                'next' => $next
            ];
        } else {
            $response = [
                'status' => 0,
            ];
        }
        echo json_encode($response);
    }

    // search 
    public function search()
    {
        $time = time();
        $data['blog_new'] = $this->Madmin->get_limit("time_post <= $time AND index_blog = 1 AND type = 0", 'blogs', 0, 5);
        $data['page'] = $this->Madmin->query_sql("SELECT title,alias FROM blogs WHERE type = 1");
        $key_search = $this->input->get('search');
        $data['key_search'] = $key_search;
        if ($key_search != '') {
            $page = $this->uri->segment(2);
            if ($page < 1 || $page == '') {
                $page = 1;
            }
            $limit = 10;
            $start = $limit * ($page - 1);
            $count = $this->Madmin->query_sql("SELECT * FROM blogs WHERE index_blog = 1 AND type = 0 AND time_post <= $time AND title LIKE '%$key_search%'");
            pagination('/search', count($count), $limit);
            $result = $this->Madmin->query_sql("SELECT category.alias as cate_alias, category.name as cate_name, blogs.* FROM blogs INNER JOIN category ON category.id = blogs.chuyenmuc WHERE index_blog = 1 AND blogs.type = 0 AND time_post <= $time AND blogs.title LIKE '%$key_search%' ORDER BY blogs.id DESC LIMIT $start,$limit ");
            if ($result != null) {
                $data['result'] = $result;
            }
            $data['count'] = count($count);
            $data['meta_title'] = 'Tất cả kết quả tìm kiếm';
            $data['content'] = 'result_search';
            $data['list_css'] = ['result_search.css'];
            $this->load->view('index', $data);
        } else {
            redirect('/');
        }
    }
}
