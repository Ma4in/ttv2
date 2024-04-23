<footer>
    <div class="container bg-secondary-subtle rounded mb-3">
        <div class="row">
            <div class="col mx-5 my-3">
                <p class="fw-medium fs-5">Контакты</p>
                <p><button type="button" class="btn"
                        data-bs-toggle="popover" data-bs-placement="right"
                        data-bs-custom-class="custom-popover"
                        data-bs-content="Офис :
                        example@tamga.ru 
                        Поддержка :
                        support_example@tamga.ru">
                Почта
                </button></p>
                <p><button type="button" class="btn"
                        data-bs-toggle="popover" data-bs-placement="right"
                        data-bs-custom-class="custom-popover"
                        data-bs-content="Основной :
                        +7 999-999-99-99
                        Резервный :
                        +7 999-999-99-99">
                Телефон
                </button></p>
                <p><button type="button" class="btn"
                        data-bs-toggle="popover" data-bs-placement="right"
                        data-bs-custom-class="custom-popover"
                        data-bs-content="Офис :
                        344019, Ростовская область,
                        город Ростов-на-Дону,
                        ул. Каяни, д.3">
                Адрес
                </button></p>
            </div>
            <div class="col mx-5 my-3">
                <p class="fw-medium fs-5">Таможенные режимы</p>
                <p><a href="#" class="text-reset text-decoration-none">Экспорт / Импорт</a></p>
                <p><a href="#" class="text-reset text-decoration-none">Транзит</a></p>
                <p><a href="#" class="text-reset text-decoration-none">Временный ввоз / вывоз</a></p>
                <p><a href="#" class="text-reset text-decoration-none">Таможенное сопровождение</a></p>
                <p><a href="#" class="text-reset text-decoration-none">Перевозка сборных грузов</a></p>
                <p><a href="#" class="text-reset text-decoration-none">Мультимодальные перевозки</a></p>
                
            </div>
            <div class="col mx-5 my-3">
                <p class="fw-medium fs-5">Вопросы и ответы</p>
                <p><a href="#" class="text-reset text-decoration-none">Часто задаваемые вопосы</a></p>
                <p><a href="#" class="text-reset text-decoration-none">Оставить свой вопрос</a></p>
            </div>
            <div class="col mx-5 my-3">
                <p><a href="#" class="text-reset text-decoration-none fw-medium fs-5">Вакансии</a></p>
                <p><a href="#" class="text-reset text-decoration-none fw-medium fs-5">Документы</a></p>
                <p><a href="#" class="text-reset text-decoration-none fw-medium fs-5">Политика приватности</a></p>
                <a href="" download="">
                    <button type="button" class="btn btn-light text-left">
                        <div class="row">
                            <div class="col"><p class="mb-1 col">Скачать<br>приложение</p></div>
                            <div class="col"><img src="../assets/res/apk.png" alt="..." style="height: 3.5rem;"></div>
                        </div>
                    </button>
                </a>
            </div>
        </div>
    </div>
</footer>
<script>
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
</script>
</body>

</html>