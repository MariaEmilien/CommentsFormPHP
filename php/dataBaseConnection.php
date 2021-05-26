<?php

class DataBaseConnection{

	public function connectDB(){
	//Variables de servido de la base de datos


	//Variable de conexión a la base de datos
	$conn = new PDO("mysql:host=127.0.0.1:3306; dbname=comment_db", 
					"admin1234",
					"admin1234",
	 				array(PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION,
	 				     PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	 			);
	//retorno de conexión a la base de datos
	return $conn;

	}

}

?>


