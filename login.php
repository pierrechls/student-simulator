<?php
//On démarre la session
session_start();
 
//On se connecte à MySQL

mysql_connect('localhost', 'root', 'root');
mysql_select_db('Student_Simulator');
 
//On inclut le contrôleur s'il existe
if ( is_file('controleurs/login_verif.php'))
{
        include 'controleurs/login_verif.php';
}
else
{
        echo("Arf");
}
 
//On ferme la connexion à MySQL
mysql_close();