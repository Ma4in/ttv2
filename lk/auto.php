<?php
require_once 'content/header.php';
session_start();
require_once(__DIR__ . '/db_con/boot.php');

unset($_SESSION['auto']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['details'])){
        unset($_POST['del']);
        unset($_POST['change']);
        $_SESSION['auto']=$_POST['auto'];
        header("Refresh:0; url=auto_detail.php");
    }
    if (isset($_POST['change'])){
        unset($_POST['del']);
        $_SESSION['auto']=$_POST['auto'];
        header("Refresh:0; url=auto_con.php");
    }
    if (isset($_POST['del'])) {
        $getData = 'DELETE FROM tt.auto WHERE auto_id = :auto AND user_login = :usLogin';
        $query = $pdo->prepare($getData);
        $query->execute(['auto' => $_POST['auto'], 'usLogin' => $_SESSION['login']]);
    }
}

$getData = 'SELECT * FROM tt.auto WHERE user_login = :usLogin';
$query = $pdo->prepare($getData);
$query->execute(['usLogin' => $_SESSION['login']]);
$data = $query->fetchAll();
?>

<main class="container p-3">
    <p class="fs-5 ps-5">Транспортные средства : </p>
    <hr class="container delimeter mt-1">
    <?php
    foreach ($data as &$auto) {
        echo "<div class='b-box col-md-8 m-auto p-3 mb-3'>
        <div class='row mb-3'>
        <div class='col-md-4'>Госномер : $auto[5]</div>  <div class='col'>Код по ТН ВЭД: $auto[2]</div>
        </div>
        <p>
        Фирма и модель : $auto[6], $auto[7]
        </p>
        <div class='row mb-3'>
        <div class='col-md-4'>VIN : $auto[8]</div>  <div class='col'>ПТС: $auto[13]</div>
        </div>
        <p>
        Прицеп : $auto[21], $auto[29]
        </p>
        <form method='post'> 
        <input type='hidden' name='auto' value='$auto[5]'>
        <input type='submit' name='details'
                class='btn btn-outline-secondary' value='Подробнее' />
        <input type='submit' name='change'
                class='btn btn-outline-secondary' value='Изменить' /> 
        <input type='submit' name='del'
                class='btn btn-outline-secondary' value='Удалить' /> 
        </div>
        </form>
        ";
    }
    ?>
    <div class="b-box col-md-8 m-auto text-center">
        <a href="auto_con.php"><button class="btn m-5 p-3 fs-4">+ Добавить транспортное средство</button></a>
    </div>
</main>