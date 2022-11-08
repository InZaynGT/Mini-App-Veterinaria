<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli("localhost:3306","admin","q3{w?P#!EAEa","carlosmiranda_administrador");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos   ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }