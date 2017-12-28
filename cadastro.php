<?php 
$conn = new mysqli($host, $db_user, $db_pass, $db_name); // ver arquivo db_info
$out = array('error' => false);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 $email=$_POST["email"]; 
 $sql = "insert into wp_newsletter (email) values ('$email')";
 $query = $conn->query($sql); 

if ($query) {
     $out["message"] = "email adicionado";
 }
 else{
     $out['error'] = true;
     $out['message'] = "email não adicionado";
     $out['sql_command'] = $sql;
 }
$conn->close();

header("Content-type: application/json");
echo json_encode($out);
die();


// //establish connection
// $con = mysqli_connect("localhost", "smdu", "sUqAhECr4h", "gestaourbanasp"); 

// //on connection failure, throw an error
// if(!$con) {  
//     die('Could not connect: '.mysql_error()); 
// } 

// $sql="INSERT INTO 'gestaourbanasp'.'wp_newsletter' ( 'email' ) VALUES ('$email')"; 

// mysqli_query($con,$sql); 

// echo $sql;
//Redirects to the specified page
// header("Location: http://spurbcp13343/gestaourbana/"); 

?>

