<?php

if (!isset($_POST['description']) || empty($_POST['description'])) {
    Header("Location: index.php?error");
}
else {
    require("db.php");

    $db = getDb();

    $query = $db->prepare("INSERT INTO grocery_list (description) VALUES (?)");
    $query->bind_param("s", $_POST['description']);
    $query->execute();
    $query->close();

    Header("Location: index.php?success");
}
