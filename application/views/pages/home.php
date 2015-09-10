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

var All  = {A: A, D: D, G: G, C: C, F: F, Bb: Bb, Eb: Eb, Ab: Ab, Db: Db, Gb: Gb, B: B, E: E};
$(document).ready(function() {
	var score = 0;
	var numQues = 10;
	var numAnswered = 0;
	var incFactor = 100/numQues;
	console.log("document READY");
	$("#p_question").text(1 + Math.floor(Math.random() * 8));
	/*for(i = 0; i < All.length; i++){
		console.log(i + "------------" + All[i][1]);
		for(k = 0; k < All[i].length; k++){
			console.log(k + ": " + All[i][k]);
		}
	}*/


    for(k = 0; k < All.A.length; k++){
		console.log(k + ": " + All[$("#p_key").text()][k]);
	}


$('.answer').click(function(e) {
	
	if(numAnswered <= numQues){
    var response = $(e.target).text();    
    var question = All[$("#p_key").text()][$("#p_question").text()];
    
    if (question == response){
		console.log("Correct");
		score+=incFactor;
		if (score>=100) score = 100;
		$(".answer").prop('disabled', false);
		$("#p_question").text(1 + Math.floor(Math.random() * 8));
		
    }else{
		console.log("Incorrect");
		$(e.target).prop('disabled', true);
		score-=incFactor;
		if (score<0) score = 0;
    }

    $("#progress-bar").width(score + "%");
    numAnswered++;
	}else{
		console.log("Quiz done");
	}
  });

$('#a_endQuiz').click(function() {
	console.log("Quiz done");
	$(".answer").prop('disabled', false);
	
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
			<button class="btn btn-primary answer">C#/Db</button>
			<button class="btn btn-primary answer">D#/Eb</button>
			<button class="btn btn-primary answer">F#/Gb</button>
			<button class="btn btn-primary answer">G#/Ab</button>
			<button class="btn btn-primary answer">A#/Bb</button>
		</div>
		<div id="div_whiteKeys">
			<button class="btn btn-primary answer">C</button>
			<button class="btn btn-primary answer">D</button>
			<button class="btn btn-primary answer">E</button>
			<button class="btn btn-primary answer">F</button>
			<button class="btn btn-primary answer">G</button>
			<button class="btn btn-primary answer">A</button>
			<button class="btn btn-primary answer">B</button>
		</div>
	</div>
	<div id="div_appFoot">
		<a id="a_endQuiz" class="btn btn-default">End Quiz</a>
	</div>
</div>
<!-- Typography
      ================================================== -->
<div class="bs-docs-section">
	<!-- Blockquotes -->

	<div class="row">
		<div class="col-lg-12">
			<h2 id="type-blockquotes">Blockquotes</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6">
			<div class="bs-component">
				<blockquote>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
						posuere erat a ante.</p>
					<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
				</blockquote>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="bs-component">
				<blockquote class="pull-right">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
						posuere erat a ante.</p>
					<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
				</blockquote>
			</div>
		</div>
	</div>
</div>

<!-- Tables
      ================================================== -->
<div class="bs-docs-section">

	<div class="row">
		<div class="col-lg-12">
			<div class="page-header">
				<h1 id="tables">Tables</h1>
			</div>

			<div class="bs-component">
				<table class="table table-striped table-hover ">
					<thead>
						<tr>
							<th>#</th>
							<th>Column heading</th>
							<th>Column heading</th>
							<th>Column heading</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Column content</td>
							<td>Column content</td>
							<td>Column content</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Column content</td>
							<td>Column content</td>
							<td>Column content</td>
						</tr>

					</tbody>
				</table>
			</div>
			<!-- /example -->
		</div>
	</div>
</div>