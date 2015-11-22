<script type="text/javascript" src="<?php echo asset_url();?>js/number-system/single-notes.js">
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