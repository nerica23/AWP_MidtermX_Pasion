<?php
    define( 'DB_HOST', 'localhost');
    define( 'DB_USER', 'root');
    define( 'DB_PASSWORD','');
    define( 'DB_NAME', 'db_lablogging');


    $db_connect = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    if(!$db_connect){
        echo "connection failed";
    }
    else {
        echo "";
    }

 ?>