<?php


    
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "result";
    
    $con = mysqli_connect($server, $username, $password,"$dbname");

   
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    $name = $_POST['name'];
    $reg = $_POST['reg'];
    $sql = "SELECT * FROM `result`.`marks`WHERE reg='$reg' AND name ='$name'" ;

    $result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
 
 while($row = mysqli_fetch_assoc($result)) {
    
    echo "<td>"."  Name : " . $row['name'] . "<br>". "</td>";
    
    echo "<td>"." Registration Number : " . $row['reg'] ."<br>". "</td>";
    echo "<td>"." Percentage : "  . $row['Percentage'] ."<br>". "</td>";
    echo "<td>"." Grade: " . $row['Grade'] . "<br>"."</td>";
    
echo "</tr>";
 }
} else {
 echo "0 results";
}
   
   

   
    $con->close();

?>
<style>
td {
    font-family: Arial, Helvetica, sans-serif;
    font-size: .7em;
    border: 1px solid #DDD;
}
body{
    background-image : url('CLASS.jfif');
        font-size: 300%;
        color: white;
        text-align: center;
    }
</style>