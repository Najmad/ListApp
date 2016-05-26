<?php
	include("obj/DBCon.php");

	//Prepare the SQL statement to get
	//all records from database
	$sql = "SELECT * FROM todo_tasks";
	$rec = $conn->query( $sql );

	$num = $rec->num_rows;

	echo $num;

	?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title> TO DO LIST </title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<form id="todoForm" action="processData.php" method="post">
					<input type="text" class="form control" placeholder="text input" id="taskInput" name="taskInput">

				
				<button type="button" class="btn btn-success" id="actionBtn">Success</button>
			</div>
		<div class="col-md-1"></div>	
		</div>
		<div class="row">
			<div class="col-md-12">
			<ul>
				<?php
					for ($i=0; $i < $num; $i++){ 
						$row = mysqli_fetch_array($rec);
						echo "<li>.$row['taskName']."</li>;
					}

				?>
			</ul>

		</div>
			</div>	
	</div>


	

<script src="js/jquery.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/validator.js"></script>
</body>
</html>