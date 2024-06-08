<!DOCTYPE html>
<html>

<head>
    <title>Car Service</title>
    <style>
        /* CSS styles */
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            background-image: url(user_home.jpeg);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            color: #333;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }
        
        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 32px;
            color: #333;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }
        
        #menu {
            margin-bottom: 30px;
            text-align: center;
        }
        
        #menu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        
        #menu ul li {
            display: inline-block;
            margin-right: 10px;
        }
        
        #menu ul li a {
            text-decoration: none;
            font-weight: bold;
            font-size: 18px;
            color: #333;
            padding: 10px;
            border-radius: 3px;
            transition: background-color 0.3s ease;
        }
        
        #menu ul li a:hover {
            background-color: #f2f2f2;
        }
        
        .form-field {
            margin-bottom: 20px;
        }
        
        .form-field label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .form-field input[type="text"],
        .form-field select,
        .form-field textarea {
            width: 100%;
            padding: 8px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }
        
        .form-field textarea {
            resize: vertical;
            height: 100px;
        }
        
        .form-field .service-type-customize {
    display: none;
}
    
        
        .form-field input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .form-field input[type="submit"]:hover {
            background-color: #45a049;
        }
        
        #status,
        #history {
            display: none;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Car Service</h1>

        <div id="menu">
            <ul>
                <li><a href="#car-service">Car Service</a></li>

            </ul>
        </div>

        <div id="content">
            <div id="car-service">
                <h2>Car Service</h2>
                <form action="car_service_con.php" method="POST" onsubmit="return validateForm();">
                    <div class="form-field">
                        <label for="">Car Maker:</label>
                        <input type="text" id="car_maker" name="car_maker">
                    </div>
                    <div class="form-field">
                        <label for="car-model-line">Car Model Line:</label>
                        <input type="text" id="car-model-line" name="car-model-line">
                    </div>
                    <div class="form-field">
                        <label for="select-car-year">Select Car Year:</label>
                        <select id="select-car-year" name="select-car-year">
              <option value="1990">1990</option>
              <option value="1991">1991</option>
              <option value="1992">1992</option>
              <option value="1993">1993</option>
              <option value="1994">1994</option>
              <option value="1995">1995</option>
              <option value="1996">1996</option>
              <option value="1997">1997</option>
              <option value="1998">1998</option>
              <option value="1999">1999</option>
              <option value="2000">2000</option>
              <option value="2001">2001</option>
              <option value="2002">2002</option>
              <option value="2003">2003</option>
              <option value="2004">2004</option>
              <option value="2005">2005</option>
              <option value="2006">2006</option>
              <option value="2007">2007</option>
              <option value="2008">2008</option>
              <option value="2009">2009</option>
              <option value="2010">2010</option>
              <option value="2011">2011</option>
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
              <option value="2021">2021</option>
              <option value="2022">2022</option>
              <option value="2023">2023</option>

            </select>
                    </div>
                    <div class="form-field">
                        <label for="plate-number">Plate Number:</label>
                        <input type="text" id="plate-number" name="plate-number">
                    </div>
                    <div class="form-field">
                        <label for="pickup-drop">Pickup/Drop:</label>
                        <select id="pickup-drop" name="pickup-drop" onchange="toggleAddressField()">
              <option value="Yes">Yes</option>
              <option value="No">No</option>
            </select>
                    </div>
                    <div class="form-field" id="address-field" style="display: none;">
                        <label for="address">Address:</label>
                        <textarea id="address" name="address"></textarea>
                    </div>
                    <div class="form-field">
                        <label for="type-of-service">Type of Service:</label>
                        <select id="type-of-service" name="type-of-service" onchange="toggleCustomService()">
    <option value="full-service">Full Service</option>
    <option value="regular-checkup">Regular Checkup</option>
    <option value="customize-service">Customize Service</option>
</select>

  </div>
                    <div class="form-field" id="customize-service" style="display: none;">
                        <label for="custom-service">Customized Service:</label>
                        <textarea id="custom-service" name="custom-service"></textarea>
                    </div>
                    <!-- Corrected placement of the closing </div> tag -->

                    <div class="form-field">
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email">
                    </div>
                    <div class="form-field">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>

        <script>
    function toggleAddressField() {
      var pickupDrop = document.getElementById("pickup-drop").value;
      var addressField = document.getElementById("address-field");

      if (pickupDrop === "Yes") {
        addressField.style.display = "block";
      } else {
        addressField.style.display = "none";
      }
    }

    function toggleCustomService() {
    var serviceType = document.getElementById("type-of-service").value;
    var customizeServiceField = document.getElementById("customize-service");

    if (serviceType === "customize-service") {
        customizeServiceField.style.display = "block";
    } else {
        customizeServiceField.style.display = "none";
    }
}


    function validateForm() {
      var carMaker = document.getElementById("car_maker").value;
      var carModelLine = document.getElementById("car-model-line").value;
      var plateNumber = document.getElementById("plate-number").value;
      var pickupDrop = document.getElementById("pickup-drop").value;
      var email = document.getElementById("email").value;

      if (carMaker === "" || carModelLine === "" || plateNumber === "" || pickupDrop === "" || email === "") {
        alert("Please fill in all required fields.");
        return false;
      }

      if (!validateEmail(email)) {
        alert("Please enter a valid email address.");
        return false;
      }

      return true;
    }

    function validateEmail(email) {
      var re = /\S+@\S+\.\S+/;
      return re.test(email);
    }
  </script>
</body>
</html>