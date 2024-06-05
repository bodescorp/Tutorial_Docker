<h1>Lista de Usuarios</h1>
<?php
$pdo = new PDO("mysql:dbname=meudb;host=db", "user@gmail.com", "nada");

$sql= $pdo->query("SELECT * FROM usuarios");

if(sql-> rowCount() > 0){
    $usuarios = $sql->fetchAll();

    echo "<ul>";
    foreach($usuarios as $usuarios){
        echo "<li>".$usuarios['nome']."<li>";
    }
    echo "</ul>";
}else{
    echo"Nao há usuarios cadastrados"
}