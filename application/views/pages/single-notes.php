<?php
?>

<script type="text/javascript">
MIDI.loadPlugin({
    soundfontUrl: "<?php echo asset_url()?>soundfont/",
    instrument: "acoustic_grand_piano",
    onprogress: function(state, progress) {
        console.log(state, progress);
    },
    onsuccess: function() {
        $("#img_spinner").hide();
        $("#div_app").show();

        playMidi();
    }
});
<!--
var A = ["57", "A", "B", "C#/Db", "D", "E", "F#/Gb", "G#/Ab", "A"];
var D = ["62", "D", "E", "F#/Gb", "G", "A", "B", "C#/Db", "D"];
var G = ["55", "G", "A", "B", "C", "D", "E", "F#/Gb", "G"];
var C = ["60", "C", "D", "E", "F", "G", "A", "B", "C"];
var F = ["65", "F", "G", "A", "A#/Bb", "C", "D", "E", "F"];
var Bb = ["58", "A#/Bb", "C", "D", "D#/Eb", "F", "G", "A", "A#/Bb"];
var Eb = ["63", "D#/Eb", "F", "G", "G#/Ab", "A#/Bb", "C", "D", "D#/Eb"];
var Ab = ["56", "G#/Ab", "A#/Bb", "C", "C#/Db", "D#/Eb", "F", "G", "G#/Ab"];
var Db = ["61", "C#/Db", "D#/Eb", "F", "F#/Gb", "G#/Ab", "A#/Bb", "C", "C#/Db"];
var Gb = ["66", "F#/Gb", "G#/Ab", "A#/Bb", "B", "C#/Db", "D#/Eb", "F", "F#/Gb"];
var B = ["59", "B", "C#/Db", "D#/Eb", "E", "F#/Gb", "G#/Ab", "A#/Bb", "B"];
var E = ["64", "E", "F#/Gb", "G#/Ab", "A", "B", "C#/Db", "D#/Eb", "E"];

var allKeys = {
    A: A,
    D: D,
    G: G,
    C: C,
    F: F,
    Bb: Bb,
    Eb: Eb,
    Ab: Ab,
    Db: Db,
    Gb: Gb,
    B: B,
    E: E
};
var keys = Object.keys(allKeys);
var major_scale = [null, 0, 2, 4, 5, 7, 9, 11, 12];

var score = 0;
var numCorrect = 0;
var numQues = 10;
var numAnswered = 0;
var incFactor = 100 / numQues;

function reset(numQues) {
    $(".answer").prop('disabled', false);
    score = 0;
    numCorrect = 0;
    this.numQues = numQues;
    numAnswered = 0;
    incFactor = 100 / numQues;
    console.log("RESET");
    $("#progress-bar").width("1%");
    $("#div_results").hide();
}

function randomStart() {
    $("#p_question").text(1 + Math.floor(Math.random() * 8));
    $("#p_key").text(keys[1 + Math.floor(Math.random() * keys.length)]);
    $(".answer").prop('disabled', false);
    console.log("RANDOM START");
}

function playMidi(){
	midiNum = parseInt(allKeys[$("#p_key").text()][0]);
    midiNum += major_scale[$("#p_question").text()];
	console.log("Playing midi :" + midiNum);
    MIDI.noteOn(0, midiNum, 127, 0);
    MIDI.noteOff(0, midiNum, 4);
}

$(document).ready(function() {

    //Display first key/number 
    randomStart();

    //Handle button click 
    $('.answer').click(function(e) {
    	MIDI.stopAllNotes();
        numAnswered++;
        console.log("numAns: " + numAnswered);
        if (numAnswered <= numQues) {
            var response = $(e.target).attr('id');
            var question = allKeys[$("#p_key").text()][$("#p_question").text()];
            var curr = $("#p_question").text();

            //Correct
            if (question == response) {
                console.log("Correct");
                numCorrect++;
                $("#span_correctResponses").text(numCorrect);
                $(".answer").prop('disabled', false);
                prev = curr;
                while (curr == prev) {
                    curr = 1 + Math.floor(Math.random() * 8);
                }
                $("#p_question").text(curr);
                playMidi();

                //Incorrect	
            } else {
                console.log("Incorrect");
                $(e.target).prop('disabled', true);
            }

            //Update progress bar
            if (score > 100) {
                score = 100;
            } else if (score < 0) {
                score = 0;
            } else {
                score = numCorrect / numAnswered * 100;
                console.log("score: " + score + "%");
                console.log("numCorrect: " + numCorrect);
                console.log("numAns: " + numAnswered);
            }
            $("#progress-bar").width(score + "%");
            console.log("score: " + score + "%");
            $("#span_numResponses").text(numAnswered);
        } else {
        	endQuiz();
        }
    });

    function endQuiz(){
    	 console.log("Quiz done");
         $("#div_app").hide();
         $("#div_results").show();
         $("#span_numCorrect").text(numCorrect);
         $("#span_numAnswered").text(numAnswered);
         $("#span_score").text(score);
    }
    
    //End quiz button
    $('#a_endQuiz').click(function() {
       endQuiz();
    });
    //Reset button
    $('#a_reset').click(function() {
        console.log("random start");
        //randomStart();
        reset(50);
    });

});

//-->
</script>

<img id="img_spinner" src="<?php echo asset_url(); ?>img/loader.gif">

<div id="div_app" class="col-lg-12" style="display: none;">
	<div class="progress progress-striped active">
		<div id="progress-bar" class="progress-bar progress-bar-success"
			role="progressbar" aria-valuenow="15" aria-valuemin="0"
			aria-valuemax="101" style="width: 1%"></div>
	</div>
	<p>
		<span id="span_correctResponses">0</span> of <span
			id="span_numResponses">0</span> correct
	</p>
	<div id="div_question">
		<p id="p_key" class="text-primary">C</p>
		<p id="p_question" class="text-info">1</p>
	</div>
	<div id="div_answerBox">
		<div id="div_blackKeys">
			<button id="C#/Db" class="btn btn-primary answer">C#/Db</button>
			<button id="D#/Eb" class="btn btn-primary answer">D#/Eb</button>
			<button id="F#/Gb" class="btn btn-primary answer">F#/Gb</button>
			<button id="G#/Ab" class="btn btn-primary answer">G#/Ab</button>
			<button id="A#/Bb" class="btn btn-primary answer">A#/Bb</button>
		</div>
		<div id="div_whiteKeys">
			<button id="C" class="btn btn-primary answer">&nbsp;&nbsp;C&nbsp;&nbsp;</button>
			<button id="D" class="btn btn-primary answer">&nbsp;&nbsp;D&nbsp;&nbsp;</button>
			<button id="E" class="btn btn-primary answer">&nbsp;&nbsp;E&nbsp;&nbsp;</button>
			<button id="F" class="btn btn-primary answer">&nbsp;&nbsp;F&nbsp;&nbsp;</button>
			<button id="G" class="btn btn-primary answer">&nbsp;&nbsp;G&nbsp;&nbsp;</button>
			<button id="A" class="btn btn-primary answer">&nbsp;&nbsp;A&nbsp;&nbsp;</button>
			<button id="B" class="btn btn-primary answer">&nbsp;&nbsp;B&nbsp;&nbsp;</button>
		</div>
	</div>
	<div id="div_appFoot">
		<a id="a_endQuiz" class="btn btn-default">End Quiz</a> <a id="a_reset"
			class="btn btn-default">Reset</a>
	</div>
</div>
<div id="div_results" style="display: none;">

	<div class="row">
		<div class="col-lg-12">
			<div class="bs-component">
			
	      <h1>Finished!</h1>
	      <p style="font-size:24px;" id="post-quiz-info">You identified <span id="span_numCorrect">3</span> of <span id="span_numAnswered">3</span> correctly, <span id="span_score">100.00</span>%</p>
	      <p style="text-align:left;">If you want to improve, bookmark this exercise and practice a little bit every day. You can read more advice on how to practice ear training <a href="/ear-training/how-to-practice">here</a>.</p>
	      <a class="btn btn-lg btn-primary" id="start-again">Start Again</a>
	    </div>
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
						<tr class="info">
							<td>3</td>
							<td>Column content</td>
							<td>Column content</td>
							<td>Column content</td>
						</tr>
						<tr class="success">
							<td>4</td>
							<td>Column content</td>
							<td>Column content</td>
							<td>Column content</td>
						</tr>
						<tr class="danger">
							<td>5</td>
							<td>Column content</td>
							<td>Column content</td>
							<td>Column content</td>
						</tr>
						<tr class="warning">
							<td>6</td>
							<td>Column content</td>
							<td>Column content</td>
							<td>Column content</td>
						</tr>
						<tr class="active">
							<td>7</td>
							<td>Column content</td>
							<td>Column content</td>
							<td>Column content</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php 