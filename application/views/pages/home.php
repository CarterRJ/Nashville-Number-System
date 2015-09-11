<?php
?>

<script type="text/javascript">
MIDI.loadPlugin({
    soundfontUrl: "assets/soundfont/",
    instrument: "acoustic_grand_piano",
    onprogress: function(state, progress) {
        console.log(state, progress);
    },
    onsuccess: function() {

        $("#img_spinner").hide();
        $("#div_app").show();
        var delay = 0; // play one note every quarter second
        var note = 50; // the MIDI note
        var velocity = 127; // how hard the note hits
        // play the note
        MIDI.setVolume(0, 127);
        MIDI.noteOn(0, note, velocity, delay);
        MIDI.noteOff(0, note, delay + 0.75);
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
var major_scale = [0, 2, 4, 5, 7, 9, 11, 12];

var score = 0;
var numCorrect = 0;
var numQues = 30;
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

$(document).ready(function() {

    //Display first key/number 
    randomStart();

    //Handle button click 
    $('.answer').click(function(e) {
        numAnswered++;
        if (numAnswered <= numQues) {
            var response = $(e.target).attr('id');
            var question = allKeys[$("#p_key").text()][$("#p_question").text()];
            var curr = $("#p_question").text();
            note = parseInt(allKeys[$("#p_key").text()][0]);
            note += major_scale[$("#p_question").text()];
            console.log("note: " + note);
            console.log("question: " + question);

            MIDI.noteOn(0, note, 127, 0);
            MIDI.noteOff(0, note, 0.75);
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

                //Incorrect	
            } else {
                console.log("Incorrect");
                $(e.target).prop('disabled', true);
            }
            //Update progress bar
            if (score >= 100) {
                score = 100;
            } else if (score < 0) {
                score = 0;
            } else {
                score = numCorrect / numAnswered * 100;
            }
            $("#progress-bar").width(score + "%");
            $("#span_numResponses").text(numAnswered);
        } else {
            console.log("Quiz done");
        }
    });
    //End quiz button
    $('#a_endQuiz').click(function() {
        console.log("Quiz done");
        $("#div_results").show();
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
<div id="div_results" class="bs-docs-section" style="display: none;">

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
			<!-- /example -->
		</div>
	</div>
</div>
<?php 