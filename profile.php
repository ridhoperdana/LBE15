<?php 
    
    session_start();
    // if (empty($_SESSION['name'])) {
    //     echo "Silahkan Login terlebih dahulu!";
    // }
    // else
        

 ?>

 <html>
    <head>
     <title>Halaman profil</title>
    </head>
    <body>
        <?php 
        if (empty($_SESSION['name'])) {
            echo "Silahkan Login terlebih dahulu!";
            header("refresh:3; url= logout.php");
            // header( "refresh:5;url=wherever.php" );
        }
        else
            echo "Selamat datang ".$_SESSION['name']."!!";
            // <a href="logout.php">Logout</a>
        ?>
    </body>
 </html>