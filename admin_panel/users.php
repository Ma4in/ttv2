<?php
require_once 'header.php';
require_once(__DIR__ . '/../lk/db_con/boot.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add'])) {
        try {
            $addUser = "insert into tt.users (login, password) values (:login, crypt(:newPassword, gen_salt('md5')));";
            $query = $pdo->prepare($addUser);
            $query->execute(['login' => $_POST['login'], 'newPassword' => $_POST['newPassword']]);
            $addNewStr = 'insert into tt.user_corp (user_login) values (:usLogin);';
            $query = $pdo->prepare($addNewStr);
            $query->execute(['usLogin' => $_POST['login']]);
        } catch (Exception $e){
            echo "Не получилось";
        }
    }
    if (isset($_POST['changePass'])) {
        try {
        $updateUser = "update tt.users set password = crypt(:upass, gen_salt('md5')) where login = :ulogin;";
        $query = $pdo->prepare($updateUser);
        $query->execute(['ulogin' => $_POST['chUserLogin'], 'upass' => $_POST['chPassword']]);
        }
        catch (Exception $e){
            echo "Не получилось";
        }
    }
}

?>

<main class="container px-5">
    <p class="fs-5 m-3">Пользователи</p>
    <ul class="list-group list-group-horizontal mb-2">
        <li class="list-group-item col-md-2">Логин</li>
        <li class="list-group-item col-md-3">Наименование</li>
        <li class="list-group-item col-md-3">email</li>
        <li>
            <button type="button" class="btn btn-secondary m-1" data-bs-toggle="modal" data-bs-target="#addUser">
                Добавить
            </button>
        </li>
    </ul>

    <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addUserLabel">Добавить нового пользователя</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="users.php" method="POST">
                    <div class="modal-body">
                        <div data-mdb-input-init class="form-outline mb-2">
                            <label class="form-label" for="fl">Логин</label>
                            <input name="login" id="fl" class="form-control form-control-lg" />
                        </div>
                        <div data-mdb-input-init class="form-outline mb-2">
                            <label class="form-label" for="fp">Пароль</label>
                            <input name="newPassword" id="fp" class="form-control form-control-lg" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Отменить</button>
                        <input type='submit' name='add' value='Добавить' class='btn btn-outline-primary m-1'>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="changeUser" tabindex="-1" aria-labelledby="changeUserLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="changeUserLabel">Изменить пароль пользователя</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="users.php" method="POST">
                    <div class="modal-body">
                        <div data-mdb-input-init class="form-outline mb-2">
                            <label class="form-label" for="fl">Изменить пользователя : <?php if (isset($_POST['userLogin'])) echo $_POST['userLogin']; ?></label>
                        </div>
                        <div data-mdb-input-init class="form-outline mb-2">
                            <label class="form-label" for="fp">Пароль</label>
                            <input name="chPassword" id="fp" class="form-control form-control-lg" />
                        </div>
                    </div>
                    <?php if (($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST['userLogin'])) {
                        $uLogin = $_POST['userLogin'];
                        echo "<input type='hidden' name='chUserLogin' value='$uLogin'>";
                    } ?>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Отменить</button>
                        <input type='submit' name='changePass' value='Изменить' class='btn btn-outline-primary m-1'>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php

    $getUsers = 'SELECT user_login, name, email 
    FROM tt.user_corp;';
    $query = $pdo->prepare($getUsers);
    $query->execute();
    $ans = $query->fetchAll();

    foreach ($ans as &$user) {
        if (!isset($user['name'])) {
            $uName = 'не заполненно';
        } else {
            $uName = $user['name'];
        }

        if (!isset($user['email'])) {
            $uEmail = 'не заполненно';
        } else {
            $uEmail = $user['email'];
        }

        $uLogin = $user['user_login'];

        echo "<ul class='list-group list-group-horizontal ms-1'>
        <li class='list-group-item col-md-2'>$uLogin</li>
        <li class='list-group-item col-md-3'>$uName</li>
        <li class='list-group-item col-md-3'>$uEmail</li>
        <li>
            <form action='users.php' method='POST'>
            <input type='hidden' name='userLogin' value='$uLogin'>
            <input type='submit' name='change' value='Изменить' class='btn btn-outline-secondary m-1'>
            </form>
        </li>
        </ul>";
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['change'])) echo '<script>
        var myModal = new bootstrap.Modal(document.getElementById("changeUser"));
        myModal.show();
    </script>';
    }
    ?>
</main>