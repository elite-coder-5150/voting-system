<?php
    session_start();
    include '../Database.php';
    $db = new Database();
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "
            select * from admin where username=?
        ";
        $query = $db->query($sql);
        $query->execute([
            'username' => $username,
        ]);

        if ($query->rowCount() < 1) {
            $_SESSION['error'] = 'cannot find account with that username';
        } else {
            $row = $query->fetch(\PDO::FETCH_OBJ);

            if (password_verify($password, $row->password)) {
                $_SESSION['admin'] = $row->id;
            } else {
                $_SESSION['error'] = 'invalid password';
            }
        }
    } else {
        $_SESSION['error'] = 'input admin credentials first';
    }

    header('Location: index.php');


