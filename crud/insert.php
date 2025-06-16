<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert DATA</title>
    <style>
        body {
            background: #f4f6fb;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }
        .form-container {
            background: #fff;
            max-width: 400px;
            margin: 48px auto;
            padding: 32px 28px 24px 28px;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
        }
        h1 {
            text-align: center;
            color: #2d3a4b;
            margin-bottom: 28px;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 18px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            font-size: 1rem;
            background: #f9fafb;
            transition: border 0.2s;
        }
        input:focus {
            border-color: #4f8cff;
            outline: none;
        }
        button[type="submit"] {
            width: 100%;
            background: #4f8cff;
            color: #fff;
            border: none;
            padding: 12px 0;
            border-radius: 6px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 8px;
        }
        button[type="submit"]:hover {
            background: #2563eb;
        }
        @media (max-width: 600px) {
            .form-container {
                padding: 18px 6px;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">

    <form action="" method="post">
            <h1>Insert DATA</h1>
            <input type="text" name="name" placeholder="Enter Name" required>
            <input type="email" name="email" placeholder="Enter Email" required>
            <input type="text" name="phone" placeholder="Enter Phone Number" required>
            <button type="submit">Insert</button>
        </form>
    </div>
</body>
</html>



<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    include('./config.php'); // Ensure this sets up $conn (PDO connection)

    try {
        $student = $conn->prepare("
            INSERT INTO student (name, email, phone)
            VALUES (:name, :email, :phone)
        ");

        $student->bindParam(':name', $name);
        $student->bindParam(':email', $email);
        $student->bindParam(':phone', $phone);

        $result = $student->execute();

        if ($result) {
            echo "✅ Data inserted successfully.";
        } else {
            echo "❌ Data not inserted.";
            print_r($student->errorInfo());
        }
    } catch (PDOException $e) {
        echo "❌ PDO Error: " . $e->getMessage();
    }
}
?>
