<?php
$con = new mysqli("localhost", "root", "", "class");

if (isset($_POST['fetch'])) {
    $query = $con->query("select * from users");
    $users = [];
    while ($result = $query->fetch_assoc()) {
        array_push($users, $result);
    }
    echo json_encode($users);
}

if (isset($_POST['add'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];
    $query = $con->query("INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `role`) VALUES (NULL, '$name', '$email', '$password', '$mobile', '0')");
    echo json_encode(["status" => "added"]);
}

if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    if ($query = $con->query("delete from users where id = '$id'")) {
        echo json_encode(["status" => "deleted"]);
    }
}


if (isset($_POST['editid'])) {
    $id = $_POST['editid'];
    $query = $con->query("select * from users where id = '$id'");
    $users = [];
    while ($result = $query->fetch_assoc()) {
        array_push($users, $result);
    }
    echo json_encode($users);
}


if (isset($_POST['update'])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $password = $_POST["password"];
    $query = $con->query("UPDATE `users` SET `name` = '$name', `email` = '$email', `password` = '$password', `mobile` = '$mobile' WHERE `users`.`id` = '$id'");
    echo json_encode(["status" => "updated"]);
}
