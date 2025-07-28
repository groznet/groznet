<?php include 'header.php'; ?>  


<section id="register-page" style="background: #00bcd4 url('images/register_bg.svg'); color: #ffffff">
    <div class="container">
        <div class="breadcrumb">
            <p class="mt-0">
                <a class="white-text" href="index.php">Главная</a> &#187;
                <span>Вход</span>
            </p>
            <h1 class="font-serif mb-0">Вход</h1>
        </div>
    </div>
</section>

<section class="page-section" id="login-page">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Вход в Аккаунт</h2>
                <form method="POST" class="default_form" action="login.php">
                    <label for="username">Имя пользователя</label>
                    <input type="text" required id="username" name="username" placeholder="Введите имя пользователя..">

                    <label for="password">Создайте пароль</label>
                    <input type="password" required id="password" name="password" placeholder="Придумайте пароль">
                    <input type="submit" value="Войти" style="width: auto">
                    &nbsp; &nbsp; <a href="register.php">Еще нет аккаунта?</a><br><br>
                    <a href="#">Восстановить аккаунт</a>
                </form>
            </div>
            <div class="col-md-6">
                <img width="100%" src="images/registration.jpg" alt="Создание аккаунта на GrozNet">
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>