<?php 


$host = "localhost";
$user = "root";
$password = "";
$db = "itcoding";

$data = mysqli_connect($host, $user, $password, $db);

if($data===false){
    die("connection error");
}

if(isset($_POST['submit'])) 
{
    
    $str = mysqli_real_escape_string($data, $_POST['str']);
    $sql = "select * from blog where name like '%$str%' or description like '%$str%' ";
    $res = mysqli_query($data, $sql);
    

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.2-web/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>

    <?php
        include 'header.php';
    ?>

    <main>
        <?php
            include 'searchmain.php';
        ?>

        <?php 
            include 'footer.php';
        ?>
        
    </main>
    <a href="#" class="to-top">
        <i class="fas fa-chevron-up"></i>
    </a>

    <script src="main.js"></script>
    <!-- our aos data -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        offset: 300,
        duration: 1000,
      });
    </script>  
</body>
</html>


