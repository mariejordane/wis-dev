<?php
require ("model.php");
require ("view.php");

echo "Hello World";

  
/*  $server = "localhost";
    $user = "root";
    $password = "root";
    $dbname="cours-sql";
    $conn = new PDO("mysql:host=$server;dbname=$dbname",$user,$password);

    echo"connexion tip top";
    $res=$conn->query("SELECT * FROM etudiants" INNER JOIN formation);
    print_r ($res->fetch());
*/
    //$etudiants= getEtudiants();
    $formations=getFormations();

    //render_all ($etudiants);
    //render_all ($formations);
    $etudiants2=getEtudiantsByNom("Ewondo");

    render_all ($etudiants2);

    ?>