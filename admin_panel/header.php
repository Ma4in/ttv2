<?php
        session_start();
        if (!isset($_SESSION['password'], $_SESSION['login']) && !($_SESSION['login'] == 'admin_panel')) {
            header("Refresh:0; url=/../../index.php");
            session_destroy();
        }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Tamga-transit</title>
    <link rel="stylesheet" href="../../assets/css/main.css">
    <link rel="stylesheet" href="../../assets/css/custom.css">
    <script src="../../assets/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="d-flex flex-row-reverse align-items-end">
            <div class="m-1">
                <select class="form-select form-select-sm" aria-label="Small select example">
                    <option selected value="rus">Русский</option>
                    <option value="eng">English</option>
                </select>
            </div>
            <div class="m-1 pb-1">Language</div>
        </div>
    </div>
    <header class="sticky-top">
        <nav class="navbar navbar-expand-lg c_header_back">
            <div class="container">
                <a class="navbar-brand">TRANSIT ADMIN</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-1 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Статистика</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="users.php">Пользователи</a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <a href="logout.php"><button class="btn btn-outline-secondary ms-1">Выход</button></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

