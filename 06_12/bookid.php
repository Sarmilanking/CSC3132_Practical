<<<<<<< HEAD

=======
>>>>>>> 51c9bc8 (recoded 2)
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'dbconf.php';
        require_once 'myfunc.php';
        $id=$_GET['bookid'];
        GetBook($id,$connect);
    ?>
</body>
<<<<<<< HEAD

</html>

</html>

<?php
define('SERVERNAME', '127.0.0.1');
define('USERNAME', 'root');
define('PASSWORD', 'mariadb');
define('DBNAME', 'book');
try {
	$connect = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);
	if (!$connect) {
		die("connection failed".mysqli_connect_error());
	} 
	else {
		echo "Connected successfully<br>";
	}
} 
catch (Exception $e) {
	die($e->getMessage());
}

?>
=======
</html>
>>>>>>> 51c9bc8 (recoded 2)
