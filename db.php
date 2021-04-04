<?php

            //Connection between PHP & mySQL
            $host = 'localhost';
            $user = 'root';
            $password = '';
            $db = 'php_crud';

            $connect = new mysqli($host, $user, $password, $db);

            if ($connect -> connect_error) {
            echo $connect->connect_error;
        }

?>
