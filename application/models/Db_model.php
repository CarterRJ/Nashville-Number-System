<?php
class Db_model extends CI_Model {
	public $title;
	public $content;
	public $date;
	public function __construct() {
		// Call the CI_Model constructor
		parent::__construct ();
	}
	public function go() {
		$query = $this->db->get ( $table = "users" );
		return $query->result_array ();
	}
	public function new_table($array = null) {
		if ($array ['table_name'] != "") {
			$sql = "CREATE TABLE `" . $array ['table_name'] . "` (ID INTEGER AUTO_INCREMENT, ";
			foreach ( $array ['columns'] as $key ) {
				$sql .= "`" . $key ['colName'] . "` " . $key ['data-type'] . ", ";
			}
			$sql .= " PRIMARY KEY (ID)";
			$sql .= ");";
			echo $sql;
			$this->db->escape ( $sql );
			$query = $this->db->query ( $sql );
		}
	}
	public function insert_entry() {
		$this->title = $this->input->post ( 'title' ); // please read the below note
		$this->content = $_POST ['content'];
		$this->date = time ();
		
		$this->db->insert ( 'entries', $this );
	}
	public function update_entry() {
		$this->title = $_POST ['title'];
		$this->content = $_POST ['content'];
		$this->date = time ();
		
		$this->db->update ( 'entries', $this, array (
				'id' => $_POST ['id'] 
		) );
	}
}
?>