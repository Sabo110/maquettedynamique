<?php
try {
    $pdo = new pdo('mysql:host=localhost;dbname=stageedenlt','root','');
} catch (\Throwable $th) {
    echo 'erreur de connexion';
}
