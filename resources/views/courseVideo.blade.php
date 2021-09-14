<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Course Video </title>
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

    <div class="course-header">
        <div class="container">
            <h1 class="course-header__subject">ҰБТ ҰБТ-Қазақастан Тарихы</h1>
            <p class="course-header__lesson">1-ші сабақ</p>
            <h2 class="course-header__title">Тас дәуірі</h2>
        </div>
    </div>

    <div class="course-video">
        <div class="container">
            <div class="course-video__container">
                <h3 class="course-video__title">Видео лекция</h3>
                    
                <video class="course-video__video" src="https://www.youtube.com/watch?v=FhDmmFflHX0"></video>
                
                <button class="course-video__btn btn">Тест тапсыру</button>
            </div>
            
        </div>
    </div>

    <div class="course-video">
        <div class="container">
            <div class="course-video__container">
                <h3 class="course-video__title">Тест тапсырмалары</h3>
                <h3 class="course-video__title">1-Сұрақ <br> 1597-1598 жж. қысында Тәуекел хан Абдаллах ханның әскерін талқандаған жері:</h3>
                <input class="course-video__input" id="question-1" type="radio" name="question"><label for="question-1">Сырдарийһя маңында</label><br>
                <input class="course-video__input" id="question-2" type="radio" name="question"><label for="question-2">Сығанақ маңында</label><br>
                <input class="course-video__input" id="question-3" type="radio" name="question"><label for="question-3">Бұхар түбінде</label><br>
                <input class="course-video__input" id="question-4" type="radio" name="question"><label for="question-4">Хиуа Жанында</label><br>
                <input class="course-video__input" id="question-5" type="radio" name="question"><label for="question-5">Ташкент қаласының түбінде</label><br>
                <button class="course-video__btn btn">Жауап беру</button>
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