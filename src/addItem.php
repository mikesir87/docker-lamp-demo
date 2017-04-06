<?php

if (!isset($_POST['description']) || empty($_POST['description'])) {
    Header("Location: index.php?error");
}
else {
    $db = new mysqli("db", "db_user", "secretPassword", "app_db");
    $query = $db->prepare("INSERT INTO grocery_list (description) VALUES (?)");
    $query->bind_param("s", $_POST['description']);
    $query->execute();
    $query->close();

    Header("Location: index.php?success");
}
