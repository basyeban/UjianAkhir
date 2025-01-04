<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Logout</title>
  <style>
    body {
      background: linear-gradient(135deg, #74b9ff, #00cec9);
      color: #ffffff;
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      text-align: center;
    }

    h3 {
      font-size: 2em;
      margin-bottom: 20px;
    }

    .btn {
      display: inline-block;
      padding: 15px 30px;
      font-size: 1em;
      background-color: #ffffff;
      color: #2d3436;
      text-decoration: none;
      border-radius: 25px;
      border: none;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .btn:hover {
      background-color: #00cec9;
      color: #ffffff;
      transform: scale(1.1);
    }

    .btn:active {
      transform: scale(1);
    }
  </style>
</head>

<body>
  <h3>Username atau Password Salah!</h3>
  <a href="admin-login.php" class="btn">Kembali ke halaman login</a>
</body>

</html>
