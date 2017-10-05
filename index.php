<html>
    <head>     
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style/index.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        <title>JAL</title>
		
		

    </head>

	<body>
	
		<?php include 'assets/header.php'; ?>
		<script>
    $(document).ready(function(){
	$('a[href^="#"]').bind('click.smoothscroll',function (e) {
 	e.preventDefault();
 
	var target = this.hash,
 	$target = $(target);
 
	$('html, body').stop().animate({
 	'scrollTop': $target.offset().top
 	}, 500, 'swing', function () {

 	window.location.hash = target;
	});
	});
	});
</script>
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
					/*if(productnow>0){
					productnow-=1
					}else{productnow=count-1}
					$('#date .date').css('display','none')
					$('#date .date:eq('+productnow+')').fadeIn(200)
					console.log($('#date .date:eq('+productnow+')'))*/
					
				});
				
				$("#left").click(function () {
				slide(1)
			/*	if(productnow<count-1){
					productnow+=1
					}else{productnow=0}
					$('#date .date').css('display','none')
					$('#date .date:eq('+productnow+')').fadeIn(200)
					console.log($('#date .date:eq('+productnow+')'))*/
				
				});
			});
			</script>
		
		<div id="news">
		
			<h5>Aktualitātes</h5>
		
			<div class="wrap">
				<div>
				<h2>07.08</h2>
				
				<h1>SMU Light Up Eiropas finālā izpelnās Beļģijas karaļa uzmanību</h1>
				
				<p>Briselē, Beļģijā, ar svinīgu apbalvošanas ceremoniju ir beidzies starptautiskā biznesa izglītības organizāciju tīkla Junior Achievement Europe skolēnu mācību uzņēmumu (SMU) Eiropas fināls, kurā par labāko uzņēmumu tika atzīts Festera no Igaunijas. Latviju šajā konkursā 37 valstu konkurencē godam pārstāvēja SMU Light Up no Jelgavas Spīdolas ģimnāzijas. 
				</p>
				</div>
				
				<div>
				<h2>22.07</h2>
				<h1>Pieteikšanās inovatīvu Skolēnu mācību uzņēmumu izveides un konsultēšanas vasaras apmācībām!</h1>
				
				<p>Briselē, Beļģijā, ar svinīgu apbalvošanas ceremoniju ir beidzies starptautiskā biznesa izglītības organizāciju tīkla Junior Achievement Europe skolēnu mācību uzņēmumu (SMU) Eiropas fināls, kurā par labāko uzņēmumu tika atzīts Festera no Igaunijas. Latviju šajā konkursā 37 valstu konkurencē godam pārstāvēja SMU Light Up no Jelgavas Spīdolas ģimnāzijas. 
				</p>
				</div>
				
				<div>
				<h2>06.08</h2>
				<h1>Piesakies vidusskolēnu uzņēmējdarbības akseleratoram "JESS 2017"</h1>
				
				<p>Rīgas Ekonomikas augstskola (SSE Riga) sadarbībā ar Junior Achievement Latvija (JA Latvija) un Madonas pilsētas domi organizē ikgadējo vidusskolēnu uzņēmējdarbības akseleratoru “JESS 2017” – 6 dienas garu uzņēmējdarbības nometni vidusskolēniem. “JESS 2017” norisināsies no 7. līdz 12. augustam, Madonas biznesa inkubatorā.
				</p>
				</div>
				
				<div>
				<h2>17.07</h2>
				<h1>SMU Light Up Eiropas finālā izpelnās Beļģijas karaļa uzmanību</h1>
				
				<p>Briselē, Beļģijā, ar svinīgu apbalvošanas ceremoniju ir beidzies starptautiskā biznesa izglītības organizāciju tīkla Junior Achievement Europe skolēnu mācību uzņēmumu (SMU) Eiropas fināls, kurā par labāko uzņēmumu tika atzīts Festera no Igaunijas. Latviju šajā konkursā 37 valstu konkurencē godam pārstāvēja SMU Light Up no Jelgavas Spīdolas ģimnāzijas. 
				</p>
				</div>
				
				<div>
				<h2>02.08</h2>
				<h1>SMU Light Up Eiropas finālā izpelnās Beļģijas karaļa uzmanību</h1>
				
				<p>Briselē, Beļģijā, ar svinīgu apbalvošanas ceremoniju ir beidzies starptautiskā biznesa izglītības organizāciju tīkla Junior Achievement Europe skolēnu mācību uzņēmumu (SMU) Eiropas fināls, kurā par labāko uzņēmumu tika atzīts Festera no Igaunijas. Latviju šajā konkursā 37 valstu konkurencē godam pārstāvēja SMU Light Up no Jelgavas Spīdolas ģimnāzijas. 
				</p>
				</div>
				
				<div>
				<h2>10.07</h2>
				<h1>SMU Light Up Eiropas finālā izpelnās Beļģijas karaļa uzmanību</h1>
				
				<p>Briselē, Beļģijā, ar svinīgu apbalvošanas ceremoniju ir beidzies starptautiskā biznesa izglītības organizāciju tīkla Junior Achievement Europe skolēnu mācību uzņēmumu (SMU) Eiropas fināls, kurā par labāko uzņēmumu tika atzīts Festera no Igaunijas. Latviju šajā konkursā 37 valstu konkurencē godam pārstāvēja SMU Light Up no Jelgavas Spīdolas ģimnāzijas. 
				</p>
				</div>
			</div>	
		</div>
		
		<div id="news_block">
		
			<div class="first_photo">
				<div class="block_inside_block">
					<div class="text_inside_block">
						<h1>LĪDERI</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
						sed do eiusmod tempor incididunt ut labore et dolore magna 
						aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
						ullamco laboris nisi ut aliquip ex ea commodo consequat. 
						</p>
					</div>
				</div>
			</div>
			
			<div class="wrap2">
				<div class="photo photo1">
					<div class="text_inside_block_">
						<h1>SMU</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
						sed do eiusmod tempor incididunt ut labore et dolore magna 
						aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
						ullamco laboris nisi ut aliquip ex ea commodo consequat. 
						</p>
					</div>
				</div>
				<div class="photo photo2"></div>
				<div class="photo photo3"></div>
				<div class="photo photo4">
					<div class="text_inside_block">
						<h1>ĒNU DIENA</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
						sed do eiusmod tempor incididunt ut labore et dolore magna 
						aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
						ullamco laboris nisi ut aliquip ex ea commodo consequat. 
						</p>
					</div>
				</div>
			</div>
		
		</div>
		
		<div id="junior">
			<div class="junior_text_block">
				<h2>Junior<br>Achievement Latvija</h2>
				<p>Junior Achievement Latvija (JA Latvija) ir sabiedriskā labuma 
				organizācija un praktiskās biznesa izglītības eksperts Latvijas 
				skolās. JA Latvija ir viens no 37 Junior Achievement Worldwide 
				tīkla biedriem kopš 1991. gada. Eiropas Komisija atzinusi JA 
				Latvija par vienīgo pozitīvo iniciatīvu Latvijā. kas ilgtermiņā
				un metodiski nodrošina jauniešiem uzņēmējdarbības izglītību. 
				JA Latvija katru  gadu nodrošina Eiropā aprobētu un Latvijas 
				vajadzībām pielāgotu praktiskās biznesa izglītības programmu 
				pieejamību aptuveni 60 000 skolēnu visā Latvijā, visos izglītības 
				līmeņos. Biedrība nodrošina savu dalībskolu skolotājiem kvalifikācijas
				paaugstināšanas un tālākizglītības programmas gan Latvijā, gan ārzemēs.</p>
			</div>
			<div class="junior_f_photo"></div>
			<div class="junior_s_photo"></div>
		</div>
		
		<div id="banner_2">
			<div id="banner_2_text">
				<div class="banner_2_text">
					<h3>Dalība SMU programmā<br>
					man deva iespēju saprat un<br>
					izbaudīt darbošanos reālā<br>
					biznesa vidē.</h3>
					<p>Filips Juris Krišjānis<br>
					SMU ‘’W&B’’</p>
				</div>
			</div>
		</div>
		
		<div id="facebook_info">
			<div class="info_block one">
				<img src="img/logos/facebook_green.png">
				<p>Jaunākajā @ForbesLV numurā 79.lpp lasāms 
				@JALatvia padomes locekļa Guntara Kokoreviča 
				viedoklis: Ķīnas idejas Latvijai
				#Forbes #ForbesLatvia
				</p>
				<div class="time"><h2>7:08</h2></div>
				<div class="share"><img src="img/logos/share.png"></div>
			</div>
			<div class="info_block two">
				<p>Jaunākajā @ForbesLV numurā 79.lpp lasāms @JALatvia padomes locekļa Guntara </p>
				<div class="share"><img src="img/logos/share.png"></div>
			</div>
			<div class="info_block three">
				<img src="img/logos/facebook_green.png">
				<p>Jaunākajā @ForbesLV numurā 79.lpp lasāms 
				@JALatvia padomes locekļa Guntara Kokoreviča 
				viedoklis: Ķīnas idejas Latvijai
				#Forbes #ForbesLatvia
				</p>
				<div class="time"><h2>7:08</h2></div>
				<div class="share"><img src="img/logos/share.png"></div>
			</div>
			<div class="info_block four">
				<p>Jaunākajā @ForbesLV numurā 79.lpp lasāms @JALatvia padomes locekļa Guntara </p>
				<div class="share"><img src="img/logos/share.png"></div>
			</div>
		</div>
		
		<div id="partners">
			<div><h1>PARTNERI</h1></div>
			<div><img src="img/logos/swedbank.png"></div>
			<div><img src="img/logos/hansaworld.png"></div>
			<div><img src="img/logos/union.png"></div>
			<div><img src="img/logos/interreg.png"></div>
		</div>
		
		<?php include 'assets/footer.php'; ?>
	</body>
</html>
