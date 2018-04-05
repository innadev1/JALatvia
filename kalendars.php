<html>
    <head>     
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<link rel="stylesheet" type="text/css" href="style/kalendars.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        <title>Kalendars</title>
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script>
		$(document).ready(function(){
			$("#vairak").click(function () {
				$(".capture_aktualitates_2").css("display","block");
				$("#vairak").css("display","none");
			});
		});
		</script>
    </head>

	<body>
	
	<div class="capture_aktualitates">
		<h2>SMU Light Up Eiropas finālā izpelnās<br> Beļģijas karaļa uzmanību </h2>
		<p>Briselē, Beļģijā, ar svinīgu apbalvošanas ceremoniju ir beidzies starptautiskā <br>
		biznesa izglītības organizāciju tīkla Junior Achievement Europe skolēnu mācību <br>
		uzņēmumu (SMU) Eiropas fināls, kurā par labāko uzņēmumu tika atzīts Festera no <br>
		Igaunijas. Latviju šajā konkursā 37 valstu konkurencē godam pārstāvēja SMU Light <br>
		<!--<a id="vairak"><span>rādīt vairāk</span></a>-->
		</p>
	</div>
	<!--<div class="capture_aktualitates_2">
		<p>Up no Jelgavas Spīdolas ģimnāzijas. Briselē, Beļģijā, ar svinīgu apbalvošanas <br>
		ceremoniju ir beidzies starptautiskā biznesa izglītības organizāciju tīkla <br> 
		Junior Achievement Europe skolēnu mācību uzņēmumu (SMU) Eiropas fināls, kurā <br> 
		par labāko uzņēmumu tika atzīts Festera no Igaunijas. Latviju šajā konkursā 37 <br> 
		valstu konkurencē godam pārstāvēja SMU Light Up no Jelgavas Spīdolas ģimnāzijas. <br> 
		Briselē, Beļģijā, ar svinīgu apbalvošanas ceremoniju ir beidzies starptautiskā <br> 
		biznesa izglītības organizāciju tīkla Junior Achievement Europe skolēnu mācību <br> 
		uzņēmumu (SMU) Eiropas fināls, kurā par labāko uzņēmumu tika atzīts Festera no <br> 
		Igaunijas. Latviju šajā konkursā 37 valstu konkurencē godam pārstāvēja SMU Light <br> 
		Up no Jelgavas Spīdolas ģimnāzijas. Briselē, Beļģijā, ar svinīgu apbalvošanas <br> 
		ceremoniju ir beidzies starptautiskā biznesa izglītības organizāciju tīkla Junior <br> 
		Achievement Europe skolēnu mācību uzņēmumu (SMU) Eiropas fināls, kurā par labāko <br> 
		uzņēmumu tika atzīts Festera no Igaunijas. Latviju šajā konkursā 37 valstu konkurencē <br>
		godam pārstāvēja SMU Light Up no Jelgavas Spīdolas ģimnāzijas.
		</p>
	</div>-->
	
		<?php include 'assets/header.php'; ?>
		
		<div id="calendar">
		
		<div class="month wrap">
			<div><h2><a id="next_month"><</a></h2></div>
			<div class="top_month"><h1>Current</h1></div>
			<div><h2><a id="previous_month">></a></h2></div>
		</div>
		
		<div class="calendar_" id="c1">
		<div class="calendar wrap">
		
		<div class="top"><h1>Pirmdiena</h1></div>
		<div class="top"><h1>Otrdiena</h1></div>
		<div class="top"><h1>Trešdiena</h1></div>
		<div class="top"><h1>Ceturtdiena</h1></div>
		<div class="top"><h1>Piektdiena</h1></div>
		
		<div class="date_window"><h2>1</h2>
			<div id="notikums">
				<div><h3>12:00</h3></div>
				<div class="notikums_border">
					<h4>JESS 2017</h4>
					<p>Jauniešu uzņēmējdarbības vasaras skola</p>
				</div>
			</div>
		</div>
		<div class="date_window"><h2>2</h2></div>
		<div class="date_window"><h2>3</h2></div>
		<div class="date_window"><h2>4</h2></div>
		<div class="date_window"><h2>5</h2>
			<div id="notikums">
				<div><h3>12:00</h3></div>
				<div class="notikums_border">
					<h4>JESS 2017</h4>
					<p>Jauniešu uzņēmējdarbības vasaras skola</p>
				</div>
			</div>
		</div>
		<div class="date_window"><h2>8</h2></div>
		<div class="date_window"><h2>9</h2></div>
		<div class="date_window"><h2>10</h2></div>
		<div class="date_window"><h2>11</h2></div>
		<div class="date_window"><h2>12</h2></div>
		<div class="date_window"><h2>15</h2></div>
		<div class="date_window"><h2>16</h2></div>
		<div class="date_window"><h2>17</h2></div>
		<div class="date_window"><h2>18</h2>
			<div id="notikums">
				<div><h3>12:00</h3></div>
				<div class="notikums_border">
					<h4>JESS 2017</h4>
					<p>Jauniešu uzņēmējdarbības vasaras skola</p>
				</div>
			</div>
		</div>
		<div class="date_window"><h2>19</h2></div>
		<div class="date_window"><h2>22</h2></div>
		<div class="date_window"><h2>23</h2></div>
		<div class="date_window"><h2>24</h2></div>
		<div class="date_window"><h2>25</h2></div>
		<div class="date_window"><h2>26</h2></div>
		<div class="date_window"><h2>29</h2>
			<div id="notikums">
				<div><h3>12:00</h3></div>
				<div class="notikums_border">
					<h4>JESS 2017</h4>
					<p>Jauniešu uzņēmējdarbības vasaras skola</p>
				</div>
			</div>
		</div>
		<div class="date_window"><h2>30</h2></div>
		<div class="date_window"><h2>31</h2></div>
		<div class="date_window"><h2>1</h2></div>
		<div class="date_window"><h2>2</h2></div>
		
		</div>
		</div>
		
		<div class="calendar_" id="c2">
		<div class="calendar wrap">
		
		<div class="top"><h1>Pirmdiena</h1>
			<div id="notikums">
				<div><h3>12:00</h3></div>
				<div class="notikums_border">
					<h4>JESS 2017</h4>
					<p>Jauniešu uzņēmējdarbības vasaras skola</p>
				</div>
			</div>
		</div>
		<div class="top"><h1>Otrdiena</h1>
			<div id="notikums">
				<div><h3>12:00</h3></div>
				<div class="notikums_border">
					<h4>JESS 2017</h4>
					<p>Jauniešu uzņēmējdarbības vasaras skola</p>
				</div>
			</div>
		</div>
		<div class="top"><h1>Trešdiena</h1>
			<div id="notikums">
				<div><h3>12:00</h3></div>
				<div class="notikums_border">
					<h4>JESS 2017</h4>
					<p>Jauniešu uzņēmējdarbības vasaras skola</p>
				</div>
			</div>
		</div>
		<div class="top"><h1>Ceturtdiena</h1></div>
		<div class="top"><h1>Piektdiena</h1></div>
		
		<div class="date_window"><h2>1</h2>
			<div id="notikums">
				<div><h3>12:00</h3></div>
				<div class="notikums_border">
					<h4>JESS 2017</h4>
					<p>Jauniešu uzņēmējdarbības vasaras skola</p>
				</div>
			</div>
		</div>
		<div class="date_window"><h2>2</h2></div>
		<div class="date_window"><h2>3</h2></div>
		<div class="date_window"><h2>4</h2></div>
		<div class="date_window"><h2>5</h2></div>
		<div class="date_window"><h2>8</h2></div>
		<div class="date_window"><h2>9</h2></div>
		<div class="date_window"><h2>10</h2></div>
		<div class="date_window"><h2>11</h2></div>
		<div class="date_window"><h2>12</h2></div>
		<div class="date_window"><h2>15</h2></div>
		<div class="date_window"><h2>16</h2></div>
		<div class="date_window"><h2>17</h2></div>
		<div class="date_window"><h2>18</h2>
			<div id="notikums">
				<div><h3>12:00</h3></div>
				<div class="notikums_border">
					<h4>JESS 2017</h4>
					<p>Jauniešu uzņēmējdarbības vasaras skola</p>
				</div>
			</div>
		</div>
		<div class="date_window"><h2>19</h2></div>
		<div class="date_window"><h2>22</h2></div>
		<div class="date_window"><h2>23</h2></div>
		<div class="date_window"><h2>24</h2>
			<div id="notikums">
				<div><h3>12:00</h3></div>
				<div class="notikums_border">
					<h4>JESS 2017</h4>
					<p>Jauniešu uzņēmējdarbības vasaras skola</p>
				</div>
			</div>
		</div>
		<div class="date_window"><h2>25</h2>
			<div id="notikums">
				<div><h3>12:00</h3></div>
				<div class="notikums_border">
					<h4>JESS 2017</h4>
					<p>Jauniešu uzņēmējdarbības vasaras skola</p>
				</div>
			</div>
		</div>
		<div class="date_window"><h2>26</h2></div>
		<div class="date_window"><h2>29</h2>
			<div id="notikums">
				<div><h3>12:00</h3></div>
				<div class="notikums_border">
					<h4>JESS 2017</h4>
					<p>Jauniešu uzņēmējdarbības vasaras skola</p>
				</div>
			</div>
		</div>
		<div class="date_window"><h2>30</h2></div>
		<div class="date_window"><h2>31</h2></div>
		<div class="date_window"><h2>1</h2></div>
		<div class="date_window"><h2>2</h2></div>
		
		</div>
		</div>
		
		<div class="calendar_" id="c3">
		<div class="calendar wrap">
		
		<div class="top"><h1>Pirmdiena</h1></div>
		<div class="top"><h1>Otrdiena</h1></div>
		<div class="top"><h1>Trešdiena</h1></div>
		<div class="top"><h1>Ceturtdiena</h1></div>
		<div class="top"><h1>Piektdiena</h1></div>
		
		<div class="date_window"><h2>1</h2>
			<div id="notikums">
				<div><h3>12:00</h3></div>
				<div class="notikums_border">
					<h4>JESS 2017</h4>
					<p>Jauniešu uzņēmējdarbības vasaras skola</p>
				</div>
			</div>
		</div>
		<div class="date_window"><h2>2</h2></div>
		<div class="date_window"><h2>3</h2></div>
		<div class="date_window"><h2>4</h2></div>
		<div class="date_window"><h2>5</h2>
			<div id="notikums">
				<div><h3>12:00</h3></div>
				<div class="notikums_border">
					<h4>JESS 2017</h4>
					<p>Jauniešu uzņēmējdarbības vasaras skola</p>
				</div>
			</div>
		</div>
		<div class="date_window"><h2>8</h2>
			<div id="notikums">
				<div><h3>12:00</h3></div>
				<div class="notikums_border">
					<h4>JESS 2017</h4>
					<p>Jauniešu uzņēmējdarbības vasaras skola</p>
				</div>
			</div>
		</div>
		<div class="date_window"><h2>9</h2></div>
		<div class="date_window"><h2>10</h2></div>
		<div class="date_window"><h2>11</h2></div>
		<div class="date_window"><h2>12</h2></div>
		<div class="date_window"><h2>15</h2></div>
		<div class="date_window"><h2>16</h2></div>
		<div class="date_window"><h2>17</h2></div>
		<div class="date_window"><h2>18</h2>
			<div id="notikums">
				<div><h3>12:00</h3></div>
				<div class="notikums_border">
					<h4>JESS 2017</h4>
					<p>Jauniešu uzņēmējdarbības vasaras skola</p>
				</div>
			</div>
		</div>
		<div class="date_window"><h2>19</h2></div>
		<div class="date_window"><h2>22</h2></div>
		<div class="date_window"><h2>23</h2></div>
		<div class="date_window"><h2>24</h2></div>
		<div class="date_window"><h2>25</h2></div>
		<div class="date_window"><h2>26</h2></div>
		<div class="date_window"><h2>29</h2>
			<div id="notikums">
				<div><h3>12:00</h3></div>
				<div class="notikums_border">
					<h4>JESS 2017</h4>
					<p>Jauniešu uzņēmējdarbības vasaras skola</p>
				</div>
			</div>
		</div>
		<div class="date_window"><h2>30</h2></div>
		<div class="date_window"><h2>31</h2></div>
		<div class="date_window"><h2>1</h2></div>
		<div class="date_window"><h2>2</h2></div>
		
		</div>
		</div>
		
		</div>
		
			<script>
			var productnow = 0
			$(document).ready(function(){
				
				count = $('#calendar .calendar_').length
				
				$("#next_month").click(function () {
					if(productnow>0){
					productnow-=1
					}else{productnow=count-1}
					$('#calendar .calendar_').css('display','none')
					$('#calendar .calendar_:eq('+productnow+')').fadeIn(200)
					console.log($('#calendar .calendar_:eq('+productnow+')'))
					
				});
				
				$("#previous_month").click(function () {
				
				if(productnow<count-1){
					productnow+=1
					}else{productnow=0}
					$('#calendar .calendar_').css('display','none')
					$('#calendar .calendar_:eq('+productnow+')').fadeIn(200)
					console.log($('#calendar .calendar_:eq('+productnow+')'))
				
				});
			});
			</script>
		
		<?php include 'assets/footer.php'; ?>
	</body>
</html>
