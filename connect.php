<?php
try{
    $db = new PDO('mysql:host=localhost;dbname=blog-dessert', 'root');
} catch(Exeption $e){
echo 'Erreur : '. $e->getMessage();
}