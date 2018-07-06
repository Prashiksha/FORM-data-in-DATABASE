<?php

$connection = mysqli_connect("localhost", "prashiksha", "jainjain"); // Establishing Connection with Server
$db = mysqli_select_db($connection, "colleges"); // Selecting Database from Server

if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
    $name = $_POST['name'];  // use POST so that data is not seen in URL
    $email = $_POST['email'];
    $contact = $_POST['contact'];

if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysqli_query($connection, "insert into students(stu_name, stu_email, stu_contact) 
	                  values ('$name', '$email', '$contact')");
echo "<br/><br/><span>Data Inserted successfully...!!<br><br></span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}

$result = mysqli_query($connection,"select * from students where stu_name = '$name';");  //CUSTOMERS is a table in database 'dbname'

$json_response = array();  
// fetch data in array format  
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {   //store the data in array's ASSOCIATIVE INDICES
// Fetch data of Fname Column and store in array of row_array
$row_array['Name'] = $row['stu_name']; 
$row_array['Email'] = $row['stu_email']; 
$row_array['Contact'] = $row['stu_contact']; 

//push the values in the array  
array_push($json_response,$row_array);  //array_push(array_name, values) pushes the new values at the end of  array 
}  
echo json_encode($json_response); // returns decoded json value of array
mysqli_free_result($result); //frees the memory associated with the result

mysql_close($connection); // Closing Connection with Server



?>
