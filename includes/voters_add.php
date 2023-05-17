<?php
    include "../session.php";
    include "classes/Database.php";
    $db = new Database();
    if (isset($_POST['add'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $filename = $_FILES['photo']['name'];

        if (!empty($filename)) {
            move_uploaded_file($_FILES['photo']['tmp_name'], '../img/'.$filename);
        }

        $set = '1234567890abcdefhijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $voter = substr(str_shuffle($set), 0, 15);

        $sql = `
            insert into voters (voters_id, password, firstname, lastname, photo)
            values (:voters_id, :password, :firstname, :lastname, :photo)
        `;

        $query = $db->query($sql);
        $query->execute([
            ':voters_id' => $voter,
            ':password' => $password,
            ':firstname' => $firstName,
            ':lastname' => $lastName,
            ':photo' => $filename
        ]);

        if ($query->rowCount() > 0) {
            $_SESSION['success'] = 'Voter added successfully';
        } else {
            $_SESSION['error'] = 'voter not added';
        }
    } else {
        $_SESSION['error'] = 'Fill up add form first';
    }

    header('Location: voters.php');
