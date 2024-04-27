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
        <p class="fs-5">Профиль <?php echo $data[0][0]; ?></p>
        <hr class="container delimeter mt-1">

        <form action="" class="was-validated px-5">
            <div class="row">
                <div class="col-md-4">
                    <label for="namegov" class="form-label">Наименование государства зарегистрированного предприятия</label>
                    <input type="text" class="form-control" id="namegov" name="namegov" value="<?php echo $data[0][1] ?>" required>
                </div>
                <div class="col-md-4">
                    <label for="formcorp" class="form-label"><br>Форма образования предприятия</label>
                    <input type="text" class="form-control" id="formcorp" name="formcorp" value="<?php echo $data[0][4] ?>" required>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="name" class="form-label">Наименование предприятия на русском языке</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $data[0][2] ?>" required>
                </div>
                <div class="col-md-6">
                    <label for="second_name" class="form-label">Наименование предприятия на английском языке</label>
                    <input type="text" class="form-control" id="second_name" name="second_name" value="<?php echo $data[0][3] ?>" required>
                </div>
            </div>
            <div class="mt-3">
                <label for="shortname" class="form-label">Полное наименование предприятия</label>
                <input type="text" class="form-control" id="shortname" name="shortname" value="<?php echo $data[0][5] ?>" required>
            </div>

            <hr class="container delimeter my-4">

            <div>
                <label for="addres_urid" class="form-label">Юридический адрес предприятия</label>
                <input type="text" class="form-control" id="addres_urid" name="addres_urid" value="<?php echo $data[0][6] ?>" required>
            </div>
            <div class="mt-3">
                <label for="addres_fact" class="form-label">Почтовый адрес предприятия</label>
                <input type="text" class="form-control" id="addres_fact" name="addres_fact" value="<?php echo $data[0][7] ?>" required>
            </div>

            <div class="row mt-3">
                <div class="col-md-4">
                    <label for="email" class="form-label">Электронная почта</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $data[0][8] ?>" required>
                </div>
                <div class="col-md-4">
                    <label for="phone1" class="form-label">Телефон стационар</label>
                    <input type="text" class="form-control" id="phone1" name="phone1" value="<?php echo $data[0][9] ?>" required>
                </div>
                <div class="col-md-4">
                    <label for="phone2" class="form-label">Телефон мобильный</label>
                    <input type="text" class="form-control" id="phone2" name="phone2" value="<?php echo $data[0][10] ?>" required>
                </div>
            </div>

            <hr class="container delimeter my-4">

            <div class="row mt-3">
                <div class="col-md-4">
                    <label for="inn" class="form-label">ИНН</label>
                    <input type="text" class="form-control" id="inn" name="inn" value="<?php echo $data[0][11] ?>" required>
                </div>
                <div class="col-md-4">
                    <label for="kpp" class="form-label">КПП</label>
                    <input type="text" class="form-control" id="kpp" name="kpp" value="<?php echo $data[0][12] ?>" required>
                </div>
                <div class="col-md-4">
                    <label for="ogrn" class="form-label">ОГРН</label>
                    <input type="text" class="form-control" id="ogrn" name="ogrn" value="<?php echo $data[0][13] ?>" required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="compbal" class="form-label">Бухгалтерский баланс компании </label>
                    <input type="text" class="form-control" id="compbal" name="compbal" value="<?php echo $data[0][14] ?>" required>
                </div>
                <div class="col-md-6">
                    <label for="bank_account" class="form-label">Номер расчетного счета организации</label>
                    <input type="text" class="form-control" id="bank_account" name="bank_account" value="<?php echo $data[0][15] ?>" required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="currency_account" class="form-label">Номер лицевого счета организации</label>
                    <input type="text" class="form-control" id="currency_account" name="currency_account" value="<?php echo $data[0][16] ?>" required>
                </div>
                <div class="col-md-6">
                    <label for="transit_currency_account" class="form-label">Валютный счет организации</label>
                    <input type="text" class="form-control" id="transit_currency_account" name="transit_currency_account" value="<?php echo $data[0][17] ?>" required>
                </div>
            </div>

            <div class="col-sm-9 mt-3">
                <label for="itn" class="form-label">Идентификационный таможенный номер (ИТН) предприятия</label>
                <input type="text" class="form-control" id="itn" name="itn" value="<?php echo $data[0][18] ?>" required>
            </div>

            <hr class="container delimeter my-4">

            <p>Свидетельство профессиональной компетентности международного автомобильного перевозчика</p>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="spkmap" class="form-label">Серия / номер</label>
                    <input type="text" class="form-control" id="spkmap" name="spkmap" value="<?php echo $data[0][19] ?>" required>
                </div>
                <div class="col-md-2">
                    <label for="spkmap_date" class="form-label">Дата выдачи</label>
                    <input type="date" class="form-control" id="spkmap_date" name="spkmap_date" value="<?php echo $data[0][20] ?>" required>
                </div>
            </div>

            <hr class="container delimeter my-4">

            <p> Удостоверение допуска предприятия к осуществлению международных автомобильных перевозок</p>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="map" class="form-label">Серия / номер</label>
                    <input type="text" class="form-control" id="map" name="map" value="<?php echo $data[0][21] ?>" required>
                </div>
                <div class="col-md-2">
                    <label for="map_dateon" class="form-label">Срок действия от</label>
                    <input type="date" class="form-control" id="map_dateon" name="map_dateon" value="<?php echo $data[0][22] ?>" required>
                </div>
                <div class="col-md-2">
                    <label for="map_datecount" class="form-label">по</label>
                    <input type="date" class="form-control" id="map_datecount" name="map_datecount" value="<?php echo $data[0][23] ?>" required>
                </div>
            </div>

            <hr class="container delimeter my-4">

            <p>Свидетельство о включении предприятия в реестр таможенных перевозчиков</p>
            <div class="row mt-3">
                <div class="col-md-6">
                    <label for="rtp" class="form-label">Серия / номер</label>
                    <input type="text" class="form-control" id="rtp" name="rtp" value="<?php echo $data[0][24] ?>" required>
                </div>
                <div class="col-md-2">
                    <label for="rtp_date" class="form-label">Дата выдачи</label>
                    <input type="date" class="form-control" id="rtp_date" name="rtp_date" value="<?php echo $data[0][25] ?>" required>
                </div>
            </div>

            <hr class="container delimeter my-4">

            <p> Обеспечение уплаты таможенных платежей </p>
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="duties" class="form-label">Размер</label>
                    <input type="number" class="form-control" id="duties" name="duties" value="<?php echo $data[0][26] ?>" required>
                </div>
                <div class="col-md-2">
                    <label for="dutieson" class="form-label">Срок с</label>
                    <input type="date" class="form-control" id="dutieson" name="dutieson" value="<?php echo $data[0][27] ?>" required>
                </div>
                <div class="col-md-2">
                    <label for="dutiesoff" class="form-label">по</label>
                    <input type="date" class="form-control" id="dutiesoff" name="dutiesoff" value="<?php echo $data[0][28] ?>" required>
                </div>
            </div>

            <hr class="container delimeter my-4">

            <p>Данные страхования</p>
            <div class="col-md-6">
                <label for="insurance" class="form-label">Наименование страховой компании</label>
                <input type="text" class="form-control" id="insurance" name="insurance" value="<?php echo $data[0][29] ?>" required>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <label for="ins_name" class="form-label">Номер полиса</label>
                    <input type="text" class="form-control" id="ins_name" name="ins_name" value="<?php echo $data[0][30] ?>" required>
                </div>
                <div class="col-md-2">
                    <label for="ins_dateon" class="form-label">начало</label>
                    <input type="date" class="form-control" id="ins_dateon" name="ins_dateon" value="<?php echo $data[0][31] ?>" required>
                </div>
                <div class="col-md-2">
                    <label for="ins_dateoff" class="form-label">конец</label>
                    <input type="date" class="form-control" id="ins_dateoff" name="ins_dateoff" value="<?php echo $data[0][32] ?>" required>
                </div>
            </div>

            <hr class="container delimeter my-4">

            <p>Государства, в которые у предприятия имеются разрешения на въезд (дозволы) Заполняется уже перед самой поездкой</p>
            <div class="col-md-6">
                <label for="dozvol" class="form-label">Наименование документа</label>
                <input type="text" class="form-control" id="dozvol" name="dozvol" value="<?php echo $data[0][36] ?>" required>
            </div>
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="doz_date" class="form-label">Дата выдачи </label>
                    <input type="date" class="form-control" id="doz_date" name="doz_date" value="<?php echo $data[0][37] ?>" required>
                </div>
                <div class="col-md-2">
                    <label for="doz_dateon" class="form-label">Дата начала действия </label>
                    <input type="date" class="form-control" id="doz_dateon" name="doz_dateon" value="<?php echo $data[0][38] ?>" required>
                </div>
                <div class="col-md-2">
                    <label for="doz_dateoff" class="form-label">Дата окончания </label>
                    <input type="date" class="form-control" id="doz_dateoff" name="doz_dateoff" value="<?php echo $data[0][39] ?>" required>
                </div>
            </div>

            <hr class="container delimeter my-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="money" name="money" <?php if ($data[0][40]) echo 'checked'; ?>>
                <label for="money">
                Наличие непогашенных задолженностей по уплате таможенных платежей и пеней
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="dancar" name="dancar" <?php if ($data[0][41]) echo 'checked'; ?>>
                <label for="dancar">
                Разрешение на перевозку опасных грузов 
                </label>
            </div>
            <div class="col mt-2">
                <label for="permission" class="form-label" >Разрешение на перевозку грузов третьих государств (Название государств)</label>
                <input type="text" class="form-control" id="permission" name="permission" value="<?php echo $data[0][42] ?>" required>
            </div>

            <div class="sticky-bottom bg-white text-end" style="--bs-bg-opacity: .8;">
                <hr class="container delimeter mt-3">
                <button type="submit" class="btn btn-primary mx-3 mb-4">Сохранить</button>
            </div>

        </form>
    </div>
</main>