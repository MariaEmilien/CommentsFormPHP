<?php
include "commentModel.php";

class CommentController{

	public $comment;

	public function getComments(){

	//Instanciando la función getComment del Modelo para obtener comentarios
		$response = CommentModel::getComment();

		echo json_encode($response);
	}

	public function newComment(){

	//Instanciando la función addComent del Modelo que agrega nuevo comentario
		$response = CommentModel::addComment($this->comment);

		return $response;
	}

}

//Instanciando un nuevo objeto de tipo commentController para agregar un nuevo comentario
if(isset($_POST["comment"])){
	$commentObject = new CommentController();
	$commentObject->comment = $_POST["comment"];
	echo json_encode($commentObject->newComment());
}else{
	$commentObject = new CommentController();
	$commentObject = $commentObject->getComments();
}

?>