<!DOCTYPE html>
<html>
<body>

<audio id="myAudio">
  <source src="notification1.mp3" type="audio/ogg">
  <source src="notification1.mp3" type="audio/mpeg">
</audio>

<button onclick="playAudio()" type="button">Play Audio</button>
<button onclick="pauseAudio()" type="button">Pause Audio</button> 

<script>
var x = document.getElementById("myAudio"); 

function playAudio() { 
  x.play(); 
} 

function pauseAudio() { 
  x.play(); 
} 
</script>

</body>
</html>
