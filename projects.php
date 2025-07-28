<?php include 'header.php'; ?>

<style>
    /* Individual pages may overwrite general pages/section/header styles */

    /* Portfolio cat tabs style */
    #portfolio-section .btn {
        color: #444;
        background: linear-gradient(to top, #eaeaea 0, #fff 100%);
        border-bottom: 1px solid rgb(0 0 0 / 12%)
    }

    /* Portfolio active/hover cat tabs style */
    #portfolio-section .btn.active,
    #portfolio-section .btn:hover {
        background: linear-gradient(to bottom, #eaeaea 0, #fff 100%);
        border-bottom: none
    }
    
</style>

<section id="portfolio-section" style="background: #03a9f4 url(images/patterns/icons_pattern.png); background-size: 200px; color: #ffffff;">
    <div class="container">
        <div class="breadcrumb">
            <p class="mt-0">
                <a class="white-text" href="index.php">Главная</a> &#187;
                <span>Портфолио</span>
            </p>
            <h2 class="font-serif mb-0">Наши Проекты</h2>
        </div>
    </div>
</section>

<!-- Portfolio section -->
<section class="page-section" id="portfolio-section">
    <div class="container">
        <div id="myBtnContainer" class="section-header">
            <h1 class="text-center font-serif">Последние Работы</h1>
            <div class="text-center">
                <button class="btn active" onclick='filterSelection("all-sites")'>Все проекты</button>
                <button class="btn" onclick='filterSelection("ecommerce-sites")'>Интернет магазины</button>
                <button class="btn" onclick='filterSelection("catalog-sites")'>Каталоги</button>
                <button class="btn" onclick='filterSelection("portal-sites")'>Информационные порталы</button>
                <button class="btn" onclick='filterSelection("corporate-sites")'>Корпоративные</button>
            </div>
        </div>
        <br>
        <br>
        <div class="section-grid grid grid-cols-2 grid-cols-3 gap-4">

            <div class="grid-item project p-4 ecommerce-sites">
                <img class="w-full" alt="Магазин автозапчастей DaimZap" src="images/portfolio/ecommerce/Магазин-автозапчастей-DaimZap.jpg">
                <p>Магазин автозапчастей DaimZap</p>
                <a href="https://daimzap.ru/">Перейти</a>
            </div>

            <div class="grid-item project p-4 portal-sites">
                <img class="w-full" alt="Интелектуальный-Кавказ" src="images/portfolio/portals/Интелектуальный-Кавказ.jpg">
                <p>Интелектуальный Кавказ</p>
                <a href="https://intelkavkaz.ru/">Перейти</a>
            </div>

            <div class="grid-item project p-4 ecommerce-sites">
                <img class="w-full" alt="Электроника и аксессуары Luna95" src="images/portfolio/ecommerce/Электроника-и-аксессуары-Luna95.jpg">
                <p>Электроника и аксессуары Luna95</p>
                <a href="https://luna95.ru/">Перейти</a>
            </div>

            <div class="grid-item project p-4 portal-sites">
                <img class="w-full" alt="Вахта Памяти Терский Рубеж" src="images/portfolio/portals/Вахта-Памяти-Терский-Рубеж.jpg">
                <p>Вахта Памяти Терский Рубеж</p>
                <a href="https://terskiyrubezh.ru">Перейти</a>
            </div>

            <div class="grid-item project p-4 corporate-sites">
                <img class="w-full" alt="Благотворительный фонд Адам" src="images/portfolio/corporate/Благотворительный-фонд-Адам.jpg">
                <p>Благотворительный фонд Адам</p>
                <a href="https://adamfond.com">Перейти</a>
            </div>

            <div class="grid-item project p-4 ecommerce-sites">
                <img class="w-full" alt="Магазин женской одежды Dagmara" src="images/portfolio/ecommerce/Магазин-женской-одежды-Dagmara.jpg">
                <p>Магазин женской одежды Dagmara</p>
                <a href="https://dagmara.ru/">Перейти</a>
            </div>

            <div class="grid-item project p-4 corporate-sites">
                <img class="w-full" alt="Инженерная Академия InTechAcad" src="images/portfolio/corporate/Инженерная-Академия-InTechAcad.jpg">
                <p>Инженерная Академия InTechAcad</p>
                <a href="https://intechacad.ru/">Перейти</a>
            </div>

            <div class="grid-item project p-4 catalog-sites">
                <img class="w-full" alt="Мебельный магазин Samara95" src="images/portfolio/catalog/Мебельный магазин Samara95.jpg">
                <p>Мебельный магазин Samara95</p>
                <a href="https://samara95.ru/">Перейти</a>
            </div>

            <div class="grid-item project p-4 corporate-sites">
                <img class="w-full" alt="Сайт - Оплаты обучения ЧГПУ" src="images/portfolio/corporate/DNK-Labs.jpg">
                <p>Клиническая диагностика DNK-Labs</p>
                <a href="https://dnk-labs.ru/">Перейти</a>
            </div>

            <div class="grid-item project p-4 catalog-sites">
                <img class="w-full" alt="Автоматические ворота ЭлитВорота" src="images/portfolio/catalog/Автоматические-ворота-ЭлитВорота.jpg">
                <p>Автоматические ворота ЭлитВорота</p>
                <a href="https://elitvorota.com/">Перейти</a>
            </div>

            <div class="grid-item project p-4 corporate-sites">
                <img class="w-full" alt="Медресе Аль-Худа" src="images/portfolio/corporate/Медресе-Аль-Худа.jpg">
                <p>Медресе Аль-Худа</p>
                <a href="https://al-huda.ru/">Перейти</a>
            </div>

            <div class="grid-item project p-4 corporate-sites">
                <img class="w-full" alt="GovzaIT" src="images/portfolio/corporate/GovzaIt.jpg">
                <p>GovzaIT</p>
                <a href="https://govzait.ru/">Перейти</a>
            </div>
            
            <div class="grid-item project p-4 ecommerce-sites">
                <img class="w-full" alt="Магазин парфюмерии Alfiya" src="images/portfolio/ecommerce/Магазин-парфюмерии-Alfiya.jpg">
                <p>Магазин парфюмерии Alfiya</p>
                <a href="https://alfiyaperfume.ru/">Перейти</a>
            </div>

            <div class="grid-item project p-4 corporate-sites">
                <img class="w-full" alt="Компьютерные курсы SD95" src="images/portfolio/corporate/Компьютерные-курсы-SD95.jpg">
                <p>Компьютерные курсы SD95</p>
                <a href="https://sd95.ru/">Перейти</a>
            </div>

            <!-- <div class="grid-item project p-4 corporate-sites">
                <img class="w-full" alt="Магазин косметики Zara" src="images/portfolio/ecommerce/Магазин косметики Zara.jpg">
                <p>HotelChechen Гостиница в Чечне</p>
                <a href="https://hotelchechen.ru/">Перейти</a>
            </div> -->

            <div class="grid-item project p-4 ecommerce-sites">
                <img class="w-full" alt="Магазин косметики Zara" src="images/portfolio/ecommerce/Магазин косметики Zara.jpg">
                <p>Магазин косметики Zara</p>
                <a href="https://zaracosmet.ru/">Перейти</a>
            </div>

            <div class="grid-item project p-4 catalog-sites">
                <img class="w-full" alt="DoorsCorp - Дверные решения" src="images/portfolio/catalog/Магазин дверей DoorsCorp.jpg">
                <p>DoorsCorp - Дверные решения</p>
                <a href="https://doorscorp.ru/">Перейти</a>
            </div>

            <div class="grid-item project p-4 corporate-sites">
                <img class="w-full" alt="VainakhCorp - Logistics company" src="images/portfolio/corporate/VainakhCorp.jpg">
                <p>VainakhCorp - Logistics company</p>
                <a href="https://www.vainakhcorp.com">Перейти</a>
            </div>

            <div class="grid-item project p-4 portal-sites">
                <img class="w-full" alt="МАОО Национальный Совет" src="images/portfolio/portals/МАОО Национальный Совет.jpg">
                <p>МАОО Национальный Совет</p>
                <a href="https://nacsovet.ru/">Перейти</a>
            </div>

            <div class="grid-item project p-4 corporate-sites">
                <img class="w-full" src="images/portfolio/corporate/Медресе NajahRoom.jpg">
                <p>NajahRoom - Исламский образ. центр</p>
                <a href="https://najahroom.ru/">Перейти</a>
            </div>

            <div class="grid-item project p-4 corporate-sites">
                <img class="w-full" src="images/portfolio/corporate/ITCHR.jpg">
                <p>ITCHR - Услуги для игровых клубов</p>
                <a href="https://itchr.ru/">Перейти</a>
            </div>

            <div class="grid-item project p-4 corporate-sites">
                <img class="w-full" alt="Аренда авто в Грозном - RentCar95" src="images/portfolio/corporate/Аренда авто RentCar95.jpg">
                <p>RentCar95 - Аренда авто в Грозном</p>
                <a href="https://rentcar95.ru">Перейти</a>
            </div>

            <div class="grid-item project p-4 corporate-sites">
                <img class="w-full" alt="Сайт - ООО «ЖИЛЬЕ»" src="images/portfolio/corporate/ООО-ЖИЛЬЕ.jpg">
                <p>Сайт - ООО «ЖИЛЬЕ»</p>
                <a href="https://zhil095.ru/">Перейти</a>
            </div>

            <div class="grid-item project p-4 catalog-sites">
                <img class="w-full" alt="Магазин спортивного питания SportAnimal" src="images/portfolio/catalog/Магазин спорт питания - SportAnimal.jpg">
                <p>Магазин спортивного питания SportAnimal</p>
                <a href="https://sportanimal.ru/">Перейти</a>
            </div>

            <div class="grid-item project p-4 catalog-sites">
                <img class="w-full" alt="Доставка еды ШашлыкМашлык" src="images/portfolio/catalog/ШашлыкМашлык.jpg">
                <p>Доставка еды ШашлыкМашлык</p>
                <a href="">Перейти</a>
            </div>

            <div class="grid-item project p-4 corporate-sites">
                <img class="w-full" alt="Сайт - ООО «ДОСТУПНОЕ ЖИЛЬЕ»" src="images/portfolio/corporate/IPOTEKA95.jpg">
                <p>Сайт - ООО «ДОСТУПНОЕ ЖИЛЬЕ»</p>
                <a href="https://ipoteka95.ru/">Перейти</a>
            </div>

            <div class="grid-item project p-4 ecommerce-sites">
                <img class="w-full" alt="Оружие для охоты ArcherClub" src="images/portfolio/ecommerce/ArcherClub.jpg">
                <p>Магазин оружия ArcherClub</p>
                <a href="http://archerclub.ru/">Перейти</a>
            </div>

            <!-- <div class="grid-item project p-4 ecommerce-sites">
                <img class="w-full" alt="Магазин посуды" src="images/portfolio/catalog/Магазин посуды Lizama.jpg">
                <p>Магазин посуды в Грозном</p>
                <a href="">Перейти</a>
            </div> -->

            <div class="grid-item project p-4 catalog-sites">
                <img class="w-full" alt="Климат Комфорт - Отопление и кондиционирование" src="images/portfolio/catalog/ClimatComfort.jpg">
                <p>Климат Комфорт</p>
                <a href="https://climat-comfort-group.ru/">Перейти</a>
            </div>

            <!-- <div class="grid-item project p-4 corporate-sites">
                <img class="w-full" alt="Сайт - Оплаты обучения ЧГПУ" src="images/portfolio/corporate/CHSPU-payment.jpg">
                <p>Сайт - Оплаты обучения ЧГПУ</p>
                <a href="https://d-solut.ru/">Перейти</a>
            </div> -->

            <div class="grid-item project p-4 corporate-sites">
                <img class="w-full" src="images/portfolio/corporate/VikkieEmlak.jpg">
                <p>VikkiEmlak - Недвижимость в Турции</p>
                <a href="https://vikkiemlak.com/">Перейти</a>
            </div>

            <div class="grid-item project p-4 corporate-sites">
                <img class="w-full" alt="ВестникЧР" src="images/portfolio/portals/Vistnik.ru.jpg">
                <p>Вестник ЧР</p>
                <a href="https://vestnik.ru/">Перейти</a>
            </div>

            <div class="grid-item project p-4 portal-sites">
                <img class="w-full" alt="Штукатурка95" src="images/portfolio/corporate/Штукатурка95.jpg">
                <p>Штукатурка95</p>
                <a href="">Перейти</a>
            </div>

            <div class="grid-item project p-4 corporate-sites">
                <img class="w-full" alt="Сайт - ООО «ИПОТЕЧНЫЙ ЦЕНТР»" src="images/portfolio/corporate/IPOTEKACENTR.jpg">
                <p>Сайт - ООО «ИПОТЕЧНЫЙ ЦЕНТР»</p>
                <a href="https://ipotekacentr095.ru/">Перейти</a>
            </div>

            <div class="grid-item project p-4 portal-sites">
                <img class="w-full" alt="Финансовая грамотность ЧР" src="images/portfolio/portals/Финансовая грамотность ЧР - FINGRAM95.jpg">
                <p>Финансовая грамотность ЧР</p>
                <a href="https://fingram95.ru/">Перейти</a>
            </div>

            <div class="grid-item project p-4 ecommerce-sites">
                <img class="w-full" alt="HizbroFit - Тренажерное оборудование" src="images/portfolio/ecommerce/Фитнес Оборудование HIZBROFIT.jpg">
                <p>HizbroFit - Тренажерное оборудование</p>
                <a href="https://hizbrofit.com/">Перейти</a>
            </div>

            <div class="grid-item project p-4 portal-sites">
                <img class="w-full" alt="Поисковое движение России по ЧР" src="images/portfolio/portals/Поисковое Движение России по ЧР.jpg">
                <p>Поисковое движение России</p>
                <a href="https://poisk-chr.ru/">Перейти</a>
            </div>

            <div class="grid-item project p-4 corporate-sites">
                <img class="w-full" src="images/portfolio/corporate/Автокран-СКФО.jpg">
                <p>Спецтехника СКФО</p>
                <a href="http://avtokran-skfo.ru/">Перейти</a>
            </div>

            <div class="grid-item project p-4 portal-sites">
                <img class="w-full" alt="Поисковое Движение России по ЧР" src="images/portfolio/portals/МАОО Национальный Совет.jpg">
                <p>МАОО Национальный Совет</p>
                <a href="https://nacsovet.ru/">Перейти</a>
            </div>

            <div class="grid-item project p-4 portal-sites">
                <img class="w-full" alt="Избирательная комиссия ЧР" src="images/portfolio/portals/Избирательная Комиссия ЧР- IZBIRKOM.jpg">
                <p>Избирательная комиссия ЧР</p>
                <a href="https://izbirkomchr.ru/">Перейти</a>
            </div>
            
            <div class="grid-item project p-4 portal-sites">
                <img class="w-full" alt="Сурсад" src="images/portfolio/portals/Sursad.jpg">
                <p>Сурсад</p>
                <a href="">Перейти</a>
            </div>

            <div class="grid-item project p-4 catalog-sites">
                <img class="w-full" alt="Садовый центр - Азалия" src="images/portfolio/catalog/Садовый центр Азалия.jpg">
                <p>Садовый центр - Азалия</p>
                <a href="https://azaliya95.ru/">Перейти</a>
            </div>

            <!-- <div class="grid-item project p-4 co-sites">
                <img class="w-full" alt="Медицина катастрофы ЧР" src="images/portfolio/corporate/Медицина катастрофы ЧР.jpg">
                <p>Медицина катастрофы ЧР</p>
                <a href="https://rcmkchr.ru/">Перейти</a>
            </div> -->

            <!-- <div class="grid-item project p-4 ecommerce-sites">
                <img class="w-full" alt="Торговая Компания Музаев" src="images/portfolio/ecommerce/ТБ-Музаев.jpg">
                <p>Торговая Компания Музаев</p>
                <a href="https://muzaev-company.ru/">Перейти</a>
            </div> -->

            <div class="grid-item project p-4 ecommerce-sites">
                <img class="w-full" alt="Фитнес Оборудование DjigitFitness" src="images/portfolio/ecommerce/Фитнес Оборудование DjigitFitness.jpg">
                <p>Фитнес Оборудование DjigitFitness</p>
                <a href="http://djigitfitness.ru/">Перейти</a>
            </div>

            <!-- <div class="grid-item project p-4 corporate-sites">
                <img class="w-full" alt="Сердноводск" src="images/portfolio/corporate/Сердноводск.jpg">
                <p>Фитнес Оборудование DjigitFitness</p>
                <a href="http://sernovodsk.su/">Перейти</a>
            </div> -->

            <div class="grid-item project p-4 portal-sites">
                <img class="w-full" alt="Газета Грозненский рабочий" src="images/portfolio/portals/Грозненский рабочий GrozRab.jpg">
                <p>Грозненский рабочий</p>
                <a href="https://grozrab.ru/">Перейти</a>
            </div>

            <div class="grid-item project p-4 ecommerce-sites">
                <img class="w-full" alt="Садовый декоративный Pitomnik95" src="images/portfolio/ecommerce/Садовый декоративный Pitomnik95.jpg">
                <p>Садовый декоративный Pitomnik95</p>
                <a href="https://pitomnik95.ru/">Перейти</a>
            </div>

            <div class="grid-item project p-4 catalog-sites">
                <img class="w-full" alt="PSNGAME - Магазин игровых аксессуаров" src="images/portfolio/catalog/PSNGAME.jpg">
                <p>Магазин игр PSNGAME</p>
                <a href="">Перейти</a>
            </div>

            <div class="grid-item project p-4 corporate-sites">
                <img class="w-full" alt="Видеостудия Золотая Невеста" src="images/portfolio/corporate/Видеостудия-Золотая-Невеста.jpg">
                <p>Видеостудия Золотая Невеста</p>
                <a href="https://золотаяневеста.рф/">Перейти</a>
            </div>

        </div>
    </div>
</section>
<!-- End: Portfolio section -->

<script>
    // Code that toggles Portfolio category tabs
    function filterSelection(e) {
        var s, t;
        for (s = document.getElementsByClassName("project"), "all-sites" == e && (e = ""), t = 0; t < s.length; t++) w3RemoveClass(s[t], "show"), -1 < s[t].className.indexOf(e) && w3AddClass(s[t], "show")
    }

    function w3AddClass(e, s) {
        var t, n, l;
        for (n = e.className.split(" "), l = s.split(" "), t = 0; t < l.length; t++) - 1 == n.indexOf(l[t]) && (e.className += " " + l[t])
    }

    function w3RemoveClass(e, s) {
        var t, n, l;
        for (n = e.className.split(" "), l = s.split(" "), t = 0; t < l.length; t++)
            for (; - 1 < n.indexOf(l[t]);) n.splice(n.indexOf(l[t]), 1);
        e.className = n.join(" ")
    }
    
    filterSelection("all-sites");
    for (var btnContainer = document.getElementById("myBtnContainer"), btns = btnContainer.getElementsByClassName("btn"), i = 0; i < btns.length; i++) btns[i].addEventListener("click", function() {
        var e = document.getElementsByClassName("active");
        e[0].className = e[0].className.replace(" active", ""), this.className += " active"
    })

    // End: Code that toggles Portfolio category tabs
</script>

<?php include 'footer.php'; ?>