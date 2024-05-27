<?php



$conn = mysqli_init();
mysqli_ssl_set($conn,NULL,NULL, "home/site/wwwroot/bd/DigiCertGlobalRootG2.crt.pem", NULL, NULL);
mysqli_real_connect($conn, 'lanzamientobet4home052024.mysql.database.azure.com', 'lanzamientobet4home', 'Bet4#1256', 'lanzamiento', 3306, MYSQLI_CLIENT_SSL);
if (mysqli_connect_errno()) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}



