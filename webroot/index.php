<?php

	include __DIR__."../../src/config.php";

	$title = "Database by maof14";
	$db = new CDatabase($database); // Initialize with dsn variable declared in config.
	$sql = "SELECT * FROM table WHERE someColumn = ? LIMIT 0, 10";
	$params[] = 'parameter';
	$results = $db->executeSelectQueryAndFetchAll($sql, $params);
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?=$title?></title>
		<link rel="stylesheet" href="css/style.css" />
		</head>
	<body>
		<div id="container">
		<h1><a href="/database/webroot">Database test</a></h1>
		<ul>
			<?php foreach($results as $result): ?> 
				<li><?=$result->column;?></li>
			<?php endforeach;?>
		</ul>
		</div>
	</body>
</html>