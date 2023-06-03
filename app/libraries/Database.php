<?php
	/**
	 * PDO Database Class
	 * Connect to Database
	 * Create prepared statements
	 * Bind values
	 * Return rows and results
	 */
	class Database {
		private $host = DB_HOST;
		private $user = DB_USER;
		private $pass = DB_PASS;
		private $dbname = DB_NAME;

		private $dbh;
		private $sth;
		private $error;

		public function __construct()
		{
			// Set DSN
			$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
			$options = array(
				PDO::ATTR_PERSISTENT => true,
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
			);

			// Create PDO instance
			try {
				$this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
			} catch(PDOException $e) {
				$this->error = $e->getMessage();
				echo $this->error;
			}
		}

		// Prepare statements with query
		public function query($sql)
		{
			$this->sth = $this->dbh->prepare($sql);
		}

		public function bind($param, $value, $type = null)
		{
			if ( is_null( $type ) ) {
				switch ($value) {
					case is_int($value):
						$type = PDO::PARAM_INT;
						break;

					case is_bool($value):
						$type = PDO::PARAM_BOOL;
						break;

					case is_null($value):
						$type = PDO::PARAM_NULL;
						break;

					default:
						$type = PDO::PARAM_STR;
						break;
				}
			}

			$this->sth->bindValue($param, $value, $type);
		}
		
		// Execute the prepare statement
		public function execute()
		{
			return $this->sth->execute();
		}
			
		// Get result set as array of objects
		public function resultSet()
		{
			$this->execute();
			return $this->sth->fetchAll(PDO::FETCH_OBJ);
		}

		// Get single record as object
		public function single()
		{
			$this->execute();
			return $this->sth->fetch(PDO::FETCH_OBJ);
		}

		// Get row count
		public function rowCount()
		{
			return $this->sth->rowCount();
		}
			
			
			
	}