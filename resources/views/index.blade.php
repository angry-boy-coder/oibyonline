<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Oi By Online</title>
</head>
<body>
    <!-- Login or Registration -->
    <div id="backdrop"></div>
    </div>
        <div class="modal card">
            <div class="type-of-in">
                <div class="type left ">Тіркелу</div>
                <div class="type right picked">Кіру</div>
            </div>
            <div class="registration invisible">
                <input type="text" name="full_name" id="full_name" placeholder="Аты-Жөніңіз"/>
                <input type="text" name="mail" id="mail" placeholder="Электрондық пошта"/>
                <input type="password" name="password" placeholder="Құпия сөз"/>
                <input type="text" name="city" id="city" placeholder="Қалаңыз"/>
                <input type="text" name="school" id="school" placeholder="Мектеп"/>
                <div class="check">
                    <input type="checkbox" class="checkbox">
                    <label><a href="">Қолданушы келісімшартымен келісемін</a></label>
                </div>
                <div class="modal__btn">Тіркелу</div>
            </div>  
            <div class="login ">
                <input type="text" name="mail" id="mail" placeholder="Электрондық пошта"/>
                <input type="password" name="password" placeholder="Құпия сөз"/>
                <div class="modal__btn">Кіру</div>
                <label><a href="">Құпия сөзді ұмытып қалдыңыз ба?</a></label>
            </div>
        </div>
    </div>

    <!-- Home page -->
    <header class="header container">
        <img class="hamburger" src="img/hamburgerMenu.png" alt="">
        <div class="logo">  
            <a href=""><img class="logo__img" src="img/logo.png" alt=""></a>
        </div>
        <ul class="menu">
            <li class="menu__item"><a class="menu__link menu__link_active link" href="/index">Басты бет</a></li>
            <li class="menu__item"><a class="menu__link link" href="/courses">Курстар</a></li>
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


    <div class="banner container">
        <div class="banner__content">
            <h1 class="banner__header">Бізбен бірге дайындал</h1>
            <p class="banner__desc">Кез-келген жерде, кез-келген уақытта</p>
            <button class="banner__btn btn">Тіркелу</button>
        </div>
        <img class="banner__img"  src="img/banner.png" alt="">
    </div>


    <div class="outer-container">
        <div class="target container">
            <h2 class="target__header">Мақсаттарыңызға бізбен бірге жетіңіз!</h2>
            <div class="targets">
                <div class="targets__item">
                    <img class="targets__img" src="img/target1.png" alt="">
                    <p class="targets__desc"><span class="targets__span">ҰБТ</span><br> жоғары ұпай жоғары көрсеткіш тек бізде</p>
                </div>
                <div class="targets__item">
                    <img class="targets__img" src="img/target2.png" alt="">
                    <p class="targets__desc"> <span class="targets__span">Тұлға</span><br> өзіңді басқа қырыңнан жетілдір</p>
                </div>
                <div class="targets__item">
                    <img class="targets__img" src="img/target3.png" alt="">
                    <p class="targets__desc"> <span class="targets__span">Үздік мұғалімдер</span><br> Сіздің дамуыңызға көмектеседі</p>
                </div>
            </div>
        </div>
</div>

    <div class="outer-container">
        <div class="section container">
            <img class="section__img" src="img/img1.png" alt="">
            <div class="section__content">
                <h2 class="section__header">Неден бастау керектігін білмейсіз бе?</h2>
                <p class="section__desc">Уайымдамаңыз, біз сізге анықтауға көмектесеміз.</p>
                <button class="section__btn btn">Жауап беру</button>
            </div>
        </div>
    </div>


    <div class="outer-container">
        <div class="keyword">
            <p class="keyword__desc">Сенбе жұртқа, тұрса да қанша мақтап,<br>
                Әуре етеді ішіне қулық сақтап. <br>
                Өзіңе сен, өзіңді алып шығар,   <br>
                Еңбегің мен ақылың екі жақтап. <br></p>
            <span class="keyword__span">&copy Абай Құнанбаев</span>
        </div>
    </div>


    <div class="outer-container">
        <div class="section container ">
            <div class="section__content">
                <h2 class="section__header">Алға қойған мақсатыңызға жету үшін келесі қадамды бізбен бірге жасаңыз</h2>
                
                <button class="section__btn btn">Қадам жасау</button>
            </div>
            <img class="section__img" src="img/img2.png" alt="">
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