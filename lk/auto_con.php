<?php
require_once 'content/header.php';
session_start();
require_once(__DIR__ . '/db_con/boot.php');

if (isset($_SESSION['auto'])) {
    $getData = 'SELECT * FROM tt.auto WHERE user_login = :usLogin AND auto_id = :autoId';
    $query = $pdo->prepare($getData);
    $query->execute(['usLogin' => $_SESSION['login'], 'autoId' => $_SESSION['auto']]);
    $data = $query->fetchAll();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $h = $_POST['trailer_h'];
    $l = $_POST['trailer_l'];
    $w = $_POST['trailer_w'];
    $v = $_POST['trailer_v'];
    $trailer_dim = "$h;$w;$l;$v";

    if (isset($data)) {
        $updateAuto = 'UPDATE tt.auto set
        type_auto = :type_auto,
        tnved = :tnved,
        fuel_type = :fuel_type,
        country_reg = :country_reg,
        auto_id = :auto_id,
        man_name = :man_name,
        model = :model,
        vinid = :vinid,
        engine_volume = :engine_volume,
        engine_hp = :engine_hp,
        engine_id = :engine_id,
        book_value = :book_value,
        card_numb = :card_numb,
        ecosign = :ecosign,
        date_to = :date_to,
        off_take_year = :off_take_year,
        ts_code = :ts_code,
        color = :color,
        change_auto = :change_auto,
        eco = :eco,
        trailer = :trailer,
        loadcap = :loadcap,
        axis = :axis,
        maxaxis = :maxaxis,
        trailer_reg_country = :trailer_reg_country,
        trailer_regnum = :trailer_regnum,
        trailer_man_name = :trailer_man_name,
        trailer_model = :trailer_model,
        trailer_type = :trailer_type,
        trailer_dors = :trailer_dors,
        trailer_weight = :trailer_weight,
        trailer_pneumo = :trailer_pneumo,
        trailer_vinid = :trailer_vinid,
        trailer_datecre = :trailer_datecre,
        trailer_dim = :trailer_dim,
        trailer_color = :trailer_color,
        trailer_off_country = :trailer_off_country,
        trailer_bsp = :trailer_bsp
        WHERE user_login = :usLogin AND auto_id = :autoId';

        $query = $pdo->prepare($updateAuto);
        $query->execute([
            'autoId' => $_SESSION['auto'],
            'usLogin' => $_SESSION['login'],
            'type_auto' => $_POST['type_auto'],
            'tnved' => $_POST['tnved'],
            'fuel_type' => $_POST['fuel_type'],
            'country_reg' => $_POST['country_reg'],
            'auto_id' => $_POST['auto_id'],
            'man_name' => $_POST['man_name'],
            'model' => $_POST['model'],
            'vinid' => $_POST['vinid'],
            'engine_volume' => $_POST['engine_volume'],
            'engine_hp' => $_POST['engine_hp'],
            'engine_id' => $_POST['engine_id'],
            'book_value' => $_POST['book_value'],
            'card_numb' => $_POST['card_numb'],
            'ecosign' => $_POST['ecosign'],
            'date_to' => $_POST['date_to'],
            'off_take_year' => $_POST['off_take_year'],
            'ts_code' => $_POST['ts_code'],
            'color' => $_POST['color'],
            'change_auto' => $_POST['change_auto'],
            'eco' => $_POST['eco'],
            'trailer' => $_POST['trailer'],
            'loadcap' => $_POST['loadcap'],
            'axis' => $_POST['axis'],
            'maxaxis' => $_POST['maxaxis'],
            'trailer_reg_country' => $_POST['trailer_reg_country'],
            'trailer_regnum' => $_POST['trailer_regnum'],
            'trailer_man_name' => $_POST['trailer_man_name'],
            'trailer_model' => $_POST['trailer_model'],
            'trailer_type' => $_POST['trailer_type'],
            'trailer_dors' => $_POST['trailer_dors'],
            'trailer_weight' => $_POST['trailer_weight'],
            'trailer_pneumo' => $_POST['trailer_pneumo'],
            'trailer_vinid' => $_POST['trailer_vinid'],
            'trailer_datecre' => $_POST['trailer_datecre'],
            'trailer_dim' => $trailer_dim,
            'trailer_color' => $_POST['trailer_color'],
            'trailer_off_country' => $_POST['trailer_off_country'],
            'trailer_bsp' => $_POST['trailer_bsp']
        ]);
    } else {
        $addAuto = 'INSERT INTO tt.auto (user_login, type_auto, tnved, fuel_type, country_reg, auto_id, man_name, model, vinid, engine_volume, engine_hp, engine_id, book_value, card_numb, ecosign, date_to, off_take_year, ts_code, color, change_auto, eco, trailer, loadcap, axis, maxaxis, trailer_reg_country, trailer_regnum, trailer_man_name, trailer_model, trailer_type, trailer_dors, trailer_weight, trailer_pneumo, trailer_vinid, trailer_datecre, trailer_dim, trailer_color, trailer_off_country, trailer_bsp)
        VALUES (:user_login, :type_auto, :tnved, :fuel_type, :country_reg, :auto_id, :man_name, :model, :vinid, :engine_volume, :engine_hp, :engine_id, :book_value, :card_numb, :ecosign, :date_to, :off_take_year, :ts_code, :color, :change_auto, :eco, :trailer, :loadcap, :axis, :maxaxis, :trailer_reg_country, :trailer_regnum, :trailer_man_name, :trailer_model, :trailer_type, :trailer_dors, :trailer_weight, :trailer_pneumo, :trailer_vinid, :trailer_datecre, :trailer_dim, :trailer_color, :trailer_off_country, :trailer_bsp);';
        $query = $pdo->prepare($addAuto);
        $query->execute([
            'user_login' => $_SESSION['login'],
            'type_auto' => $_POST['type_auto'],
            'tnved' => $_POST['tnved'],
            'fuel_type' => $_POST['fuel_type'],
            'country_reg' => $_POST['country_reg'],
            'auto_id' => $_POST['auto_id'],
            'man_name' => $_POST['man_name'],
            'model' => $_POST['model'],
            'vinid' => $_POST['vinid'],
            'engine_volume' => $_POST['engine_volume'],
            'engine_hp' => $_POST['engine_hp'],
            'engine_id' => $_POST['engine_id'],
            'book_value' => $_POST['book_value'],
            'card_numb' => $_POST['card_numb'],
            'ecosign' => $_POST['ecosign'],
            'date_to' => $_POST['date_to'],
            'off_take_year' => $_POST['off_take_year'],
            'ts_code' => $_POST['ts_code'],
            'color' => $_POST['color'],
            'change_auto' => $_POST['change_auto'],
            'eco' => $_POST['eco'],
            'trailer' => $_POST['trailer'],
            'loadcap' => $_POST['loadcap'],
            'axis' => $_POST['axis'],
            'maxaxis' => $_POST['maxaxis'],
            'trailer_reg_country' => $_POST['trailer_reg_country'],
            'trailer_regnum' => $_POST['trailer_regnum'],
            'trailer_man_name' => $_POST['trailer_man_name'],
            'trailer_model' => $_POST['trailer_model'],
            'trailer_type' => $_POST['trailer_type'],
            'trailer_dors' => $_POST['trailer_dors'],
            'trailer_weight' => $_POST['trailer_weight'],
            'trailer_pneumo' => $_POST['trailer_pneumo'],
            'trailer_vinid' => $_POST['trailer_vinid'],
            'trailer_datecre' => $_POST['trailer_datecre'],
            'trailer_dim' => $trailer_dim,
            'trailer_color' => $_POST['trailer_color'],
            'trailer_off_country' => $_POST['trailer_off_country'],
            'trailer_bsp' => $_POST['trailer_bsp']
        ]);
    }
    header("Refresh:0; url=auto.php");
}

?>

<div class="container p-5">
    <p class="fs-5">Транспортное средство</p>
    <hr class="container delimeter mt-1">
    <form class="was-validated px-5" method="post">
        <p class="fs-5">Данные ТС</p>
        <div class="row">
            <div class="col-md-4">
                <label for="type_auto" class="form-label">Тип ТС :</label>
                <input type="text" class="form-control" id="type_auto" name="type_auto" value="<?php if (isset($data)) echo $data[0][1]; ?>" required>
            </div>
            <div class="col-md-3">
                <label for="tnved" class="form-label">Код по ТН ВЭД :</label>
                <input type="text" class="form-control" id="tnved" name="tnved" value="<?php if (isset($data)) echo $data[0][2]; ?>" pattern="^.{,10}$" required>
            </div>
            <div class="col-md-3">
                <label for="auto_id" class="form-label">Госномер :</label>
                <input type="text" class="form-control" id="auto_id" name="auto_id" value="<?php if (isset($data)) echo $data[0][5]; ?>" pattern="^.{,10}$" required>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <label for="fuel_type" class="form-label">Тип топлива :</label>
                <input type="text" class="form-control" id="fuel_type" name="fuel_type" value="<?php if (isset($data)) echo $data[0][3]; ?>" attern="^.{,5}$" required>
            </div>
            <div class="col-md-2">
                <label for="country_reg" class="form-label">Страна регистрации :</label>
                <input type="text" class="form-control" id="country_reg" name="country_reg" value="<?php if (isset($data)) echo $data[0][4]; ?>" attern="^.{,3}$" required>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-3">
                <label for="man_name" class="form-label">Фирма производитель :</label>
                <input type="text" class="form-control" id="man_name" name="man_name" value="<?php if (isset($data)) echo $data[0][6]; ?>" required>
            </div>
            <div class="col-md-4">
                <label for="model" class="form-label">Модель :</label>
                <input type="text" class="form-control" id="model" name="model" value="<?php if (isset($data)) echo $data[0][7]; ?>" required>
            </div>
        </div>
        <div class="col-md-4 mt-3 mb-4">
            <label for="vinid" class="form-label">VIN :</label>
            <input type="text" class="form-control" id="vinid" name="vinid" value="<?php if (isset($data)) echo $data[0][8]; ?>" required>
        </div>

        <div class="row mt-1">
            <div class="col-md-4">
                <label for="engine_volume" class="form-label">Рабочий объем двигателя :</label>
                <input type="text" class="form-control" id="engine_volume" name="engine_volume" value="<?php if (isset($data)) echo $data[0][9]; ?>" required>
            </div>
            <div class="col-md-2">
                <label for="engine_hp" class="form-label">Мощность :</label>
                <input type="number" class="form-control" id="engine_hp" name="engine_hp" value="<?php if (isset($data)) echo $data[0][10]; ?>" required>
            </div>
            <div class="col-md-4">
                <label for="engine_id" class="form-label">Номер двигателя :</label>
                <input type="text" class="form-control" id="engine_id" name="engine_id" value="<?php if (isset($data)) echo $data[0][11]; ?>" attern="^.{,10}$" required>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-3">
                <label for="book_value" class="form-label">Балансовая стоимость автомобиля:</label>
                <input type="number" class="form-control" id="book_value" name="book_value" value="<?php if (isset($data)) echo $data[0][12]; ?>" required>
            </div>
            <div class="col-md-4">
                <label for="card_numb" class="form-label">Номер ПТС:</label>
                <input type="text" class="form-control" id="card_numb" name="card_numb" value="<?php if (isset($data)) echo $data[0][13]; ?>" attern="^.{,20}$" required>
            </div>
        </div>
        <div class="col-md-4 mt-3">
            <label for="ecosign" class="form-label">Наличие знака, соответствующего определенным экологическим требованиям:</label>
            <input type="text" class="form-control" id="ecosign" name="ecosign" value="<?php if (isset($data)) echo $data[0][14]; ?>" pattern="^.{1,1}$" required>
        </div>
        <div class="row mt-3">
            <div class="col-md-3">
                <label for="date_to" class="form-label">Дата последнего ТО:</label>
                <input type="date" class="form-control" id="date_to" name="date_to" value="<?php if (isset($data)) echo $data[0][15]; ?>" required>
            </div>
            <div class="col-md-3">
                <label for="off_take_year" class="form-label">Дата выпуска:</label>
                <input type="date" class="form-control" id="off_take_year" name="off_take_year" value="<?php if (isset($data)) echo $data[0][16]; ?>" required>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-md-2">
                <label for="ts_code" class="form-label">Категория ТС:</label>
                <input type="text" class="form-control" id="ts_code" name="ts_code" value="<?php if (isset($data)) echo $data[0][17]; ?>" attern="^.{,1}$" required>
            </div>
            <div class="col-md-3">
                <label for="color" class="form-label">Цвет :</label>
                <input type="text" class="form-control" id="color" name="color" value="<?php if (isset($data)) echo $data[0][18]; ?>" attern="^.{,10}$" required>
            </div>
            <div class="col-md-2">
                <label for="eco" class="form-label">Категория ЭКО :</label>
                <input type="text" class="form-control" id="eco" name="eco" value="<?php if (isset($data)) echo $data[0][20]; ?>" attern="^.{,10}$" required>
            </div>
        </div>
        <div class="col mt-3">
            <label for="change_auto" class="form-label">Особые отметки о внесении изменений в конструкцию транспортного средства :</label>
            <textarea class="form-control" id="change_auto" name="change_auto" required><?php if (isset($data)) echo $data[0][19]; ?></textarea>
        </div>

        <hr class="container delimeter mt-3">
        <p class="fs-5">Данные прицепа</p>
        <div class="col-md-5 mt-3">
            <label for="trailer" class="form-label">Тип используемого прицепа :</label>
            <input type="text" class="form-control" id="trailer" name="trailer" value="<?php if (isset($data)) echo $data[0][21]; ?>" attern="^.{,10}$" required>
        </div>
        <div class="row mt-3">
            <div class="col-md-3">
                <label for="loadcap" class="form-label">Грузоподъемность:</label>
                <input type="text" class="form-control" id="loadcap" name="loadcap" value="<?php if (isset($data)) echo $data[0][22]; ?>" required>
            </div>
            <div class="col-md-2">
                <label for="axis" class="form-label">Количество осей :</label>
                <input type="text" class="form-control" id="axis" name="axis" value="<?php if (isset($data)) echo $data[0][23]; ?>" required>
            </div>
            <div class="col-md-3">
                <label for="maxaxis" class="form-label">Допустимая нагрузка на ось :</label>
                <input type="text" class="form-control" id="maxaxis" name="maxaxis" value="<?php if (isset($data)) echo $data[0][24]; ?>" required>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <label for="trailer_regnum" class="form-label">Госномер:</label>
                <input type="text" class="form-control" id="trailer_regnum" name="trailer_regnum" value="<?php if (isset($data)) echo $data[0][26]; ?>" attern="^.{,10}$" required>
            </div>
            <div class="col-md-3">
                <label for="trailer_reg_country" class="form-label">Страна регистрации:</label>
                <input type="text" class="form-control" id="trailer_reg_country" name="trailer_reg_country" value="<?php if (isset($data)) echo $data[0][25]; ?>" attern="^.{,5}$" required>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <label for="trailer_man_name" class="form-label">Фирма производитель:</label>
                <input type="text" class="form-control" id="trailer_man_name" name="trailer_man_name" value="<?php if (isset($data)) echo $data[0][27]; ?>" required>
            </div>
            <div class="col-md-4">
                <label for="trailer_model" class="form-label">Модель:</label>
                <input type="text" class="form-control" id="trailer_model" name="trailer_model" value="<?php if (isset($data)) echo $data[0][28]; ?>" required>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <label for="trailer_type" class="form-label">Тип:</label>
                <input type="text" class="form-control" id="trailer_type" name="trailer_type" value="<?php if (isset($data)) echo $data[0][29]; ?>" required>
            </div>
            <div class="col-md-2">
                <label for="trailer_dors" class="form-label">Кол-во дверей:</label>
                <input type="text" class="form-control" id="trailer_dors" name="trailer_dors" value="<?php if (isset($data)) echo $data[0][30]; ?>" required>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <label for="trailer_weight" class="form-label">Масса в снаряженном состоянии:</label>
                <input type="text" class="form-control" id="trailer_weight" name="trailer_weight" value="<?php if (isset($data)) echo $data[0][31]; ?>" required>
            </div>
            <div class="col-md-4">
                <label for="trailer_pneumo" class="form-label">Использование пневмоподушек:</label>
                <input type="text" class="form-control" id="trailer_pneumo" name="trailer_pneumo" value="<?php if (isset($data)) echo $data[0][32]; ?>" attern="^.{,1}$" required>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <label for="trailer_vinid" class="form-label">VIN:</label>
                <input type="text" class="form-control" id="trailer_vinid" name="trailer_vinid" value="<?php if (isset($data)) echo $data[0][33]; ?>" required>
            </div>
            <div class="col-md-2">
                <label for="trailer_datecre" class="form-label">Дата выпуска:</label>
                <input type="date" class="form-control" id="trailer_datecre" name="trailer_datecre" value="<?php if (isset($data)) echo $data[0][34]; ?>" required>
            </div>
        </div>
        <p>Габариты</p>
        <?php if (isset($data)) $p = explode(";", $data[0][35]); ?>
        <div class="row mt-3">
            <div class="col-md-2">
                <label for="trailer_h" class="form-label">Высота:</label>
                <input type="text" class="form-control" id="trailer_h" name="trailer_h" value="<?php if (isset($data)) echo $p[0]; ?>" required>
            </div>
            <div class="col-md-2">
                <label for="trailer_w" class="form-label">Ширина:</label>
                <input type="text" class="form-control" id="trailer_w" name="trailer_w" value="<?php if (isset($data)) echo $p[1]; ?>" required>
            </div>
            <div class="col-md-2">
                <label for="trailer_l" class="form-label">Длинна:</label>
                <input type="text" class="form-control" id="trailer_l" name="trailer_l" value="<?php if (isset($data)) echo $p[2]; ?>" required>
            </div>
            <div class="col-md-2">
                <label for="trailer_v" class="form-label">Объем:</label>
                <input type="text" class="form-control" id="trailer_v" name="trailer_v" value="<?php if (isset($data)) echo $p[3]; ?>" required>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-3">
                <label for="trailer_color" class="form-label">Цвет:</label>
                <input type="text" class="form-control" id="trailer_color" name="trailer_color" value="<?php if (isset($data)) echo $data[0][36]; ?>" attern="^.{,10}$" required>
            </div>
            <div class="col-md-2">
                <label for="trailer_off_country" class="form-label">Страна выпуска:</label>
                <input type="text" class="form-control" id="trailer_off_country" name="trailer_off_country" value="<?php if (isset($data)) echo $data[0][37]; ?>" attern="^.{,5}$" required>
            </div>
            <div class="col-md-3">
                <label for="trailer_bsp" class="form-label">Балансовая стоимость:</label>
                <input type="number" class="form-control" id="trailer_bsp" name="trailer_bsp" value="<?php if (isset($data)) echo $data[0][38]; ?>" required>
            </div>
        </div>
        <div class="sticky-bottom bg-white text-end" style="--bs-bg-opacity: .8;">
            <hr class="container delimeter mt-3">
            <button type="submit" class="btn btn-primary mx-3 mb-4">Сохранить</button>
        </div>
    </form>
</div>