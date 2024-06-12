<?php 
include 'db_access.php';

$sql = "INSERT INTO contact_form (name, email, comment) VALUES ('$name','$email','$comment')";

$res = mysqli_query($mysqli, $sql);

	if ($res === TRUE) {
		$response = "It worked so far. #1";
		//echo $response;
	} else {
		$response = mysqli_error($mysqli);
	}
    mysqli_close($mysqli);
?>