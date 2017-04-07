<?PHP
class c_register extends CI_Controller{
	function __construct(){
		parent::__construct();

		$this->load->helper('url');

		if($this->session->has_userdata('UNAME') && $this->session->has_userdata('PWORD'))
		redirect('profile', 'refresh');

	}


	public function index(){
		redirect('c_register/start');
	}

	public function start(){
		$this->load->view('register');

	}

	public function register(){

		$this->load->model('m_users');

		$DATA_In = array(
			'u_name' => $this->input->post('UNAME'),
			'id_no' => $this->input->post('IDNO'), 
			'e_add' => $this->input->post('EMADD'),
			'p_word' => $this->input->post('PNAME'),
			'cor_id' => $this->input->post('CODEG'),
			'f_name' => $this->input->post('FNAME'),
			'l_name' => $this->input->post('LNAME'),
			'b_day' => $this->input->post('BDAY'),
			);

		if($this->input->post('PHONENO') != null){
			$DATA_In['phone_num'] = $this->input->post('PHONENO');
		}		

		if($this->m_users->m_add($DATA_In)){
			redirect('c_register/login','reload');
		}else{
			$GLOBALS['error'] = "Registration Failed";
			$this->load->view('register', $DATA_In);
		}
		
	}


}

?>