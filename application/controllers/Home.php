<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {

	public function index()
	{    
		$this->load->view('index');
	}
	
	public function redirect()
	{
	  redirect(base_url(''));
	}
	public function Experience()
	{
		return $this->load->view('experience',true);
	}
}