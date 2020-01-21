<?php
    require('functions.php');

    if (isset($_GET['user'])) {
        getUser($pdo);
    }