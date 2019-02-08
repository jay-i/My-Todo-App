<?php 

	include_once('statics/header.php'); 
	include_once('libs/create_todo.php'); 
	
?>


<div id="mainContent">
	<div id="head">
		<h2> Create Todo </h2>
	</div>
	
	<form method="post" action="add_new.php">
		<div id="mainBody">
		<?php 
				if(isset($error)){ echo '<div class="alert alert-danger">'.$error.'</div>';}
		?>
		<?php 
				if(isset($success)){ echo '<div class="alert alert-success">'.$success.'</div>';}
		?>
		
			<div class="form_field">
				<label for="Title">Title</label><br />
				<input type="text" name="title" id="title" />
			</div>
			
			<div class="form_field">
				<label for="desc">Description <small>(Optional)</small></label><br />
				<textarea name="description" id="description"></textarea>
			</div>
			
			<div class="form_field">
				<label for="due_date">Due Date</label><br />
				<input type="date" name="due_date" id="due_date" />
			</div>
			
			<div class="form_field">
				<label for="label">Label Under</label><br />
				<select name="label_under" id="label_under">
					<option value="">Select</option>
					<option value="Inbox">Inbox</option>
					<option value="Read Later">Read Later</option>
					<option value="Important">Important</option>
				</select>
			</div>
			
			<div class="form_field1"><br />
				<input type="submit" name="create_todo" id="create_todo" value="Create" class="btn btn-info" />
			</div>
		</div>
	</form>
</div>