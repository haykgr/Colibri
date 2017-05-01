<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//comment
class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function home()
	{
		if(!empty($this->input->post('login')) && !empty($this->input->post('password')))
		{
			$send = $this->input->post('submit');
			if($send)
			{
				$login = $this->input->post('login');
				$password = $this->input->post('password');
/*				if(!$this->user_model->login_allow($login, $password))
				{
					$data['error'] = "Wrong login or password";
					$this->load->view('index', $data);
				}*/		
				$data['id'] = 1; // minchev bazayic stanal@
				$data['login'] = $login; // 'Welcome user'-i hamar	
			}
		}
		$this->load->view('home');
	}
	public function link()
	{
		$link = $this->input->post('link');
		$this->user_model->link($link);
		$data['links'] = $this->user_model->link_collect();
		$this->load->view('home');
	}
}