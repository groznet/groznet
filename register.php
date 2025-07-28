<?php include 'header.php'; ?>  
    
<style>
    /* Individual pages may overwrite general pages/section/header styles */

</style>

<section id="register-page" style="background: #00bcd4 url('images/register_bg.svg'); color: #ffffff">

    <div class="container">
        <div class="breadcrumb">
            <p class="mt-0">
                <a class="white-text" href="index.php">Главная</a> &#187;
                <span>Регистрация</span>
            </p>
            <h1 class="font-serif mb-0">Регистрация</h1>
        </div>       
    </div>
</section>

<section class="page-section" id="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h2>Создание Аккаунта</h2>
                <p>Зарегистрируйтесь сейчас! Это бесплатно. Регистрация позволит вам получить доступ к дополнительным функциям и преимуществам нашего сайта. Создайте свой аккаунт прямо сейчас.</p>

                <form method="POST" class="space-between" style="height: 600px;">
                    <label for="username">Имя пользователя</label>
                    <input type="text" required id="username" name="username" placeholder="Введите имя пользователя..">

                    <label for="email">Ваш Email</label>
                    <input type="email" required id="email" name="email" placeholder="Введите ваш email..">

                    <label for="password">Создайте пароль</label>
                    <input type="password" required id="password" name="password" placeholder="Придумайте пароль">

                    <label for="password2">Потвердите пароль</label>
                    <input type="password" required id="password2" name="password_confirmation" placeholder="Повторите пароль">

                    <label for="department">Отдел</label>
                    <select required id="department" name="department">
                        <option value="australia">Разработка сайта</option>
                        <option value="usa">Обслуживание</option>
                        <option value="usa">Консультация</option>
                        <option value="usa">Другой</option>
                    </select>

                    <label for="firstname">Имя</label>
                    <input type="text" required id="firstname" name="firstname" placeholder="Ваше Имя">

                    <label for="lastname">Фамилия</label>
                    <input type="text" required id="lastname" name="lastname" placeholder="Ваша Фамилия">

                    <label for="subject">О Себе</label>
                    <textarea required id="subject" name="subject" placeholder="Введите ваше сообщение.." style="height:170px">
                            
                    </textarea>
                    <input type="submit" value="Создать Аккаунт" style="width: auto">
                    &nbsp; &nbsp; <a href="login.php">Уже есть аккаунт?</a>
                </form>
            </div>
            <div class="col-md-6">
                <img width="100%" src="images/registration.jpg" alt="Создание аккаунта на GrozNet">
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>