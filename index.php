<html>
    <head>     
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<link rel="stylesheet" type="text/css" href="style/index.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        <title>Sākums</title>
    </head>

	<body>
	
		<?php include 'assets/header.php'; ?>
	
	<div id="main_banner">
		<div class="banner">
			<div class="capture">
				<h2>
					Mācies darot!<br>
					Uzņēmējdarbība, karjeras izglītība,
					finanšu pratība
				</h2>
			</div>
		</div>
	</div>	

	<div id="all_news"><a href="kalendars.php">Visi pasākumi</a></div>

	<div class="first_button" id="left"><img src="img/left.png"></div>
			<a class="date_a" href="kalendars.php"><div id="date">
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
			</div></a>
	<div class="second_button" id="right"><img src="img/right.png"></div>
		
		<script>
			var productnow = 0
			$(document).ready(function(){
				if ($('body').width() >= 900) {
				
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
				}
			});
		</script>
		<script>
		$(document).ready(function(){
			if ($('body').width() <= 900) {
			
				var productnow = 0
				$(document).ready(function(){
					
					count = $('#date .date').length
					
					$("#left").click(function () {
						if(productnow>0){
						productnow-=1
						}else{productnow=count-1}
						$('#date .date').css('display','none')
						$('#date .date:eq('+productnow+')').fadeIn(200)
						console.log($('#date .date:eq('+productnow+')'))
						
					});
					
					$("#right").click(function () {
					
					if(productnow<count-1){
						productnow+=1
						}else{productnow=0}
						$('#date .date').css('display','none')
						$('#date .date:eq('+productnow+')').fadeIn(200)
						console.log($('#date .date:eq('+productnow+')'))
					
					});
				});			
			
			}
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
			</div>	
		</div>
		
		<div id="news_block">
		
			<div class="first_photo">
				<div class="block_inside_block">
					<div class="text_inside_block">
						<a href="lideru_programma.php"><h1>LĪDERI</h1>
						<p>Apzinoties spēcīgu līderu trūkumu Latvijā, Junior Achievement Latvija uzsāka īstenot unikālu Līderu programmu 16 - 20 gadīgiem jauniešiem, kuras mērķis ir veidot jauno līderu paaudzi Latvijas konkurētspējas palielināšanai. 
						</p></a>
					</div>
				</div>
			</div>
			
			<div class="wrap2">
				<div class="photo photo1">
					<div class="text_inside_block_">
						<a href="smu.php"><h1>SMU</h1>
						<p>Skolēnu mācību uzņēmums (SMU) ir skolēnu veidots un vadīts mācību uzņēmums, kura darbībai piemīt izglītojošs raksturs. SMU mācību nolūkos pilda īsta uzņēmuma funkcijas un darbojas reālā vidē – skolēni ražo un pārdod preces vai pakalpojumus. SMU nav juridiska statusa – tos pārstāv Junior Achievement  Latvija un skola. SMU konsultē un atbalsta SMU konsultanti/biznesa konsultanti. 
						</p></a>
					</div>
				</div>
				<div class="photo photo2"></div>
				<div class="photo photo3"></div>
				<div class="photo photo4">
					<div class="text_inside_block">
						<a href="enu_diena.php"><h1>ĒNU DIENA</h1>
						<p>Ēnu diena ir pasaulē atpazīstams un atzīts Junior Achievement karjeras izglītības pasākums 1.-12. klašu skolēniem, kura mērķis ir iepazīstināt skolēnus ar dažādu profesiju un nozaru prasībām, lai palīdzētu jauniešiem izvēlēties profesiju un atbilstoši sagatavoties darba tirgum.
						</p></a>
					</div>
				</div>
			</div>
		
		</div>
		
		<div id="junior">
			<div class="junior-capture"><p>Junior Achievement Latvija ir sabiedriskā labuma organizācija un praktiskās biznesa izglītības eksperts Latvijas skolās.</p></div>
			
			<div id="junior-gr">
				<div class="junior-gr-block gr-1"><h1>pedagogu tālākizglītība</h1></div>
				<div class="junior-gr-block gr-2"><h1>100 000 <br><span>jaunieši visā Latvijā</span></h1></div>
				<div class="junior-gr-block gr-3"><h1>200 <br><span>dalībskolas</span></h1></div>
				<div class="junior-gr-block gr-4"><h1>No 1991. gada</h1></div>
				<div class="junior-gr-block gr-5"><h1>1.-12. klasei</h1></div>
			</div>
			
			<div class="first_button" id="left1"><img src="img/left.png"></div>
			<div class="second_button" id="right1"><img src="img/right.png"></div>
			
			<script>
			$(document).ready(function(){
				if ($('body').width() <= 900) {
				
					var junior = 0
					$(document).ready(function(){
						
						count = $('#junior-gr .junior-gr-block').length
						
						$("#left1").click(function () {
							if(junior>0){
							junior-=1
							}else{junior=count-1}
							$('#junior-gr .junior-gr-block').css('display','none')
							$('#junior-gr .junior-gr-block:eq('+junior+')').css('display','flex')
							console.log($('#junior-gr .junior-gr-block:eq('+junior+')'))
							
						});
						
						$("#right1").click(function () {
						
						if(junior<count-1){
							junior+=1
							}else{junior=0}
							$('#junior-gr .junior-gr-block').css('display','none')
							$('#junior-gr .junior-gr-block:eq('+junior+')').css('display','flex')
							console.log($('#junior-gr .junior-gr-block:eq('+junior+')'))
						
						});
					});			
				
				}
			});
			</script>
		</div>
		
		<div id="quote">
			<div class="quote">
				<h2>Filips Juris Krišjānis</h2>
				<p><span>SMU ‘’W&B’’</span></p>	
			
				<p>
					Dalība SMU programmā
					man deva iespēju saprat un
					izbaudīt<br> darbošanos reālā
					biznesa vidē.
				</p>
				
				<div class="green-border-1"></div>
				<div class="green-border-2"></div>
				<div class="green-border-3"></div>
				<div class="el"><img src="img/element.png"></div>
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
				<div class="all-bottom">
					<div class="time"><h2>7:08</h2></div>
					<div class="share"><img src="img/logos/share.png"></div>
				</div>
			</div>
			<div class="info_block two">
				
				<div class="all-bottom">
					<p>Jaunākajā @ForbesLV numurā 79.lpp lasāms @JALatvia padomes locekļa Guntara </p>
					<div class="share"><img src="img/logos/share.png"></div>
				</div>
			</div>
			<div class="info_block three two">
			
				<div class="all-bottom">
					<p>Jaunākajā @ForbesLV numurā 79.lpp lasāms @JALatvia padomes locekļa Guntara </p>
					<div class="share"><img src="img/logos/share.png"></div>
				</div>
				
			</div>
			<div class="info_block four">
				<div class="all-bottom">
					<p>Jaunākajā @ForbesLV numurā 79.lpp lasāms @JALatvia padomes locekļa Guntara </p>
					<div class="share"><img src="img/logos/share.png"></div>
				</div>
			</div>
		</div>
		
		<script>
		var hammertime = new Hammer(document.getElementById('facebook_info'),);
		var now = 0
		hammertime.on('panend', function(ev) {
			console.log(ev.additionalEvent);
			pan_dir = ev.additionalEvent
			
			count = $('#facebook_info .info_block').length

			console.log(count)
			if(pan_dir=='panleft'){
				if(now<count-1){
				now+=1
				}else{now=0}
				$('#facebook_info .info_block').css('display','none')
				$('#facebook_info .info_block .product:eq('+now+')').fadeIn(200)
				
			}else if(pan_dir=='panright'){
				if(now>0){
				now-=1
				}else{now=count-1}
				$('#facebook_info .info_block').css('display','none')
				$('#facebook_info .info_block:eq('+now+')').fadeIn(200)
			}
		});
		</script>

		<?php include 'assets/footer.php'; ?>
	</body>
</html>
