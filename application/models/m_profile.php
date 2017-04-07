<?PHP
class m_users extends CI_Model{
	
	function __construct(){
		parent::__construct();

	}

	public function m_get_credentials($username, $password){
		$sql = "SELECT concat(f_name, ' ', l_name) as 'name', u_name, id_no, e_add, u_name, cor_id, phone_num, b_day 
				FROM users
				WHERE u_name = '"$username"' and p_word = '"$password"' ";
		return $sql->result();
		//return $this->db->query("sql");
	}

	public function m_update_credentials($username, $password){

	}
}

?>