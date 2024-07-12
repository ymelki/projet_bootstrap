<?php
include "header.php";


// B.D. déjà créé avec la table book déjà créé.

// 1. Se connecter à la b.d
$pdo = new \PDO('mysql:host=localhost;dbname=dblibrary', 'root', 'Decembre2020!');
// 2. requete select * from books


$query = "SELECT * FROM book";

// pdo qui fait une requete
$statement = $pdo->query($query);


// 3. statement qui formate les données sous forme de tableau
$books = $statement->fetchAll(PDO::FETCH_ASSOC); 
// PDO::FETCH_ASSOC correspond au formatage de donnée approprié

// echo "<pre>";
// print_r($books);
// echo "</pre>";

foreach ($books as $book){
    ?>
    <hr>
    ID : <?=$book["id"]?>
    NOM : <a href="exo13.php?id=<?=$book["id"]?>"> <?=$book["name"]?> </a>
    CAT : <?=$book["category_id"]?>
    PRIX : <?=$book["price"]?> 
    <a href="supprimebook.php?id=<?=$book["id"]?>">SUPPRIME</a>
    <?php
}



?>
<br>
