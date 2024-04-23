<?php
require_once 'content/header.php';
?>

<main>
    <div class="container c_banner_img">
        <p class="z-1 ps-6 pt-5 fs-2 c_font_otl">
            Транспортировка и <br> отслеживание <br> таможенных грузов
        </p>
        <div>
            <div class="row align-items-center text-center mx-5 mt-5">
                <div class="col b-box mx-5 my-3">
                    <img src="/assets/res/bb1.png" alt="..." style="height: 2rem;" class="my-2">
                    <p>Экспор\Импорт</p>
                </div>
                <div class="col b-box mx-5 my-3">
                    <img src="/assets/res/bb2.png" alt="..." style="height: 2rem;" class="my-2">
                    <p>Отслеживание</p>
                </div>
                <div class="col b-box mx-5 my-3">
                    <img src="/assets/res/bb3.png" alt="..." style="height: 2rem;" class="my-2">
                    <p>Транзит</p>
                </div>
                <div class="col b-box mx-5 my-3">
                    <img src="/assets/res/bb4.png" alt="..." style="height: 2rem;" class="my-2">
                    <p>Аренда пломбы</p>
                </div>
            </div>
        </div>
    </div>

    <hr class="container delimeter">

    <div class="container">
        <p class="fs-5 ms-5 fw-semibold">Наши преимущества</p>

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="4000">
                    <div class="row mx-3">
                        <div class="col clearfix b-box p-2 mx-2">
                            <img src="/assets/res/sl1.png" class="sl_img col-md-6 float-md-end mb-3 ms-md-3" alt="...">
                            <p class="fs-5">Многозадачное<br> использование</p>
                            <p>
                                Возможность осуществлять
                                перевозку сборных грузов
                                в интересах разных
                                грузополучателей.
                            </p>
                        </div>
                        <div class="col clearfix b-box p-2 mx-2">
                            <img src="/assets/res/sl2.png" class="sl_img col-md-6 float-md-end mb-3 ms-md-3" alt="...">
                            <p class="fs-5">Наличие защищенного <br>канала передачи данных</p>
                            <p>
                                Данные от информационного
                                оператора непосредственно
                                поступают в ЕАИС ФТС России
                                через защищенный канал связи.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <div class="row mx-3">
                        <div class="col clearfix b-box p-2 mx-2">
                            <img src="/assets/res/sl3.png" class="sl_img col-md-6 float-md-end mb-3 ms-md-3" alt="...">
                            <p class="fs-5">Гарантия сбора <br>таможенных платежей</p>
                            <p>
                                Возможность загрузки фото/видео,
                                загружаемых/выгружаемых товаров.
                                Подкрепления к перевозке
                                подтверждающих документов
                                об уплате сборов и пошлин.
                            </p>
                        </div>
                        <div class="col clearfix b-box p-2 mx-2">
                            <img src="/assets/res/sl4.png" class="sl_img col-md-6 float-md-end mb-3 ms-md-3" alt="...">
                            <p class="fs-5">Бесшовная <br>логистика</p>
                            <p>
                                Возможность производить
                                мультимодальные перевозки,
                                в том числе - автотранспорт
                                - ж.д. перевозчик;
                                автотранспорт-судно
                                (речные перевозки) без наличия
                                обеспечительных мер.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Prev</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <hr class="container delimeter mt-5">
    <div class="container">
        <p class="fs-5 ms-5 fw-semibold">Наши партнеры</p>
        <div class="text-center row">
            <div class="col mx-5 my-3">
                <img src="/assets/res/par1.png" alt="..." style="height: 7rem;" class="my-2">
                <p>ФТС</p>
            </div>
            <div class="col mx-5 my-3">
                <img src="/assets/res/par2.png" alt="..." style="height: 7rem;" class="my-2">
                <p>ЦИТТУ</p>
            </div>
            <div class="col mx-5 my-3">
                <img src="/assets/res/par3.png" alt="..." style="height: 7rem;" class="my-2">
                <p>ИНГОССТРАХ</p>
            </div>
            <div class="col mx-5 my-3">
                <img src="/assets/res/par4.png" alt="..." style="height: 7rem;" class="my-2">
                <p>МТС</p>
            </div>
        </div>
    </div>
    <hr class="container delimeter mt-5">

</main>

<?php
require_once 'content/footer.php';
?>