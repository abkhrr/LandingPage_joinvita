<?php
	$server		= "localhost:3306"; //sesuaikan dengan nama server
	$user		= "abkhrrco_abkhrrco"; //sesuaikan username
	$password	= "Alifa0808"; //sesuaikan password
	$database	= "abkhrrco_invit"; //sesuaikan target databese
	
    $con = mysqli_connect($server, $user, $password, $database);	
    if (mysqli_connect_errno()) { 
    echo "Gagal terhubung MySQL: " . mysqli_connect_error();  }
?>