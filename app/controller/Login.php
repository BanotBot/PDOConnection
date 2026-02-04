
<?php

    session_start();
    require_once __DIR__. "/../config/DatabaseConnection.php";

    if ($_SERVER["REQUEST_METHOD"] === null || empty($_SERVER["REQUEST_METHOD"])) {
        echo "Invalid Request Method ";
        return;
    }

    $gmail = $_POST["gmail"];
    $password = $_POST["password"];

    if ($gmail === null || empty($gmail) || $password === null || empty($password)) {
        echo "Missing required fields";
        return;
    }

    try{
        $loginQuery = "SELECT * FROM users WHERE BINARY gmail = ? AND BINARY password = ?";
        $stmt = $pdo->prepare($loginQuery);
        $stmt->bindParam(1, $gmail, PDO::PARAM_STR);
        $stmt->bindParam(2, $password, PDO::PARAM_STR);
        $stmt->execute();
        $stmt->fetchColumn();

        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $data = [
                "id" => $result["user_id"],
                "gmail" => $result["gmail"],
                "password" => $result["password"]
            ];
            var_dump($data);
            return;
        }

        echo "Invalid Gmail or Password";

    }catch (Throwable $th){
        echo "Error: " . $th->getMessage();
        return;
    }





