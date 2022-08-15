<html lang="en">
    <head>
        <title>Database</title>
    </head>
    <body>
    
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sensor";
    $value=$_GET['value'];
    
    $conn= new mysqli($servername, $username, $password, $dbname);

    if(empty($value)) {
    echo 'There is No value submitted';
    }
    else {
    echo 'Submitted value is:'.$value;
    echo "<br>The new record was inserted successfully";
    }
    $sql="INSERT INTO `value`(`value`) VALUES ('$value')";
    mysqli_query($conn, $sql);
    
    $conn->close();

    ?>
    </body>
</html>
