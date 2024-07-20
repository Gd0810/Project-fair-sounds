<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: linear-gradient(90deg, #00C9FF 0%, #92FE9D 100%);
   
}
.container {
    background: transparent;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    width: 300px;
}
h2{
    text-align: center;
    color: #6F00FF;
}
input[type="text"],
input[type="email"],
input[type="password"],
input[type="number"],
input[type="date"],
select {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 6px;
    box-sizing: border-box;
}
input[type="submit"] {
    background: #3457D5;
    color: white;
    padding: 10px 20px;
    margin-bottom: 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
}
/*}
    input[type="submit"]:hover {
    background: linear-gradient(50deg, rgb(4, 133, 58),  #7364b4);
}*/

</style>
<body>
    <div class="container">
        <h2>Forgot Password</h2>
    <form action="fpassword2.0.php" method="post">
        <div>
            <i class="icon fa fa-user"></i>
            <input type="text" id="name" name="name" placeholder="User Name" required>
        </div>
        <div>
            <i class="icon fa fa-envelope"></i>
            <input type="email" id="email"  name="email" placeholder="Email" required>
            
        </div>
        <div>
            <input type="submit" name="submit" value="Show my password">
        </div>
            
    </form>
    </div>
    
    
</body>
</html>
