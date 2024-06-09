<?php
require_once 'content/header.php';
session_start();
require_once(__DIR__ . '/db_con/boot.php');

$getData = 'SELECT * FROM tt.auto WHERE user_login = :usLogin AND auto_id = :autoId';
$query = $pdo->prepare($getData);
$query->execute(['usLogin' => $_SESSION['login'], 'autoId' => $_SESSION['auto']]);
$data = $query->fetchAll();
?>

<main class="container p-5">
    <div class="px-5">
        <p class="fs-5">Транспортное средство</p>
        <hr class="container delimeter mt-1">
        <div class="b-box mx-5 p-4">
            <div class="row mb-3">
                <div class="col-md-4">
                    Тип ТС : <b><?php echo $data[0][1] ?></b>
                </div>
                <div class="col">
                    Код по ТН ВЭД : <b><?php echo $data[0][2] ?></b>
                </div>
                <div class="col">
                    Госномер : <b><?php echo $data[0][5] ?></b>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    Тип топлива : <b><?php echo $data[0][3] ?></b>
                </div>
                <div class="col">
                    Страна регистрации : <b><?php echo $data[0][4] ?></b>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    Фирма производитель : <b><?php echo $data[0][6] ?></b>
                </div>
                <div class="col">
                    Модель : <b><?php echo $data[0][7] ?></b>
                </div>
            </div>
            <p>VIN : <b><?php echo $data[0][8] ?></b></p>
            <hr class="container delimeter mt-1">
            <div class="row mb-3">
                <div class="col-md-4">
                    Рабочий объем двигателя : <b><?php echo $data[0][9] ?></b> см. куб.
                </div>
                <div class="col-md-3">
                    Мощность : <b><?php echo $data[0][10] ?></b> лс.
                </div>
                <div class="col-md-3">
                    Номер двигателя : <b><?php echo $data[0][11] ?></b>
                </div>
            </div>
            <hr class="container delimeter mt-1">
            <div class="row mb-3">
                <div class="col-md-5">
                    Балансовая стоимость автомобиля : <b><?php echo $data[0][12] ?></b>
                </div>
                <div class="col">
                    Номер ПТС : <b><?php echo $data[0][13] ?></b>
                </div>
            </div>
            <p>
                Наличие знака, соответствующего определенным экологическим требованиям : <b><?php echo $data[0][14] ?></b>
            </p>
            <div class="row mb-3">
                <div class="col-md-4">
                    Дата последнего ТО : <b><?php echo $data[0][15] ?></b>
                </div>
                <div class="col">
                    Дата выпуска : <b><?php echo $data[0][16] ?></b>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3">
                    Категория ТС: <b><?php echo $data[0][17] ?></b> 
                </div>
                <div class="col-md-3">
                    Цвет : <b><?php echo $data[0][18] ?></b>
                </div>
                <div class="col-md-3">
                    Категория ЭКО : <b><?php echo $data[0][20] ?></b>
                </div>
            </div>
            <p>
                Особые отметки о внесении изменений в конструкцию транспортного средства : <b><?php echo $data[0][19] ?></b>
            </p>
        </div>
        <p class="fs-5 mt-3">Прицеп</p>
        <hr class="container delimeter mt-1">
        <div class="b-box mx-5 p-4">
            <p>Тип используемого полуприцепа/прицепа : <b><?php echo $data[0][21] ?></b></p>
            <div class="row mb-3">
                <div class="col-md-4">
                    Грузоподъемность : <b><?php echo $data[0][22] ?></b> кг.
                </div>
                <div class="col-md-3">
                    Количество осей : <b><?php echo $data[0][23] ?></b>
                </div>
                <div class="col-md-4">
                    Допустимая нагрузка на ось : <b><?php echo $data[0][24] ?></b> кг.
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    Госномер : <b><?php echo $data[0][26] ?></b>
                </div>
                <div class="col-md-4">
                    Страна регистрации : <b><?php echo $data[0][25] ?></b>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    Фирма производитель : <b><?php echo $data[0][27] ?></b>
                </div>
                <div class="col-md-4">
                    Модель : <b><?php echo $data[0][28] ?></b>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    Тип : <b><?php echo $data[0][29] ?></b>
                </div>
                <div class="col-md-4">
                    Кол-во дверей : <b><?php echo $data[0][30] ?></b>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-5">
                    Масса в снаряженном состоянии : <b><?php echo $data[0][31] ?></b> кг.
                </div>
                <div class="col-md-4">
                    Использование пневмоподушек : <b><?php echo $data[0][32] ?></b>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-5">
                    VIN : <b><?php echo $data[0][33] ?></b>
                </div>
                <div class="col-md-4">
                    Дата выпуска : <b><?php echo $data[0][34] ?></b>
                </div>
            </div>
            <p>Габариты : <br>
                <?php
                $p = explode(";", $data[0][35]);
                echo "Высота : <b>$p[0]</b> м.;   Ширина <b>$p[1]</b> м. ;  Длинна <b>$p[2]</b> м.; Объем <b>$p[3]</b> м. куб.;" ?>
            </p>
            <div class="row mb-3">
                <div class="col-md-4">
                    Цвет : <b><?php echo $data[0][36] ?></b>
                </div>
                <div class="col-md-4">
                    Страна выпуска : <b><?php echo $data[0][37] ?></b>
                </div>
            </div>
            <p>Балансовая стоимость : <b><?php echo $data[0][38] ?></b></p>
        </div>
        <div class="sticky-bottom bg-white text-end" style="--bs-bg-opacity: .8;">
            <hr class="container delimeter mt-3">
            <a href="auto_con.php"><button type="submit" class="btn btn-secondary mx-3 mb-4">Изменить</button></a>
        </div>
    </div>
</main>