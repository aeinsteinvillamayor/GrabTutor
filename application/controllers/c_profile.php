<?php

class c_profile extends CI_Controller{

    function __construct()
    {
        parent::__construct();

        $this->load->helper('url');

        //if($this->session->has_userdata('UNAME') && $this->session->has_userdata('PWORD'))
		//redirect('c_profile', 'refresh');
	}

    public function index(){
		redirect('c_profile/start');
	}

	public function start(){

		$this->load->model('m_users');

		$username = $this->session->userdata('UNAME');

		$data['user'] = $this->m_users->m_get_profile($username)->row();

		$this->load->view('profile', $data);

	}

	public function update_credential(){
		$this->load->model('m_users');

		$email = $this->input->get('email');
		$course = $this->input->get('course');
		$mobile_no = $this->input->get('mobile_no');
		$birthday = $this->input->get('birthday');

		$username = $this->session->userdata('UNAME');

		$this->m_users->m_update_profile($username, $email, $course, $mobile_no, $birthday);
	}

/*actspot- yung current na page na vineview*/
/*copy paste lng si actspot sa css na gusto mong iedit*/
/*sa h_light class, 
/*yung content, ilagay sa rwind */
/*icopy paste lng lagi si base.html*/

}

?>