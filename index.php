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

    <div id="banner">
        <h1 class="gt">&lt;ITCoding/&gt;</h1>
        <h3>Learn coding from scratch</h3>
    </div>

    <main>
        <?php
            include 'main.php';
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