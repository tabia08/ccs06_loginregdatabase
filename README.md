# Registration and Login

A simple demonstration of registration and login events of a web application.

## Dependencies

- [Composer|https://getcomposer.org/]
- [.env (dot env)|https://github.com/vlucas/phpdotenv]

## PDO

### Connect to Database

`$conn = new PDO("mysql:host=127.0.0.1;dbname=database", 'database_username', 'database_password');`

### Execute a query

Create a database

```
$conn->exec("CREATE DATABASE my_database");
```

Create a table

```
$sql = "
	CREATE TABLE IF NOT EXISTS my_table (
		id INT AUTO_INCREMENT PRIMARY KEY,
		first_name VARCHAR(50) NOT NULL,
		last_name VARCHAR(50) NOT NULL,
		email VARCHAR(100) UNIQUE NOT NULL,
		pass VARCHAR(500) NOT NULL,
		created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
	)
";
$conn->exec($sql);
```

Insert a record

```
$first_name = 'JOHN';
$last_name = 'DOE';
$email = 'john@doe.ph';
$pass = 'Secret';
$sql = "
	INSERT INTO users (first_name, last_name, email, pass)
	VALUES ('$first_name', '$last_name', '$email', '$password')
";
$conn->exec($sql);
echo $conn->lastInsertId(); // The record ID
```

Insert a record using a prepared statement

```
$first_name = 'JOHN';
$last_name = 'DOE';
$email = 'john@doe.ph';
$pass = 'Secret';
$sql = "
	INSERT INTO users (first_name, last_name, email, pass)
	VALUES(:first_name, :last_name, :email, :pass)
";
$statement = $conn->prepare($sql);
$statement->execute([
	'first_name' => $first_name,
	'last_name' => $last_name,
	'email' => $email,
	'pass' => $pass
]);
return $statement->fetch(PDO::FETCH_ASSOC);
```
References:
- [PDOStatement::fetch|https://www.php.net/manual/en/pdostatement.fetch.php]
- [PDOStatement::fetchObject|https://www.php.net/manual/en/pdostatement.fetchobject.php]

