<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Order_model');
        $this->load->model('Country');
        
        parse_str($_SERVER['QUERY_STRING'], $_GET);
        
        $this->db->cache_off();
    }
	public function index()
	{
		$this->load->view('welcome_message');
	}
        
        function testing(){
            $this->load->view('welcome_message');
        }
        
        function login(){
            $this->load->model('Country');
            $data = $this->_get_tobe_login_template();
            $data['CountryDataArr'] = $this->Country->get_all1();
            $this->load->view('login', $data);
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */