<?php
require_once 'content/header.php';
session_start();
require_once(__DIR__ . '/db_con/boot.php');

unset($_SESSION['driver']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['change'])){
        unset($_POST['del']);
        $_SESSION['driver']=$_POST['driver'];
        header("Refresh:0; url=drivers_con.php");
    }
    if (isset($_POST['del'])) {
        $getData = 'DELETE FROM tt.drivers WHERE inpassnum = :driver AND user_login = :usLogin';
        $query = $pdo->prepare($getData);
        $query->execute(['driver' => $_POST['driver'], 'usLogin' => $_SESSION['login']]);
    }
}

$getData = 'SELECT * FROM tt.drivers WHERE user_login = :usLogin';
$query = $pdo->prepare($getData);
$query->execute(['usLogin' => $_SESSION['login']]);
$data = $query->fetchAll();

?>

<main class="container p-3">
    <p class="fs-5 ps-5">Водители: </p>
    <hr class="container delimeter mt-1">
    <?php
    foreach ($data as &$driver) {
        echo "<div class='b-box col-md-8 m-auto p-3 mb-3'>
        <p>
        ФИО : $driver[3] <br> Гражданство: $driver[4]
        </p>
        <p class='mt-3'>Номер загранпаспорта : $driver[5]</p>
        <p>	Удостоверение водителя-международника : $driver[6]</p>
        <div class='row'>
        <div class='col-md-3'>
        Виза : $driver[7]
        </div>
        <div class='col-md-3'>
        Дата выдачи:$driver[8]
        </div>
        <div class='col-md-5'>
        Сроки : c $driver[9] по $driver[10]
        </div>
        </div>
        <p class='mt-3'>Международный страховой полис : $driver[11]</p>
        <p>	Ответственный : $driver[1], $driver[2]</p>
        <form method='post'> 
        <input type='hidden' name='driver' value='$driver[5]'>
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
        <a href="drivers_con.php"><button class="btn m-5 p-3 fs-4">+ Добавить водителя</button></a>
    </div>

</main>