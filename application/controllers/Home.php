<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Madmin']);
        $this->load->database();
        $this->load->helper(['url', 'func_helper']);
        $this->load->library(['pagination311', 'session']);
    }
    public function home()
    {
        $time = time();
        $data['canonical'] = base_url();
        $data['blog'] = $this->Madmin->get_limit("time_post <= $time AND index_blog = 1 AND type = 0", 'blogs', 0, 20);
        $data['page'] = $this->Madmin->query_sql("SELECT title,alias FROM blogs WHERE type = 1");
        $data['blog_new'] = $this->Madmin->get_limit("time_post <= $time AND index_blog = 1 AND type = 0", 'blogs', 0, 5);
        $tags = $this->Madmin->query_sql("SELECT id FROM tags WHERE parent = 25");
        $where = "";
        foreach ($tags as $key => $val) {
            if ($key == 0) {
                $where .= ' FIND_IN_SET(' . $val['id'] . ',tag) ';
            } else {
                $where .= ' OR FIND_IN_SET(' . $val['id'] . ',tag) ';
            }
        }
        $blog_tag = $this->Madmin->query_sql("SELECT * FROM blogs WHERE  time_post <= $time AND index_blog = 1 AND type = 0 AND ( $where ) ORDER BY id DESC LIMIT 4");
        $data['blog_tag'] = $blog_tag;
        $data['meta_title'] = 'Cổng thông tin cập nhật xu hướng phát triển Game Online Việt Nam';
        $data['meta_des'] = 'VnEsports là nơi cập nhật nhanh và chính xác thông tin các game Esports thịnh hành nhất hiện nay. Theo dõi ngay để không bỏ lỡ các tin game mới và hấp dẫn!';
        $data['content'] = 'home';
        $data['list_js'] = [
            'slick.min.js',
            'home.js',
        ];
        $data['list_css'] = [
            'slick.css',
            'slick-theme.css',
            'home.css'
        ];
        $data['index'] = 1;
        $this->load->view('index', $data);
    }
    public function chuyenmuc($alias)
    {
        $data['page'] = $this->Madmin->query_sql("SELECT title,alias FROM blogs WHERE type = 1");
        $time = time();
        $alias = trim($alias);
        $alias_new = strtolower($alias);
        if ($alias != $alias_new) {
            redirect('/' . $alias_new . '/', 'location', 301);
        }
        $data['canonical'] = base_url() . $alias . '/';
        if ($alias == 'nha-cai-ta88-san-choi-cuoc-xanh-chin-hap-dan-nguoi-choi') {
            $alias = 'nha-cai-ta88bet-san-choi-cuoc-xanh-chin-hap-dan-nguoi-choi';
        }
        $chuyenmuc = $this->Madmin->get_by(['alias' => $alias], 'category');
        if ($chuyenmuc == null) {
            $page = $this->Madmin->query_sql_row("SELECT * FROM blogs WHERE type = 1 AND alias = '$alias' ");
            if ($page == null) {
                $blog = $this->Madmin->query_sql_row("SELECT blogs.*,category.name as name_cate,category.alias as alias_cate,category.image as img_cate FROM blogs INNER JOIN category ON category.id = blogs.chuyenmuc WHERE type = 0 AND index_blog =1 AND time_post<= $time AND blogs.alias = '$alias' ");
                if ($blog == null) {
                    $tags = $this->Madmin->get_by(['alias' => $alias], 'tags');
                }
            }
        }
        if (isset($chuyenmuc) && $chuyenmuc != null) { //chuyenmuc
            if ($_SERVER['REQUEST_URI'] != '/' . $alias . '/') {
                redirect('/' . $alias . '/', 'location', 301);
            }
            if ($alias == 'lich-thi-dau') {
                return $this->lich_thi_dau($chuyenmuc);
            }
            $page = $this->uri->segment(3);
            if ($page < 1 || $page == '') {
                $page = 1;
            }
            $limit = 18;
            $start = $limit * ($page - 1);
            $count_or['chuyenmuc'] = $chuyenmuc['id'];
            if ($chuyenmuc['parent'] == 0) {
                $count_or['cate_parent'] = $chuyenmuc['id'];
            }
            $count = $this->Madmin->num_rows_or("time_post <= $time AND index_blog = 1 AND type = 0", $count_or, 'blogs');
            pagination('/' . $chuyenmuc['alias'], $count, $limit);
            $chuyenmuc_parent = $this->Madmin->get_by(['id' => $chuyenmuc['parent']], 'category');
            $title_page = $chuyenmuc['name'];
            if ($chuyenmuc_parent != null) {
                $title_page = $chuyenmuc_parent['name'] . ' - ' . $chuyenmuc['name'];
            }
            $data['blog'] = $this->Madmin->get_limit_or("time_post <= $time AND index_blog = 1 AND type = 0", $count_or, 'blogs', $start, $limit);
            $data['blog_new'] = $this->Madmin->query_sql("SELECT * FROM blogs WHERE   time_post <= $time AND index_blog = 1 AND type = 0  ORDER BY id DESC LIMIT 5");
            $data['title_page'] = $title_page;
            $data['content_cate'] = $chuyenmuc['content'];
            $data['meta_img'] = $chuyenmuc['image'];
            $data['chuyenmuc'] = $chuyenmuc['id'];
            $data['meta_title'] = $chuyenmuc['meta_title'];
            $data['meta_des'] = $chuyenmuc['meta_des'];
            $data['meta_key'] = $chuyenmuc['name'];
            $data['content'] = 'chuyenmuc_blog';
            $data['list_js'] = [
                'chuyenmuc_blog.js',
            ];
            $data['list_css'] = [
                'chuyenmuc_blog.css',
            ];
            $data['index'] = 1;
        } else if (isset($blog) && $blog != null) { // blog
            if ($_SERVER['REQUEST_URI'] != '/' . $alias . '/') {
                redirect('/' . $alias . '/', 'location', 301);
            }
            if (!admin() && $blog['time_post'] > $time) {
                redirect('/');
            }
            $data['blog_same'] = $this->Madmin->query_sql("SELECT * FROM blogs WHERE chuyenmuc = {$blog['chuyenmuc']} AND time_post <= $time AND index_blog = 1 AND type = 0 AND id != {$blog['id']}  ORDER BY updated_at DESC LIMIT 6");
            $data['blog_new'] = $this->Madmin->query_sql("SELECT * FROM blogs WHERE  id != {$blog['id']} AND time_post <= $time AND index_blog = 1 AND type = 0  ORDER BY id DESC LIMIT 5");
            $data['breadcrumb'] = $this->Madmin->query_sql_row("SELECT name,alias  FROM category  WHERE id = {$blog['chuyenmuc']} ");
            if ($blog['chuyenmuc'] != $blog['cate_parent']) {
                $data['breadcrumb_parent'] = $this->Madmin->query_sql_row("SELECT name,alias  FROM category  WHERE id = {$blog['cate_parent']} ");
            }
            $data['blog'] = $blog;
            $data['content'] = 'detail_blog';
            $data['list_js'] = [
                'jquery.toc.min.js',
                'detail_blog.js',
            ];
            $data['list_css'] = [
                'detail_blog.css',
            ];
            $data['meta_title'] = $blog['meta_title'];
            $data['meta_des'] = $blog['meta_des'];
            $data['meta_key'] = $blog['meta_key'];
            $data['meta_img'] = $blog['image'];
            $data['index'] = 1;
        } else if (isset($tags) && $tags != null) {
            if ($_SERVER['REQUEST_URI'] != '/' . $alias . '/') {
                redirect('/' . $alias . '/', 'location', 301);
            }
            $id_parent = $tags['id'];
            $list_tag = $this->Madmin->query_sql("SELECT *  FROM tags  WHERE parent = $id_parent ");
            $where = '  FIND_IN_SET(' . $id_parent . ',tag) ';
            foreach ($list_tag as $key => $val) {
                $where .= ' OR FIND_IN_SET(' . $val['id'] . ',tag) ';
            }
            $page = $this->uri->segment(3);
            if ($page < 1 || $page == '') {
                $page = 1;
            }
            $limit = 18;
            $start = $limit * ($page - 1);
            $count = $this->Madmin->query_sql("SELECT blogs.*,category.name as name_cate,category.alias as alias_cate,category.image as img_cate FROM blogs INNER JOIN category ON category.id = blogs.chuyenmuc WHERE time_post <= $time AND index_blog = 1 AND type = 0 AND ( $where ) ");
            pagination('/' . $tags['alias'], count($count), $limit);
            $data['blog'] = $this->Madmin->query_sql("SELECT * FROM blogs  WHERE time_post <= $time AND index_blog = 1 AND type = 0 AND ( $where ) ORDER BY id DESC LIMIT $start,$limit");
            $data['blog_new'] = $this->Madmin->query_sql("SELECT * FROM blogs WHERE time_post <= $time AND index_blog = 1 AND type = 0  ORDER BY id DESC LIMIT 5");
            $data['title_page'] = $tags['name'];
            $data['meta_title'] = $tags['meta_title'];
            $data['meta_des'] = $tags['meta_des'];
            $data['meta_key'] = $tags['meta_key'];
            $data['content_tag'] = $tags['content'];
            $data['tag_id'] = $tags['id'];
            $data['canonical'] = base_url() . $alias . '/';
            $data['content'] = 'tag';
            $data['list_js'] = [
                'tag.js',
            ];
            $data['list_css'] = [
                'css_tag.css',
            ];
            $data['index'] = 1;
        } elseif (isset($page) && $page != null) {
            return $this->page($page);
        } else {
            set_status_header(404);
            return $this->load->view('errors/html/error_404');
        }
        $this->load->view('index', $data);
    }
    public function page($page)
    {
        $data['page'] = $this->Madmin->query_sql("SELECT title,alias FROM blogs WHERE type = 1");
        if ($_SERVER['REQUEST_URI'] != '/' . $page['alias'] . '/') {
            redirect('/' . $page['alias'] . '/', 'location', 301);
        }
        $data['canonical'] = base_url() . $page['alias'] . '/';
        $data['pages'] = $page;
        $data['content'] = 'page';
        $data['list_js'] = [
            'jquery.toc.min.js',
            'detail_blog.js',
        ];
        $data['list_css'] = [
            'page.css',
        ];
        $data['meta_title'] = $page['meta_title'];
        $data['meta_des'] = $page['meta_des'];
        $data['meta_key'] = $page['meta_key'];
        $data['meta_img'] = $page['image'];
        $data['index'] = 1;
        $this->load->view('index', $data);
    }
    public function lich_thi_dau($chuyenmuc)
    {
        $data['page'] = $this->Madmin->query_sql("SELECT title,alias FROM blogs WHERE type = 1");
        $time = time();
        $data['content'] = 'lich_thi_dau';
        $data['blog_new'] = $this->Madmin->query_sql("SELECT * FROM blogs WHERE   time_post <= $time AND index_blog = 1 AND type = 0  ORDER BY id DESC LIMIT 5");
        $data['canonical'] = base_url() . $chuyenmuc['alias'] . '/';
        $data['title_page'] = $chuyenmuc['name'];
        $data['meta_title'] = $chuyenmuc['meta_title'];
        $data['meta_des'] = $chuyenmuc['meta_des'];
        $data['meta_key'] = $chuyenmuc['name'];
        $data['meta_img'] = $chuyenmuc['image'];
        $data['index'] = 1;
        $data['list_css'] = [
            'chuyenmuc_blog.css',
        ];
        $this->load->view('index', $data);
    }
    public function detail_blog($alias)
    {
        $data['page'] = $this->Madmin->query_sql("SELECT title,alias FROM blogs WHERE type = 1");
        $time = time();
        $blog = $this->Madmin->query_sql_row("SELECT blogs.*,category.name as name_cate,category.alias as alias_cate,category.image as img_cate FROM blogs INNER JOIN category ON category.id = blogs.chuyenmuc WHERE blogs.alias = '$alias' ");
        if ($blog != null) {
            if (!admin() && $blog['time_post'] > $time) {
                redirect('/');
            }
            $data['blog_same'] = $this->Madmin->query_sql("SELECT * FROM blogs WHERE time_post <= $time AND index_blog = 1 AND type = 0 AND chuyenmuc = {$blog['chuyenmuc']} AND id != {$blog['id']}  ORDER BY updated_at DESC LIMIT 3");
            $data['blog_new'] = $this->Madmin->query_sql("SELECT * FROM blogs WHERE time_post <= $time AND index_blog = 1 AND type = 0 AND  id != {$blog['id']}  ORDER BY id DESC LIMIT 6");
            $cate = $this->Madmin->query_sql_row("SELECT *  FROM category  WHERE id = {$blog['chuyenmuc']} ");
            $title_page = $cate['name'];
            if ($cate['parent'] > 0) {
                $cate_parent = $this->Madmin->query_sql_row("SELECT *  FROM category  WHERE id = {$cate['parent']} ");
                $title_page = $cate_parent['name'] . ' - ' . $cate['name'];
            }
            $data['breadcrumb'] = $title_page;
            $data['blog'] = $blog;
            $data['content'] = 'detail_blog';
            $data['list_js'] = [
                'detail_blog.js',
            ];
            $data['list_css'] = [
                'detail_blog.css',
            ];
            $data['meta_title'] = $blog['meta_title'];
            $data['meta_des'] = $blog['meta_des'];
            $data['meta_key'] = $blog['meta_key'];
            $data['meta_img'] = $blog['image'];
            $this->load->view('index', $data);
        } else {
            set_status_header(404);
            return $this->load->view('errors/html/error_404');
        }
    }
    public function bxh()
    {
        $data['page'] = $this->Madmin->query_sql("SELECT title,alias FROM blogs WHERE type = 1");
        if ($_SERVER['REQUEST_URI'] != '/bang-xep-hang/') {
            redirect('/bang-xep-hang/', 'location', 301);
        }
        $chuyenmuc = $this->Madmin->get_by(['alias' => 'bang-xep-hang'], 'category');
        $data['title_page'] = "Bảng xếp hạng";
        $data['meta_title'] = $chuyenmuc['meta_title'];
        $data['meta_des'] = $chuyenmuc['meta_des'];
        $data['meta_key'] = "Bảng xếp hạng";
        $data['canonical'] = base_url() . 'bang-xep-hang/';
        $data['content'] = 'blog/bxh';
        $data['list_js'] = [
            'bxh.js',
        ];
        $data['list_css'] = [
            'bxh.css',
        ];
        $data['index'] = 1;
        $this->load->view('index', $data);
    }
    // public function replace_blog()
    // {
    //     $blog =  $this->Madmin->get_list('', 'blogs');
    //     $search = [' white-space-collapse: preserve;', ' background-color: transparent;', 'font-size: 11pt;', 'font-family: Arial, sans-serif;', 'color: rgb(0, 0, 0);', 'font-variant-position: normal;', 'text-align: justify;', 'font-variant-position: normal;', 'font-variant-alternates: normal;', 'font-variant-east-asian: normal;', 'font-variant-numeric: normal;', 'vertical-align: baseline;', ' font-family: Arial;', 'white-space: pre-wrap;', 'line-height:1.7999999999999998;', 'margin-top:10pt;', 'margin-bottom:10pt;', 'text-align:center;', 'line-height: 1.8;', 'margin-top: 10pt;', 'margin-bottom: 10pt;', 'text-align:center', 'list-style-type: disc;', 'white-space: pre;', 'style=""'];
    //     $replace   = '';
    //     foreach ($blog as $val) {
    //         $result = str_replace($search, '', $val);
    //         $update = $this->Madmin->update(['id' => $val['id']], $result, 'blogs');
    //     }
    // }
}
