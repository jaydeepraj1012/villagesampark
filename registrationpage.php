<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Form</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h2 {
            text-align: center;
        }
        
        form {
            display: flex;
            flex-direction: column;
        }
        
        label {
            margin-top: 10px;
            font-weight: bold;
        }
        
        input, textarea, select, button {
            margin-top: 5px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
        }
        
        textarea {
            resize: vertical;
        }
        
        button {
            margin-top: 20px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        button:hover {
            background-color: #0056b3;
        }
        #response{
            position: absolute;
            margin: 0px 40%;
            align-content: center;
            width: 600px;
            height: 400px;
            color: lightgreen;

        }
        
    </style>
</head>
<body>
    <div class="container" id="containerform">
        <h2>Complaint Form</h2>
        <form id="userForm" enctype="multipart/form-data">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="dob">Age:</label>
            <input type="date" id="age" name="dob" required>
            
            <label for="addressLine">Address Line:</label>
            <input type="text" id="addressLine" name="addressLine" required>
            
             <!-- <label for="city">City:</label>
            <input type="text" id="city" name="city" required>
            
            <label for="district">District:</label>
            <input type="text" id="district" name="district" required>
            
            <label for="state">State:</label>
            <input type="text" id="state" name="state" required>  -->
            <label for="state">State:</label>
            <select id="state" name="state" required>
                <option value="">Select State</option>
                 State options will be populated dynamically
            </select>
            
            <label for="district">District:</label>
            <select id="district" name="district" required>
                <option value="">Select District</option> 
                District options will be populated dynamically
            </select>
            
           <label for="city">City:</label>
            <input type="text" id="city" name="city" required>
            
            <label for="pinCode">PIN Code:</label>
            <input type="text" id="pinCode" name="pinCode" required pattern="\d{6}" title="Please enter a valid 6-digit PIN code">
            
            <label for="mobile">Mobile Number:</label>
            <input type="tel" id="mobile" name="mobile" required pattern="[0-9]{10}" title="Please enter a valid 10-digit mobile number">
            
            <!-- <label for="category">Complaint Category:</label>
            <select id="category" name="category" required>
                <option value="">Select Category</option>
                <option value="service">Service</option>
                <option value="product">Product</option>
                <option value="staff">Staff</option>
                <option value="other">Other</option>
            </select>
            
            <label for="type">Complaint Type:</label>
            <select id="type" name="type" required>
                <option value="">Select Type</option>
                <option value="quality">Quality</option>
                <option value="delay">Delay</option>
                <option value="rudeness">Rudeness</option>
                <option value="other">Other</option>
            </select> -->
            
            <label for="summary">Complaint Summary:</label>
            <textarea id="summary" name="summary" required></textarea>
            
            <label for="image">Upload Image:</label>
            <input type="file" id="image" name="image">
            
            <button type="submit">Submit</button>
        </form>
    </div>
    <div id="response"></div>
    <script src="scripts.js"></script>
    <script>



document.addEventListener('DOMContentLoaded', function() {
            // Fetch states when the page loads
            fetchStates();

            // Event listener for state change
            document.getElementById('state').addEventListener('change', function() {
                fetchDistricts(this.value);
            });

            // Event listener for district change
            document.getElementById('district').addEventListener('change', function() {
                fetchCities(this.value);
            });
        });

        function fetchStates() {
            fetch('get_states.php')
                .then(response => response.json())
                .then(data => {
                    let stateSelect = document.getElementById('state');
                    stateSelect.innerHTML = '<option value="">Select State</option>';
                    data.forEach(state => {
                        stateSelect.innerHTML += `<option value="${state.state_code}">${state.state_name}</option>`;
                    });
                });
        }

        function fetchDistricts(state_code) {
            console.log(`${state_code}`);
            fetch(`get_districts.php?state_id=${state_code}`)
                .then(response => response.json())
                .then(data => {
                    let districtSelect = document.getElementById('district');
                    districtSelect.innerHTML = '<option value="">Select District</option>';
                    data.forEach(district => {
                        if(district.district_id && district.district_name) {
                            districtSelect.innerHTML += `<option value="${district.district_id}">${district.district_name}</option>`;
                } else {
                    districtSelect.innerHTML += `<option value="${state_code}">${state_code}</option>`;
                }
                       
                    });
                });
        }

        function fetchCities(districtId) {

            fetch(`get_cities.php?district_id=${districtId}`)
                .then(response => response.json())
                .then(data => {
                    let citySelect = document.getElementById('city');
                    citySelect.innerHTML = '<option value="">Select City</option>';
                    data.forEach(city => {
                        citySelect.innerHTML += `<option value="${city.id}">${city.name}</option>`;
                    });
                });
        }

        document.getElementById('userForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting the traditional way
            console.log("heloooo");
            var formData = new FormData(this);

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'process_form.php', true);


            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                   
document.getElementById("containerform").style.display="none";
                    document.getElementById('response').innerText = xhr.responseText;
                }
            };

            formData.forEach((value, key) => {
                // console.log(key + ': ' + value);
            });
            xhr.send(formData);
        });
        
    </script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
