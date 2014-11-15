<?php 
	require_once('main.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Product Groups</title>
	<meta charset='utf-8' />
	<link rel="stylesheet" type="text/css" href="styles/site.css" />
</head>
<body>
	<div id="wrapper">
		<h1>Groups</h1>
		<table border="1">
			<thead>
				<tr>
					<th>Group ID</th>
					<th>Department name</th>
					<th>Item description</th>
					<th>City</th>
					<th>Total places</th>
					<th>Free places</th>
					<th>Course tax</th>
					<th>Starting date</th>
					<th>Written exam date</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($groupsData->children() as $item): ?>
				<tr>
					<td><?php echo $item->Group_ID ?></td>
					<td><?php echo $item->Department_Name?></td>
					<td><?php echo $item->Item_Description?></td>
					<td><?php echo $item->City?></td>
					<td><?php echo $item->TotalPlaces?></td>
					<td><?php echo $item->FreePlaces?></td>
					<td><?php echo $item->CourseTax?></td>
					<td><?php echo $item->StartingDate?></td>
					<td><?php echo $item->WrittenExamDate?></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
		
		<h1>Products</h1>
		<table border="1">
			<thead>
				<tr>
					<th>Training product</th>
					<th>Item description</th>
					<th>Course type</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($productsData->children() as $item): ?>
				<tr>
					<td><?php echo $item->TrainingProduct ?></td>
					<td><?php echo $item->Item_Description?></td>
					<td><?php echo $item->ERP_Course_Type?></td>
				</tr>
			<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</body>
</html>