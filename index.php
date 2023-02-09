<?php
include("8.php");
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/page1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="./img/Vector.svg" type="image/x-icon">
    <title>Graduation work</title>
</head>
<style>
 #myBtn {
  position: fixed;
  float: right;
  right: 18%;
  left: 88%;
  width: 50px;
  height:50px;
  font-size: 12px;
  padding: .5px;
  border-radius: 20px;
  text-align: center;
  bottom: 20px;      
  margin-right: 10px; 
  background: #ffff;
  color: #7e7f7e;
  cursor: pointer;
  z-index: 999;
  opacity: .75;
}
#myBtn:hover {
  background-color: #f1c37d;
}

 li{
        color: #004106;
        font-weight: bold;
    }
    .second_sec {
  height: 1680px;
  background: #F5F5F5;
}
.second_sec_wrapper_list{
    height: fit-content;
}
</style>
<body>
    <header>
        <div class="container-xl">
            <div class="header">
                <a href="#"><img src="./img/Logo.svg" alt="logo"></a>
                <div class="nav">
                    <div class="nav_elem cur_page"><a href="#">Головна сторінка</a></div>
                    <div class="nav_elem devider">/</div>
                    <div class="nav_elem"><a href="./pages/page2.php">Екотуризм в сша</a></div>
                    <div class="nav_elem devider">/</div>
                    <div class="nav_elem"><a href="./pages/page3.php">екотури</a></div>
                </div>
            </div>
        </div>
    </header>
    <section class="first_sec">
        <div class="container-xl">
            <div class="first_sec_wrapper">
                <div class="first_sec_wrapper_title">Екотуризм<br>США</div>
                <div class="first_sec_wrapper_text">
                    <p>На даному сайті ви зможете знайти інформацію<br>щодо екотуризму в США</p>
                </div>
                <a href="#text" class="first_sec_wrapper_link">
                    <img src="./img/Ellipse 1.svg" alt="pointer">
                    <span>Перейти на сторінку</span>
                </a>
            </div>
        </div>
    </section>
    <section class="sec_dev"></section>
    <section class="second_sec" id="text">
        <div class="container-xl second_sec_wrapper">
            <div class="second_sec_wrapper_title">Екотуризм</div>
            <div class="second_sec_wrapper_text">
                <p>Екотуризм - туризм до територій, що становлять екологічний інтерес (як правило, екзотичні та часто
                    загрозливі природні
                    середовища), особливо для підтримки зусиль щодо збереження та спостереження за дикою природою;
                    специфікація доступу до
                    загрозливого середовища контролюється таким чином, щоб він мав якнайменший негативний вплив.</p>
            </div>
            <div class="second_sec_wrapper_list">
                <div class="second_sec_wrapper_list_header">Низка правил екотуризму:</div>
                <ol type="1" class="second_sec_wrapper_list_items">
                     <li>Формування обізнаності;</li>
                    <p>Для правильного відвідування природних об’єктів туристи повинні дотримуватись           місцевих законів та правил.</p>
                    <li>Забезпечення фінансової вигоди для збереження;</li>
                    <p>Звертайтесь до туристичних фірм, де прибуток від екотуризму використовують для фінансування збереження природної спадщини.</p>
                    <li>Забезпечення фінансової вигоди для місцевого населення;</li>
                    <p>Справжній екотуризм повинен надавати місцевим жителям фінансові переваги, будь то прямими (екскурсії, вступні збори та пожертвування) або непрямими засобами (наприклад, податки на проїзд чи проживання).</p>
                    <li>Підтримання прав людини.</li>
                    <p>Ініціативи екотуризму мають підтримувати місцевий бізнес та права корінних жителів контролювати свою землю та майно.</p>
                </ol>
            </div>
            <a href="./pages/page2.php"><button class="second_sec_wrapper_button">Дізнатись
                    більше</button></a>
        </div>
    </section>
	<button id="myBtn">
	
	<a href="#top" style="color: white"><img src="img/arrow_up.svg" alt="arrow up"></a></button>
    <footer>
        <div class="container-xl footer">
            <div class="copy">Copyriting © 2022 LIT</div>
            <div class="name">LIT DNIPRO</div>
            <div class="info">
                <div class="mail">
                    <img src="./img/mail.svg" alt="mail">
                    <span>user@dlit.dp.ua</span>
                </div>
                <div class="phone">
                    <img src="./img/phone.svg" alt="phone">
                    <span>+380561829012</span>
                </div>
                <div class="address">Вул. Шевченка, 8, Дніпро</div>
            </div>
        </div>
</footer>
</body>

</html>