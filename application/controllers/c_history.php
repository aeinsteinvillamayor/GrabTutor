<?php

class c_history extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $this->load->helper('url');

        if(!($this->session->has_userdata('UNAME') && $this->session->has_userdata('PWORD')))
            redirect('c_login', 'refresh');
    }

	public function index(){
		redirect('c_history/start');
	}

	public function start(){
		$this->load->view('history');
	}

	public function retrieveHistory () {
        $this->load->model('m_history');

        $username = $this->input->get('username');

        $history = $this->m_history->m_getHistory($username)->result();

        $result = array(
            'history' => $history
        );

        echo json_encode($result);
    }

    public function retrieveHistoryYearFilter () {
        $this->load->model('m_history');

        $username = $this->input->get('username');
        $year = $this->input->get('year');

        $history = $this->m_history->m_getHisByYear($username, $year)->result();

        $result = array(
            'history' => $history
        );

        echo json_encode($result);
    }
}
?>