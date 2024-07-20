<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Data Viewer</title>
    <style>
        body {
            background: linear-gradient(90deg, #00C9FF 0%, #92FE9D 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            margin: 0; /* Remove default margin */
        }

        .form-container {
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px); 
            background-color: rgba(255, 255, 255, 0.2); 
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3); 
            padding: 30px;
            width: 80%; /* Set width to 80% of the viewport width */
            max-width: 400px; /* Set maximum width */
            text-align: center; /* Center align the form */
        }

        .form-title {
            color: #007bff;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #ccc;
            padding: 8px 12px;
            margin-bottom: 15px;
            width: 100%; 
            box-sizing: border-box; 
            font-size: 16px;
        }

        .btn-submit {
            background-color:#00BFFF;
            color: black;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 20px;
            cursor: pointer;
            width: 100%; 
        }

        .btn-submit:hover {
            background-color: #1F75FE;
        }

        @media (max-width: 600px) {
            .form-container {
                width: 90%; 
        }
    }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="form-title">For which date user booking data do you want to view?</div>
        <form method="GET" action="upd.php">
            <div class="mb-3">
                <input type="date" id="date" name="date" class="form-control">
            </div>
            <button type="submit" class="btn-submit">Submit</button>
        </form>
    </div>
</body>
</html>
