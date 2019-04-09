<?php

	class Sql extends PDO
	{
		private $conn;
		
		// Função para criar coneção com banco de dados
		public function __construct()
		{
			echo "---------- function __construct<br><br>";

			$db = "mysql:dbname=dbphp7;host=localhost";
			$root = "root";
			$pass = "";
			$this->conn = new PDO($db, $root, $pass);
		}

		public function select($rawQuery, $params = array()):array
		{
			echo "---------- function select<br><br>";
			echo "rawQuery ---> ".$rawQuery."<br>";
			echo "params ---> "; var_dump($params); echo "<br><br>";

			$stmt = $this->query($rawQuery, $params);
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		public function query($rawQuery, $params = array())
		{
			echo "---------- function query<br><br>";
			echo "rawQuery ---> ".$rawQuery."<br>";
			echo "params ---> "; var_dump($params); echo "<br><br>";

			$stmt = $this->conn->prepare($rawQuery);

			//$this->setParams($stmt, $params); ????? APARENTEMENTE NÃO SERVE PARA NADA ?????
			
			$stmt->execute();
			return $stmt;
		}

		/* ????? APARENTEMENTE NÃO SERVE PARA NADA ?????

		private function setParams($statment, $parameters = array())
		{
			echo "---------- function setParams<br><br>";
			echo "statment ---> "; var_dump($statment); echo "<br>";
			echo "parameters ---> "; var_dump($parameters); echo "<br><br>";

			foreach ($parameters as $key => $value) 
			{
 
	 			echo "key ---> ".$key."<br>";
				echo "value ---> ".$value."<br>";

				$this->setParam($key, $value);
			}
		}

		private function setParam($statment, $key, $value)
		{
			echo "---------- function setParam<br><br>";
			echo "statment ---> ".$statment."<br>";
			echo "key ---> ".$key."<br>";
			echo "value ---> ".$value."<br>";

			$statment->bindParam($key, $value);
		}
		*/

	}
?>