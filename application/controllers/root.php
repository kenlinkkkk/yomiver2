<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Root extends MX_Controller {

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
	 * map to /index.php/welcome/
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
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
			$html = modules::run('admin_mod');
		else
			$html = modules::run('front_mod');
		
		$this->output->set_output($html);
		
	}
	
	
	
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
?>