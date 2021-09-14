<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Барлық курстар</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header container">
        <img class="hamburger" src="img/hamburgerMenu.png" alt="">
        <div class="logo">  
            <a href=""><img class="logo__img" src="img/logo.png" alt=""></a>
        </div>
        <ul class="menu">
            <li class="menu__item"><a class="menu__link link" href="/index">Басты бет</a></li>
            <li class="menu__item"><a class="menu__link menu__link_active link" href="/courses">Курстар</a></li>
            <li class="menu__item"><a class="menu__link link" href="/teachers">Мұғалімдер</a></li>
            <li class="menu__item"><a class="menu__link link" href="/profile">Жеке кабинет</a></li>
            <li class="menu__item"><a class="menu__link link" href="">Пікірлер</a></li>
        </ul>
        <div class="login">
            <img class="login__icon" src="img/iconLogin.png" alt="">
            <a class="login__link link" href="">Кіру/Тіркелу</a>
        </div>
        
    </header>

    <hr>

    <div class="courses container">
        <h1 class="courses__header">Барлық курстар</h1>
        <input class="courses__search" type="text" placeholder="Іздеу">
        <h1 class="courses__title-main">ҰБТ</h1>

        <div class="main-course">
            <h2 class="course__title">Міндетті пәндер</h2>
            <div class="course__container">
                    <div class="subject__container">
                        <img class="subject__img" src="img/MatSau.png" alt="">
                        <h3 class="subject__title">ҰБТ-Математикалық сауаттылық</h3>
                        <p class="subject__teacher"><img class="subject__teacher-icon" src="img/teacher.png" alt="">Bakytov Nurzhan</p>
                        <button class="subject__btn btn" >Курсты бастау</button>
                    </div>
                    <div class="subject__container">
                        <img class="subject__img" src="img/KazTarih.png" alt="">
                        <h3 class="subject__title">ҰБТ-Қазақастан тарих</h3>
                        <p class="subject__teacher"><img class="subject__teacher-icon" src="img/teacher.png" alt="">Bakytov Nurzhan</p>
                        <button class="subject__btn btn" >Курсты бастау</button>
                    </div>
                
            </div>
        </div>

        <div class="elective-course">
            <h2 class="course__title">Профильді пәндер</h2>
            <div class="course__container">

                    <div class="subject__container">
                        <img class="subject__img" src="img/Matem.png" alt="">
                        <h3 class="subject__title">ҰБТ-Математика</h3>
                        <p class="subject__teacher"><img class="subject__teacher-icon" src="img/teacher.png" alt="">Bakytov Nurzhan</p>
                        <button class="subject__btn btn" >Курсты бастау</button>
                    </div>
                    <div class="subject__container">
                        <img class="subject__img" src="img/physics.png" alt="">
                        <h3 class="subject__title">ҰБТ-Физика</h3>
                        <p class="subject__teacher"><img class="subject__teacher-icon" src="img/teacher.png" alt="">Bakytov Nurzhan</p>
                        <button class="subject__btn btn" >Курсты бастау</button>
                    </div>
                    <div class="subject__container">
                        <img class="subject__img" src="img/geography.png" alt="">
                        <h3 class="subject__title">ҰБТ-География</h3>
                        <p class="subject__teacher"><img class="subject__teacher-icon" src="img/teacher.png" alt="">Bakytov Nurzhan</p>
                        <button class="subject__btn btn" >Курсты бастау</button>
                    </div>
                    <div class="subject__container">
                        <img class="subject__img" src="img/chemistry.png" alt="">
                        <h3 class="subject__title">ҰБТ-Химия</h3>
                        <p class="subject__teacher"><img class="subject__teacher-icon" src="img/teacher.png" alt="">Bakytov Nurzhan</p>
                        <button class="subject__btn btn" >Курсты бастау</button>
                    </div>
                    <div class="subject__container">
                        <img class="subject__img" src="img/biology.png" alt="">
                        <h3 class="subject__title">ҰБТ-Биология</h3>
                        <p class="subject__teacher"><img class="subject__teacher-icon" src="img/teacher.png" alt="">Bakytov Nurzhan</p>
                        <button class="subject__btn btn" >Курсты бастау</button>
                    </div>
                
                    <div class="subject__container">
                        <img class="subject__img" src="img/kukyk.png" alt="">
                        <h3 class="subject__title">ҰБТ-Адам қоғам құқық</h3>
                        <p class="subject__teacher"><img class="subject__teacher-icon" src="img/teacher.png" alt="">Bakytov Nurzhan</p>
                        <button class="subject__btn btn" >Курсты бастау</button>
                    </div>

                    <div class="subject__container">
                        <img class="subject__img" src="img/english.png" alt="">
                        <h3 class="subject__title">ҰБТ-Ағылшын тілі</h3>
                        <p class="subject__teacher"><img class="subject__teacher-icon" src="img/teacher.png" alt="">Bakytov Nurzhan</p>
                        <button class="subject__btn btn" >Курсты бастау</button>
                    </div>
                    <div class="subject__container">
                        <img class="subject__img" src="img/djt.png" alt="">
                        <h3 class="subject__title">ҰБТ-Дүние жүзі тарих</h3>
                        <p class="subject__teacher"><img class="subject__teacher-icon" src="img/teacher.png" alt="">Bakytov Nurzhan</p>
                        <button class="subject__btn btn" >Курсты бастау</button>
                    </div>
            </div>
        </div>

    </div>


    <div class="outer-container"> 
        <footer class="footer">
            <div class="container footer__content">
                <div class="footer__name">
                    <p>&copy OI BY ONLINE Inc, 2020</p>    
                    <p>Барлық құқықтар қорғалған</p>
                </div>
                
                <p class="contact"><img class="contact__img" src="img/footerContact.png" alt="">support@oi.by.online.kz</p>
            </div>
        </footer>
    </div>
</body>
</html>