<?php 
    
    ob_start();
    // Start session
    session_start();

    define('HOME_URL','http://localhost/my_showroom/');

    // connect to database
    define('SERVER','localhost:3308');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','showroom_pos');

    $con = mysqli_connect(SERVER,USER,PASSWORD,DATABASE) or die(mysqli_error($con));
    
?>