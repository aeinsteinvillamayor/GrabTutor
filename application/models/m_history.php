<?php

class m_history extends CI_Model{
	function __construct(){
		parent::__construct();
	}

    public function m_getHistory($u_name){
        $sql = "SELECT sub_name, tutor_name, tutee_name, date_start, date_end
              FROM (SELECT concat(f_name, ' ', l_name) as tutee_name, usub_id, date_start, date_end, u_name as tutee_uname
					FROM tutoring NATURAL JOIN users) t NATURAL JOIN
                    (SELECT usub_id, tutor_name, sub_name, u_name as tutor_uname
                     FROM (SELECT concat(f_name, ' ', l_name) as tutor_name, usub_id, sub_id, u_name
                          FROM user_subject NATURAL JOIN users) u NATURAL JOIN subjects) su
				WHERE '" . $u_name . "' = tutee_uname OR '" . $u_name . "' = tutor_uname
              Order by t.usub_id;";

              return $this->db->query($sql);
    }

    public function m_getHisByYear($u_name, $year){
        $sql = "SELECT sub_name, tutor_name, tutee_name, date_start, date_end
              FROM (SELECT concat(f_name, ' ', l_name) as tutee_name, usub_id, date_start, date_end, u_name as tutee_uname
					FROM tutoring NATURAL JOIN users) t NATURAL JOIN
                    (SELECT usub_id, tutor_name, sub_name, u_name as tutor_uname
                     FROM (SELECT concat(f_name, ' ', l_name) as tutor_name, usub_id, sub_id, u_name
                          FROM user_subject NATURAL JOIN users) u NATURAL JOIN subjects) su
				WHERE (tutee_uname = '" . $u_name . "' OR tutor_uname = '" . $u_name . "') AND
						year(date_end) = year('" . $year . "-1-1')
              Order by t.usub_id;";

              return $this->db->query($sql);
    }
}

?>