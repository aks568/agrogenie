<?php include 'setting/system.php'; ?>
<?//php include 'session.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/c4df81fdf8.js" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
  <title>AGROGENIE</title>
	<style>
		html{height: 100%;font-family: 'Quicksand', sans-serif;}
    body{width: 100%;margin: none;
      background-image: url('mainbg.jpg');overflow: hidden;background-repeat: no-repeat;background-position:center;background-size: cover;
    }
    .info{padding:10px;}
    .crops{margin:10px;height:100%;display: flex;align-items: center;border: none;padding-left: 30px;}
    li{font-size: 24px;}
    </style>
    <script>
        function sorghum(){
            document.getElementById("heading").innerHTML = "All about Sorghum!";
            document.getElementById("para").innerHTML =`
            Sorghum is a genus of flowering plants in the grass family Poaceae, which includes about 25 species. Some of these species have grown as cereals for human consumption and some in pastures for animals. One species, Sorghum bicolor, was originally domesticated in Africa and has since spread throughout the globe...
            <a href="https://en.wikipedia.org/wiki/Sorghum">Read more on Wikipedia</a><br>`;
            document.getElementById("img").src ="https://cdn.britannica.com/21/136021-050-FA97E7C7/Sorghum.jpg" ;
        }
        function jute(){
            document.getElementById("heading").innerHTML = "All about Jute!";
            document.getElementById("para").innerHTML = `
            Jute is a long, soft, shiny bast fiber that can be spun into coarse, strong threads. It is produced primarily from plants in the genus Corchorus, which was once classified with the family Tiliaceae... 
            <br><a href="https://en.wikipedia.org/wiki/Jute">Read more on Wikipedia</a><br>`;
            document.getElementById("img").src ="https://i.dawn.com/primary/2020/07/5f18e836c5e5b.jpg";
        }
        function wheat(){
            document.getElementById("heading").innerHTML = "All about Wheat!";
            document.getElementById("para").innerHTML = 'Wheat is a grass widely cultivated for its seed, a cereal grain which is a worldwide staple food. The many species of wheat together make up the genus Triticum; the most widely grown is common wheat...<br><a href="https://en.wikipedia.org/wiki/Wheat">Read more on Wikipedia</a><br>';
            document.getElementById("img").src = "https://cdn.britannica.com/80/157180-050-7B906E02/Heads-wheat-grains.jpg";
        }
        function pulses(){
            document.getElementById("heading").innerHTML = "All about Pulses!";
            document.getElementById("para").innerHTML = 'A legume is a plant in the family Fabaceae, or the fruit or seed of such a plant. The seed is also called a pulse. Legumes are grown agriculturally, primarily for human consumption, for livestock forage and silage, and as soil-enhancing green manure...<br><a href="https://en.wikipedia.org/wiki/Legume">Read more on Wikipedia</a><br>';
            document.getElementById("img").src = "https://goqii.com/blog/wp-content/uploads/Why-Pulses-Are-Good-For-You-1024x683.jpg";
        }
        function millet(){
            document.getElementById("heading").innerHTML = "All about Millet!";
            document.getElementById("para").innerHTML = 'Millets are a group of highly variable small-seeded grasses, widely grown around the world as cereal crops or grains for fodder and human food. Millets are important crops in the semiarid tropics of Asia and Africa, with 97% of millet production in developing countries...<a href="https://en.wikipedia.org/wiki/Millet">Read more on Wikipedia</a><br>';
            document.getElementById("img").src = "https://upload.wikimedia.org/wikipedia/commons/f/f0/Grain_millet%2C_early_grain_fill%2C_Tifton%2C_7-3-02.jpg";
        }  
        function rice(){
            document.getElementById("heading").innerHTML = "All about Rice!";
            document.getElementById("para").innerHTML = 'Rice is the seed of the grass species Oryza glaberrima (African rice) or Oryza sativa (Asian rice). As a cereal grain, it is the most widely consumed staple food for a large part of the world\'s human population, especially in Asia and Africa. It is the agricultural commodity with the third-highest worldwide production (rice, 741.5 million tonnes in 2014), after sugarcane (1.9 billion tonnes) and maize (1.0 billion tonnes)...<a href="https://en.wikipedia.org/wiki/Rice">Read more on Wikipedia</a><br>';
            document.getElementById("img").src = "https://yaleclimateconnections.org/pics/cc/mc/102419_rice.jpg";
        } 
        function maize() {
          document.getElementById("heading").innerHTML = "All about Maize!";
          document.getElementById("para").innerHTML='Maize or Indian corn is Zea mays, a member of the grass family Poaceae.It is a cereal grain which was first grown by people in ancient Central America.It is now the third most important cereal crop in the world. However, little of this maize is eaten directly by humans. Most is used to make corn ethanol, animal feed and other maize products, such as corn starch and corn syrup...<br><a href=" https://en.wikipedia.org/wiki/Maize">Read more on Wikipedia</a>';
          document.getElementById("img").src = "https://5.imimg.com/data5/HL/FA/OL/SELLER-24737698/yellow-maize-corn-500x500.jpg";         
        }
        function sugarcane() {
          document.getElementById("heading").innerHTML = "All about Sugarcane!";
          document.getElementById("para").innerHTML='Sugarcane refer to several species and hybrids of tall perennial grass in the genus Saccharum,that are used for sugar production.The plants are two to six metres tall with stout, jointed, fibrous stalks that are rich in sucrose, which accumulates in the stalk internodes...<br><a href=" https://en.wikipedia.org/wiki/Sugarcane">Read more on Wikipedia</a><br>';
          document.getElementById("img").src = "https://static.toiimg.com/thumb/msid-69095049,width-800,height-600,resizemode-75,imgsize-1675636/69095049.jpg";         
        }
        function cotton() {
          document.getElementById("heading").innerHTML = "All about Cotton!";
          document.getElementById("para").innerHTML='Cotton is a soft, fluffy staple fiber that grows in a boll, or protective case, around the seeds of the cotton plants of the genus Gossypium in the mallow family Malvaceae. The fiber is almost pure cellulose. Under natural conditions, the cotton bolls will increase the dispersal of the seeds...<a href=" https://en.wikipedia.org/wiki/Maize">Read more on Wikipedia</a><br>';
          document.getElementById("img").src = "https://www.azolifesciences.com/image.axd?picture=2020%2F3%2Fshutterstock_738008380.jpg";         
        }
        function groundnut() {
          document.getElementById("heading").innerHTML = "All about Groundnut!";
          document.getElementById("para").innerHTML='Groundnut, also known as peanut and pignut is one of the best sources of protein. Consuming groundnut is very beneficial for our health. Peanut contains vitamin E, magnesium, foliate, copper and arginine. Studies reveal that peanuts can even be useful for weight loss and reduce the risk of cardiovascular disease...<br><a href=" https://en.wikipedia.org/wiki/Maize">Read more on Wikipedia</a><br>';
          document.getElementById("img").src = "https://kj1bcdn.b-cdn.net/media/24665/nut.jpg";         
        }
    </script>
</head>
<body onload="sorghum()">
<?php include 'theme/sidebar.php'; ?>
  <center><h1 style="font-family: 'Sacramento', cursive;font-size:45px;">Crop Information</h1></center>
  <hr style="border:0.5px solid grey;width: 75%;"><br>
  <div class="container" style="font-family: 'Quicksand', sans-serif;">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-4">
        <div class="crops">
          <ul>
          <a href="#"><li onclick="sorghum()">Sorghum</li></a>
          <a href="#"><li onclick="jute()" >Jute </li></a>
          <a href="#"><li onclick="wheat()" >Wheat</li></a>
          <a href="#"><li onclick="pulses()">Pulses</li></a>
          <a href="#"><li onclick="millet()">Millet</li></a>
          <a href="#"><li onclick="rice()">Rice</li></a>
          <a href="#"><li onclick="maize()">Maize</li></a>
          <a href="#"><li onclick="sugarcane()">Sugarcane</li></a>
          <a href="#"><li onclick="cotton()">Cotton</li></a>
          <a href="#"><li onclick="groundnut()">Groundnut</li></a>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="info">
            <h2 id="heading"></h2>
            <p id="para"></p>
            <img src="" alt"image" id="img" width="400" height="200">
        </div>
      </div>
      <div class="col-md-1"></div>
    </div>
  </div>
</body>
</html>
