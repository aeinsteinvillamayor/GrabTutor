<?PHP
class c_login extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){

		if($this->session->has_userdata('UNAME') && $this->session->has_userdata('PWORD'))
		redirect('profile', 'refresh');


		redirect('c_login\start','refresh');
	}

	public function start(){
		$this->load->view('login');
	}

	public function logout(){ 	
		$this->session->unset_userdata('UNAME');
		$this->session->unset_userdata('PWORD');

		redirect('c_login/start', 'refresh');
	}


	public function validate(){
		$this->load->model('m_users');

		$query = $this->m_users->m_verify($this->input->post('UNAME'), $this->input->post('PNAME'));
		
		$row = $query->row();

		if(isset($row)){

			$this->session->set_userdata('UNAME',$row->u_name);

			$this->session->set_userdata('PWORD',$row->p_word);

			redirect('profile','refresh');



		}else{
			$GLOBALS['err'] = "Invalid Username or Password!";
			$this->load->view('login');

		}


	}


}





?>