<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Amp extends CI_Controller
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
    public function detail_blog($alias)
    {
        $data['page'] = $this->Madmin->query_sql("SELECT title,alias FROM blogs WHERE type = 1");
        $time = time();
        $blog = $this->Madmin->query_sql_row("SELECT blogs.*,category.name as name_cate,category.alias as alias_cate,category.image as img_cate FROM blogs INNER JOIN category ON category.id = blogs.chuyenmuc WHERE type = 0 AND index_blog =1 AND time_post<= $time AND blogs.alias = '$alias' ");
        $alias = trim($alias);
        $alias_new = strtolower($alias);
        if ($blog != null && $blog['id'] > 1024) {
            if ($alias != $alias_new || $_SERVER['REQUEST_URI'] !=  '/amp/' . $alias) {
                redirect('/amp/' . $alias_new, 'location', 301);
            }
            $data['canonical'] = base_url(). $alias;
            $data['canonical_amp'] = base_url() .'amp/'. $alias;
        } else {
            if ($alias != $alias_new) {
                redirect('/amp/' . $alias_new . '/', 'location', 301);
            }
            $data['canonical'] = base_url(). $alias . '/';
            $data['canonical_amp'] = base_url() .'amp/'. $alias . '/';
        }
        if ($blog != null) {
            if ($blog['id'] > 1024 && $_SERVER['REQUEST_URI'] != '/amp/' . $alias) {
                redirect('/amp/' . $alias, 'location', 301);
            } else if ($blog['id'] <= 1024 && $_SERVER['REQUEST_URI'] != '/amp/' . $alias . '/') {
                redirect('/amp/' . $alias . '/', 'location', 301);
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
            $data['meta_title'] = $blog['meta_title'];
            $data['meta_des'] = $blog['meta_des'];
            $data['meta_key'] = $blog['meta_key'];
            $data['meta_img'] = $blog['image'];
            if ($blog['id'] != 789) {
                $data['index'] = 1;
            }
            return $this->load->view('amp/amp_blog.php', $data);
        } else {
            set_status_header(404);
            return $this->load->view('errors/html/error_404');
        }
    }
}
