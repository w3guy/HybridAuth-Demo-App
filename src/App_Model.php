<?php
namespace Model;


class App_Model {

	/** @var object Database connection */
	private $conn;

	/**
	 * Instantiate the model class.
	 * @param $db_connection object DB connection
	 */
	public function __construct($db_connection) {

		$this->conn = $db_connection;
	}

	/**
	 * Check if an HybridAuth identifier already exist in DB
	 *
	 * @param $identifier
	 *
	 * @return bool
	 */
	public function identifier_exist( $identifier ) {
		try {
			$sql    = 'SELECT identifier FROM users';
			$query  = $this->conn->query( $sql );
			$result = $query->fetchAll(\PDO::FETCH_COLUMN, 0);

			return in_array( $identifier, $result );
		}

		catch (\PDOException $e){

			die($e->getMessage());
		}

	}

	public function register_user($identifier, $email, $first_name, $last_name, $avatar_url) {

		try {
			$sql = "INSERT INTO users (identifier, email, first_name, last_name, avatar_url) VALUES (:identifier, :email, :first_name, :last_name, :avatar_url)";

			$query = $this->conn->prepare( $sql );
			$query->bindValue( ':identifier', $identifier );
			$query->bindValue( ':email', $email );
			$query->bindValue( ':first_name', $first_name );
			$query->bindValue( ':last_name', $last_name );
			$query->bindValue( ':avatar_url', $avatar_url );

			return $query->execute();
		}

		catch (\PDOException $e) {
			return $e->getMessage();
		}
	}

	public function login_user($identifier) {
		\Hybrid_Auth::storage()->set('user', $identifier);
	}

	public function logout_user() {
		\Hybrid_Auth::storage()->set('user', null);
	}

	public function getFirstName($identifier) {
		if(!isset($identifier) ) return;
		$query = $this->conn->query("SELECT first_name FROM users WHERE identifier = $identifier");
		$result = $query->fetch(\PDO::FETCH_NUM);
		return $result[0];
	}

	public function getLastName($identifier) {
		if(!isset($identifier) ) return;
		$query = $this->conn->query("SELECT last_name FROM users WHERE identifier = $identifier");
		$result = $query->fetch(\PDO::FETCH_NUM);
		return $result[0];
	}

	public function getEmail($identifier) {
		if(!isset($identifier) ) return;
		$query = $this->conn->query("SELECT email FROM users WHERE identifier = $identifier");
		$result = $query->fetch(\PDO::FETCH_NUM);
		return $result[0];
	}

	public function getAvatarUrl($identifier) {
		if(!isset($identifier) ) return;
		$query = $this->conn->query("SELECT avatar_url FROM users WHERE identifier = $identifier");
		$result = $query->fetch(\PDO::FETCH_NUM);
		return $result[0];
	}

}