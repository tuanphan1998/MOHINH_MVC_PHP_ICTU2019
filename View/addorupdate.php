<!DOCTYPE html>
<html>
<head>
	<title>them va sua</title>
</head>
<body>
	<div>
		<?php
			if(isset($_GET['id']))
			{
					?>
							<form action="index.php?task=update" method="POST">
								<?php

									if($data)
									{
										foreach ($data as $value) 
										{
											# code...
											?>
													<div>
														<label>Nhập id</label>
														<textarea name="id"><?php echo $value->getID(); ?></textarea>
													</div>
													<div>
														<label>Nhập title</label>
														<textarea name="title"><?php echo $value->getTITLE(); ?></textarea>
													</div>
													<div>
														<label>Nhập name</label>
														<textarea name="name"><?php echo $value->getNAME(); ?></textarea>
													</div>
													<div>
														<label>Nhập email</label>
														<textarea name="email"><?php echo $value->getEMAIL(); ?></textarea>
													</div>
													<div>
														<label>Nhập noi dung</label>
														<textarea name="noidung"><?php echo $value->getNOIDUNG(); ?></textarea>
													</div>
													<div>
														<label></label>
														<input type="submit" value="GUI NINH LUAN">
													</div>
											<?php
										}
									}
								?>
							</form>
				<?php
			}
			else
			{
				?>
							<form action="index.php?task=insertorupdate" method="POST">
								<div>
									<label>Nhập title</label>
									<textarea name="title"></textarea>
								</div>
								<div>
									<label>Nhập name</label>
									<textarea name="name"></textarea>
								</div>
								<div>
									<label>Nhập email</label>
									<textarea name="email"></textarea>
								</div>
								<div>
									<label>Nhập noi dung</label>
									<textarea name="noidung"></textarea>
								</div>
								<div>
									<label></label>
									<input type="submit" value="GUI NINH LUAN">
								</div>
							</form>
				<?php
			}
		?>
	</div>
</body>
</html>