<?php include_once('statics/header.php'); ?>
<?php include_once('libs/list_todo.php'); ?>
<?php include_once('libs/delete.php'); ?>
			
			<div id="mainContent" class="clearfix">
				<div id="head">
					<h2> Manage Todo</h2>
					<div id="add_more">
						<a href="add_new.php" class="btn btn-success"> + Add New</a>
					</div><!--end add_more -->
				</div><!--end head -->
				
				<div id="mainBody">
					
					<table class="table table-striped">
						<thead>
							<tr>
								<td> Title </td>
								<td> Snippet </td>
								<td> Due Date </td>
								<td> Time Left </td>
								<td> Progress </td>
								<td> Actions </td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<?php
									if($list_todo !== 0)
									{
									foreach($list_todo as $key => $value)
									{
										// To get the time left or remaining
										$today = strtotime("now");
										$due_date = strtotime($value['due_date']);
										if($due_date > $today)
										{
											$hours = $due_date - $today;
											$hours = $hours / 3600;
											$time_left = $hours / 24;
											if($time_left < 1) // if zero days are remaining 
											{
												$time_left = 'Less than 1 day';
											}
											else
											{
												$time_left = round($time_left).' days remaining';
											}
										}
										else
										{
											$time_left = 'Expired';
										}
									?>
									<td><?php echo $value['title']; ?></td>
									<td><?php echo $value['description']; ?></td>
									<td><?php echo $value['due_date']; ?></td>
									<td><?php echo $time_left; ?></td>
									<td>
									<div class="progress progress-striped">
										<div class="progress-bar" style="width: <?php echo $value['progress']; ?>%;">

										</div>

									</div>


									</td>
									<td>
										<a href="edit.php?id=<?php echo $value['id']; ?>" title="<?php echo $value['title']; ?>">Edit</a> |
										<a href="index.php?delete=<?php echo $value['id']; ?>" title="<?php echo $value['title']; ?>">Delete</a>
									</td>
							</tr>
								<?php
									}
								}
								else
								{
									echo '<td><td></td></td><td>Sorry no more todo under this section</td><td></td><td></td><td></td>';
								}
								?>
						</tbody>
						
					</table>
				</div><!--end mainBody -->
				
			</div><!--end mainContent -->
			
			
		</div><!--end td_container -->
	</div><!--end wrapper -->
</body>
</html>