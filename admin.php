<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Button Animation</title>
<style>
    body {
        margin: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(90deg, #00C9FF 0%, #92FE9D 100%);
    }
    #amd{
        height:300px;
        width: 550px;
        border-radius: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        backdrop-filter: blur(10px); 
         background-color: rgba(255, 255, 255, 0.2); 
         box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3); 
    }

    .button {
        display: inline-block;
        padding: 10px 20px;
        margin: 10px;
        text-decoration: none;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-size: 23px;
        color: #17B169;
        border-radius: 5px;
        font-weight: bolder;
        transition: all 0.3s ease;
    }

    .button:hover {
        transform: scale(1.1);
    }

    .button-1 {
        background-color:transparent;
        backdrop-filter: blur(10px); 
         background-color: rgba(255, 255, 255, 0.2); 
         box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3); 
    }

    .button-2 {
        background-color:transparent ;
        backdrop-filter: blur(10px); 
         background-color: rgba(255, 255, 255, 0.2); 
         box-shadow: 0 2px 4px rgba(0, 0, 0, 0.3); 
    }

    
</style>
</head>
<body>
    <div id="amd">
    <a href="ud.php" class="button button-1">User Details</a>
    <a href="second.php" class="button button-2">User Purchase Details</a>
    </div>
</body>
</html>
