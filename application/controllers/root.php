<?php
/**
 * Created by PhpStorm.
 * User: thanh
 * Date: 05/10/2019
 * Time: 02:44 PM
 */

class Root extends MX_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
		$this->load->library('cart');


	}
	function _remap()
	{
		$html = '';
		if($this->uri->segment(1) == 'admin')
			$html = modules::run('AdminController');
		else
			$html = modules::run('FrontController');

		$this->output->set_output($html);

	}
}
