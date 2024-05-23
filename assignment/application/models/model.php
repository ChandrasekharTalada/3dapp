<?php
class Model {
	public $dbhandle;
	
	public function __construct()
	{
		$dsn = 'sqlite:./db/Mobile3D.db';
		
		try {	
			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    													PDO::ATTR_EMULATE_PREPARES => false,
														));
		}
		catch (PDOEXception $e) {
			echo "I'm sorry. I'm afraid I can't connect to the database!";
        	print new Exception($e->getMessage());
    	}
	}
	public function dbDeleteTable(){
		try {
			$this->dbhandle->exec('DROP TABLE IF EXISTS "Mobile3DContent"');
			return "Model_3D table is successfully created inside test1.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE Mobile3DContent (Id INTEGER PRIMARY KEY, item TEXT, title TEXT, subtitle TEXT, description TEXT)");
			return "Model_3D table is successfully created inside test1.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}

	public function dbInsertData()
	{
		$sql = "INSERT INTO Mobile3DContent (Id, item, title, subtitle, description) VALUES (?, ?, ?, ?,?)";
		$stmt = $this->dbhandle->prepare($sql);

		$data = [
			[1, NULL, 'Coca Cola', 'New York Harbour, 1886', 'Coca-Cola, or Coke, is a carbonated soft drink manufactured by the Coca-Cola Company.'],
			[2, NULL, 'Sprite', 'West Germany, 1959', 'Sprite is a clear, lemon-lime flavored soft drink created by the Coca-Cola Company.'],
			[3, NULL, 'Dr Pepper', 'Dr Pepper is a carbonated soft drink created in the 1880s by pharmacist Charles Alderton.'],
			[4, 'Coca Cola X3D Model', NULL, NULL,'This 3D model of the coke can is created in 3ds Max and exported to VRML97 and converted to X3D using View3Dscene application for display online.'],
			[5, 'Sprite 3D Model', NULL, NULL,'This 3D model of the sprite bottle is created in 3ds Max and exported to VRML97 and converted to X3D using view3Dscene application for display online.'],
			[6, 'Dr Pepper 3D Model', NULL,NULL,'This 3D model of the dr pepper has been created in 3ds Max, exported to VRML97 and converted to X3D using view3Dscene application for display online.'],
			
		];

		try {
			foreach ($data as $row) {
				$stmt->execute($row);
			}
			echo "Data inserted successfully!";
		} catch (PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
		$this->dbhandle = NULL;
	}
	public function dbGetData(){
		try {
			$sql = 'SELECT * FROM Mobile3DContent';
			$stmt = $this->dbhandle->query($sql);
			$result = [];
			$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
						
			return $result;
		} catch (PDOException $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
		return [];
		
	}
}
?>