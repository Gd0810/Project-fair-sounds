<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="booking.css">
</head>

<style>
  



</style>
<body>
    <br>
    <div class="vontainer">
        <div class="left-image">
            <img src="https://i.imgur.com/uD1NnHx.gif" alt="Left Image" style="max-width: 100%;">
        </div>
        <div class="center-content">
            <h1>Fair Sounds Booking</h1>
        </div>
        <div class="right-image">
            <img src="https://i.imgur.com/x9LS5B6.gif" alt="Right Image" style="max-width: 100%;">
        </div>
    </div> <br><br>
    <h1 class="ne">Customize For Own</h1>
    <form action="booking2.0.php" method="post" onsubmit="return validateTotal()">
        
        <div class="container text-center">
          <div class="row justify-content-center">
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
               
                  <div id="prp">
                      <span>
                    <img src="https://i.imgur.com/1zqvSxD.png" style="max-width: 80px; max-height: 80px;"> 
                    <input type="text" id="item" name="item" value="Select plan" readonly>
                    <select id="dropdown1" name="sclass" onchange="calculateTotal()">
                      <option value="silver" selected>Silver</option>
                        <option value="gold">Gold</option>
                            </select>

      
     <img src="https://i.imgur.com/FtVXut9.gif" style="max-width: 80px; max-height: 80px;"> 
     <input type="text" id="item" name="venai" value="Venai" readonly>
     <input type="number" id="quantity1" name="vquantity" value="" min="0" max="50" placeholder="Enter Your Instrument Count" onchange="calculateTotal()" data-price="50000">

     <img src="https://i.imgur.com/b5MfYgk.png" style="max-width: 80px; max-height: 80px;"> 
      <input type="text" id="item" name="nadaswaram" value="Nadaswaram" readonly>
       <input type="number" id="quantity2" name="nquantity" value="" min="0" max="50" placeholder="Enter Your Instrument Count" onchange="calculateTotal()" data-price="1500">        
      
       <img src="https://i.imgur.com/b5MfYgk.png" style="max-width: 80px; max-height: 80px;"> 
       <input type="text" id="item" name="thavil" value="Thavil" readonly>
        <input type="number" id="quantity3" name="tquantity" value="" min="0" max="50" placeholder="Enter Your Instrument Count" onchange="calculateTotal()" data-price="1500">
     
        <img src="https://i.imgur.com/Pv8juzD.gif" style="max-width: 80px; max-height: 80px;"> 
        <input type="text" id="item" name="flute" value="Flute" readonly>
        <input type="number" id="quantity4" name="fquantity" value="" min="0" max="50" placeholder="Enter Your Instrument Count" onchange="calculateTotal()" data-price="2500">
      
        <img src="https://i.imgur.com/oKGMZIv.gif" style="max-width: 80px; max-height: 80px;"> 
       <input type="text" id="item" name="kombu" value="Kombu" readonly>
        <input type="number" id="quantity5" name="kquantity" value="" min="0" max="50" placeholder="Enter Your Instrument Count" onchange="calculateTotal()" data-price="2000">
      
        <img src="https://i.imgur.com/7hEuFdO.gif" style="max-width: 80px; max-height: 80px;"> 
       <input type="text" id="item" name="thapu" value="Thapu" readonly>
      <input type="number" id="quantity5" name="tpquantity" value="" min="0" max="50" placeholder="Enter Your Instrument Count" onchange="calculateTotal()" data-price="1500"><br><br>
      
      <img src="https://i.imgur.com/VoB47kZ.png" style="max-width: 80px; max-height: 80px;"> 
       <input type="text" id="item" name="pampai" value="Pampai" readonly>
       <input type="number" id="quantity5" name="pquantity" value="" min="0" max="50" placeholder="Enter Your Instrument Count" onchange="calculateTotal()" data-price="1500">
     
       <img src="https://i.imgur.com/NVHXBos.gif" style="max-width: 80px; max-height: 80px;"> 
      <input type="text" id="item" name="chanda" value="Chanda Drum" readonly>
      <input type="number" id="quantity5" name="chquantity" value="" min="0" max="50" placeholder="Enter Your Instrument Count" onchange="calculateTotal()" data-price="2500">
      
      <img src="https://i.imgur.com/qC4C1zz.gif" style="max-width: 80px; max-height: 80px;"> 
      <input type="text" id="item" name="villu" value="Villu Pattu" readonly>
      <input type="number" id="quantity5" name="vpquantity" value="" min="0" max="50" placeholder="Enter Your Instrument Count" onchange="calculateTotal()" data-price="7500"><br><br>
     
      <img src="https://i.imgur.com/qg0fcQ9.png" style="max-width: 80px; max-height: 80px;"> 
        <input type="text" id="item" name="urumi" value="Urumi" readonly>
        <input type="number" id="quantity5" name="uquantity" value="" min="0" max="50" placeholder="Enter Your Instrument Count" onchange="calculateTotal()" data-price="1000">
      
        <img src="https://i.imgur.com/xbVsgPw.gif" style="max-width: 80px; max-height: 80px;"> 
        <input type="text" id="item" name="violin" value="Violin" readonly>
        <input type="number" id="quantity5" name="viquantity" value="" min="0" max="50" placeholder="Enter Your Instrument Count" onchange="calculateTotal()" data-price="3000">
     
        <img src="https://i.imgur.com/eEnC2OK.gif" style="max-width: 80px; max-height: 80px;"> 
        <input type="text" id="item" name="tabla" value="Tabla" readonly>
        <input type="number" id="quantity5" name="tblquantity" value="" min="0" max="50" placeholder="Enter Your Instrument Count" onchange="calculateTotal()" data-price="2000">
      </span>
    </div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
  <div id="prp">
      <span> <img src="https://i.imgur.com/VA0Xtzh.gif" style="max-width: 80px; max-height: 80px;"> 
        <input type="text" id="item" name="monium" value="Harmonium" readonly>
        <input type="number" id="quantity5" name="hquantity" value="" min="0" max="50" placeholder="Enter Your Instrument Count" onchange="calculateTotal()" data-price="2000">
      
        <img src="https://media4.giphy.com/media/2jUqsQKsFY1SGlvsvp/giphy.gif?cid=6c09b952jq4mailusn9wqm45fod7xzxvi5uc3zwqgbuc03lm&ep=v1_internal_gif_by_id&rid=giphy.gif&ct=s" style="max-width: 100px; max-height: 80px;"> 
        <input type="text" id="item" name="dangam" value="Mridangam" readonly>
        <input type="number" id="quantity5" name="mriquantity" value="" min="0" max="50" placeholder="Enter Your Instrument Count" onchange="calculateTotal()" data-price="2000">
      
        <img src="https://i.imgur.com/gwrfZ8Z.gif" style="max-width: 80px; max-height: 80px;"> 
        <input type="text" id="item" name="singers" value="Devaram Singers" readonly>
        <input type="number" id="quantity5" name="dsquantity" value="" min="0" max="50" placeholder="Enter Your Instrument Count" onchange="calculateTotal()" data-price="2000">
      
        <img src="https://i.imgur.com/y8rOwYo.gif" style="max-width: 80px; max-height: 80px;"> 
        <input type="text" id="item" name="drum" value="Drum" readonly>
        <input type="number" id="quantity5" name="drmquantity" value="" min="0" max="50" placeholder="Enter Your Instrument Count" onchange="calculateTotal()" data-price="10000">
     
        <img src="https://i.imgur.com/US1CW7P.gif" style="max-width: 80px; max-height: 80px;"> 
        <input type="text" id="item" name="piano" value="Piano" readonly>
        <input type="number" id="quantity5" name="pnoquantity" value="" min="0" max="50" placeholder="Enter Your Instrument Count" onchange="calculateTotal()" data-price="15000">
      
        <img src="https://i.imgur.com/buUORKv.gif" style="max-width: 80px; max-height: 80px;"> 
        <input type="text" id="item" name="guitar" value="Guitar" readonly>
        <input type="number" id="quantity5" name="gtrquantity" value="" min="0" max="50" placeholder="Enter Your Instrument Count" onchange="calculateTotal()" data-price="10000">
      
        <img src="https://i.imgur.com/51o2ij4.gif" style="max-width: 80px; max-height: 80px;"> 
        <input type="text" id="item" name="trumpt" value="Trumpt" readonly>
        <input type="number" id="quantity5" name="trmquantity" value="" min="0" max="50" placeholder="Enter Your Instrument Count" onchange="calculateTotal()" data-price="2000">
      
        <img src="https://i.imgur.com/lPD08AW.gif" style="max-width: 80px; max-height: 80px;"> 
        <input type="text" id="item" name="sax" value="Saxophone" readonly>
        <input type="number" id="quantity5" name="saxquantity" value="" min="0" max="50" placeholder="Enter Your Instrument Count" onchange="calculateTotal()" data-price="2000"><br><br>

        <img src="https://i.imgur.com/u8ir92y.png" style="max-width: 100px; max-height: 100px;">
        <input type="text" id="item" name="clarinet" value="Clarinet" readonly>
        <input type="number" id="quantity5" name="clrquantity" value="" min="0" max="50" placeholder="Enter Your Instrument Count" onchange="calculateTotal()" data-price="2000">

        <img src="https://i.imgur.com/44awkeZ.gif" style="max-width: 80px; max-height: 80px;"> 
        <input type="text" id="item" name="horn" value="French Horn" readonly>
        <input type="number" id="quantity5" name="fhquantity" value="" min="0" max="50" placeholder="Enter Your Instrument Count" onchange="calculateTotal()" data-price="2000">

        <img src="https://i.imgur.com/cktmpYc.gif" style="max-width: 80px; max-height: 80px;"> 
        <input type="text" id="item" name="multi" value="Multi Pad" readonly>
        <input type="number" id="quantity5" name="mpquantity" value="" min="0" max="50" placeholder="Enter Your Instrument Count" onchange="calculateTotal()" data-price="4000">

        <img src="https://i.imgur.com/JG2QQry.gif" style="max-width: 80px; max-height: 80px;"> 
        <input type="text" id="item" name="dj" value="Dj" readonly>
        <input type="number" id="quantity5" name="djquantity" value="" min="0" max="50" placeholder="Enter Your Instrument Count" onchange="calculateTotal()" data-price="15000">
      </span>
    </div>
</div>
</div>
</div>
    
  


<div id="package">
    <h1>Packages</h1><br>
<div class="container text-center">
  <div class="row justify-content-center">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

         <label for="fruit_bundle2">Startup Packages</label><br>
        <select id="fruit_bundle1" name="start_bundle" onchange="calculateTotal()">
            <option  data-price="0">None</option>
            <option  data-price="2800">Wedding OR Reception package(Rs. 2800)</option>
            <option  data-price="6000">Wedding & Reception package(Rs. 6000)</option>
            <option  data-price="4000">Family God function package(Rs. 4000)</option>
            <option  data-price="2000">Dhavaram singing package(Rs. 2000)</option>
            <option  data-price="3000">Golu package(Rs. 3000)</option>
        </select><br><br>

       
        <label for="fruit_bundle2">Mid-Range Packages</label><br>
        <select id="fruit_bundle2" name="mid_bundle" onchange="calculateTotal()">
            <option  data-price="0">None</option>
            <option  data-price="18000">Wedding & Reception package(Rs. 18000)</option>
            <option  data-price="20000">Village function package(Rs. 20000)</option>
            <option  data-price="16000">Welcome package(Rs. 16000)</option>
            <option  data-price="20000">Music Concert Classic(Rs. 20000)</option>
            <option  data-price="20000">Music Concert Westren(Rs. 20000)</option>
        </select><br><br>
      </div>

     
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <label for="fruit_bundle2">Star-Ratting Packages</label><br>
        <select id="fruit_bundle3" name="star_bundle" onchange="calculateTotal()">
            <option  data-price="0">None</option>
            <option  data-price="30000">Grand Wedding package(Rs. 30000)</option>
            <option  data-price="32000">Grand village function package(Rs. 32000)</option>
            <option  data-price="30000">Grand Welcome pack(Rs. 30000)</option>
            <option  data-price="32000">Grand Music Concert Classic(Rs. 32000)</option>
            <option  data-price="35000">Grand Music Concert Western(Rs. 35000)</option>
        </select><br><br>

        <label for="fruit_bundle4">Other Packages</label><br>
        <select id="fruit_bundle4" name="other_bundle" onchange="calculateTotal()">
            <option  data-price="0">None</option>
            <option  data-price="3500">Ear pricing package (Rs. 3500)</option>
            <option  data-price="2000">House warming package (Rs. 2000)</option>
            <option  data-price="2000">Semandam package (Rs. 2000)</option>
            <option  data-price="2000">Shop opning package (Rs. 2000)</option>
            <option  data-price="4000">Temple opening package (Rs. 4000)</option>
        </select><br><br>
        </div>
      </div>
    </div>
  
    <center>
     <h5><a href="https://drive.google.com/file/d/1pT6H_HY_ESTYhXcMgHtRHerMg-kNmMah/view?usp=sharing" target="_blank"> <img src="https://i.imgur.com/PwUK27b.gif" style="max-width: 100px; max-height: 100px;"></a><br>Package Details</h5>
    </center>
  </div>
    
   
   
  <div id="payment">
    <h1><img src="https://i.imgur.com/cDpdu6U.png" style="max-width: 80px; max-height: 80px;">Price Details</h1><br>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
                        <input type="text" id="total" name="total" placeholder="Total Amount" readonly ><br>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left">
                        <input type="text" id="discount" name="discount" placeholder="Enter your discount code here">
                    </div>
                </div>
                <br>
                <button type="button" onclick="calculateSum()">Count<img src="https://i.imgur.com/3QMgxYw.png"  style="max-width: 100px; max-height: 80px;">Here</button><br><br>

             <h5> <a href="discount.php"> <img src="https://i.imgur.com/UduQsw1.gif"   style="max-width: 100px; max-height: 100px;"></a><br>You want Discount ?</h5>
            </div>
        </div>
    </div>
</div>

  



        <div id="cus">
            <h1>Customer Details<img src="https://i.imgur.com/PvIHDA2.gif" style="max-width: 150px; max-height: 150px;"></h1>
          <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <img src="https://i.imgur.com/wsVAtL5.gif" style="max-width: 80px; max-height: 80px;"> 
              <input type="text" class="form-control" id="inputEmail4" name="cname" placeholder="Name" required>
            </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <img src="https://i.imgur.com/ZL1u7ee.gif" style="max-width: 80px; max-height: 80px;"> 
              <input type="number" class="form-control" id="inputPassword4" name="phnumber" placeholder="Phone Number" required>
              </div><br>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img src="https://i.imgur.com/kOGRkWE.gif" style="max-width: 80px; max-height: 80px;">
                <div class="input-group">
                  <span class="input-group-text">Event Start to End date</span>
                  <input type="date" aria-label="First name" class="form-control" name="fromd" required>
                  <input type="date" aria-label="Last name" class="form-control" name="untild">
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img src="https://i.imgur.com/suSACNK.gif" style="max-width: 80px; max-height: 80px;"> 
                <input type="text" class="form-control" id="inputEmail4" name="addr" placeholder="Event exact venue with pincode" required>
              </div><br>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img src="https://i.imgur.com/qTnW7Q8.gif" style="max-width: 80px; max-height: 80px;"> 
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Leave a comment here" name="comment" id="floatingTextarea2" style="height: 100px"></textarea>
                  <label for="floatingTextarea2">Comments</label>
                </div>
              </div>
            </div>
          </div>
        </div><br><br>
        <center> <input type="submit" value="Book Us" class="btn solid" /></center>
        <div class="gum">
            <footer>
                <div class="footer-links">
                    <a href="./home.php">Home</a>
                    <a href="./classic.php">Classic</a>
                    <a href="./western.php">Western</a>
                    <a href="./booking.php">Book us</a>
                    <a href="./contact.php">Contact</a>
                </div>
                <div class="social-media">
                    <a href="#" style="background-image: url('https://cdn-icons-png.flaticon.com/128/5968/5968764.png');"></a>
                    <a href="#" style="background-image: url('https://cdn-icons-png.flaticon.com/128/4494/4494477.png');"></a>
                    <a href="#" style="background-image: url('https://cdn-icons-png.flaticon.com/128/15707/15707749.png');"></a>
                </div>
                <div class="copyright">&copy; 2024 Fair Sounds. All Rights Reserved.</div>
            </footer>
        </div>
       
    </form>
    <script>

function validateTotal() {
        var totalField = document.getElementById('total');
        var totalValue = parseFloat(totalField.value);

        if (isNaN(totalValue) || totalValue <= 0) {
            alert('You can only confirm an order if you select at least one music instrument count or music package');
            totalField.focus();
            // Return false to indicate validation failure
            return false;
        }
            // Return true to indicate validation success
        return true;
    }
      
    function calculateSum() {
      // Get all input elements with type 'number'
        var quantities = document.querySelectorAll('input[type="number"]');
        var sum = 0;
        // Loop through all 'quantities' elements
        for (var i = 0; i < quantities.length; i++) {
           // Add the product of the quantity and data-price attribute to 'sum'
            sum += parseInt(quantities[i].value) * parseInt(quantities[i].getAttribute('data-price')) || 0;
        }
              // Get the selected option's data-price attribute value for each fruit bundle and add it to 'sum'

        var selectedBundlePrice1 = parseInt(document.getElementById("fruit_bundle1").querySelector("option:checked").getAttribute('data-price')) || 0;
        sum += selectedBundlePrice1;
    
        var selectedBundlePrice2 = parseInt(document.getElementById("fruit_bundle2").querySelector("option:checked").getAttribute('data-price')) || 0;
        sum += selectedBundlePrice2;
    
        var selectedBundlePrice3 = parseInt(document.getElementById("fruit_bundle3").querySelector("option:checked").getAttribute('data-price')) || 0;
        sum += selectedBundlePrice3;
    
        var selectedBundlePrice4 = parseInt(document.getElementById("fruit_bundle4").querySelector("option:checked").getAttribute('data-price')) || 0;
        sum += selectedBundlePrice4;
    
        var discountCode = document.getElementById("discount").value.toLowerCase();
        if (discountCode === "q_m_for_ever_f_s") {
            sum *= 0.7; // Apply 30% discount for quality_music
        }
            // Set the calculated sum to the 'total' field
        document.getElementById("total").value = sum;
    }
    


  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
