<?php include 'header.php'; ?>

<section id="contact-page" style="background: #00bcd4 url('images/contact-pattern-bg.png'); color: #ffffff;">
    <div class="container">
        <div class="breadcrumb">
            <p class="mt-0">
                <a class="white-text" href="index.php">Главная</a> &#187;
                <span>Контакты</span>
            </p>
            <h2 class="font-serif mb-0">Контакты</h2>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <p>Если у Вас остались ещё какие-либо вопросы к нам — мы с удовольствием на них ответим! Для этого позвоните нам по телефону: 8(929)-888-33-27, или напишите письмо на info@groznet.com, или отправьте нам пиьсмо через форму ниже.</p>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2440.750374436978!2d45.68218572287002!3d43.3235173723845!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sru!4v1667738654524!5m2!1sen!2sru" width="600" height="435" style="border:0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div class="">
                <form method="POST">
                    <label class="w-full" for="fname">Ваше имя</label>
                    <input class="w-full mb-4" type="text" required id="fname" name="fname" placeholder="Введите ваше имя..">

                    <label class="w-full" for="email">Ваш Email</label>
                    <input class="w-full mb-4" type="email" required id="email" name="email" placeholder="Введите ваш email..">

                    <label class="w-full" for="department">Отдел</label>
                    <select class="w-full mb-4" required id="department" name="department">
                        <option value="australia">Разработка сайта</option>
                        <option value="usa">Обслуживание</option>
                        <option value="usa">Консультация</option>
                        <option value="usa">Другой</option>
                    </select>

                    <label class="w-full" for="subject">Сообщение</label>
                    <textarea class="w-full mb-4" required id="subject" name="subject" placeholder="Введите ваше сообщение.." style="height:165px"></textarea>

                    <!-- reCAPTCHA v2 checkbox -->
                    <div class="g-recaptcha" data-sitekey="6LemYY0qAAAAAHnCaga5OsuPUZ6qcC65pJNJBmNw"></div>

                    <input type="submit" value="Отправить">
                </form>
            </div>
        </div>
    </div>        
</section>

<!-- FOOTER -->
<?php include 'footer.php'; ?>