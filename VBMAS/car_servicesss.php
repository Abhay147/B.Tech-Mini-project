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
  </style>
</head>
<body>
  <div class="container">
    <h1>Car Service</h1>
    <div id="content">
      <div id="car-service">
        <h2>Car Service</h2>
        <form action="car_service_con.php" method="POST" onsubmit="return validateForm();">
          <div class="form-field">
            <label for="car_maker">Car Maker:</label>
            <input type="text" id="car_maker" name="car_maker">
          </div>
          <div class="form-field">
            <label for="car-model-line">Car Model Line:</label>
            <input type="text" id="car-model-line" name="car-model-line">
          </div>
          <div class="form-field">
            <label for="select-car-year">Select Car Year:</label>
            <select id="select-car-year" name="select-car-year">
              <!-- Options for car years -->
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
            <select id="type-of-service" name="type-of-service">
              <!-- Options for service types -->
            </select>
          </div>
          <div class="form-field service-type-customize">
            <label for="custom-service">Customized Service:</label>
            <textarea id="custom-service" name="custom-service"></textarea>
          </div>
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
