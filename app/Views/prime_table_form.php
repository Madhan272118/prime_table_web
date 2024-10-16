<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Multiplication Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        h1 {
            color: #2c3e50;
            text-align: center;
        }

        .error-message {
            color: red;
            text-align: center;
        }

        .form-container {
            max-width: 400px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #bdc3c7;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>Prime Multiplication Table</h1>
    <?php if (session()->getFlashdata('error')): ?>
        <p class="error-message"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>
    <div class="form-container">
        <form method="post" action="<?= site_url('prime-table/generate') ?>">
            <label for="number">Enter a whole number N:</label>
            <input type="number" id="number" name="number" min="1" required>
            <input type="submit" value="Generate">
        </form>
    </div>
</body>
</html>
