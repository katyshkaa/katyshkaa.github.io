<?php
include("../8.php");
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/bootstrap-grid.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/page3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../img/Vector.svg" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Graduation work</title>
</head>
<style>
.photo-container {
  display: flex;
  flex-wrap: wrap;
}

.photo-with-description {
  width: 33.33%; /* adjust this value to control the width of each photo */
  padding: 5px;
  box-sizing: border-box;
  text-align: center;
  padding-bottom: 50px;
}

.photo {
  width: 100%;
  display: block;
  margin: 0 auto;
}

.description {
  margin-top: 5px;
}
.main-description {
	font-weight: bold;
	font-size:23px;
  margin-top: 5px;
}
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
	    height: 700px;
}
.examples{
	height:1245px;
	min-height:unset;
}
.examples_wrapper_button{
	min-height: 104px;
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
                    <div class="nav_elem"><a href="../pages/page2.php">Екотуризм в сша</a></div>
                    <div class="nav_elem devider">/</div>
                    <div class="nav_elem cur_page"><a href="#">екотури</a></div>
                </div>
            </div>
        </div>
    </header>
    <section class="first_sec">
        <div class="container-xl">
            <div class="first_sec_wrapper">
                <div class="first_sec_wrapper_title">Екотури</div>
                <div class="first_sec_wrapper_text">
                    <p>На даному сайті ви зможете знайти інформацію<br>щодо екотуризму в США</p>
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
            <div class="second_sec_wrapper_title">Екотури</div>
            <div class="second_sec_wrapper_text">
                <p>У зв’язку з новою епідемією COVID-19 галузь екотуризму стала «новим подихом» для любителів подорожей.
                    Даний вид туризму
                    має такі переваги, як: уникання великого скупчення людей, проведення більше часу на свіжому повітрі,
                    сприяння більш
                    активному відпочинку та збереження навколишнього середовища.</p>
                <p id="mt">Розвиток екотуризму в США відбувається за американською моделю – це екотуризм у межах
                    природних
                    території, що особливо
                    охороняються, та в умовах дикої природи. На малюнку, розброленому автором, показано розміщення
                    національних парків на
                    території США:</p>
            </div>
    </section>
    <section class="map">
        <img src="../img/map 1.png" alt="map">
    </section>
    <section class="examples">
        <div class="container-xl examples_wrapper">
            <div class="examples_wrapper_title" style="text-align: center">Приклади екотурів</div>
            <div class="photo-container">
                <div class="photo-with-description">
                  <a href="https://www.viator.com/tours/Asheville/Waterfalls-and-Blue-Ridge-Parkway-Hiking-Tour-with-Hotel-Pick-Up/d22561-73087P2" target="_blank"><img src="../img/roading-tour 1.png" class="photo"></a>
                  <p class="description">Пішохідна екскурсія</p>
				  <p class="main-description">Пішохідна екскурсія до водоспадів  </p>
                </div>
                <div class="photo-with-description">
				<a href="https://www.viator.com/tours/Outer-Banks/2-hour-Guided-Outer-Banks-Wild-Horse-Tour/d26783-40502P2" target="_blank"><img src="../img/roading-tour 2.png"" class="photo"></a>
                  <p class="description">Мотоекскурсія</p>
				  <p class="main-description">2-годинний тур на конях</p>
                </div>
                <div class="photo-with-description">
				<a href="https://www.viator.com/tours/Las-Vegas/Red-Rock-Canyon-Hiking-Tour/d684-5109_HI002" target="_blank"> <img src="../img/roading-tour 3.png"" class="photo"></a>     
                  <p class="description">Пішохідна екскурсія</p>
				  <p class="main-description">Пішохідний тур по каньйону Red Rock</p>
                </div>
                <div class="photo-with-description">
				<a href="https://www.viator.com/tours/Las-Vegas/Valley-of-Fire-Hiking-Tour-from-Las-Vegas/d684-6321VFH" target="_blank"><img src="../img/roading-tour 4.png" class="photo"></a>                    
                    <p class="description">Пішохідна екскурсія</p>
					<p class="main-description">Пішохідний тур «Вогняна долина» з Лас-Вегаса</p>
                  </div>
                  <div class="photo-with-description">
				  <a href="https://www.viator.com/tours/Denver/Boulder-Flatirons-Explorer-from-Denver/d4837-8950P29" target="_blank"> <img src="../img/roading-tour 5.png"" class="photo"></a>                   
                    <p class="description">Пішохідна екскурсія</p>
					<p class="main-description">Похід на Скелясті гори на півдня</p>
                  </div>
                  <div class="photo-with-description">
				  <a href="https://www.viator.com/tours/Gatlinburg/Thundering-Cascades-of-the-Smokies/d24151-26480P10" target="_blank"><img src="../img/roading-tour  6.png"" class="photo"></a>                   
                    <p class="description">Пішохідна екскурсія</p>
					<p class="main-description">Пішохідна екскурсія з гідом до водоспадів</p>
                  </div>
              </div>
            <button class="examples_wrapper_button" data-toggle="modal" data-target="#myModal">Залишити відгук</button>
            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
					<div class="modal-content" style="padding-top:10px;height: 471px;">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" style="margin-top: 20px;}">&times;</button>
							<div class="title">Залишити відгук</div>
							<div class="subtitle">для покращення цього веб-сайту</div>
								<form method=POST>
									<div class="wrapper">
										<label >Ім'я</label>
										<input type="text" name="name1"> 
										
										<label >Прізвище</label>
										<input type="text" name="surname1">  

										<label >Email</label>
										<input type="text"  name="email1"> 
													
										<label >Повідомлення</label>
										<input type="text"  name="message1"> 

										<button type="submit" style="margin-top: 50px;">Надіслати</button>
									</div>
							</form>
          </div>
	</div>

                </div>
            </div>
        </div>
    </section> 
	<button id="myBtn">
	
	<a href="#top" style="color: white"><img src="../img/arrow_up.svg" alt="arrow up"></a></button>
	
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
                <div class="address" class="sendbtn">Вул. Шевченка, 8, Дніпро</div>
            </div>
        </div>
</footer>
</body>

</html>