<?php
            function selectCate(){
                $dbhost = 'localhost:3306';
                $dbuser = 'sa';
                $dbpass = '123456';
               // $conn = mysqli_connect($dbhost, $dbuser, $dbpass, "product_test");
                $descTest = 'script';
                try {
                    $pdo = new PDO("mysql:host=$dbhost;dbname=knowledge", $dbuser, $dbpass);
                    // execute the stored procedure
                    $sql = 'CALL select_categorybyname(?)';
                    // call the stored procedure
                    $stmt=$pdo->prepare($sql);
                    $stmt->bindParam(1, $descTest, PDO::PARAM_STR);
                    $stmt->execute();
                    return $stmt;
                } catch (PDOException $e) {
                    die("Error occurred:" . $e->getMessage());
                }
            };
           
?>
        