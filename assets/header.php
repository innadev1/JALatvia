<link rel="stylesheet" type="text/css" href="style/header.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

	<div class="capture">
		<h2>Gada labākais <br> ekonomikā <span>2017</span></h2>
		<p>Latvijas Bankas Zelta zālē Latvijas lielākā izglītības organizācija Junior<br>
		Achievement Latvija (JA Latvija) mācību gadu noslēdza ar Gada<br>
		labākais ekonomikā 2017 uzvarētāju — skolotāju, skolēnu un izglītības<br>
		iestāžu vadītāju — apbalvošanu.</p>
	</div>

<div id="banner">

	<div id="links_logo">
		<div class="logo">
			<img src="img/logo.png">
		</div>
		<ul class="links_logo">
			<li><a href="index.php">Sākums</a></li>
			<li><a href="aktualitates.php">Aktualitātes</a></li>
			<li><a href="dalibskolas.php">Dalībskolas</a></li>
			<li><a href="projekti.php">Starptautiskie projekti</a></li>
			<!--<li><a href="sertifikats.php">JA Latvia sertifikāts</a></li>-->
			<!--<li><a href="publikacijas.php">Publikācijas</a></li>-->
			<li><a href="foto.php">Foto</a></li>
			<!--<li><a href="par_mums.php">Par mums</a></li>-->
			<!--<li><a href="partneri.php">Partneri</a></li>--><br>		
			
			<li><a href="smu.php">SMU</a></li>
			<li><a href="titan.php">TITAN</a></li>
			<li><a href="konkurss.php">Biznesa pasaku konkurss</a></li>
			<li><a href="mana_vardnicina.php">Mana vārdnicīņa</a></li>
			<li><a href="enu_diena.php">Ēnu diena</a></li>
			<li><a href="lideru_programma.php">Līderu programma</a></li>
			<!--<li><a href="labakais_ekonomika.php">Gada labākais ekonomikā</a></li>-->
			<li><a href="veiksmes_stasti.php">Veiksmes stāsti</a></li>
		</ul>
	</div>
	
	<div id="login">
		<ul>
			<li><a>ienākt</a></li>
			<li><a>reģistrēties</a></li>
		</ul>
	</div>
	
</div>

<div class="first_button" id="left"><img src="img/left.png"></div>
		<div id="date">
			<div class="date">
				<div class="day">
					<h1>pirmdiena</h1>
					<h2>7.08</h2>
				</div>
				<div class="time_">
					<h1>12:00</h1>
					<p>JESS 2017 | Jauniešu uzņēmējdarbības vasaras skola</p>
				</div>
			</div>
			<div class="date">
				<div class="day">
					<h1>pirmdiena</h1>
					<h2>8.08</h2>
				</div>
				<div class="time_">
					<h1>12:00</h1>
					<p>JESS 2017 | Jauniešu uzņēmējdarbības vasaras skola</p>
				</div>
			</div>
			<div class="date">
				<div class="day">
					<h1>pirmdiena</h1>
					<h2>9.08</h2>
				</div>
				<div class="time_">
					<h1>12:00</h1>
					<p>JESS 2017 | Jauniešu uzņēmējdarbības vasaras skola</p>
				</div>
			</div>
			<div class="date">
				<div class="day">
					<h1>pirmdiena</h1>
					<h2>10.08</h2>
				</div>
				<div class="time_">
					<h1>12:00</h1>
					<p>JESS 2017 | Jauniešu uzņēmējdarbības vasaras skola</p>
				</div>
			</div>
			<div class="date" style="">
				<div class="day">
					<h1>pirmdiena</h1>
					<h2>11.08</h2>
				</div>
				<div class="time_">
					<h1>12:00</h1>
					<p>JESS 2017 | Jauniešu uzņēmējdarbības vasaras skola</p>
				</div>
			</div>
			<div class="date" style="">
				<div class="day">
					<h1>pirmdiena</h1>
					<h2>12.08</h2>
				</div>
				<div class="time_">
					<h1>12:00</h1>
					<p>JESS 2017 | Jauniešu uzņēmējdarbības vasaras skola</p>
				</div>
			</div>
		</div>
<div class="second_button" id="right"><img src="img/right.png"></div>
		
		<script>
			var productnow = 0
			$(document).ready(function(){
				
				count = $('#date .date').length
				width = $('#date .date').outerWidth()
				width_container = $("#date").outerWidth()
				width_total = count*width
				width_dif = width_container-width_total
				
				for(i=0;i<count;i++){
						$('#date .date:eq('+i+')').css('left',(i-1)*width)
					}

				function slide(dir){
					console.log(dir)
					for(i=0;i<count;i++){
						that = $('#date .date:eq('+i+')')
						that.css({'left': "+="+(dir*width)+"px"})
							console.log(parseInt(that.css('left')),width_total,width)
						if(parseInt(that.css('left'))>=width_total-(width*2)){
							that.css('left',-width)
						}
						if(parseInt(that.css('left'))<=width_dif+width){
							that.css('left',width_container)
						}
					}
				}

				$("#right").click(function () {
					slide(-1)
				});
				
				$("#left").click(function () {
				slide(1)
	
				});
			});
		</script>
		