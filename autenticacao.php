<?php
session_start();

$nome = $_POST["username"];
$senha = $_POST["password"];

if ($nome == "Ana" && $senha == 123321){
    header('Location: ana.html');
} elseif ($nome == "Sarah" && $senha == 456654){
    header('Location: sarah.html');
} elseif ($nome == "Vinícius" && $senha == 789987){
    header('Location: vinicius.html');
} else {
    echo "Nome ou senha incorretos.";
}
?>