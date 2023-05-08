<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>IT center</title>
<link rel="stylesheet" href="www/it_center_style.css">
<script src=""></script>
</head>
<body>

<header>
	<div class="button" onclick="openmenu()">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
	</div>
	<div class="logo" onclick="slowscroll('#top')">
		<span>IT center</span>
	</div>
	<div class="about">
		<a href="#" onclick="slowscroll('#main')">Мақсаты</a>
		<a href="#" onclick="slowscroll('#direction')">Бағыттары</a>
		<a href="#" onclick="slowscroll('#worldskills')">WorldSkills</a>
		<a href="#" onclick="slowscroll('#fab_lab')">Fab Lab</a>
		<a href="#" onclick="slowscroll('#contact')">Contact</a>
	</div>
</header>
<ul class="menu" id="menu">
	<li class="links"><a href="ITcenter.php" onclick="mainrep()">Басты бет</a></li>
	<li class="links"><a href="student.php" target="_blank"  onclick="studentrep()">Айбар</a></li>
	<li class="ws_link">Worldskills
		<ul class="submenu">
			<li><a href="page.php" target="_blank" onclick="pagerep()">Ақпарат</a></li>
			<li><a href="worldskillssubmit.php" target="_blank" onclick="submitrep()">Өтініш жіберу</a></li>
		</ul>
	</li>
</ul>
<div class="top" id="top">
	<h1 class="it_center">It center</h1>
	<h2 class="it_center_title">«Astana-Hub» IT-стартаптар халықаралық паркімен нетворкинг және интеграция</h2>
</div>
<div class="container">
	<main id="main">
	
		<h1 class="main">Орталықтың мақсаты мен міндеті</h1>
			<div class="title">
				<h1 class="first">
					Орталық Ақтөбе жоғары политехникалық колледжінің негізінде құрылуда және оның құрылымдық бөлімшесі болып табылады.
					Орталықтың мақсаты – әлеуетті жұмыс берушілердің сұранысы бойынша IT-мамандар үшін көп деңгейлі оқыту жүйесін құру.
				</h1>
				<ol class="list">
					<li>Ақпараттық технологиялардың даму перспективаларын ескере отырып, қазіргі талаптарға сай мұғалімдердің біліктілігін арттыру жүйесін құру.</li>
					<li>Ақпараттық технологиялар саласын ұсынатын мүдделі кәсіпорындармен, компаниялармен және ұйымдармен өзара әрекеттесу және IT пәндерін оқытуға ақпараттандыру саласының жоғары білікті өкілдерін тарту.</li>
					<li>WorldSkills талаптарына сәйкес кәсіби сарапшылық қоғамдастықты қалыптастыру.</li>
					<li>Дарынды жастарды жеделдету үшін біртұтас алаң құру.</li>
				</ol>
			</div>
	</main>
	<div class="direction" id="direction">
		<h1 class="direction_tile">Негізгі курс үш бағыт бойынша оқытылады</h1>
		<div class="direction_types">
			<div class="first_dir">
				<span>Негізгі деңгей</span>
				<p>IT қолдау,
					Жүйелік бағдарламашы
					Байланыс орталығының маманы
					Веб-сайт дизайнері</p>
					<span>Мақсатты топ</span>
					<p>16 мен 29 жас аралығындағы жастар</p>
			</div>
			<div class="second_dir">
				<span>Жоғары деңгей I</span>
				<p>IT безопасность,
					Администратор баз данных,
					Разработка программ,
					Разработчик сайтов, Big Data</p>
					<span>Мақсатты топ</span>
					<p>16 мен 29 жас аралығындағы жастар</p>
			</div>
			<div class="third_dir">
				<span>Жоғары деңгей II</span>
				<p>IТ -направления по запросу</p>
					<span>Мақсатты топ</span>
					<p>16 мен 29 жас аралығындағы жастар</p>
			</div>
		</div>
	</div>
	<section id="worldskills" class="worldskills">
		<div class="ws_title">
			<h1>Жастарды WorldSkills чемпионатына қатысуға келесі құзыреттер бойынша дайындау: «Желілік және жүйелік әкімшілендіру», «Веб-дизайн», «Графикалық дизайн», «CAD Engineering Graphics»</h1>
		</div>
		<div class="ws_main">
			<p>Оқытылатын пәндердің тақырыптық жоспарларына саланың ерекшеліктерін ескере отырып, оқу жоспарында белгіленген сағаттарда өзгерістер мен толықтырулар енгізілуі мүмкін.</p>
			<p>Бағдарламалардың тақырыптық жоспарлары үлгілі болып табылады және оқу жоспарының пәні бойынша бөлінген сағаттардың жалпы көлемі шегінде тақырыптар бойынша теориялық және практикалық сабақтарға арналған сағаттарды нақты бөлу құқығы сабақтарды өткізудің нысандары мен әдістерін өз бетінше таңдайтын мұғалімдерге тікелей беріледі. сыныптар.</p>
				
			<p>Аудитория санаты: 16 мен 22 жас аралығындағы еңбек қызметінде жоғары нәтижелерге қол жеткізген орта кәсіптік білім беру ұйымдарының студенттері және жас жұмысшы мамандар. Қорытынды бақылау нысаны: облыстық іріктеу чемпионаттарына қатысу, біліктілік аттестаттау рәсімінен өту.</p>
		</div>
		<div class="ws_video">
			<video src="www/video/worldskills 2023 ahpc Актюбинский Высший политехнический колледж (1).mp4" controls></video>
		</div>
	</section>
	<section class="fab_lab" id="fab_lab">
		<div class="fab_title">
			<h1>Fab Lab цифрлық прототиптеу орталығы</h1>
		</div>
		<div class="fab_main">
			<p>IT орталықтары – заманауи цифрлық дизайн мен өндіріс құралдарын ойлап табуға және жасауға жаңа қол жеткізуді ұсынатын зертханалардың дүниежүзілік желісі.</p>
			<p>Fab Lab – бұл сандық өндіріске арналған жабдықтар мен мамандандырылған бағдарламалық қамтамасыз ету кешенін қамтитын тәжірибелік алаң, ол тез және бір орталықта әртүрлі өнімдер мен құрылғылардың прототиптерін жасауға, қызықты өнертапқыштық идеяларды жүзеге асыруға және техникалық шығармашылықпен айналысуға мүмкіндік береді.</p>
			<p>Қазіргі уақытта Fab Labs минималды жабдықтар жиынтығына мыналар кіреді: лазерлік кескіш немесе гравера, кескіш плоттер, 3D принтер, жоғары ажыратымдылықтағы CNC станоктары, фрезерлік станок, электронды компоненттер жиынтығы және микроконтроллерді бағдарламалау құралдары, сынау жабдықтары.</p>
		</div>
		<div class="fab_img">
			<img src="https://ahpc.edu.kz/wp-content/uploads/fablab-content.png" alt="">
		</div>
	</section>
	<section id="contact">
		<h1 class="contact_h1">Контактілер</h1>
		<div class="contact_about">
			
			<div class="contact_title">
				<div class="contacts">
					<p><strong>email:</strong> ahpc@gmail.com</p>
					<p><strong>instagram:</strong> AHPC</p>
					<p><strong>facebook:</strong> AHPC</p>
					<p><strong>twitter:</strong> AHPC</p>
				</div>
				<div class="contact_links">
					<a href="https://www.instagram.com/aktobe.polytech/?igshid=YmMyMTA2M2Y%3D"><svg class="social_links" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
					<a href=""><svg class="social_links" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg></a>
					<a href=""><svg class="social_links" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg></a>
				</div>
			</div>
			<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2549.1528067924773!2d57.147845215939654!3d50.28907540686026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41822232ebaaa531%3A0x963a06a62b8293a!2z0JDQutGC0Y7QsdC40L3RgdC60LjQuSDQktGL0YHRiNC40Lkg0J_QvtC70LjRgtC10YXQvdC40YfQtdGB0LrQuNC5INCa0L7Qu9C70LXQtNC2!5e0!3m2!1sru!2skz!4v1681184446250!5m2!1sru!2skz" width="400px" height="200px" style="border:0; margin-right: 30px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</section>
</div>




<a href=""><img src="" alt=""></a>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
	function slowscroll(id){
		$('html, body').animate({
			scrollTop: $(id).offset().top
		}, 500)
	}
	$(document).on("scroll", function (){
		if($(window).scrollTop() === 0)
			$("header").removeClass("fixed")
		else
			$("header").attr("class", "fixed");	
	})
	function openmenu(){
		document.getElementById('menu').classList.toggle('menu_fixed');
	} 
</script>
</body>
</html>