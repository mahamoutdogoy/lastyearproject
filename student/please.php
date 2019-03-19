<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<style>
	
body
{
	 padding-top: 40px;
}
	form {
    color:#fff;

  } 

  .purple-bg {
    background-color: #a2d200!important;
  }

  .fx-inputwrap a { 
    color:#fff;
  }

  input {
    height:25px;
  }
  .fx-block.fx-share > .bill-icon {
    vertical-align: top;
    padding-top: 15px;
  }

  .bill-icon img {
    width: 70px;
    height: auto;
    padding-left: 20px;
  }

  .fx-copy {
    color:#fff;
  } 

  h2 {
    color:#fff!important;
  }
  .game-container {
    position: relative;
  }
  .game-grid::after {
    content: "";
    display: table;
    clear: both;
  }
  @media screen and (min-width: 860px) {
    .game-left-col {
      width: 33%;
      float: left;
      margin-right: 3%;
    }
    .game-right-col {
      width: 64%;
      float: left;
    }
  }
  #start-button {
    margin: 0 0 0 0;
  }
  #game {
    font-size: 0;
    height: 0;
    text-align: center;
    max-height: 0;
    padding: 0;
    box-shadow: none;
    transition: max-height 200ms ease-in-out;
    overflow: hidden;
  }

  #game.show {
    font-size: 16px;
    padding: 2rem;
    height: auto;
    max-height: 800px;
  }

  .gauge-container {
    display: inline-block;
    border-bottom: 1px solid #47338f;
    position: relative;
  }

  @media screen and (min-width: 860px) {
    .gauge-container {
      border-bottom: none;
    }
  }
  .score-number {
    width: 5rem;
    text-align: center;
    position: absolute;
    bottom: 1rem;
    left: 50%;
    margin-left: -2.5rem;
    font-size: 46px;
    font-weight: bold;
    color: #47338f;
  }
  .question {
    text-align: left;
    display: none;
  }
  .question:first-child {
    display: block;
  }
  .question p {
    font-size: 23px;
    color: #47338f;
  }
  .question .number {
    font-weight: bold;
    color: #47338f;
  }
  .answers label {
    display: block;
    border-bottom: 4px solid transparent;
    margin: 0 0 .4rem;
  }
  .answers label.correct .text {
    border-bottom: 4px solid #1fca23;
  }
  .answers label.incorrect .text {
    border-bottom: 4px solid #fb0f1b;
  }
  input[type="checkbox"] {
    height: 14px;
    width: 25px;
  }
  .progress-bar {
    padding: 2rem 0 0;
    text-align: center;
  }
  .indicator {
    border-bottom: 6px solid #e5e5e5;
    display: inline-block;
    margin: 0 0.1rem;
    width: 75px;
    height: 50px;
  }
  .indicator.current {
    background: none;
    border-color: #47338f;
  }
  .indicator.correct {
    background: url('images/icon-correct.svg') no-repeat center;
    border-color: #1fca23;
  }
  .indicator.incorrect {
    background: url('images/icon-incorrect.svg') no-repeat center;
    border-color: #fb0f1b;
  }
  #game-end-times-up {
    display: none;
    position: relative;
  }
  #game-end {
    display: none;
    position: relative;
  }
  @media screen and (min-width: 860px) {
    #game-end {
      padding-top:1rem;
    }
    #game-end-times-up {
      padding-top: 2rem;
    }
  }
  #game-end p {
    color: #47338f;
  }
  .game-end-text {
    color: #47338f;
    font-size: 24px;
  }
  .game-end-text .score{
    font-size: 30px;
    font-weight: bold;
  }
  #game-end .fx-btn{
    margin: 0;
  }

  #game-end .learnmore:link, #game-end .learnmore:visited {
    color: #47338f;
    text-decoration: underline;
  }
  #game-end .learnmore:hover, #game-end .learnmore:active {
    color: #47338f;
    text-decoration: none;
  }
  .fx-btn:link, .fx-btn:visited, .fx-btn:hover, .fx-btn:active {
    text-decoration: none;
  }
#fx-respond
{
	padding-top: 90px;
}


/*style for 5th question
*/




h1 {
  font-family: Tahoma;
  color: #4499cc;
  font-weight: 600;
  font-size: 3em;
}

.questionPane {
  font-family: Arial;
  border: 2px solid #ccc;
  border-radius: 25px 25px 25px 0px;
  width: 350px;
  height: 150px;
  padding: 1em;
  margin: .5em;
  text-align: center;
  background: #fff;
  display: inline-block;
}

html {
  background: #eee;
  }

#answerPane {
  color: red;
}

.container {
  border: 0px solid black;
  width: 70%;
  margin: 0 auto;
}

#scoring {
  font-size: 1.4em;
  font-family: arial;
  background: none;
  display: inline;
 }

.scoring {
  font-size: 1.4em;
  font-family: Arial;
  display: inline;
  }

.scorebox { 
  width: 70%;
  margin: 0 auto;
  padding: 1.4em;
}

#nextLesson {
  width: 300px;
  margin: 0 auto;
  display: none;
  font-size: 1.2em;
  font-family: helvetica;
  text-align: center;
}

#nextLesson a:link {
  color: #4499cc;
  text-decoration: none;
}
#nextLesson a:visited {
  color: #4499cc;
  text-decoration: none;
}
#nextLesson a:active {
  color: #4499cc;
  text-decoration: none;
}
#nextLesson a:hover {
  color: #fff;
  text-decoration: none;
  background: #4499cc;
  padding: 2px;
  border-radius: 5px;
}

a {
  color:#fff;
  -o-transition:.5s;
  -ms-transition:.5s;
  -moz-transition:.5s;
  -webkit-transition:.5s;
  transition:.5s;
}

.checkbtn {
  color: #fff;
  background: #4499cc;
  border: 0;
  width: 2em;
  height: 2em;
  border-radius: 2em;
  
}

input[type="text"] {
  height: 2em;
  color: #4499cc;
  font-size: 1.4em;
  border: 0;
  border-bottom: 2px solid #000;
  padding: 0;
  margin: 0;
  text-align: center;
}






</style>



<body id="fx-respond">
  <div id="container">
    <div id="content" class="fx-tiles">
      <!-- FULL WIDTH LAYOUT -->
      <div class="fx-grid fx-cf">
        <div class="fx-col">
          <!-- ADD BLOCK(S) HERE -->
          <!-- START: SHARE BLOCK -->
  
  
          <div class="fx-block fx-purple fx-share fx-align-left fx-cf purple-bg" style="padding:20px ">
            <div class="fx-copy" style="padding-left:20px; padding-bottom:0">
              

              <p> </p>
              <p><a href="#game" id="start-button" class="fx-btn">Start now</a></p>
            </div>
          </div>
        </div>
        <!-- FULL WIDTH LAYOUT -->
        <div class="fx-grid fx-cf">
          <div class="fx-col">
            <!-- ADD BLOCK(S) HERE -->
            <div class="fx-block game-container">
              <div id="game">
                <div class="game-grid">
                  <p id="timer" class="timer">
                    1:00:00
                  </p>
                  <div class="game-left-col">
                    <div class="gauge-container" style="background: #ffffff url('images/icon-01.svg') no-repeat center center; background-size: 100px 100px;">
                      <canvas id="gauge" class="gauge" width="240" height="240"></canvas>
                      <div class="score-number">0</div>
                    </div>
                  </div>
                  <div class="game-right-col">
                    <div class="questions">
                      <div class="question">
                        <p><span class="number">1 </span><span class="questionText">Identify the word that rhymes with ‘Morn’</span></p>
                        <div class="answers">
                          <label><input type="checkbox" class="answer" data-correct="true"><span class="text">A. Horn</span></label>
                          <label><input type="checkbox" class="answer" data-correct="false"><span class="text">B. Crown </span></label>
                          <label><input type="checkbox" class="answer" data-correct="false"><span class="text">C. frown  </span></label>
                          <label><input type="checkbox" class="answer" data-correct="false"><span class="text">D. Mourn   </span></label>
                        </div>
                      </div>
                      <div class="question">
                        <p><span class="number">2 </span><span class="questionText">Identify the beginning sound of the word ‘Bizarre’</span></p>
                        <div class="answers">
                          <label><input type="checkbox" class="answer" data-correct="true"><span class="text">A. b</span></label>
                          <label><input type="checkbox" class="answer" data-correct="false"><span class="text">B. v</span></label>
                          
                        </div>
                      </div>
                      <div class="question">
                        <p><span class="number">3 </span><span class="questionText">Identify the middle sound of the word ‘Wallet’ 
                        </span></p>
                        <div class="answers">
                         <label><input type="checkbox" class="answer" data-correct="false"><span class="text">A./d/ <span></label>
                          <label><input type="checkbox" class="answer" data-correct="true"><span class="text">B. /l/</span></label>
                        </div>
                      </div>
                      <div class="question">
                        <p><span class="number">4 </span><span class="questionText">Identify the ending sound of the word ‘ Cotton pod’</span></p>
                        <div class="answers">
                          <label><input type="checkbox" class="answer" data-correct="false"><span class="text">A. r</span></label>
                          <label><input type="checkbox" class="answer" data-correct="true"><span class="text">B. d</span></label>
                          <label><input type="checkbox" class="answer" data-correct="false"><span class="text">C. o </span></label>
                        </div>




                      </div>





               

</div>

                    <div id="game-end-times-up">
                      <p id="time-out-text" class="game-end-text"></p>
                      <a href="./challenge-page.html" class="fx-btn"> restart</a>

                    </div>
                    <div id="game-end">
                      <p id="game-end-text" class="game-end-text"></p>
                    </div>
                  </div>
                </div>
                <div id="progress-bar" class="progress-bar">
                  <div class="indicator current"></div>
                  <div class="indicator"></div>
                  <div class="indicator"></div>
                  <div class="indicator"></div>
                  <div class="indicator"></div>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>  

    </div>
  </div>
  <!-- GLOBAL WRAPPER CSS -->
  <link rel="stylesheet" type="text/css" href="//www.fedex.com/css/t2/global-wrapper-min.css" id="globalCSS" />
  <!-- MASTER RESPONSIVE CSS -->
  <link rel="stylesheet" type="text/css" href="//www.fedex.com/css/t2/master-responsive-min.css" />
  <!-- MASTER RESPONSIVE JAVASCRIPT (Keep below footer include) -->
  <script type="text/javascript" src="//images.fedex.com/templates/components/libraries/1.0/jQuery/1.7.2/jquery.min.js"></script>
  <script type="text/javascript" src="//www.fedex.com/templates/components/javascript/v2/fx-master-responsive.js"></script>
</body>


</html>

<script >
	

	var game = {
  // state and jquery selectors
  state: {
    startButton: $("#start-button"),
    gameContainer: $("#game"),
    scoreNumber: $(".score-number"),
    questionsView: $(".questions"),
    gameEndView: $("#game-end"),
    gameEndViewTimesUp: $("#game-end-times-up"),
    gameEndText: $("#game-end-text"),
    timeOutText: $("#time-out-text"),
    gauge: $("#gauge"),
    questions: $(".question"),
    answers: $(".answer"),
    timer: $("#timer"),
    indicators: $(".indicator"),
    numberOfQuestions: $(".question").length,
    questionsAnswered: 0,
    correctAnswers: 0,
  },

  init: function() {
    game.registerEventHandlers();
  },

  registerEventHandlers: function() {
    game.state.answers.on("click input", function(e) {
      //e.preventDefault();
      game.checkAnswer($(this));
    });

    game.state.startButton.on("click input", function(e) {
      e.preventDefault();
      game.start();
    });
  },

  start: function() {
    game.state.gameContainer.addClass("show");
    $("html, body").animate(
      {
        scrollTop: game.state.gameContainer.offset().top - 10
      },
      400,
      game.startTimer()
    );
    game.state.startButton.unbind("click touch");
  },

  startTimer: function() {
    var zeroFill = function(units) {
      return units < 10 ? "0" + units + "" : units;
    };
    var count = 0;

    var interval = window.setInterval(function() {
      var centisecondsRemaining = 5000 - count;
      var min = Math.floor(centisecondsRemaining / 100 / 60);
      var sec = zeroFill(Math.floor(centisecondsRemaining / 100 % 60));
      var cs = zeroFill(centisecondsRemaining % 100);
      game.state.timer.text(min + ":" + sec + ":" + cs);
      count++;
      if (centisecondsRemaining === 0) {
        clearInterval(interval);
        //game.endGame();
        game.timesUp();
      }
      if (game.state.questionsAnswered === game.state.numberOfQuestions) {
        clearInterval(interval);
      }
      if (game.state.questionsAnswered === game.state.numberOfQuestions) {
        clearInterval(interval);
      }
    }, 10);
  },
  

  checkAnswer: function(answer) {
    if (answer.data("correct")) {
      game.state.correctAnswers++;
      game.drawGaugeValue();
      game.updateProgress(true);
      game.giveAnswerFeedback(answer);
}
    else if (answer.data("correct")) {
      game.state.correctAnswers++;
      game.drawGaugeValue();
      game.updateProgress("Earth or Birth");
      game.giveAnswerFeedback(answer);
    } else {
      game.updateProgress(false);
      game.giveAnswerFeedback(answer);
    }
    game.state.questionsAnswered++;

    // wait a second
    window.setTimeout(function() {
      //end game else go to next question
      if (game.state.questionsAnswered === game.state.numberOfQuestions) {
        game.endGame();
      } else {
        game.goToNextQuestion();
      }
    }, 1000);
  },

  drawGaugeValue: function() {
    var currentValue =
      100 /
      (game.state.numberOfQuestions / (game.state.correctAnswers - 1)) /
      100;
    var nextValue = currentValue + 100 / game.state.numberOfQuestions / 100;

    var draw = function(currentValue, nextValue) {
      var bg = game.state.gauge[0];
      var ctx = (ctx = bg.getContext("2d"));
      var imd = null;

      var startRad = 0.75;
      var totalRads = 1.5;

      var sAngle = Math.PI * startRad;

      ctx.beginPath();
      ctx.strokeStyle = "#47338f";
      ctx.lineCap = "round";
      ctx.closePath();
      ctx.fill();
      ctx.lineWidth = 10.0;

      imd = ctx.getImageData(0, 0, 240, 240);

      $({ n: currentValue }).animate(
        { n: nextValue },
        {
          duration: 1000 * nextValue,
          step: function(now, fx) {
            game.state.scoreNumber.text(Math.ceil(now * 100));
            ctx.putImageData(imd, 0, 0);
            ctx.beginPath();
            ctx.arc(
              120,
              120,
              100,
              sAngle,
              (totalRads * now + startRad) * Math.PI,
              false
            );
            ctx.stroke();
          }
        }
      );
    };
    draw(currentValue, nextValue);
  },

  updateProgress: function(correct) {
    $(game.state.indicators[game.state.questionsAnswered]).addClass(
      correct ? "correct" : "incorrect"
    );
    $(game.state.indicators).removeClass("current");
    $(game.state.indicators[game.state.questionsAnswered + 1]).addClass(
      "current"
    );
  },

  giveAnswerFeedback: function(answer) {
    var answerGroup = answer.parent().parent().find(".answer");
    for (var i = 0; i < answerGroup.length; i++) {
      // disable extra clicks
      answerGroup[i].disabled = true;
      if ($(answerGroup[i]).data("correct")) {
        $(answerGroup[i]).parent().addClass("correct");
      } else {
        $(answerGroup[i]).parent().addClass("incorrect");
      }
    }
  },

  goToNextQuestion: function() {
    var lastQuestionIndex = game.state.questionsAnswered - 1;
    var nextQuestionIndex = game.state.questionsAnswered;
    $(game.state.questions[lastQuestionIndex]).fadeOut(400, function() {
      $(game.state.questions[nextQuestionIndex]).fadeIn(200);
    });
  },
  timesUp: function() {
    var endText =
      "Looks like you’ve run out of time.<br />No worries. You can take up to 5 times a day.";
    game.state.questionsView.fadeOut(400, function() {
      game.state.timeOutText[0].innerHTML = endText;
      game.state.gameEndViewTimesUp.fadeIn(200);
    });
  },

  endGame: function() {
    var endText =
      'You got<br><span class="score">' +
      game.state.correctAnswers +
      " out of " +
      game.state.numberOfQuestions +
      "</span><br> correct";
    game.state.questionsView.fadeOut(400, function() {
      game.state.gameEndText[0].innerHTML = endText;
      game.state.gameEndView.fadeIn(200);
    });
  }
};

game.init();

var drawGaugeBackground = function() {
  var bg = $("#gauge")[0];
  var ctx = bg.getContext("2d");
  var imd = null;
  var sAngle = Math.PI * 0.75;
  var eAngle = Math.PI * 0.25;

  ctx.beginPath();
  ctx.strokeStyle = "#f4f4f4";
  ctx.lineCap = "round";
  ctx.closePath();
  ctx.fill();
  ctx.lineWidth = 30.0;

  imd = ctx.getImageData(0, 0, 240, 240);

  ctx.putImageData(imd, 0, 0);
  ctx.beginPath();
  ctx.arc(120, 120, 100, sAngle, eAngle, false);
  ctx.stroke();
};

drawGaugeBackground();




function check(){
  
var question1=document.quiz.question1.value;
var question2=document.quiz.question2.value;
var question3=document.quiz.question3.value;
var question4=document.quiz.question4.value;
var question5=document.quiz.question5.value;
var question6=document.quiz.question6.value;
var question7=document.quiz.question7.value;
var correct=0;


    if (question1=="Markup"){
        correct++;
  }4 out of 4

   if (question2=="true") {
       correct++;
  }  

  if (question3=="Compact Disc") {
      correct++;
  }
  
  if (question4=="protons and neutrons") {
      correct++;
  }
  
   if (question5=="Ultraviolet radiation") {
      correct++;
  }
  
    if (question6=="Russia") {
      correct++;
  }
  
  if (question7=="Tennis") {
    correct++;  
  }


var messages=["Great job!","That's just okay!","You need to do better"];
var pictures=["https://media3.giphy.com/media/l3vQZX02NdzuWKnsI/200w.webp","https://media2.giphy.com/media/mDw3ZiBAUI8ZW/200w.webp","https://media0.giphy.com/media/RQSuZfuylVNAY/200w.webp"];

var range;
  
  if(correct<1){
      range=2;
  }  
  
  if(correct>0){
      range=1;
  }
  
  if(correct>6){
      range=0;
  }


document.getElementById("messages").innerHTML=messages[range];
document.getElementById("number_correct").innerHTML="&rarr;you got "+correct+" correct.";
document.getElementById("pictures").src=pictures[range];


}




</script>