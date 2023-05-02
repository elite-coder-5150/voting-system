<?php
session_start();
$db = new Database();

if (isset($_POST['login'])) {
    $voter = $_POST['voter'];
    $password = $_POST['password'];

    $sql = "
        select * from voters where voter_id=?
    ";

    $query = $db->query($sql);
    $query->execute([
        ':voter' => $voter,
    ]);

    if ($query->rowCount() < 1) {
        $_SESSION['error'] = 'cannot find voter with the id';
    } else {
        $row = $query->fetch(PDO::FETCH_OBJ);

        if (password_verify($password, $row->password)) {
            $_SESSION['voter'] = $row->id;
        } else {
            $_SESSION['voter'] = 'incorrect password';
        }
    }
} else {
    $_SESSION['voter'] = 'invalid credentials';
}
header("Location: index.php");
