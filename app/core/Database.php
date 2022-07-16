<?php 

class Database{
	// konek database menggunakan PDO( phpdataobject )
	// dbh = database heandler
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $db_name = DB_NAME;

	private $dbh; 
	private $stmt;

	public function __construct(){
		// datasourcename
		// konekdatabase
		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;
		
		$option = [
			PDO::ATTR_PERSISTENT => true, //agar koneksi terjaga trus 
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION //untuk masuk ke option
		];

		try{
		// cek koneksi berhasil atau tidak
		$this->dbh = new PDO( $dsn, $this->user, $this->pass , $option);
		}catch(PDOException $e){
		// jika terjadi eror pada database
		die($e->getMessage());
		}
	}

	public function query($query)//dibuat generik agar bisa dipakai secar flexibel (select, update, delete)
	{
		$this->stmt = $this->dbh->prepare($query);
	}

	public function bind($param, $value, $type = null)
	{
		// pengecekan
		if ( is_null ($type) )
		{
			switch ( true ){
				case is_int($value) :
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value) :
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value) :
					$type = PDO::PARAM_NULL;
					break;
				default :
					$type = PDO::PARAM_STR;
			}
		}

		$this->stmt->bindValue($param, $value, $type );
	}
	public function execute()
	{
		$this->stmt->execute();
	}
	// ambil smua data yang ada didatabase
	public function resultSet()
	{
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	public function singel()
	{
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}
	public function rowCount()
	{
		return $this->stmt->rowCount();
	}
}