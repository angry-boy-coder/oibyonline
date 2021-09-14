<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Profile</title>
</head>
<body>
    
    <header class="header container">
        <img class="hamburger" src="img/hamburgerMenu.png" alt="">
        <div class="logo">  
            <a href=""><img class="logo__img" src="img/logo.png" alt=""></a>
        </div>
        <ul class="menu">
            <li class="menu__item"><a class="menu__link link" href="index.html">Басты бет</a></li>
            <li class="menu__item"><a class="menu__link link" href="courses.html">Курстар</a></li>
            <li class="menu__item"><a class="menu__link link" href="teachers.html">Мұғалімдер</a></li>
            <li class="menu__item"><a class="menu__link link menu__link_active" href="profile.html">Жеке кабинет</a></li>
            <li class="menu__item"><a class="menu__link link" href="">Пікірлер</a></li>
        </ul>
        <div class="login">
            <img class="login__icon" src="img/iconLogin.png" alt="">
            <a class="login__link link" href="">Кіру/Тіркелу</a>
        </div>
        
    </header>

    <hr>

    <div class="profile">
        <div class="container">
            <div class="profile__content">
                <img class="profile__img" src="img/avatar 1.png" alt="">
                <div class="profile__info">
                    <h1 class="profile__name">Сейтбай Бекзат</h1>
                    <p class="profile__id">Сіздің ID: 190107100</p>
                </div>
            </div>
        </div>
    </div>

    <div class="outer-container">
        <div class="setting">
            <div class="container">
                <div class="setting__container" >
                        <div class="container">
                            <h2 class="setting__title">Жеке ақпарат</h2>
                            <div class="setting__row">
                                <div class="setting__col">
                                    <label for="">Аты-жөні</label>
                                    <input class="setting__input" type="text"> 
                                </div>
                                <div class="setting__col">
                                    <label for="">Сыныбы</label>
                                    <input class="setting__input" type="text">
                                </div>
                                <div class="setting__col">
                                    <label for="">Жасы</label>
                                    <input class="setting__input" type="number">
                                </div>
                            </div>
                            <h2 class="setting__title">Оқу орны</h2>
                            <div class="setting__row">
                                <div class="setting__col">
                                    <label for="">Облысы </label>
                                    <input class="setting__input" type="text">
                                </div>
                                <div class="setting__col">
                                    <label for="">Қаласы</label>
                                    <input class="setting__input" type="text">
                                </div>
                                <div class="setting__col">
                                    <label for="">Мектебі</label>
                                    <input class="setting__input" type="text">
                                </div>
                            </div>
                            <h2 class="setting__title">Байланыс құралдары</h2>
                            <div class="setting__row">
                                <div class="setting__col">
                                    <label for="">Электронды почта</label>
                                    <input class="setting__input" type="text">
                                </div>
                                <div class="setting__col">
                                    <label for="">Телефон</label>
                                    <input class="setting__input" type="text">
                                </div>
                                <div class="setting__col">
                                    <label for="">Instagram</label>
                                    <input class="setting__input" type="text">
                                </div>


                            </div>
                            <button class="setting__btn ">Сақтау</button>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="outer-container">
        <div class="setting">
            <div class="container">
                <div class="setting__container" >
                        <div class="container">
                            <h2 class="setting__title">Құпия сөзді ауыстыру</h2>
                            <div class="setting__row">
                                <div class="setting__col">
                                    <label for="">Ескі</label>
                                    <input class="setting__input" type="text"> 
                                </div>
                                <div class="setting__col">
                                    <label for="">Жаңасы</label>
                                    <input class="setting__input" type="text">
                                </div>
                                <div class="setting__col">
                                    <label for="">Қайталау</label>
                                    <input class="setting__input" type="number">
                                </div>
                            </div>
                            <button class="setting__btn ">Сақтау</button>
                        </div>
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