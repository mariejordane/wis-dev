<?php
echo "Hello World";

function render_all($getEtudiantsByNom){
    while ($row= $getEtudiantsByNom->fetch()) {
        print_r($row);
        echo"<br/>";
    }
};

?>