<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct() {
		parent::__construct();
		$this->data = array();
		$this->load->model('Model_user');
		$this->data['breakast_restaurants'] = $this->Model_user->getBreakfastResturants();
		$this->data['lunch_restaurants'] = $this->Model_user->getBreakfastResturants();
		$this->data['dinner_restaurants'] = $this->Model_user->getBreakfastResturants();
		
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function registration()
	{
		$this->load->view('registration');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function aboutus()
	{
		$this->load->view('outlets');
	}

	public function restaurant()
	{
		$this->load->view('restaurant');
	}

	public function customerReg()
	{
		$this->load->view('customerReg');
	}

	public function restReg()
	{
		$this->load->view('restReg');
	}
	public function chinese()
	{
		$this->load->view('business/chinese');
	}
	public function tfc()
	{
		$this->load->view('business/tfc');
	}
	public function mango()
	{
		$this->load->view('business/mangomango');
	}
	public function mamas()
	{
		$this->load->view('business/mamas');
	}
	public function mcrypt_module_self_test()
	{
		$this->load->view('business/mamas');
	}


	public function browse($time){
		$this->load->model('Model_user');

		if($time == "breakfast"){
			$this->data['restaurants'] = $this->Model_user->getBreakfastResturants();
		}
		elseif($time == "lunch"){
			$this->data['restaurants'] = $this->Model_user->getLunchResturants();
		}
		elseif($time == "dinner"){
			$this->data['restaurants'] = $this->Model_user->getDinnerResturants();
		}


		$this->load->view('browse',$this->data);
	}

	public function map(){

		$this->load->view('browse',$this->data);
	}

	



}
