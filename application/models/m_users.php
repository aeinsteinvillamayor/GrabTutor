<?PHP
class m_users extends CI_Model{
	
	function __construct(){
		parent::__construct();

	}

	public function m_verify($uname, $pword){
		$sql = "SELECT u_name, p_word
				FROM users
				WHERE u_name = '" . $uname . "' and '" 
				. $pword . "' = p_word;";

		return $this->db->query($sql);
	}


	public function m_get_profile($uname){
		$sql = "SELECT *
				FROM users
				WHERE u_name = '" . $uname . "'";

		return $this->db->query($sql);
	}

	public function m_update_profile($username, $email, $course, $mobile_no, $birthday){
		$this->db->where('u_name', $username);
		$this->db->update('users', array('e_add' => $email, 'cor_id' => $course, 'phone_num' => $mobile_no, 'b_day' => $birthday));
	}

	public function m_add($data){

		return $this->db->insert('users',$data);
	}




}

?>