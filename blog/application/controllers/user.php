<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class User extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('user_model');
		}
		public function index(){
			
		}
		public function login(){
			$this->load->view('login.php');
		}
		public function do_login(){
			$name = $this->input->post('username');
			$pass = $this->input->post('pass');
			$result = $this->user_model->verify_login($name, $pass);
			if($result){
				$arr = array(
					'id'=>$result->userid,
					'username'=>$result->name
				);
				$this->session->set_userdata($arr);
				redirect('blog/index');
			}else{
				redirect('user/login');
			}
		}
		public function reg(){
			$this->load->view('reg.php');
		}
		public function do_reg(){
			$name = $this->input->post('username');
			$pass = $this->input->post('pass');
			$result = $this->user_model->insert($name, $pass);
			if($result){
				//echo "<script>alert('注册成功!')</script>";
				redirect('user/login');
			}else{
				//echo "<script>alert('注册成功!')</script>";
				redirect('user/reg');
			}
		}
	}
?>