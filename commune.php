
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/style.css">
    <title>Document</title>
</head>
<body>


        <header>
                <div class="header">
                    <a class="nav" href="index.html">Accueil</a>
                    <a class="nav" href="son.html">Enregistrer un son</a>
                    <a class="nav" href="membre.html">S'identifier</a>
                    <span class="glyphicon glyphicon-user"></span> 
                    <span class="glyphicon glyphicon-envelope"></span>
                </div>
            </header>

            <div class="container">
                    <div class="row">
                        <h2 id="commune" class="col-xs-12">Commune :  <?php echo $_POST["commune"]; ?><br></h2>
                        <div class="map col-xs-12" id="map"></div>
                        <!-- container de la map -->
                    </div>
                    <div class="buttonJourNuit">
                        <button id="buttonJour" type="button" name="jour" onclick="initMap()">Jour</button>
                        <button id="buttonNuit" type="button" name="nuit" onclick="mapNigth()">Nuit</button>
                    </div>
                </div>
                <footer>
                        <p>Une initiative de la CIRB</p>
                        <p>Copyright : team RedPill</p>
                    </footer>


<?php
$latitude = "";
$longitude = "";




switch ($_POST["commune"]) {
    case "Bruxelles-Ville":
    $latitude="50.8466";
    $longitude="4.3528";
    $zoom = "14";
    break;
    case "Schaerbeek":
    $latitude="50.85";
    $longitude="4.3833";
    $zoom = "14";
     break;
     case "Etterbeek":
     $latitude="50.8358";
     $longitude="4.388";
     $zoom = "14";
     break;
     case "Ixelles":
     $latitude="50.8333";
     $longitude="4.3667";
     $zoom = "14";
      break;
      case "stGilles":
      $latitude="50.8167";
      $longitude="4.3333";
      $zoom = "14";
      break;
      case "Anderlecht":
      $latitude="50.8333";
      $longitude="4.3";
      $zoom = "14";
       break;
       case "Molenbeek":
       $latitude="50.85";
       $longitude="4.3167";
       $zoom = "14";
       break;
       case "Koekelberg":
       $latitude="50.8667";
       $longitude="4.3333";
       $zoom = "14";
        break;
        case "Berchem-Ste-Agathe":
        $latitude="50.8667";
        $longitude="4.2833";
        $zoom = "14";
        break;
        case "Ganshoren":
        $latitude="50.8667";
        $longitude="4.3";
        $zoom = "14";
         break;
         case "Jette":
         $latitude="50.8667";
         $longitude="4.3333";
         $zoom = "14";
         break;
         case "Evere":
         $latitude="50.8667";
         $longitude="4.4";
         $zoom = "14";
          break;
          case "Woluwé-St-Pierre":
          $latitude="50.8333";
          $longitude="4.4167";
          $zoom = "14";
          break;
          case "Auderghem":
          $latitude="50.8167";
          $longitude="4.4333";
          $zoom = "14";
           break;
           case "Watermael":
           $latitude="50.8";
           $longitude="4.4";
           $zoom = "14";
           break;
           case "Uccle":
           $latitude="50.8";
           $longitude="4.3167";
           $zoom = "14";
            break;
            case "Forest":
            $latitude="50.8";
            $longitude="4.3167";
            $zoom = "14";
             break;
             case "Woluwé":
             $latitude="50.85";
             $longitude="4.4";
             $zoom = "14";
             break;
             case "Josse":
             $latitude="50.8466";
             $longitude="4.3528";
             $zoom = "14";
              break;                              
}
?>




<script>
  function initMap() {
    var uluru = {lat: <?php echo $latitude ?>, lng: <?php echo $longitude ?>} ;
    var maisonMarie = {lat:50.8607254, lgn:4.3835315};

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: <?php echo $zoom ?>,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
}
    function mapNigth() {
        var uluru = {lat: <?php echo $latitude ?>, lng: <?php echo $longitude ?>} ;
    
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: <?php echo $zoom ?>,
          center: uluru,
          styles: [
                {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
                {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
                {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
                {
                  featureType: 'administrative.locality',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#d59563'}]
                },
                {
                  featureType: 'poi',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#d59563'}]
                },
                {
                  featureType: 'poi.park',
                  elementType: 'geometry',
                  stylers: [{color: '#263c3f'}]
                },
                {
                  featureType: 'poi.park',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#6b9a76'}]
                },
                {
                  featureType: 'road',
                  elementType: 'geometry',
                  stylers: [{color: '#38414e'}]
                },
                {
                  featureType: 'road',
                  elementType: 'geometry.stroke',
                  stylers: [{color: '#212a37'}]
                },
                {
                  featureType: 'road',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#9ca5b3'}]
                },
                {
                  featureType: 'road.highway',
                  elementType: 'geometry',
                  stylers: [{color: '#746855'}]
                },
                {
                  featureType: 'road.highway',
                  elementType: 'geometry.stroke',
                  stylers: [{color: '#1f2835'}]
                },
                {
                  featureType: 'road.highway',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#f3d19c'}]
                },
                {
                  featureType: 'transit',
                  elementType: 'geometry',
                  stylers: [{color: '#2f3948'}]
                },
                {
                  featureType: 'transit.station',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#d59563'}]
                },
                {
                  featureType: 'water',
                  elementType: 'geometry',
                  stylers: [{color: '#17263c'}]
                },
                {
                  featureType: 'water',
                  elementType: 'labels.text.fill',
                  stylers: [{color: '#515c6d'}]
                },
                {
                  featureType: 'water',
                  elementType: 'labels.text.stroke',
                  stylers: [{color: '#17263c'}]
                }
              ]
        });



  }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcly7QI1q9c0g31v_iGykq2Yb2SW36480&callback=initMap">
</script>



        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
