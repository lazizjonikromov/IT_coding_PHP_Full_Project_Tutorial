<?php
    error_reporting(0);
    session_start();
    session_destroy();
    if($_SESSION['message']){
        $message = $_SESSION['message'];

        echo "<script type='text/javascript'> alert('$message') </script>";
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
    <style type="text/css">
        .adm{
            margin-left: 50px;
        }
        .label_text{
            display: inline-block;
            text-align: right;
            padding-right: 10px;
        }

        .contact{
            padding: 100px;
        }

        .input_deg{
            width: 50%;
            height: 40px;
            border-radius: 25px;
            border: 1px solid blue;
        }


        .submit{
            width: 100px;
            border-radius: 20px;
            cursor: pointer;
            margin-left: 50px;
            background-color: skyblue;
            font-size: 18px;
        }

        .admin_int{
            padding-top: 20px;
        }

        textarea{
            width: 50%;
            height: 100px;
            border-radius: 25px;
            border: 1px solid blue;
            margin-right: 15px;
        }
    </style>
</head>
<body>

    <?php
        include 'header.php';
    ?>

    
    <main>
        <?php
            include 'contactmain.php';
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