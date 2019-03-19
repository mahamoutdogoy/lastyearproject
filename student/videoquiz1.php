<html>
<head>
<meta name="description" content="My Video Player">
  <meta charset="utf-8">
  <title>Video quiz</title>
</head>

<style type="text/css">
  
  .container {
  margin: 0px auto;
  padding: 20px;
  width: 480px;
  /*background-image:url(http://static2.grsites.com/archive/textures/lgren/lgren020.jpg); */
  background-color: khaki;
  box-shadow: 3px 3px 3px grey;
  border: 2px solid darkgrey;
}

button {
  background-color: blue;
  color: white;
  border-radius: 15%;
  box-shadow: 3px 3px 3px grey;
  padding: 10px;
  cursor: pointer;
  margin: 5px;
}

button:hover { 
background-color: red;
}

.controlpanel {
  margin: 10px;
  border: 2px solid darkgrey;
  background-color: khaki;
  padding: 20px;
}

.title {
    float: left;
    padding: 3px;
    border-radius: 15%;
    color: white;
    box-shadow: 3px 3px 3px grey;  
    border: 2px solid darkgrey;
    margin: -30px 0 0 0px;
   /*background-image:url(http://static2.grsites.com/archive/textures/lgren/lgren020.jpg); */
    background-color: green;
}

.quiz_panel {
  margin: 10px;
  border: 2px solid darkgrey;
  background-color: khaki;
  padding: 20px;
}

#feedback {
  border: 2px solid black;
  background-color: khaki;
    border-radius: 15%;
  width: 200px;
}

#score {
  border: 2px solid black;
  background-color: blue;
  color: white;
  font-size: 24px;
  border-radius: 15%;
  float: right;
  width: 200px;
  margin:3px;
}

p {
  font-family: Sans, Arial, Helvetica;
  font-size: 16px;
}

input {
  background-color: grey;
  border: 1px solid black;
}
</style>
<body>
  
  
<section class="container">
  <h2>Video quiz</h2>
  
  <video id="myvideo" controls autoplay> 
	<!-- I have three versions of the video encoded with
	     different codecs.  The browser will automatically
	     choose the first one it knows it can play. --> 
	<source src=http://html5doctor.com/demos/video-canvas-magic/video.webm type=video/webm> 
	<source src=http://html5doctor.com/demos/video-canvas-magic/video.ogg type=video/ogg> 
	<source src=http://html5doctor.com/demos/video-canvas-magic/video.mp4 type=video/mp4> 
  </video> 
  
  <div class="controlpanel"> 
    <div class="title">Control Panel</div>
    <button onclick="playVideo();"><b>Play</b></button>
    <button onclick="pauseVideo();">Pause</button>
    <button onclick="stopVideo();">Stop</button>
   <button onclick="rewindVideo();">Restart video</button>

   <!--<div id="timepanel">Time</div> -->

  </div>  

  <div class="quiz_panel">
  <div id="score">Score</div>   
  <div id="question">Question</div>
  <div id="feedback">Feedback</div>
 </div>
  
</section>
    


</body>
</html>

<script type="text/javascript">
  
  window.onload = init;

var myvideo;
let stopTimes = [5, 10, 20, 25, 30];

  var question_panel;
  var feedback_panel;

function init(){
  
  myvideo = document.querySelector("#myvideo");

  question_panel = document.querySelector("#question");
  feedback_panel = document.querySelector("#feedback");
  
  //myvideo.ontimeupdate = displayTime;
  myvideo.ontimeupdate = displayQuestion;
  
}

function playVideo() {
  myvideo.play();
}
function pauseVideo() {
  myvideo.pause();
}
function stopVideo() {
  myvideo.load();
}  
function rewindVideo() {
  myvideo.currentTime = 0;
}

var question_index; // variable to store the index of the question in the array
var formName; // form with the answer choices

var questions = [
  'Which actor played in Titanic?',
  'Who directed movie Jurassic Park (1993)?',
  'Which actor starred in the Matrix movie?',
  'Who directed movie War of the Worlds?',
  'Which actor starred in movie War of the Worlds?'
];

var answers = [
  'Leonardo Di Caprio',
  'Stephen Spielberg',
  'Keanu Reeves',
  'Steven Spielberg',
  'Tom Cruise'
];

var choices = [
  ['Christian Bale', 'Leonardo Di Caprio', 'Madonna'],
  ['Stephen Spielberg', 'J. A. Bayona', 'Wachowski Brothers'],
  ['Mark Wahlberg', 'Bruce Willis', 'Keanu Reeves'],
  ['Quentin Tarantino', 'J. A. Bayona', 'Steven Spielberg'],
  ['Danny Glover', 'Kate Winslet', 'Tom Cruise']
];

var totalScore = 0;  //total score
var pointsForCorrectAnswer = 10;


function checkAnswer(theQuestion, theInput, radioGroup){

  var _feedback = "";
  var feedback_div = document.querySelector("#feedback");
  var score_div = document.querySelector("#score");

  var val = getRadioVal(theInput, radioGroup);
    // display value obtained
  //alert(val);
  //fetch correct answer
  var correctAnswer = answers[theQuestion];
  if (correctAnswer === val){ 
    feedback = val + " is CORRECT!";
    feedback_div.style.backgroundColor = 'green';
    feedback_div.innerHTML = feedback;
    
    //update and display new score
    totalScore += pointsForCorrectAnswer;
    score_div.innerHTML = "Total Points: " + totalScore;

    //clear the question
    question_panel.innerHTML = "";
    feedback_panel.innerHTML = "";

    //remove the question from the quiz 
    questions.splice(theQuestion,1);
    choices.splice(theQuestion,1);
    answers.splice(theQuestion,1);

    //continue play video
    playVideo();

  }else{
    feedback = val + " is WRONG!";
    feedback_div.innerHTML = feedback;
    feedback_div.style.backgroundColor = 'red';
  }  
  
}

//code below adapted from the one at http://www.dyn-web.com/tutorials/forms/radio/get-selected.php 
function getRadioVal(form, name) {
    var val;

    ourForm = document.getElementById(form);
    // get list of radio buttons with specified name
    var radios = ourForm.elements[name];
    
    // loop through list of radio buttons
    for (var i=0, len=radios.length; i<len; i++) {
        if ( radios[i].checked ) { // radio checked?
            val = radios[i].value; // if so, hold its value in val
            break; // and break out of for loop
        }
    }
    return val; // return value of checked radio or undefined if none checked
}

function displayTime (evt) {
  var  timepanel = document.querySelector("#timepanel");

  timepanel.innerHTML = parseInt(myvideo.currentTime);
}

function displayQuestion(evt) {
  
    var timeMark = parseInt(myvideo.currentTime);

    question_index = stopTimes.indexOf(timeMark);
    
    if(question_index > -1) {
      
      formName = question_index + "_form";
      var radioGroupName = question + "_group";
      // pause video
      pauseVideo();
      
      //display question and choices
      var sInnerHTML = questions[question_index];

      sInnerHTML += '<form id="' + formName + '">';

      choicesArray = choices[question_index];
      for(var i=0; i < choicesArray.length; i++) {
        sInnerHTML += "<input type=\"radio\" name=\"" + radioGroupName + "\" onclick=\"checkAnswer('" + question_index + "', '" + formName + "', '" + radioGroupName + "')\" value=\"" + choicesArray[i] + "\">" + choicesArray[i] + "<br>"; 
        //document.getElementById("questions").innerHTML += "<input type=\"radio\" name=\"" + radioGroupName + "\" onclick=\"checkAnswer(\"" + question + "\", \"" + formName + "\", \"" + radioGroupName + "\")\" value=\"" + choicesArray[i] + "\">" + choicesArray[i] + "<br>"; 
      }
      sInnerHTML += '</form>';      
      question_panel.innerHTML = sInnerHTML;

      //remove the stop time from the array of stopping times
      stopTimes.splice(question_index, 1);
    }
    
}

  
</script>

<!-- https://codepen.io/search/pens/?depth=everything&order=popularity&page=55&q=quiz -->