
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/page2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../img/Vector.svg" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
  background: #fff;
  color: #7e7f7e;
  cursor: pointer;
  z-index: 999;
  opacity: .75;
}
#myBtn:hover {
  background-color: #f1c37d;
}
.second_sec{
    height: fit-content;
}
b{
        color: #004106;
        font-weight: bold;
    }
</style>
<body>
    <header>
        <div class="container-xl">
            <div class="header">
                <a href="../index.php"><img src="../img/Logo.svg" alt="logo"></a>
                <div class="nav">
                    <div class="nav_elem"><a href="../index.php">Головна сторінка</a></div>
                    <div class="nav_elem devider">/</div>
                    <div class="nav_elem cur_page"><a href="#">Екотуризм в сша</a></div>
                    <div class="nav_elem devider">/</div>
                    <div class="nav_elem"><a href="../pages/page3.php">екотури</a></div>
                </div>
            </div>
        </div>
    </header>
    <section class="first_sec">
        <div class="container-xl">
            <div class="first_sec_wrapper">
                <div class="first_sec_wrapper_title">Екотуризм<br>США</div>
                <div class="first_sec_wrapper_text">
                    <p>На даній сторінці ви зможете дізнатись<br>детально про екотуризм в США</p>
                </div>
                <a href="#text" class="first_sec_wrapper_link">
                    <img src="../img/Ellipse 1.svg" alt="pointer">
                    <span>Перейти до змісту</span>
                </a>
            </div>
        </div>
    </section>
    <section class="sec_dev"></section>
    <section class="second_sec" id="text">
        <div class="container-xl second_sec_wrapper">
            <div class="second_sec_wrapper_title">Екотуризм в США</div>
            <div class="second_sec_wrapper_text">
                <p>За статистикою <a
                        href="https://www.statista.com/statistics/1221034/ecotourism-market-size-global/">CAGR</a>
                    (Compound Annual Growth Rate) регіон Північної Америки протягом 2021 - 2027 року
                    буде мати найвищий
                    показник ринку екотуризму – 16,2%.
                </p>
                <p id="mid">Екотуризм у США за місцем впровадження розподілений по основним двом категоріям: у
                    національних
                    парках і у природних
                    заповідниках.
                    На даний момент в США налічується: 451 заповідник, 176 національних парків та парків штатів, 70
                    пам'яток природи, 394
                    природні резервати, де зберігаються природні ландшафти суші та морські узбережжя, що
                    використовуються для туризму (<a href="https://www.nps.gov/index.htm">за
                        статистикою NPS</a>).
                </p>
                <p>Для легкого планування свого маршруту NPS зробили <a
                        href="https://www.nps.gov/findapark/index.htm">онлайн-мапу</a> розташування місць, які доступні
                    до
                    відвідування.</p>
            </div>
        </div>
    </section>
    <section class="slider">
        <h2 class="slider_title">Найвражаючі національні парки США:</h2>
        <div class="slider_wrapper">
            <div class="container-xl">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">

                        <div class="item active">
                            <img src="../img/ellowstone 1.png" alt="yellowstone" style="width:100%;">
                            <div class="carousel-caption">
                                <h3>Єллоустоун</h3>
                            </div>
                        </div>

                        <div class="item">
                            <img src="../img/park-yosemit 1.png" alt="yosemit" style="width:100%;">
                            <div class="carousel-caption">
                                <h3>Йосемітський парк</h3>
                            </div>
                        </div>

                        <div class="item">
                            <img src="../img/grand-kanyone 1.png" alt="Grand Kanyone" style="width:100%;">
                            <div class="carousel-caption">
                                <h3>Гранд-Каньйон</h3>
                            </div>
                        </div>
                        <div class="item">
                            <img src="../img/park-sekvoya 1.png" alt="park-sekvoya" style="width:100%;">
                            <div class="carousel-caption">
                                <h3>Національний парк «Секвоя»
                                </h3>
                            </div>
                        </div>

                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="sec_dev"></section>
	<section class="second_sec">
        <div class="container-xl second_sec_wrapper">
            <div class="second_sec_wrapper_title">Цікаві факти</div>
            <div class="second_sec_wrapper_text">
                <p>В <b>штаті Каліфорнія</b> знаходиться <b>найбільше національних парків – 9</b>. Далі за списком йде штат Аляска, котра має 8, штат Юта, котрий має 5 та штат Колорадо, котрий має 4 національних парки.</p>
                <p><b>Не всі штати мають національні парки.</b> Наприклад: Алабама, Коннектикут, Делавер, Джорджія, Іллінойс, Айова, Канзас, Луїзіана, Меріленд, Массачусетс, Міссісіпі, Небраска, Нью-Гемпшир, Нью-Джерсі, Нью-Йорк, Оклахома, Пенсільванія, Род-Айленд, Вермонт і Вісконсин.
                </p>
                <p><b>Єллоустонський національний парк</b> - єдиний національний парк США, <b>розташований на території 3 штатів.</b> Хоча більша частина парку розташована в північно-західній частині штату Вайомінг, частина парку також перетинає Айдахо на заході та Монтану на півночі.
                </p>
                <p><b>Найменший національний парк</b> у Сполучених Штатах — національний парк <b>Gateway Arch.</b> Цей унікальний історичний парк менший за всі інші національні парки. Це 0,0007% від розміру найбільшого національного парку!
                </p>
                <p><b></b>Найбільший національний парк у Сполучених Штатах — національний парк <b>Wrangell-St. Elias на Алясці.</b>  Цей величезний парк охоплює приблизно 4% території Аляски. Другий, третій і четвертий за величиною національні парки також знаходяться на Алясці.</p>
            </div>
        </div>
    </section>
	<button id="myBtn"><a href="#top" style="color: white"><img src="../img/arrow_up.svg" alt="arrow up"></a></button>
    <footer>
        <div class="container-xl footer">
            <div class="copy">Copyriting © 2022 LIT</div>
            <div class="name">LIT DNIPRO</div>
            <div class="info">
                <div class="mail">
                    <img src="../img/mail.svg" alt="mail">
                    <span>user@dlit.dp.ua</span>
                </div>
                <div class="phone">
                    <img src="../img/phone.svg" alt="phone">
                    <span>+380561829012</span>
                </div>
                <div class="address">Вул. Шевченка, 8, Дніпро</div>
            </div>
        </div>
</footer>
</body>


</html>