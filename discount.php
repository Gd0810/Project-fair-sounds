<!DOCTYPE html>
<html>
<head>
    <title>Discount</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            position: relative;
            background: linear-gradient(90deg, #00C9FF 0%, #92FE9D 100%);
        }

        .container {
            position: relative;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .corner {
            width: 500px;
            height: 500px;
            position: absolute;
        }

        .top-left {
            top: 0;
            left: 0;
        }

        .top-right {
            top: 0;
            right: 0;
        }

        .bottom-left {
            bottom: 0;
            left: 0;
        }

        .bottom-right {
            bottom: 0;
            right: 0;
        }

        .center-image {
            max-width: 80%;
            height: auto;
            margin-top: 20px;
        }

        .button-container {
            margin-top: 20px;
        }

        .button {
            padding: 10px 20px;
            background-color: #e7576f;
            color: white;
            border: none;
            font-size: 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #0f9461;
        }

    </style>
</head>
<body>
  <div class="container">
    <img src="https://i.imgur.com/KWNlMqm.gif" class="corner top-left" alt="Image 1">
    <img src="https://i.imgur.com/qpdta9m.gif" class="corner top-right" alt="Image 2">
    <img src="https://i.imgur.com/NIEsNL0.gif" class="corner bottom-left" alt="Image 3">
    <img src="https://i.imgur.com/NIEsNL0.gif" class="corner bottom-right" alt="Image 4">
    <img src="https://i.imgur.com/m3KVLN4.png" class="center-image" alt="Center Image">
    
    <!-- Button container -->
    <div class="button-container">
    <button class="button" onclick="goBack();">Back to booking page</button>

    </div>
  </div>
  <script>
    function checkNumber() {
        var userAnswer = prompt("𝘾𝙖𝙡𝙘𝙪𝙡𝙖𝙩𝙚 𝙩𝙝𝙚 𝙨𝙪𝙢 𝙤𝙛 𝙩𝙝𝙚 𝙡𝙚𝙩𝙩𝙚𝙧𝙨 𝙞𝙣 𝙩𝙝𝙚 𝙣𝙖𝙢𝙚 𝙤𝙛 𝙩𝙝𝙞𝙨 𝙬𝙚𝙗𝙨𝙞𝙩𝙚 𝙖𝙣𝙙 𝙚𝙣𝙩𝙚𝙧 𝙩𝙝𝙚 𝙖𝙣𝙨𝙬𝙚𝙧 𝙝𝙚𝙧𝙚, 𝙢𝙪𝙡𝙩𝙞𝙥𝙡𝙮𝙞𝙣𝙜 𝙩𝙝𝙖𝙩 𝙨𝙪𝙢 𝙗𝙮 𝙩𝙬𝙤 :");

        if (userAnswer && parseInt(userAnswer) === 20) {
            alert("𝙔𝙊𝙐𝙍 𝘿𝙄𝙎𝘾𝙊𝙐𝙉𝙏 𝘾𝙊𝘿𝙀 𝙄𝙎 :q_m_for_ever_f_s");
        } else {
            alert("Incorrect answer. Try again!");
        }
    }
    function goBack() {
        window.history.back();
    }

    setTimeout(checkNumber, 1000); // Delay execution by 1 second (1000 milliseconds)
  </script>

  <!-- <script>
function checkNumber() {
    var userAnswer = prompt("Calculate the sum of the letters in the name of This Website and multiplying that sum by two then enter the answer here :");

    if (userAnswer && parseInt(userAnswer) === 20) {
        var discountCode = "q_m_for_ever_f_s";
        navigator.clipboard.writeText(discountCode).then(function() {
            alert("YOUR DISCOUNT CODE IS: " + discountCode + "\n\nThe discount code has been copied to the clipboard.");
        }).catch(function() {
            alert("YOUR DISCOUNT CODE IS: " + discountCode + "\n\nFailed to copy the discount code to the clipboard.");
        });
    } else {
        alert("Incorrect answer. Try again!");
    }
}

function goBack() {
    window.history.back();
}

setTimeout(checkNumber, 1000); // Delay execution by 1 second (1000 milliseconds)
</script> -->



</body>
</html>