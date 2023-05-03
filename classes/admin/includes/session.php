<?php
    session_start();
    include "../../Database.php";
    $db = new Database();

    if (!isset($_POST['admin']) || trim($_POST['admin']) === '') {
        header('Location: index.php');
    }

    $sql = "select * from admin where admin_id=?";
    $query = $db->prepare($sql);
    $user = $query->fetch(\PDO::FETCH_OBJ);
