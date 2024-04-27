<?php
require_once 'content/header.php';
?>

<main>
    <div class="container text-center py-5">
        <form action="login.php" method="POST" class="b-box mx-auto align-middle d-inline-block px-5 py-4 my-6">
            <p>
                <p class="fs-5 fw-semibold">Вход в Личный Кабинет</p>
            </p>
            <p>
                <input class="form_field" type="text" name="login" id="login" placeholder="Логин (email)" pattern="^.{5,}$" required>
            </p>
            <p>
                <input class="form_field" type="password" name="password" id="password" placeholder="Пароль" pattern="^.{5,}$" required>
            </p>
            <p>
                <input type="submit" name="send" value="Войти" class="btn btn-primary" disabled>
            </p>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                require_once(__DIR__ . '/lk/db_con/boot.php');

                $checkLogin = 'SELECT (password = crypt(:usPass, password)) 
                AS password_match
                FROM tt.users
                WHERE login = :usLogin ;';
                $query = $pdo->prepare($checkLogin);
                $query->execute(['usPass' => $_POST['password'], 'usLogin' => $_POST['login']]);
                $ans = $query->fetchAll();
                if (count($ans) == 0) {
                    echo 'incorrect login';
                } else {
                    if ($ans[0]['password_match'] == 0) {
                        echo 'incorrect password';
                    } else {
                        session_start();
                        $_SESSION['login'] = $_POST['login'];
                        $_SESSION['password'] = $_POST['password'];
                        header("Refresh:0; url=lk/main.php");
                    }
                }
            }
            ?>
        </form>
        <script>
            const form = document.querySelector('form');
            const r_send = document.getElementsByName("send")[0];

            form.addEventListener('change', changeFormHandler);

            function changeFormHandler() {
            if (form.checkValidity()) {
                r_send.removeAttribute('disabled');
            }
            }
        </script>
    </div>
</main>

<?php
require_once 'content/footer.php';
?>