<?php echo "hello";

?>


<!-- Buttons
      ================================================== -->
<div class="bs-docs-section">
	<div class="row">
		<div class="col-lg-12">
			<h1 id="buttons">Buttons</h1>

		</div>
	</div>

	<!-- <script>
$(document).ready(function(){
    $( "#btn-new_table" ).click(function(){
		tbl_name = "new table";
		var columns = {};
    	columns.audio = "varchar()";
    	columns.video = 'mate';
    	columns.happy= 'hello';
        $.ajax({type: "POST", data: {tbl_name:tbl_name, columns:columns}, url: "<?php echo base_url(); ?>index.php/pages/tbl_columns/", success: function(result){
			console.log("Working");
            $("#div1").html(result);
            $( "#btn-new_table").prop('disabled', true);
        }});

    });
});
</script> -->


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

<!-- Forms
      ================================================== -->
<div class="bs-docs-section">
	<div class="row">
		<div class="col-lg-12">
			<div class="page-header">
				<h1 id="forms">Forms</h1>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<div class="bs-component">
				
			</div>
		</div>
	</div>
</div>
</div>

</div>