<?php
//Connect to MySQL
$con = mysqli_connect("docker.for.mac.localhost","root","admin","shoutit");

//Test Connection
if(mysqli_connect_errno()){
	echo 'Failed to connect to MySQL: '.mysqli_connect_error();
}