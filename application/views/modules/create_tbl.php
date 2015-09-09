<script src="<?php echo asset_url();?>js/create_tbl.js"
	type="text/javascript"></script>
<div class="row">
	<div class="col-lg-12">
		<div id="div_createTable" style="display: none">			
			<?php
			echo form_open ( 'pages/rename', 'class = "form-vertical" id="form_createTable"' );
			?>
				<div class="form-group">
				<label for="input_tableName">Table Name</label> <input type="text"
					class="form-control" name="table_name" id="input_tableName"
					placeholder="Table Name">
			</div>
			<div class="form-group">
				<label for="input_numColumns">Number of Columns</label> <input
					type="number" class="form-control"
					id="input_numColumns" value="1" min="1">
			</div>
			<div id="div_createColumns" class="form-inline" style="display: none"></div>
			<div id="#div_buttonRow" style="margin-top: 15px;">
				<button id="btn_tableName" type="button" class="btn btn-success">Next</button>
				<button id="btn_submit" type="submdit" class="btn btn-success"
					style="display: none;">Submit</button>
				<button id="btn_cancel" type="button" class="btn btn-info"
					style="display: none;">Cancel</button>
			</div>
			</form>
		</div>

		<button id="btn_newTable" type="button" class="btn btn-success">
			<span class="glyphicon glyphicon-plus"></span> Create a new table
		</button>
		<button id="btn_delete" type="button" style="display: none;"
			class="btn btn-primary disabled">Delete table</button>
	</div>
</div>

