//$(document).ready(function(){

	function loadComments(){
		console.log("something is happen");
		$.ajax({
			type: "GET",
			url: "./php/commentController.php",
			dataType: "json",
			success:function(data){
				console.log(data);
				if(data){
					$.each(data, function(index,row){
						addRow(row.comment);
						
					});

				}
			}
		});

	}

	function sendComment(){
		var comment = $('#comment').val();
		if(comment != ''){
			$.ajax({ 
				data: {comment},
				type: "POST",
				url:"./php/commentController.php",
				dataType: "json",
				success: function(response){
					console.log(response);
					if(respuesta == "Ok"){
						addRow(comment);
						$('#comment').val('');
					}
				}
			});
		}else{
			$('#comment').focus();
		}	
	}

	function addRow(data){

		if(data){
			var row ="<tr padding:15px ><th align=left>" + data + "</th></tr>";
			$('#table').append(row);
		}

	}

//});