<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli("blkdzt5t0hlgmy5epq31-mysql.services.clever-cloud.com","uqmoznsvwysincbd","5DOFG1A0Gxai0znFEcYs","blkdzt5t0hlgmy5epq31");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos   ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }