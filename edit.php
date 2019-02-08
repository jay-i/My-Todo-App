<?php include_once('statics/header.php'); ?>
<?php include_once('libs/list_todo.php'); ?>
<?php include_once('libs/edit_todo.php'); ?>


<div id="mainContent">
	<div id="head">
		<h2> Edit Todo </h2>
	</div>
	
	<form method="post" action="edit.php?id=<?php echo $_GET['id']; ?>">
		<div id="mainBody">
		<?php 
				if(isset($error)){ echo '<div class="alert alert-danger">'.$error.'</div>';}
		?>
		<?php 
				if(isset($success)){ echo '<div class="alert alert-success">'.$success.'</div>';}
		?>
		
		<?php foreach($list_todo as $td)
		{ 
			$given_array = array("Inbox", "Read Later", "Important");
			$selected_array = array($td['label']); 
			$array_remaining = array_diff($given_array, $selected_array); // Get the remaining items
		?>
		
		
			<div class="form_field">
				<label for="Title">Title</label><br />
				<input type="text" name="title" id="title" value="<?php echo $td['title']; ?>" />
			</div>
			
			<div class="form_field">
				<label for="desc">Description <small>(Optional)</small></label><br />
				<textarea name="description" id="description"><?php echo $td['description']; ?></textarea>
			</div>
			
			<div class="form_field">
				<label for="due_date">Due Date</label><br />
				<input type="date" name="due_date" id="due_date" value="<?php echo $td['due_date']; ?>"/>
			</div>
			
			<div class="form_field">
				<label for="label">Label Under</label><br />
				<select name="label_under" id="label_under">
					<?php echo '<option value="'.$td['label'].'">'.$td['label'].'</option>'; 
						foreach($array_remaining as $ar)
						{
							echo '<option value="'.$ar.'">'.$ar.'</option>'; 
						}
					?>
				</select>
			</div>
			
			<div class="form_field">
				<div id="seekbar"></div>
				<div id="progress"><?php echo $td['progress']; ?> %</div>
				<input type="hidden" name="progress_value" value="<?php echo $td['progress']; ?>" id="progress_value" />
			</div>
			
			<div class="form_field1"><br />
				<input type="submit" name="edit_todo" id="edit_todo" value="Update" class="btn btn-info" />
			</div>
		<?php } ?>
		</div>
	</form>
</div>