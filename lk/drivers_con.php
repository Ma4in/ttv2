<?php
require_once 'content/header.php';
session_start();
require_once(__DIR__ . '/db_con/boot.php');
if (isset($_SESSION['driver'])) {
    $getData = 'SELECT * FROM tt.drivers WHERE user_login = :usLogin AND inpassnum = :driver';
    $query = $pdo->prepare($getData);
    $query->execute(['usLogin' => $_SESSION['login'], 'driver' => $_SESSION['driver']]);
    $data = $query->fetchAll();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($data)){

        $updateDriver = 'UPDATE tt.drivers set
        fiospec = :fiospec,
        post = :post,
        fio_v =:fio_v,
        nation =:nation,
        inpassnum = :inpassnum,
        idl = :idl,
        visa = :visa,
        visa_date = :visa_date,
        visa_dateon = :visa_dateon,
        visa_dateoff = :visa_dateoff,
        iip = :iip
        WHERE user_login = :usLogin AND inpassnum = :driver;';

        $query = $pdo->prepare($updateDriver);
        $query->execute([
            'usLogin' => $_SESSION['login'], 
            'fiospec' => $_POST['fiospec'],
            'post' => $_POST['post'],
            'fio_v' => $_POST['fio_v'],
            'nation' => $_POST['nation'],
            'inpassnum' => $_POST['inpassnum'],
            'idl' => $_POST['idl'],
            'visa' => $_POST['visa'],
            'visa_date' => $_POST['visa_date'],
            'visa_dateon' => $_POST['visa_dateon'],
            'visa_dateoff' => $_POST['visa_dateoff'],
            'iip' => $_POST['iip'],
            'driver' => $_SESSION['driver']]);
        header("Refresh:0; url=drivers.php");
    } else {
        $addDriver = 'INSERT INTO tt.DRIVERS (user_login, fiospec, post, fio_v, nation, inpassnum, idl, visa, visa_date, visa_dateon, visa_dateoff, iip) 
        VALUES (:user_login, :fiospec, :post, :fio_v, :nation, :inpassnum, :idl, :visa, :visa_date, :visa_dateon, :visa_dateoff, :iip);';
        $query = $pdo->prepare($addDriver);
        $query->execute([
            'user_login' => $_SESSION['login'], 
            'fiospec' => $_POST['fiospec'],
            'post' => $_POST['post'],
            'fio_v' => $_POST['fio_v'],
            'nation' => $_POST['nation'],
            'inpassnum' => $_POST['inpassnum'],
            'idl' => $_POST['idl'],
            'visa' => $_POST['visa'],
            'visa_date' => $_POST['visa_date'],
            'visa_dateon' => $_POST['visa_dateon'],
            'visa_dateoff' => $_POST['visa_dateoff'],
            'iip' => $_POST['iip']]);
        header("Refresh:0; url=drivers.php");
    }
}
?>

<div class="container p-5">
    <p class="fs-5">Добавление водителя</p>
    <hr class="container delimeter mt-1">

    <form class="was-validated px-5" method="post">
        <div class="row">
            <div class="col-md-5">
                <label for="fio_v" class="form-label">ФИО водителя</label>
                <input type="text" class="form-control" id="fio_v" name="fio_v" value="<?php if (isset($data)) echo $data[0][3]; ?>" required>
            </div>
            <div class="col-md-3">
                <label for="nation" class="form-label">Гражданство</label>
                <input type="text" class="form-control" id="nation" name="nation" value="<?php if (isset($data)) echo $data[0][4]; ?>" required>
            </div>
        </div>
        <hr class="container delimeter mt-3">
        <div class="row">
            <div class="col-md-5">
                <label for="inpassnum" class="form-label">Номер загранпаспорта :</label>
                <input type="text" class="form-control" id="inpassnum" name="inpassnum" value="<?php if (isset($data)) echo $data[0][5]; ?>" required>
            </div>
            <div class="col-md-5">
                <label for="idl" class="form-label">Удостоверение водителя-международника :</label>
                <input type="text" class="form-control" id="idl" name="idl" value="<?php if (isset($data)) echo $data[0][6]; ?>" required>
            </div>
        </div>
        <hr class="container delimeter mt-3">
        <p>Государства, в которые у водителя имеются разрешения на въезд (виза)</p>
        <div class="col-md-5">
            <label for="visa" class="form-label">Наименование (одноразовая/многоразовая):</label>
            <input type="text" class="form-control" id="visa" name="visa" value="<?php if (isset($data)) echo $data[0][7]; ?>" required>
        </div>
        <div class="row mt-1">
            <div class="col-md-2">
                <label for="visa_date" class="form-label">Дата выдачи :</label>
                <input type="date" class="form-control" id="visa_date" name="visa_date" value="<?php if (isset($data)) echo $data[0][8]; ?>" required>
            </div>
            <div class="col-md-2">
                <label for="visa_dateon" class="form-label">Действительна С :</label>
                <input type="date" class="form-control" id="visa_dateon" name="visa_dateon" value="<?php if (isset($data)) echo $data[0][9]; ?>" required>
            </div>
            <div class="col-md-2">
                <label for="visa_dateoff" class="form-label">ПО :</label>
                <input type="date" class="form-control" id="visa_dateoff" name="visa_dateoff" value="<?php if (isset($data)) echo $data[0][10]; ?>" required>
            </div>
        </div>
        <div class="col-md-5 mt-1">
            <label for="iip" class="form-label">Международный страховой полис :</label>
            <input type="text" class="form-control" id="iip" name="iip" value="<?php if (isset($data)) echo $data[0][11]; ?>" required>
        </div>
        <hr class="container delimeter mt-3">
        <div class="row">
            <div class="col-md-5">
                <label for="fiospec" class="form-label">ФИО ответсвенного специалиста :</label>
                <input type="text" class="form-control" id="fiospec" name="fiospec" value="<?php if (isset($data)) echo $data[0][1]; ?>" required>
            </div>
            <div class="col-md-4">
                <label for="post" class="form-label">Должность :</label>
                <input type="text" class="form-control" id="post" name="post" value="<?php if (isset($data)) echo $data[0][2]; ?>" required>
            </div>
        </div>
        <div class="sticky-bottom bg-white text-end" style="--bs-bg-opacity: .8;">
            <hr class="container delimeter mt-3">
            <button type="submit" class="btn btn-primary mx-3 mb-4">Сохранить</button>
        </div>

    </form>
</div>