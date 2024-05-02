<?php
require_once 'content/header.php';
session_start();
require_once(__DIR__ . '/db_con/boot.php');

$getData = 'SELECT * FROM tt.user_corp WHERE user_login = :usLogin';
$query = $pdo->prepare($getData);
$query->execute(['usLogin' => $_SESSION['login']]);
$data = $query->fetchAll();
?>

<main>
    <div class="container p-5">
        <div class="px-5">
            <p class="fs-5">Профиль <b class="ps-3 fw-medium fs-5"><?php echo $data[0][0]; ?></b></p>
            <hr class="container delimeter mt-1">
            <div class="row">
                <div class="col">
                    <p>Наименование государства, в котором зарегистрировано предприятие : <br> <b class="ps-3 fw-medium fs-5"><?php echo $data[0][1]; ?></b></p>
                    <p>Форма образования предприятия : <br> <b class="ps-3 fw-medium fs-5"><?php echo $data[0][4]; ?></b></p>
                </div>
                <div class="col">
                    <p>Наименование предприятия на русском языке : <br>
                    <div class="ps-3 fw-medium fs-5"><?php echo $data[0][2]; ?></div>
                    </p>
                    <p>Наименование предприятия на английском : <br> <b class="ps-3 fw-medium fs-5"><?php echo $data[0][3]; ?></b></p>
                </div>
                <p>Полное наименование предприятия : <br> <b class="ps-3 fw-medium fs-5"><?php echo $data[0][5]; ?></b></p>
            </div>

            <hr class="container delimeter mt-1">

            <div class="row">
                <div class="col">
                    <p>Юридический адрес предприятия : <br> <b class="ps-3 fw-medium fs-5"><?php echo $data[0][6]; ?></b></p>
                </div>
                <div class="col">
                    <p>Почтовый адрес предприятия : <br> <b class="ps-3 fw-medium fs-5"><?php echo $data[0][7]; ?></b></p>
                </div>
                <p>Электронная почта : <br> <b class="ps-3 fw-medium fs-5"><?php echo $data[0][8]; ?></b></p>
                <p>Телефон стационар : <br> <b class="ps-3 fw-medium fs-5"><?php echo $data[0][9]; ?></b></p>
                <p>Телефон мобильный : <br> <b class="ps-3 fw-medium fs-5"><?php echo $data[0][10]; ?></b></p>
            </div>

            <hr class="container delimeter mt-1">

            <div class="row">
                <div class="col">
                    <p>ИНН : <br> <b class="fw-medium fs-5"><?php echo $data[0][11]; ?></b></p>
                </div>
                <div class="col">
                    <p>КПП : <br> <b class="fw-medium fs-5"><?php echo $data[0][12]; ?></b></p>
                </div>
                <div class="col">
                    <p>ОГРН : <br> <b class="fw-medium fs-5"><?php echo $data[0][13]; ?></b></p>
                </div>
            </div>

            <hr class="container delimeter mt-1">

            <div class="row">
                <div class="col">
                    <p>Бухгалтерский баланс компании : <br> <b class="fw-medium fs-5"><?php echo $data[0][14]; ?></b></p>
                    <p>Номер расчетного счета организации : <br> <b class="fw-medium fs-5"><?php echo $data[0][15]; ?></b></p>
                    <p>Идентификационный таможенный номер (ИТН) предприятия : <br> <b class="fw-medium fs-5"><?php echo $data[0][18]; ?></b></p>
                </div>
                <div class="col">
                    <p>Номер лицевого счета организации : <br> <b class="fw-medium fs-5"><?php echo $data[0][16]; ?></b></p>
                    <p>Валютный счет организации : <br> <b class="fw-medium fs-5"><?php echo $data[0][17]; ?></b></p>
                </div>
            </div>

            <hr class="container delimeter mt-1">

            <p>Свидетельство профессиональной компетентности международного автомобильного перевозчика</p>
            <div class="row">
                <div class="col-md-3">
                    <p>Серия / номер : <br> <b class="fw-medium fs-5"><?php echo $data[0][19]; ?></b></p>
                </div>
                <div class="col-md-2">
                    <p>Дата выдачи : <br> <b class="fw-medium fs-5"><?php echo $data[0][20]; ?></b></p>
                </div>
            </div>

            <hr class="container delimeter mt-1">

            <p> Удостоверение допуска предприятия к осуществлению международных автомобильных перевозок</p>
            <div class="row">
                <div class="col-md-3">
                    <p>Серия / номер : <br> <b class="fw-medium fs-5"><?php echo $data[0][21]; ?></b></p>
                </div>
                <div class="col-md-2">
                    <p>Срок действия от: <br> <b class="fw-medium fs-5"><?php echo $data[0][22]; ?></b></p>
                </div>
                <div class="col-md-2">
                    <p>по : <br> <b class="fw-medium fs-5"><?php echo $data[0][23]; ?></b></p>
                </div>
            </div>

            <hr class="container delimeter mt-1">

            <p>Свидетельство о включении предприятия в реестр таможенных перевозчиков</p>
            <div class="row">
                <div class="col-md-3">
                    <p>Серия / номер : <br> <b class="fw-medium fs-5"><?php echo $data[0][24]; ?></b></p>
                </div>
                <div class="col-md-2">
                    <p>Дата выдачи : <br> <b class="fw-medium fs-5"><?php echo $data[0][25]; ?></b></p>
                </div>
            </div>

            <hr class="container delimeter mt-1">

            <p>Обеспечение уплаты таможенных платежей</p>
            <div class="row">
                <div class="col-md-3">
                    <p>Размер : <br> <b class="fw-medium fs-5"><?php echo $data[0][26]; ?></b></p>
                </div>
                <div class="col-md-2">
                    <p>Срок от: <br> <b class="fw-medium fs-5"><?php echo $data[0][27]; ?></b></p>
                </div>
                <div class="col-md-2">
                    <p>по : <br> <b class="fw-medium fs-5"><?php echo $data[0][28]; ?></b></p>
                </div>
            </div>

            <hr class="container delimeter mt-1">

            <p>Наименование страховой компании : <br> <b class="fw-medium fs-5"><?php echo $data[0][29]; ?></b></p>
            <div class="row">
                <div class="col-md-3">
                    <p>Номер полиса : <br> <b class="fw-medium fs-5"><?php echo $data[0][30]; ?></b></p>
                </div>
                <div class="col-md-2">
                    <p>Срок от: <br> <b class="fw-medium fs-5"><?php echo $data[0][31]; ?></b></p>
                </div>
                <div class="col-md-2">
                    <p>по : <br> <b class="fw-medium fs-5"><?php echo $data[0][32]; ?></b></p>
                </div>
            </div>

            <hr class="container delimeter mt-1">

            <p>Государства, в которые у предприятия имеются разрешения на въезд (дозволы) Заполняется уже перед самой поездкой</p>
            <p>Наименование документа : <br> <b class="fw-medium fs-5"><?php echo $data[0][36]; ?></b></p>
            <div class="row">
                <div class="col-md-2">
                    <p>Дата выдачи : <br> <b class="fw-medium fs-5"><?php echo $data[0][37]; ?></b></p>
                </div>
                <div class="col-md-2">
                    <p>Дата начала действия: <br> <b class="fw-medium fs-5"><?php echo $data[0][38]; ?></b></p>
                </div>
                <div class="col-md-2">
                    <p>Дата окончания : <br> <b class="fw-medium fs-5"><?php echo $data[0][39]; ?></b></p>
                </div>
            </div>
            <p>Разрешение на перевозку грузов третьих государств (Название государств) : <br> <b class="fw-medium fs-5"><?php echo $data[0][42]; ?></b></p>

            <hr class="container delimeter mt-1">

            <p>Наличие непогашенных задолженностей по уплате таможенных платежей и пеней : <br> <b class="fw-medium fs-5"><?php if ($data[0][40]) {echo 'Имеются';} else { echo 'Не имеются';}; ?></b></p>
            <p>Разрешение на перевозку опасных грузов : <br> <b class="fw-medium fs-5"><?php if ($data[0][41]) {echo 'Имеeтся';} else {echo 'Не имеeтся';}; ?></b></p>

            <div class="sticky-bottom bg-white text-end" style="--bs-bg-opacity: .8;">
                <hr class="container delimeter mt-3">
                <a href="profile_con.php"><button type="submit" class="btn btn-secondary mx-3 mb-4">Изменить</button></a>
            </div>
        </div>
    </div>
</main>