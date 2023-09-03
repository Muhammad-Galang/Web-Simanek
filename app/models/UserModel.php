<?php
/**
 * 
 */
class UserModel {

	private $table = 'tbl_user';
	private $db;

	public function __construct()
	{
		$this->db = new Database();
	}

	public function getAllUser()
	{
		$this->db->query('SELECT * FROM' . $this->table);
		return $this->db->resultSet();
	}
}