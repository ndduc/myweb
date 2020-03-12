

<html>
<body>
    
    <h1>TEST</h1>

<?php

   $dbhost = 'localhost:3306';
   $dbuser = 'sa';
   $dbpass = '123456';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, "product_test");
   if(! $conn ) {
       echo('Something wrong');
   }
   
   $query = $conn->query("select * from products ");
   
   while($result = $query->fetch_assoc()) {
       $array[] = $result['description'];
       echo "Product :{$result['description']}; Id: {$result['product_id']}  <br> ";
   }
   
   print_r($array);
   
   echo 'Connected successfully';
   mysqli_close($conn);
?>
</body>
</html>