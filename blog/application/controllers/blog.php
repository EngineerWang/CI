<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Blog extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('blog_model');
		}
		public function index(){
			$result = $this->blog_model->get_articles();
			$arr['blog'] = $result;
			$this->load->view('index.php', $arr);
		}
		public function delete(){
			$blogid = $this->uri->segment(3);
			$result = $this->blog_model->del($blogid);
			if($result){
				redirect('blog/index');
			}
		}
		public function update(){
			$blogid = $this->uri->segment(3);
			$result = $this->blog_model->get_article($blogid);
			$arr['article'] = $result;
			$this->load->view('update.php', $arr);
		}
		public function do_update(){
			$blogid = $this->input->post('hid');
			$title = $this->input->post('title');
			$content = $this->input->post('content');
			$result = $this->blog_model->update($blogid, $title, $content);
			if($result){
				redirect('blog/index');
			}
		}
		public function add(){
			$this->load->view('add.php');
		}
		public function do_add(){
			$title = $this->input->post('title');
			$content = $this->input->post('content');
			$type = $this->input->post('type');
			foreach($type as $v){
				$str .= $v;
			}
			$str .= $this->input->post['others'];
			$result = $this->blog_model->add($title, $content, $str);
			if($result){
				redirect('blog/index');
			}
		}
		public function info($blogid){
			$blogid = $blogid?$blogid:$this->uri->segment(3);
			$result = $this->blog_model->go_info($blogid);
			$arr['article'] = $result;
			if($result){
				$this->load->view('info.php', $arr);
			}
		}
		public function go_type(){
			$arr['blogid'] = $this->uri->segment(3);
			$this->load->view('type.php', $arr);
		}
		public function change_type(){
			$blogid = $this->uri->segment(3);
			$type = $this->input->post('type');
			$rs = $this->blog_model->cha_type($blogid, $type);
			if($rs){
				$this->info($blogid);
			}
		}
	}
?>