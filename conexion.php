<?php

    function conectarDB() : mysqli {
        $servername = "bftvwdn6sn96d7rgjrao-mysql.services.clever-cloud.com";
        $username = "udr7t9uhbnntzghj";
        $password = "u9iRfdszkxXrKghojKju";
        $dbname = "bftvwdn6sn96d7rgjrao";
        $db = new mysqli($servername, $username, $password, $dbname);
    
        if(!$db) {
            echo "Error no se pudo conectar";
            exit;
        } 
    
        return $db;
        
    }

?>
