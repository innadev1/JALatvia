<link rel="stylesheet" type="text/css" href="style/header.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
$(document).ready(function(){	
	var button = document.getElementById('this-menu');
	var actions = {
		1: function() {
			$( "#menu-content" ).slideToggle( "slow", function() {
			});
		},
		2: function() {
			$( "#menu-content" ).slideToggle( "slow", function() {
			});
		}
	};
	var counter = 0;
	button.onclick = function() {
		actions[counter = (counter % 2) + 1]();
	}
});
</script>
<script>
$(document).ready(function(){
	if ($('body').width() >= 900) {
	
		$(window).on('load scroll',function(){ 
		if ($(this).scrollTop() >= $('#banner').height()) {
			$('#link-top').addClass("show");
		}
		else {
			$('#link-top').removeClass("show");
		}
		});
		
}
});
</script>

<div id="banner"></div>

<div id="link-top">
	<div id="logo">
		<a href="index.php"><div class="logo"></div></a>
		<div class="menu" id="this-menu"><img src="img/menu.png"></div>
	</div>
	
	<div class="login">
		<ul>
			<li><a>ienākt</a></li>
			<li><a>reģistrēties</a></li>
		</ul>
	</div>
</div>

<div id="menu-content">
	<ul id="my-menu">
		<li><a href="index.php">Sākums</a></li>
		<li><a href="aktualitates.php">Aktualitātes</a></li>
		<li class="collapsed"><a>Dalībskolām <span class="label"></span></a></li>
			<ul class="sub">
				<li><a href="dalibskolas.php">Dalībskolām</a></li>
				<li><a href="dalibskolas-map.php">Dalībskolas</li>
				<li><a href="dalibskolas-skolotaji.php">Skolotāju apmācības</a></li>
				<li><a href="dalibskolas-skolas.php">Skolu Krustvecāki</a></li>
				<li><a href="dalibskolas-klubs.php">Brīvprātīgo klubs</a></li>
			</ul>
		<!--<li class="collapsed"><a>Skolēnu mācību uzņēmumi <span class="label"></span></a></li>
			<ul class="sub">
				<li><a href="smu.php">Par SMU</a></li>
				<li><a href="smu-konsultants.php">SMU gada konsultants</li>
				<li><a href="smu-pd.php">SMU pamatskolas dibināšana</a></li>
				<li><a href="smu-pdarb.php">SMU pamatskolas darbība</a></li>
				<li><a href="smu-pl.php">SMU pamatskolas likvidācija</a></li>
				<li><a href="smu-vd.php">SMU vidusskolas dibināšana</a></li>
				<li><a href="smu-vdarb.php">SMU vidusskolas darbība</a></li>
				<li><a href="smu-vl.php">SMU vidusskolas likvidācija</a></li>
			</ul>-->
		<li class="collapsed"><a>TITAN <span class="label"></span></a></li>
			<ul class="sub">
				<li><a href="titan.php">Par TITAN</a></li>
				<li><a href="titan-piesakies.php">Piesakies</li>
			</ul>
		<li><a href="konkurss.php">Biznesa pasaku konkurss</a></li>
		<li><a href="mana_vardnicina.php">Mana vārdnicīņa</a></li>
		<li><a href="enu_diena.php">Ēnu diena</a></li>
		<li class="collapsed"><a>Līderu programma <span class="label"></span></a></li>
			<ul class="sub">
				<li><a href="lideru_programma.php">Līderu programma</a></li>
				<li><a href="lideru_programma_dalibnieki.php">Dalībnieki</li>
				<li><a href="lideru_programma_mentori.php">Mentori un kouči</li>
			</ul>
		<li><a href="projekti.php">Starptutiskie projekti</a></li>
		<li><a href="labakais.php">Gada labākais ekonomikā</a></li>
		<li><a href="partneri.php">Partneri</a></li>
		<li><a href="veiksmes_stasti.php">Veiksmes stāsti</a></li>
		<li><a href="foto.php">Foto</a></li>
		<li><a href="sertifikats.php">Ja Latvija sertifikāts</a></li>
		<!--<li><a href="publications.php">? Publikācijas</a></li>-->
		<li><a href="index.php#footer">Par mums</a></li>
	</ul>
<script>
$(document).ready(function() {
  $('ul#my-menu ul').each(function(index) {
    $(this).prev().addClass('collapsible').click(function() {
      if ($(this).next().css('display') == 'none') {
        $(this).next().slideDown(200, function () {
          $(this).prev().removeClass('collapsed').addClass('expanded');
        });
      }else {
        $(this).next().slideUp(200, function () {
          $(this).prev().removeClass('expanded').addClass('collapsed');
          $(this).find('ul').each(function() {
            $(this).hide().prev().removeClass('expanded').addClass('collapsed');
          });
        });
      }
      return false;
    });
  });
});
</script>
</div>