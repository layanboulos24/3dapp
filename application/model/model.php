<?php
class Model {
		// Property declaration, in this case we are declaring a variable or handeler that points to the database connection, this will become a PDO object
		public $dbhandle;
	
		// Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
		public function __construct()
		{
			// Set up the database source name (DSN)
			$dsn = 'sqlite:./db/test1.db';
			
			// Then create a connection to a database with the PDO() function
			try {	
				// Change connection string for different databases, currently using SQLite
				$this->dbhandle = new PDO($dsn, 'user', 'password', array(
															PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
															PDO::ATTR_EMULATE_PREPARES => false,
															));
				// $this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				// echo 'Database connection created</br></br>';
			}
			catch (PDOEXception $e) {
				echo "I'm sorry. I'm afraid I can't connect to the database!";
				// Generate an error message if the connection fails
				print new Exception($e->getMessage());
			}
		}
		
		public function dbCreateTable()
		{
			try {
				$this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, x3dModelTitle TEXT, x3dCreationMethod TEXT, modelTitle TEXT, modelDescription TEXT)");
				return "Model_3D table is successfully created inside test1.db file";
			}
			catch (PD0EXception $e){
				print new Exception($e->getMessage());
			}
			$this->dbhandle = NULL;
		}
	
		public function dbInsertData()
		{
			try {
				$this->dbhandle->exec(
					"INSERT INTO Model_3D (x3dModelTitle, x3dCreationMethod, modelTitle, modelDescription) 
					VALUES (
						'X3D Coke Model',
						'This X3D model of the coke can has been created in Cinema4D, exported to VRML97 and converted, using the view3dscene, to X3D for display online.',
						'History of Coca Cola',
						'It was 1886, and in New York Harbour, workers were constructing the Statue of Liberty. Eight hundred miles away, another great American symbol was about to be unveiled. Like many people who change history, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, he carried it a few doors down to Jacobs Pharmacy. Here, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special. So Jacobs Pharmacy put it on sale for five cents (about 3p) a glass.'
					); " .
					
					"INSERT INTO Model_3D (x3dModelTitle, x3dCreationMethod, modelTitle, modelDescription) 
					VALUES (
						'X3D Fanta Model', 
						'This X3D model of the Fanta glass bottle has been created in Cinema4D, exported to VRML97 and converted, using the view3dscene, to X3D for display online.', 
						'History of Fanta',
						'Fanta was created by the Coca-Cola Company during World War II when it couldnt import Coca-Cola syrup into Nazi Germany due to trade restrictions. The German Coca-Cola team came up with a new soda using available ingredients, including leftovers from fruit processing, and called it Fanta. After the war, Fanta production continued, evolving into various flavors and becoming a global brand under Coca-Cola. Today, its one of the most popular soft drinks worldwide.'
					); " .

					"INSERT INTO Model_3D (x3dModelTitle, x3dCreationMethod, modelTitle, modelDescription) 
					VALUES (
						'X3D Costa', 
						'This X3D model of the Costa Coffee take away bottle has been created in Cinema4D, exported to VRML97 and converted, using the view3dscene, to X3D for display online.', 
						'History of Costa Coffee',
						'Costa Coffee was founded in London in 1971 by Italian brothers Sergio and Bruno Costa. Originally, they operated as a wholesale operation supplying roasted coffee to caterers and specialty shops. In 1978, they opened their first café in Vauxhall Bridge Road, London. Over the years, Costa expanded its café chain across the UK and internationally. In 1995, Costa was acquired by Whitbread PLC, which helped accelerate its growth. Costa Coffee became one of the largest coffee shop chains globally before being acquired by The Coca-Cola Company in 2019'
					);"
				);

				return "X3D model data inserted successfully inside test1.db";
			} catch (PDOException $e) {
				return "Error inserting data: " . $e->getMessage();
			}
			$this->dbhandle = NULL;
		}


		public function dbGetData(){
			try{
				// Prepare a statement to get all records from the Model_3D table
				$sql = 'SELECT * FROM Model_3D';
				// Use PDO query() to query the database with the prepared SQL statement
				$stmt = $this->dbhandle->query($sql);
				// Set up an array to return the results to the view
				$result = null;
				// Set up a variable to index each row of the array
				$i=-0;
				// Use PDO fetch() to retrieve the results from the database using a while loop
				// Use a while loop to loop through the rows	
				while ($data = $stmt->fetch()) {
					// Don't worry about this, it's just a simple test to check we can output a value from the database in a while loop
					// echo '</br>' . $data['x3dModelTitle'];
					// Write the database conetnts to the results array for sending back to the view
					$result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
					$result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
					$result[$i]['modelTitle'] = $data['modelTitle'];
					$result[$i]['modelDescription'] = $data['modelDescription'];
					//increment the row index
					$i++;
				}
			}
			catch (PD0EXception $e) {
				print new Exception($e->getMessage());
			}
			// Close the database connection
			$this->dbhandle = NULL;
			// Send the response back to the view
			return $result;
		}
		
	//Method to simulate the model data
	public function model3D_info()
	{
		// Simulate the model's data
		return array(
			'model_1' => 'Coke Can 3D Image 1',
			'image3D_1' => 'can_texture',

			'model_2' => 'Coke Can 3D Image 2',
			'image3D_2' => 'coca_cola',

			'model_3' => 'Fanta Bottle 3D Image 1',
			'image3D_3' => 'fanta_image',

			'model_4' => 'Fanta Bottle 3D Image 2',
			'image3D_4' => 'fanta',

			'model_5' => 'Costa Cup 3D Image 1',
			'image3D_5' => 'costa_logo',

			'model_6' => 'Dr Pepper Cup 3D Image 2',
			'image3D_6' => 'costa'
		);
	}

	public function home_images()
	{
		return array(
			'image_1' => 'coke_brands',
		);
	}

	public function getData(){
		return [
			'coke' => $this->getCokeData(),
			'fanta' => $this->getFantaData(),
			'costa' => $this->getCostaData(),
		];
	}

	private function getCokeData() {
		try {
			// Set up the database source name (DSN)
			$dsn = 'sqlite:/3dapp/db/test1.db';
			
			// Create a new PDO instance for database connection
			$dbhandle = new PDO($dsn, 'user', 'password', array(
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_EMULATE_PREPARES => false,
			));
			
			// Prepare a SQL query to retrieve data for Coke
			$stmt = $dbhandle->prepare("SELECT * FROM Model_3D WHERE x3dModelTitle = 'X3D Coke Model'");
			
			// Execute the query
			$stmt->execute();
			
			// Fetch the result as an associative array
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
			var_dump($result);
			
			// Close the database connection
			$dbhandle = null;
			
			// Return the retrieved data
			
			return $result;
		} catch (PDOException $e) {
			print new Exception($e->getMessage());
			return null;
		}
	}

	private function getFantaData() {
		try {
			// Set up the database source name (DSN)
			$dsn = 'sqlite:./db/test1.db';
			
			// Create a new PDO instance for database connection
			$dbhandle = new PDO($dsn, 'user', 'password', array(
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_EMULATE_PREPARES => false,
			));
			
			// Prepare a SQL query to retrieve data for Coke
			$stmt = $dbhandle->prepare("SELECT * FROM Model_3D WHERE x3dModelTitle = 'X3D Fanta Model'");
			
			// Execute the query
			$stmt->execute();
			
			// Fetch the result as an associative array
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
			
			// Close the database connection
			$dbhandle = null;
			
			// Return the retrieved data
			return $result;
		} catch (PDOException $e) {
			// Handle any exceptions
			// You might want to log the error or return an error message
			return null;
		}

	}

	private function getCostaData() {
		try {
			// Set up the database source name (DSN)
			$dsn = 'sqlite:./db/test1.db';
			
			// Create a new PDO instance for database connection
			$dbhandle = new PDO($dsn, 'user', 'password', array(
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_EMULATE_PREPARES => false,
			));
			
			// Prepare a SQL query to retrieve data for Coke
			$stmt = $dbhandle->prepare("SELECT * FROM Model_3D WHERE x3dModelTitle = 'X3D Costa Model'");
			
			// Execute the query
			$stmt->execute();
			
			// Fetch the result as an associative array
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
			
			// Close the database connection
			$dbhandle = null;
			
			// Return the retrieved data
			return $result;
		} catch (PDOException $e) {
			// Handle any exceptions
			// You might want to log the error or return an error message
			return null;
		}
	}
}

?>