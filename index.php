<html>
    <head>
        <title>Emotion Based Adsense System</title>
    
        <?php $varal = (string) shell_exec("python backend/ret.py"); ?>

        <style>

* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
.header {
  grid-area: header;
  background-color: #f1f1f1;
  padding: 30px;
  text-align: center;
  font-size: 35px;
}

/* The grid container */
.grid-container {
  display: grid;
  grid-template-areas: 
    'header header header header header header' 
    'left left middle middle right right' 
    'footer footer footer footer footer footer';
  /* grid-column-gap: 10px; - if you want gap between the columns */
} 

.left,
.middle,
.right {
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Style the left column */
.left {
  grid-area: left;
}

/* Style the middle column */
.middle {
  grid-area: middle;
}

/* Style the right column */
.right {
  grid-area: right;
}

/* Style the footer */
.footer {
  grid-area: footer;
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
  .grid-container  {
    grid-template-areas: 
      'header header header header header header' 
      'left left left left left left' 
      'middle middle middle middle middle middle' 
      'right right right right right right' 
      'footer footer footer footer footer footer';
  }
}

        </style>


    </head>

    <body>

<div class="grid-container">
  <div class="header">
    <h2>Emotion Based Advsense System</h2>
  </div>
  
  <div class="left" style="background-color:#aaa;">Ads<br><center><img id="ad1" width="260" height="260" src=""></center></div>
  <div class="middle" style="background-color:#bbb;"><h4 style=text-align:center><p style="font-size: larger;"><?php echo $varal ?></p> is your current emotion</h4><br>
  <center><img id="smiley" width="40%" height="40%" src=""><br><br>
  <button onClick="window.location.reload();">Refresh</button></center></div>  
  <div class="right" style="background-color:#ccc;">Ads<br><center><img width="260" height="260" id="ad2" src=""></center></div>
  
  <div class="footer">
  <p>The advertisements in the dataset will be based on your previous search history when implemented industrially<br>
     Your emotion is updated through your webcam every 10 seconds<br>
    Thanks</p>
  </div>
</div>

</body>

    
<body>
    
  

<?php 


for ($x = 0; $x <= 10; $x++) {
  $p = (string) rand(1,5);
  $r = (string) rand(1,5);
  if($p!=$r){
    break;
  }
}
?>

<script type="text/javascript">

var emote = <?php echo json_encode(utf8_encode($varal)) ; ?>;

var p = "<?php echo"$p"?>";
var r = "<?php echo"$r"?>";


var img1 = document.getElementById("ad1");
var img2 = document.getElementById("ad2");
var img3 = document.getElementById("smiley");

if (emote == "Angry\n") {

 img1.src= "backend/recommendations/angry/"+p+".jpg";
 img2.src= 'backend/recommendations/angry/'+r+'.jpg';
 img3.src= "backend/faces/angry.png";
}
else if (emote =="Disgusted\n") {
 img1.src= 'backend/recommendations/disgusted/'+p+'.jpg';
 img2.src= 'backend/recommendations/disgusted/'+r+'.jpg';
 img3.src= "backend/faces/disgusted.png";
}
else if (emote =="Fearful\n") {
 img1.src= 'backend/recommendations/fearful/'+p+'.jpg';
 img2.src= 'backend/recommendations/fearful/'+r+'.jpg';
 img3.src= "backend/faces/fearful.png";
}
else if (emote =="Happy\n") {
 img1.src= 'backend/recommendations/happy/'+p+'.jpg';
 img2.src= 'backend/recommendations/happy/'+r+'.jpg';
 img3.src= "backend/faces/happy.png";
}
else if (emote =="Neutral\n") {
 img1.src= 'backend/recommendations/neutral/'+p+'.jpg';
 img2.src= 'backend/recommendations/neutral/'+r+'.jpg';
 img3.src= "backend/faces/neutral.png";
}
else if (emote =="Suprised\n"){
 img1.src= 'backend/recommendations/suprised/'+p+'.jpg';
 img2.src= 'backend/recommendations/suprised/'+r+'.jpg';
 img3.src= "backend/faces/suprised.png";
}
else if (emote =="Sad\n"){
 img1.src= 'backend/recommendations/sad/'+p+'.jpg';
 img2.src= 'backend/recommendations/sad/'+r+'.jpg';
 img3.src= "backend/faces/sad.png";
}

</script>
    

</body>
    </html>