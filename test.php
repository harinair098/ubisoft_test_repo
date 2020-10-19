<!DOCTYPE html>
<html>
<head>
	<title>asas</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	
</head>
<body>
	<div class="container">
		<h1 class="text-center"> Window Registration Form </h1>
		<div class="col-md-6" style="margin: auto">
		<form id="myform" action="insert.php" method="post">
			<div class="form-group">
				<label>title:</label>
				<input type="text" name="title" id="title" class="form-control" placeholder="enter title..">
			</div>
			<div class="form-group">
				<label>description:</label>
				<input type="text" id="description" name="description" class="form-control" placeholder="enter description..">
			</div>
			<div class="form-group">
				<label>image:</label>
				<input type="text" id="image" name="image" class="form-control" placeholder="paste url of your image">
			</div>
			<input type="submit" name="submit" value="Submit" id="submit" class="btn btn-success">
		</form>
		<form action="delete.php" method="post">
			<input type="button" value="reset" id="demo" style="margin: 5px" class="btn btn-danger">
		</form>
		<br>
		<br>
		<div style="background-color: black;text-align: center;text-transform: uppercase;border-radius: 1em;">
		<a href="display.php" style="color: white;" > view photos </a>
	</div>
		<br>
		<br>
				</div>
	</div>
	<script type="text/javascript" src="jquery3.5.1.js">
		
			function addRecord(){
				var title= $('#title').val();
				var description= $('#description').val();
				var image= $('#image').val();
			}
			var form = $('#myform');
			$.ajax({
					url: form.attr("action"),
					type: 'post',
					data:{
						title:title,
						description:description,
						image:image
					}

				
				});
	</script>
	<script>
document.getElementById("demo").onclick = function() {
	console.log("clicked me");
	var r=confirm("you are about to clear your database");
		if(r == true){
			$.ajax({
					url:"delete.php",
					type:'post'
				});
			alert("database cleared")
		}
};

</script>

</body>
</html>