<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Home extends MY_Controller {

        
	public function index()
	{
		//$this->load->model('User_model');
		//$data['servicios']=$this->User_model->get_services();
		$this->render('home','default');
	}
}
