<?php
echo "Hello World";
    $server = "localhost";
    $user = "root";
    $password = "root";
    $dbname="cours-sql";
    $conn = new PDO("mysql:host=$server;dbname=$dbname",$user,$password);

    function getEtudiants (){
        global $conn;
    $res=$conn->query ("SELECT *
    FROM etudiants");
    return $res;
 };

    function getFormations(){  
        global $conn;
        $res=$conn->query ("SELECT *
        FROM formations");
        return $res; 
};
function getEtudiantsByNom ($nom){
    global $conn;
   $q = $conn->prepare ("SELECT* FROM etudiants
   WHERE etudiants.Nom=:nom");
   $q->bindParam(":nom" , $nom);
    $q->execute();
    return $q;
   };

    

/*echo"connexion tip top";
    $res=$conn->query("SELECT * FROM etudiants" 
    INNER JOIN formation ;
    ON etudiants.formations_id = formation.id"
    print_r ($res->fetch());

    while ($row= $res->fetch()) {
        print_r($row);
        echo"<br/>";
    } */

    ?>