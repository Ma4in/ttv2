<?php
require_once 'content/header.php';
?>

<main>
    <div class="container text-center py-5">
        <form action="/mailer/send_mail.php" method="post" class="b-box mx-auto align-middle d-inline-block p-3 my-5">
            <p href="">Оставьте заявку на регистрацию</p>
            <p>
                <input class="form_field" type="text" name="surname" placeholder="Фамилия" pattern="^.{3,}$" required>
            </p>
            <p>
                <input class="form_field" type="text" name="firstname" placeholder="Имя" pattern="^.{3,}$" required>
            </p>
            <p>
                <input class="form_field" type="text" name="lastname" placeholder="Отчество (При наличии)">
            </p>
            <p>
                <input class="form_field" type="email" name="email" placeholder="Электронная почта" required>
            </p>
            <p>
                <input class="form_field" type="text" name="org_name" placeholder="Наименование организации" pattern="^.{3,}$" required>
            </p>
            <p>
                <input class="form_field" type="number" name="inn" placeholder="ИНН организации" pattern="^\d{5,}$" required>
            </p>
            <p>
            <p id="form_e" hidden>Заполните форму корректно</p>
            Отправляя заявку вы соглашаетесь на <br><a href="assets/docs/personal_data.pdf">обработку персональных данных</a>
            <p></p>
            </p>
            <p>
                <input class="btn btn-primary" type="submit" name="send" value="Отправить" id="confirm_but" disabled>
            </p>
        </form>

        <script src="assets/js/reg.js"></script>
    </div>
</main>

<?php
require_once 'content/footer.php';
?>