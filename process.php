<?php

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$subject=$_POST['email'];
	$number=$_POST['number'];
    
    $mailto="davpullon@hotmail.com";
    $headers="from: my website";
    $txt="you have received an e-mail from".$name.".\n\n".$message;

	mail($mailto,$subject,$header);
	header("location:index.php?mailsend");

}
