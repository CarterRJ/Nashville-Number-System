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

var All  = [A, D, G, C, F, Bb, Eb, Ab, Db, Gb, B, E];
$(document).ready(function() {
	for(i = 0; i < All.length; i++){
		console.log(i + "------------" + All[i][1]);
		for(k = 0; k < All[i].length; k++){
			console.log(k + ": " + All[i][k]);
		}
	}

$('#div_answerBox').click(function(e) {
    var txt = $(e.target).text();
    console.log(txt);
  });
});
//-->
</script>
<div class="progress progress-striped active">
	<div id="progress-bar" class="progress-bar progress-bar-success"
		role="progressbar" aria-valuenow="15" aria-valuemin="0"
		aria-valuemax="101" style="width: 5%"></div>
</div>
<div id=div_answerBox>
	<a class="btn btn-primary">A</a> <a class="btn btn-primary">A#/Bb</a> <a
		class="btn btn-primary">B</a> <a class="btn btn-primary">C</a> <a
		class="btn btn-primary">C#/Db</a> <a class="btn btn-primary">D</a> <a
		class="btn btn-primary">D#/Eb</a> <a class="btn btn-primary">E</a> <a
		class="btn btn-primary">F</a> <a class="btn btn-primary">F#/Gb</a> <a
		class="btn btn-primary">G</a> <a class="btn btn-primary">G#/Ab</a>
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
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Integer posuere erat a ante.</p>
						<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
					</blockquote>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="bs-component">
					<blockquote class="pull-right">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
							Integer posuere erat a ante.</p>
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
