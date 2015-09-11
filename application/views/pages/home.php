<?php
echo "hello";

?>

<script type="text/javascript">
<!--
var A = ["null", "A", "B", "C#/Db", "D", "E", "F#/Gb", "G#/Ab", "A"];
var D = ["null", "D", "E", "F#/Gb", "G", "A", "B", "C#/Db", "D"];
var G = ["null", "G", "A", "B", "C", "D", "E", "F#/Gb", "G" ];
var C = ["null", "C", "D", "E", "F", "G", "A", "B", "C" ];
var F = ["null", "F", "G", "A", "A#/Bb", "C", "D", "E", "F" ];
var Bb = ["null", "A#/Bb", "C", "D", "D#/Eb", "F", "G", "A", "A#/Bb" ];
var Eb = ["null", "D#/Eb", "F", "G", "G#/Ab", "Bb", "C", "D", "D#/Eb" ];
var Ab = ["null", "G#/Ab", "A#/Bb", "C", "C#/Db", "D#/Eb", "F", "G", "G#/Ab"  ];
var Db = ["null", "C#/Db", "D#/Eb", "F", "F#/Gb", "G#/Ab", "A#/Bb", "C", "C#/Db" ];
var Gb = ["null", "F#/Gb", "G#/Ab", "A#/Bb", "B", "C#/Db", "D#/Eb", "F", "F#/Gb" ];
var B = ["null", "B", "C#/Db", "D#/Eb", "E", "F#/Gb", "G#/Ab", "A#/Bb", "B" ];
var E = ["null", "E", "F#/Gb", "G#/Ab", "A", "B", "C#/Db", "D#/Eb", "E" ];

var allKeys  = {A: A, D: D, G: G, C: C, F: F, Bb: Bb, Eb: Eb, Ab: Ab, Db: Db, Gb: Gb, B: B, E: E};
var keys = Object.keys(allKeys);

var score = 0;
var numQues = 12;
var numAnswered = 0;
var incFactor = 100/numQues;

function reset(numQues){
	$(".answer").prop('disabled', false);
	score = 0;
	this.numQues = numQues;
	numAnswered = 0;
	incFactor = 100/numQues;
	console.log("RESET");
	$("#progress-bar").width("1%");
}

function randomStart(){
	$("#p_question").text(1 + Math.floor(Math.random() * 8));
	$("#p_key").text(keys[ 1 + Math.floor(Math.random() * keys.length)]);
	$(".answer").prop('disabled', false);
	console.log("RANDOM START");
}

$(document).ready(function() {
	console.log("NumAnswered: "+ numAnswered);
	
	//Display first key/number 
	randomStart();

	//Handle button click 
	$('.answer').click(function(e) {
		
		if(numAnswered <= numQues){
	    var response = $(e.target).attr('id');    
	    var question = allKeys[$("#p_key").text()][$("#p_question").text()];

	    //Correct
	    if (question == response){
			console.log("Correct");
			score+=incFactor;
			if (score>=100) score = 100;
			$(".answer").prop('disabled', false);
			$("#p_question").text(1 + Math.floor(Math.random() * 8));

		//Incorrect	
	    }else{
			console.log("Incorrect");
			$(e.target).prop('disabled', true);
			score-=incFactor;
			if (score<0) score = 0;
	    }
		//Update progress bar
	    $("#progress-bar").width(score + "%");
	    numAnswered++;
		}else{
			console.log("Quiz done");
		}
	  });
	//End quiz button
	$('#a_endQuiz').click(function() {
		console.log("Quiz done");
		reset(5);
	});
	//Reset button
	$('#a_reset').click(function() {
		console.log("random start");
		randomStart();
		reset(5);
		
	});
		
});
//-->
</script>
<div id="div_app" class="col-lg-12">
	<div class="progress progress-striped active">
		<div id="progress-bar" class="progress-bar progress-bar-success"
			role="progressbar" aria-valuenow="15" aria-valuemin="0"
			aria-valuemax="101" style="width: 1%"></div>
	</div>
	<div id="div_question">
		<p id="p_key" class="text-primary">C</p>
		<p id="p_question" class="text-info">1</p>
	</div>
	<div id="div_answerBox">
		<div id="div_blackKeys">
			<button id = "C#/Db" class="btn btn-primary answer">C#/Db</button>
			<button id = "D#/Eb" class="btn btn-primary answer">D#/Eb</button>
			<button id = "F#/Gb" class="btn btn-primary answer">F#/Gb</button>
			<button id = "G#/Ab" class="btn btn-primary answer">G#/Ab</button>
			<button id = "A#/Bb" class="btn btn-primary answer">A#/Bb</button>
		</div>
		<div id="div_whiteKeys">
			<button id = "C" class="btn btn-primary answer">&nbsp;&nbsp;C&nbsp;&nbsp;</button>
			<button id = "D" class="btn btn-primary answer">&nbsp;&nbsp;D&nbsp;&nbsp;</button>
			<button id = "E" class="btn btn-primary answer">&nbsp;&nbsp;E&nbsp;&nbsp;</button>
			<button id = "F" class="btn btn-primary answer">&nbsp;&nbsp;F&nbsp;&nbsp;</button>
			<button id = "G" class="btn btn-primary answer">&nbsp;&nbsp;G&nbsp;&nbsp;</button>
			<button id = "A" class="btn btn-primary answer">&nbsp;&nbsp;A&nbsp;&nbsp;</button>
			<button id = "B" class="btn btn-primary answer">&nbsp;&nbsp;B&nbsp;&nbsp;</button>
		</div>
	</div>
	<div id="div_appFoot">
		<a id="a_endQuiz" class="btn btn-default">End Quiz</a> <a id="a_reset"
			class="btn btn-default">Reset</a>
	</div>
</div>
