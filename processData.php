<?php
	include "obj/DBCon.php";

	//echo "Hello");

	$taskName = $_POST['taskInput'];

		echo $taskName;

		$sql = "INSERT INTO todo_tasks(taskName) VALUES('".$taskName."')";

		//echo $sql;

		$rec = $conn->query( $sql );

		header("Location:index.php");


	?>