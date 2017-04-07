<?PHP
class c_home extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');

		if($this->session->has_userdata('UNAME') && $this->session->has_userdata('PWORD'))
			redirect('profile','refresh');
	}

	public function index(){
		redirect('c_home/start','refresh');
	}



	public function start(){
		$this->load->view('home');

	}


}

?>