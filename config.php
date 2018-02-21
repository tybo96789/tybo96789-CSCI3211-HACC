<?php
	class Query
	{
		private static $DB_SERVER = "localhost";
		//private static $DB_USERNAME = "runpingc"; //please create generic username.
		//private static $DB_PASSWORD = "2017Access!";
		private static $DB_USERNAME = "WEBUSER";
		private static $DB_PASSWORD = "hKdnU9rxDoxP4E!";
		private static $DB_DATA = 'Testing2.0';

		public function __construct(){
		}
		
		public static function run($cmd)
		{
			$conn = new PDO("mysql:host=". self::$DB_SERVER .";dbname=". self::$DB_DATA, self::$DB_USERNAME, self::$DB_PASSWORD);

			$result = $conn->query($cmd);
			
			return $result; 
		}

		/*not quite working yet... */
		/*is Admin Returns -1 (sql server not connect/ bad request), 0 (nt admin), or 1+ (if an admin)*/
		public static function isAdmin($adminID){
			$stmt = "SELECT COUNT(AdminID) AS AdminCount FROM admin WHERE AdminID =" . $adminID;
			// echo $stmt;

			$result = self::run($stmt);
			print_r($result);
			
			if($result){
				echo $result[0]['AdminCount'];
				return $result[0]['AdminCount'];
			}else{
				return -1;
			}
		}
	}
?>
