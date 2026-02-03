
<?php 

    /**
        *Connections are established by creating instances of the PDO base class. 
        *It doesn't matter which driver you want to use; you always use the PDO class name.
        *The constructor accepts parameters for specifying the database source (known as the DSN) and optionally for the username and password (if any).
    */
    
    require_once __DIR__ . "/../../vendor/autoload.php";
    require_once __DIR__ ."/../../.env";

        $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 2));
        $dotenv->load();
        $dotenv->required(["DB_HOST", "DB_USERNAME", "DB_NAME"])->notEmpty();

        // --- Get the env variables ---
        $host = $_ENV["DB_HOST"];
        $db_username = $_ENV["DB_USERNAME"];
        $db_pass = $_ENV["DB_PASSWORD"];
        $db_name = $_ENV["DB_NAME"];
        $db_port = $_ENV["DB_PORT"];
        $dsn = "mysql:host=$host;dbname=$db_name;port=$db_port;charset=utf8mb4";

    try {
        $pdo = new PDO($dsn, $db_username, $db_pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // throw exceptions on errors
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // fetch associative arrays
            PDO::ATTR_EMULATE_PREPARES => false,    // use real prepared statements
        ]);

        echo "<br>";
        echo "Connected successfully using PDO";

    } catch (\Throwable $th) {
        echo $th->getMessage();
        echo "Connected failed using PDO";
        exit;
    }