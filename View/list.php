<!DOCTYPE html>
<html>
<head>
	<title>danhs ach</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
</head>
<body>
	<div>
		<?php
			if($data)
			{
				foreach ($data as $value) 
				{
					# code...
					?>
					<div class="BGR">
						<h3><?php echo $value->getID(); ?></h3>
						<h3><?php echo $value->getTITLE(); ?></h3>
						<h3><?php echo $value->getNAME(); ?></h3>
						<h3><?php echo $value->getEMAIL(); ?></h3>
						<h3><?php echo $value->getNOIDUNG(); ?></h3>
						<a href="index.php?task=insertorupdates&id=<?php echo $value->getID(); ?>">SỬA</a>
						<a href="index.php?task=delete&id=<?php echo $value->getID(); ?>">Xóa</a>
					</div>
						
					<?php
				}
			}
		?>
	</div>
	<a href="index.php?task=insertorupdates">Them moi</a>
</body>
</html>