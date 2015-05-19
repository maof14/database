# Database

Basic PHP PDO database wrapper. 

## Example

### Initializing the class 

Init the class and fetch some DB records

```php
<?php
	// Include config file or create own containing DSN connection details.
	include __DIR__."../../src/config.php";

	// Init the database class using the DSN variable
	$db = new CDatabase($database);

	// Some SQL string and query parameters.
	$sql = "SELECT * FROM table WHERE someColumn = ? LIMIT 0, 10";
	$params[] = 'parameter';

	// Execute function that returns the results as array. 
	$results = $db->executeSelectQueryAndFetchAll($sql, $params);
?>
```

## Output the results

Output them in HTML, for instance: 

```php
	<ul>
		<?php foreach($results as $result): ?> 
			<li><?=$result->column;?></li>
		<?php endforeach;?>
	</ul>
```

Database not included. (:)) Examples provided for example use only. 

MIT Licence

© Mattias Olsson 2015