<!DOCTYPE HTML>
<html>
 <head>
 <title>Tic-Tac-Toe AI</title>
 <link rel = 'stylesheet' type = 'text/css' href = 'styles/ui.css'>
 </head>
 <body>
<div class = 'main-container'>
<h2><center>Single Player versus AI</h2>
 <div class = 'board'>
<!-- data-indx following cell divs represents cell index in 1D array
representation -->

<div class='cell' data-indx = "0" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<div class='cell' data-indx = "1"  ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<div class='cell' data-indx = "2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<div class='cell' data-indx = "3" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<div class='cell' data-indx = "4" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<div class='cell' data-indx = "5" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<div class='cell' data-indx = "6" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<div class='cell' data-indx = "7" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<div class='cell' data-indx = "8" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
 </div>
 </div>
 <div class = 'control'>
 <!-- div.intial displays the starting controls -->
 <div class = 'intial'>
 <div class = 'difficulty'>
 <span class = 'level not-selected' id = "blind">Blind</span>
 <span class = 'level not-selected' id = "novice">Novice</span>
 <span class = 'level not-selected' id = "master">Master!</span>
 </div>
<h6><center>Please select the difficulty above and then click on start below.
</h6>
 <div class='start'> Start </div>
 </div>
 

<br>
<div class ='chooseinput'>

<div class='cell' ondrop="drop(event)" ondragover="allowDrop(event)" >
<img src="imgs/x.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="50" > 1
</div>
<div class='cell' ondrop="drop(event)" ondragover="allowDrop(event)" >
<img src="imgs/x.png" draggable="true" ondragstart="drag(event)"
id="drag1" width="88" height="50" > 2
</div>
<div class='cell' ondrop="drop(event)" ondragover="allowDrop(event)" >
<img src="imgs/x.png" draggable="true" ondragstart="drag(event)"
id="drag1" width="88" height="50" > 3
</div>
<div class='cell' ondrop="drop(event)" ondragover="allowDrop(event)" >
<img src="imgs/x.png" draggable="true" ondragstart="drag(event)"
id="drag1" width="88" height="50" > 4

</div>
<div class='cell' ondrop="drop(event)" ondragover="allowDrop(event)" >
<img src="imgs/x.png" draggable="true" ondragstart="drag(event)"
id="drag1" width="88" height="50" > 5
</div>
</div>

 <!-- div.ingame displays in-game messages and controls -->
 <div class = 'ingame' id="human">It's your turn ...</div>
 <div class = 'ingame' id="ai">
 <img src = "imgs/robot.png" id = "robot" class = "robot" />
 <p>Wait for it ...</p>
 </div>
 <div class = 'ingame' id="won">You won !
<div class = 'reload' onClick="document.location.reload(true)">Reload </div>
// Enabling refresh once the result is announced
</div>
<div class = 'ingame' id="lost">You lost !
<div class = 'reload' onClick="document.location.reload(true)">Reload </div>
</div>
<div class = 'ingame' id="draw">It's a Draw !
<div class = 'reload' onClick="document.location.reload(true)">Reload </div>
 </div>
 </div>
 </div>
 <script src = "scripts/jquery-1.10.1.min.js"></script>
 <script src = "scripts/ui.js"></script>
 <script src = "scripts/game.js"></script>
 <script src = "scripts/ai.js"></script>
 <script src = "scripts/control.js"></script>
 </body>
</html>