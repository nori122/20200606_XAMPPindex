<html>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">
<style type="text/css">
	body {
		background: #efeee5;
		color: #111;
		font-family: verdana, sans-serif;
		padding: 0;
		margin: 0;
	}

	.header a {
		background-color: #2a5d84;
		color: white;
		font-size: 25px;
		margin-left: 20px;
		text-decoration: none;
	}

	.header a:hover,
	.fa-external-link-alt:hover {
		text-decoration: underline;
		cursor: pointer;
	}

	.fa-external-link-alt {
		color: white;
	}

	.header {
		background-color: #2a5d84;
		padding: 30px 0;
		width: 100vw;
	}

	.table_container {
		margin-left: 20px;
	}

	#main {
		width: 100%;
		position: relative;
	}

	.table #menu {
		float: left;
		width: 100%;
	}

	#menu ul {
		padding: 0;
		border-right: 3px solid white;
		margin: 0;
	}

	ul li {
		list-style-type: none;
	}

	ul li a {
		display: block;
		background: #eee;
		padding: 4px 7px;
		border-top: 2px solid #fff;
	}

	ul li a:hover {
		background: #B6C6D7;
		color: black;
	}

	iframe {
		border: 0 none;
		overflow: hidden;
		width: 74%;
		height: 95%;
		padding-left: 1%;
	}

	.clear-block {
		width: 100%;
		height: 1px;
		clear: both;
	}

	.directory,
	.directory td,
	.directory th {
		border-collapse: collapse;
		border: 1px solid darkgray;
	}

	.title {
		background-color: #2a5d84;
		color: white;
	}
</style>

<!-- <link rel="stylesheet" type="text/css" href="phpmyadmin/phpmyadmin.css.php"> -->
<!-- </script> -->

<body>
	<div id="main">
		<div class="container">
			<div id="menu">
				<div class="header">
					<a href="https://localhost/phpmyadmin/index.php" target="_blank"> <strong>PHP my admin </strong></a><i class="fas fa-lg fa-external-link-alt"></i>


				</div>
				<div class="table_container">
					<br><br>
					<table class="directory">
						<th class="title">フォルダ名</th>
						<th class="title">最終更新日</th>

						<?php
						$www = $_SERVER['DOCUMENT_ROOT'];
						$files = scandir($www);

						usort($files, 'strcasecmp');
						foreach ($files as $key => $value) {
							if ($value[0] != '.' && is_dir($value)) {
								echo '<tr>';
								echo '<td style="font-size:17px; padding:8px 30px 8px 10px;"><i class="far fa-folder"></i>

<a href="/' . $value . '">' . $value . '</a></td>';
								// echo "<td style='padding:0 20px'><a href='/" . $value . "'>" . $value . "</a></td>";
								$updated = date("Y-m-d H:i:s", filemtime($value));
								echo '<td style="padding:8px 30px 8px 10px">' . $updated . '</td>';
								echo '</tr>';
							}
						}
						?>
					</table>
				</div>
			</div>
			<!-- <div>
				<iframe src="http://localhost/phpmyadmin/index.php"></iframe>
			</div> -->
			<!-- <div class="clear-block"></div> -->
		</div>
	</div>
</body>

</html>