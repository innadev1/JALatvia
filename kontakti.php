<html>
    <head>     
		<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<link rel="stylesheet" type="text/css" href="style/par_mums.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        <title></title>	
    </head>

	<body class="kontakti">
		
		<div class="capture_top capture-top">
			<h2>Junior Achievement<br>Latvija birojs</h2>
			<div id="top-bt">
				<a><button id="main-button-on-top" class="open-map">Skatīt karti</button></a>
			</div>
		</div>

		<?php include 'assets/header.php'; ?>
		
		<div id="map"></div>
		<div id="close"><button class="close-map">Aizvērt karti</button></div>
		
		<script>
		$(document).ready(function(){
			$(".open-map").click(function () {
				$("#map").css("display","block");
				$("#close").css("display","block");
				$("#banner").css("display","none");
				$(".capture_top").css("display","none");
			});
			$(".close-map").click(function () {
				$("#map").css("display","none");
				$("#close").css("display","none");
				$("#banner").css("display","block");
				$(".capture_top").css("display","block");
			});
		});
		</script>
		
		<div class="separate">
			
			<div class="flex">
				<div>
					<h1>Kontakti</h1>
					<table>
						<tr>
							<th><h5>Biroja adrese:</h5></th>
							<td><p>Ūdens iela 12-21. 4. st. Rīga, LV-1007</p></td>
						</tr>
						<tr>
							<th><h5>Apmeklējuma laiks:</h5></th>
							<td><p>10:00-17:00</p></td>
						</tr>
						<tr>
							<th><h5>Tikšanās/konsultācija:</h5></th>
							<td><p>iepriekš piesakoties pa tālruni 67339656<br>
							vai arī rakstot uz e-pastu: jal@jal.lv
							</p></td>
						</tr>
						<tr>
							<th><h5>Tālr./Fakss:</h5></th>
							<td><p>6 7339656</p></td>
						</tr>
						<tr>
							<th><h5>E-pasts:</h5></th>
							<td><p>jal@jal.lv</p></td>
						</tr>
					</table>
					
				</div>
				<div>
					<h1>Rekvizīti</h1>
					<table>
						<tr>
							<th><h5>Nasaukums:</h5></th>
							<td><p>Biedrība *Junior Achievement - Young Enterprise Latvija*</p></td>
						</tr>
						<tr>
							<th><h5>Jurid. adrese:</h5></th>
							<td><p>Ūdens iela 12-21. 4. st. Rīga, LV-1007</p></td>
						</tr>
						<tr>
							<th><h5>Reģ.Nr.:</h5></th>
							<td><p>50008014301</p></td></tr>
						<tr>
							<th><h5>IBAN:</h5></th>
							<td><p>LV43HABA0551034239176</p></td>
						</tr>
						<tr>
							<th><h5>Banka:</h5></th>
							<td><p>Swedbank</p></td>
						</tr>
					</table>
				</div>
			</div>
		
		</div>
		
		<div id="main_info">
		
			<h1>JA Latvija birojs</h1>
			
			<div class="flex mentori">
			
				<div>
					<img src="img/mentors/16.jpg">
					<h2>Jānis Krievāns</h2>
					<h3>Valdes priekšsedētājs</h3>
					<div class="kont">
						<p>E-pasts: janis@jal.lv</p>
						<p>Tālr:2xxxxxxx</p>
					</div>
				</div>
				<div>
					<img src="img/mentors/17.jpg">
					<h2>Inga Piebalga</h2>
					<h3>Biroja administratore</h3>
					<div class="kont">
						<p>E-pasts: inga.piebalga@jal.lv</p>
						<p>Tālr:2xxxxxxx</p>
					</div>
				</div>
				<div>
					<img src="img/mentors/18.jpg">
					<h2>Inga Bolmane</h2>
					<h3>Valdes priekšsedētājs</h3>
					<div class="kont">
						<p>E-pasts: inga@jal.lv</p>
						<p>Tālr:2xxxxxxx</p>
					</div>
				</div>
				<div>
					<img src="img/mentors/19.jpg">
					<h2>Jānis Bukšs</h2>
					<h3>Projektu vadītājs</h3>
					<div class="kont">
						<p>E-pasts: janis.bukss@jal.lv</p>
						<p>Tālr:2xxxxxxx</p>
					</div>
				</div>
				<div>
					<img src="img/mentors/20.jpg">
					<h2>Alrita Mileika-Plūme</h2>
					<h3>Projektu koordinatore</h3>
					<div class="kont">
						<p>E-pasts: alrita@jal.lv</p>
						<p>Tālr:2xxxxxxx</p>
					</div>
				</div>
				<div>
					<img src="img/mentors/21.jpg">
					<h2>Linda Volāne</h2>
					<h3>Projektu koordinatore</h3>
					<div class="kont">
						<p>E-pasts: linda@jal.lv</p>
						<p>Tālr:2xxxxxxx</p>
					</div>
				</div>
			
			</div>
		
		</div>

    <script>
      function initMap() {
		  
		  
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 56.9551338, lng: 24.0705986},
          zoom: 14,
		  
		  
          styles: [
		  
    {
        "featureType": "all",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "weight": "2.00"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#9c9c9c"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f2f2f2"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#eeeeee"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#7b7b7b"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#46bcec"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#c8d7d4"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#070707"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    }
]
        });
		
		    marker = new google.maps.Marker({
            position: {lat: 56.9551338, lng: 24.0705986},
            map: map,
			icon: "img/marker.png"
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWBb6GpIOcwnHtBFvETDBcqPBhEaSdUrQ&callback=initMap" async defer></script>
	
		<?php include 'assets/footer.php'; ?>
	</body>
</html>
