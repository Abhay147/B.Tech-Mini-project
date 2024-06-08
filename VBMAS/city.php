<!DOCTYPE html>
<html>
<head>
    <title>City Selection</title>
    <style>
        body {
            background-image: url(city.jpeg);
            background-size: cover;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 400px;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 5px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .city-select {
            margin-bottom: 20px;
        }

        .city-select label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .city-select select {
            width: 100%;
            padding: 5px;
            border-radius: 3px;
        }

        .submit-btn {
            display: block;
            margin: 0 auto;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>City Selection</h2>
        <hr>

        <div class="city-select">
            <label for="state">State/UT:</label>
            <select id="state" name="state">
                <option value="">Select State/UT</option>
                <option value="andhra pradesh">Andhra Pradesh</option>
                <option value="arunachal pradesh">Arunachal Pradesh</option>
                <option value="assam">Assam</option>
                <option value="bihar">Bihar</option>
                <option value="chhattisgarh">Chhattisgarh</option>
                <option value="goa">Goa</option>
                <option value="gujarat">Gujarat</option>
                <option value="haryana">Haryana</option>
                <option value="himachal pradesh">Himachal Pradesh</option>
                <option value="jammu and kashmir">Jammu and Kashmir</option>
                <option value="jharkhand">Jharkhand</option>
                <option value="karnataka">Karnataka</option>
                <option value="kerala">Kerala</option>
                <option value="madhya pradesh">Madhya Pradesh</option>
                <option value="maharashtra">Maharashtra</option>
                <option value="manipur">Manipur</option>
                <option value="meghalaya">Meghalaya</option>
                <option value="mizoram">Mizoram</option>
                <option value="nagaland">Nagaland</option>
                <option value="odisha">Odisha</option>
                <option value="punjab">Punjab</option>
                <option value="rajasthan">Rajasthan</option>
                <option value="sikkim">Sikkim</option>
                <option value="tamil nadu">Tamil Nadu</option>
                <option value="telangana">Telangana</option>
                <option value="tripura">Tripura</option>
                <option value="uttar pradesh">Uttar Pradesh</option>
                <option value="uttarakhand">Uttarakhand</option>
                <option value="west bengal">West Bengal</option>
                <option value="andaman and nicobar islands">Andaman and Nicobar Islands</option>
                <option value="chandigarh">Chandigarh</option>
                <option value="dadra and nagar haveli">Dadra and Nagar Haveli</option>
                <option value="daman and diu">Daman and Diu</option>
                <option value="delhi">Delhi</option>
                <option value="lakshadweep">Lakshadweep</option>
                <option value="puducherry">Puducherry</option>
            </select>
        </div>

        <div class="city-select">
            <label for="city">City:</label>
            <select id="city" name="city">
                <option value="">Select City</option>
            </select>
        </div>

        <button class="submit-btn" type="submit">Submit</button>
    </div>

    <script>
        const stateSelect = document.getElementById('state');
        const citySelect = document.getElementById('city');

        stateSelect.addEventListener('change', function() {
            const selectedState = stateSelect.value;

            // Clear city options
            citySelect.innerHTML = '<option value="">Select City</option>';

            // Add city options based on selected state
            if (selectedState === 'kerala') {
                addCityOption('thiruvananthapuram', 'Thiruvananthapuram');
                addCityOption('kochi', 'Kochi');
                addCityOption('kozhikode', 'Kozhikode');
                addCityOption('thrissur', 'Thrissur');
                addCityOption('kollam', 'Kollam');
                addCityOption('alappuzha', 'Alappuzha');
                addCityOption('palakkad', 'Palakkad');
                addCityOption('kottayam', 'Kottayam');
                addCityOption('malappuram', 'Malappuram');
                addCityOption('kannur', 'Kannur');
                addCityOption('pathanamthitta', 'Pathanamthitta');
                addCityOption('idukki', 'Idukki');
                addCityOption('wayanad', 'Wayanad');
                addCityOption('ernakulam', 'Ernakulam');
            } else if (selectedState === 'maharashtra') {
                addCityOption('mumbai', 'Mumbai');
                addCityOption('pune', 'Pune');
                addCityOption('nagpur', 'Nagpur');
                addCityOption('nashik', 'Nashik');
                addCityOption('aurangabad', 'Aurangabad');
                addCityOption('solapur', 'Solapur');
                addCityOption('amravati', 'Amravati');
                addCityOption('kolhapur', 'Kolhapur');
                addCityOption('thane', 'Thane');
                addCityOption('nanded', 'Nanded');
                addCityOption('jalgaon', 'Jalgaon');
                addCityOption('ahmednagar', 'Ahmednagar');
                addCityOption('sangli', 'Sangli');
                addCityOption('akola', 'Akola');
                addCityOption('latur', 'Latur');
            }
            // Add city options for other states/UTs here
        });

        function addCityOption(value, label) {
            const option = document.createElement('option');
            option.value = value;
            option.textContent = label;
            citySelect.appendChild(option);
        }
    </script>
</body>
</html>
