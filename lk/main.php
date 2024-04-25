<?php
require_once 'content/header.php';
?>

<main>
    <div class="container">
        <?php
        require_once(__DIR__ . '/db_con/boot.php');
        session_start();
        if (!isset($_SESSION['password'], $_SESSION['login'])) {
            header("Refresh:0; url=/../../index.php");
            session_destroy();
        }

        $query->execute(['usPass' => $_SESSION['password'], 'usLogin' => $_SESSION['login']]);
        $ans = $query->fetchAll();

        if (count($ans) == 0) {
            echo 'Auth ERROR';
        } else {
            if ($ans[0]['password_match'] == 0) {
                echo 'Auth ERROR';
            } else {
                $checkFirstAuth = 'select * from tt.user_corp where user_login = :usLogin;';
                $query = $pdo->prepare($checkFirstAuth);
                $query->execute(['usLogin' => $_SESSION['login']]);
                $ans = $query->fetchAll();
                if (empty($ans)) {
                    echo "<p>Заполните данные</p>";
                } else {
                    // header("Refresh:0; url=profile.php");
                    print_r($ans);
                    echo "<p>Привет</p>";
                }
            }
        }
        ?>
    </div>
</main>