/*
* object to contain all items accessable to all control functions
*/
var globals = {};
/*
* choosing difficulty level (onclick span.level) behavior and control
* when a level is clicked, it becomes highlighted and the "ai.level" variable
* is set to the chosen level
*/
$(".level").each(function() {
 var $this = $(this);
 $this.click(function() {
 $('.selected').toggleClass('not-selected');
 $('.selected').toggleClass('selected');
 $this.toggleClass('not-selected');
 $this.toggleClass('selected');
 ai.level = $this.attr("id");
 });
});
/*
* start game (onclick div.start) behavior and control
* when start is clicked and a level is chosen, the game status changes to
"running"
* and UI view to swicthed to indicate that it's human's trun to play
*/
$(".start").click(function() {
var selectedDiffeculty = $('.selected').attr("id");
 if(typeof selectedDiffeculty !== "undefined") {
 var aiPlayer = new AI(selectedDiffeculty);
 globals.game = new Game(aiPlayer);
 aiPlayer.plays(globals.game);
 globals.game.start();
 }
$('.chooseinput div').css('display', 'inline-block');
});
/*
* click on cell (onclick div.cell) behavior and control
* if an empty cell is clicked when the game is running and its the human
player's trun
* get the indecies of the clickd cell, craete the next game state, upadet the UI,
and
* advance the game to the new created state
*/
$(".cell").each(function() {
var $this = $(this);
 $this.click(function() {

 /*if(globals.game.status === "running" &&
globals.game.currentState.turn === "X" && !$this.hasClass('occupied')) {
 var indx = parseInt($this.data("indx"));
 var next = new State(globals.game.currentState);
 next.board[indx] = "X";
 // ui.insertAt(indx, "X");
 next.advanceTurn();
 globals.game.advanceTo(next);
 } */
 })
});

function drag(ev) {
console.log("Start"+ev.target.id);
 ev.dataTransfer.setData("text", ev.target.id);
}
function allowDrop(ev) {
 ev.preventDefault();
}
function drop(ev) {
 ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
//Append Child will append the selected "X" code to the html of selected cell
if(globals.game.status === "running" &&
globals.game.currentState.turn === "X" &&
!$(htmldocument).hasClass('occupied')) {
 ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
 
 next.advanceTurn();
 globals.game.advanceTo(next);
 }
}
