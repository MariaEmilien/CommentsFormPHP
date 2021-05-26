<?php 
include "dataBaseConnection.php";

class CommentModel{

	//Función para consultar la base de datos
	static public function getComment(){

		//variable que almacena apertura de conexión a la base de datos
		$stmt = DatabaseConnection::connectDb()->prepare("SELECT id, comment FROM comments");

		$stmt->execute();

		return $stmt->fetchAll(PDO::FETCH_OBJ);

		$stmt->close();
		$stmt = null;

	}

	//Función para insertar los comentarios a la base de datos
	static public function addComment($comment){

		$stmt = DatabaseConnection::connectDb()->prepare("INSERT INTO comments (comment) values (:inputComment)");
		$stmt->bindParam(":inputComment", $comment, PDO::PARAM_STR); 

		if($stmt->execute()){
			return "Ok";
		}else{
			return "error";
		}

		$stmt->close();
		$stmt = null;

	}

}
?>