<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .main {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: 600px;
        }

        .main h2 {
            color: #4caf50;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button[type="submit"] {
            padding: 15px;
            border-radius: 10px;
            border: none;
            background-color: #4caf50;
            color: white;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        .error {
            color: red;
            font-size: 0.875rem;
        }
        .success {
            color: green;
            font-size: 0.875rem;
        }
    </style>
</head>

<body>
    <div class="main">
        <h2>Registration Form</h2>
        <form method=post action="registrationcheck.php" id="registrationForm">
            <label for="first">First Name:</label>
            <input type="text" id="first" name="first" required />

            <label for="last">Last Name:</label>
            <input type="text" id="last" name="last" required />

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required />

            <label for="password">Password:</label>
            <input type="password" id="password" name="password"
                   pattern="^(?=.*\d)(?=.*[a-zA-Z])(?=.*[^a-zA-Z0-9])\S{8,}$" 
                   title="Password must contain at least one number, 
                           one alphabet, one symbol, and be at 
                           least 8 characters long" required />

            <label for="repassword">Re-type Password:</label>
            <input type="password" id="repassword" name="repassword" required />
            <span id="passwordError" class="error"></span>


            <label for="mobile">Contact:</label>
            <input type="text" id="mobile" name="mobile" maxlength="10" required />

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="required">Select Your Gender</option>
                <option value="male">
                    Male
                </option>
                <option value="female">
                    Female
                </option>
                <option value="other">
                    Other
                </option>
            </select>

            <button type="submit" id="submitBtn">
                Submit
            </button>
        </form>
    </div>


    <script>
        document.getElementById('registrationForm').addEventListener('input', function () {
            validateForm();
        });

        function validateForm() {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('repassword').value;
            const submitBtn = document.getElementById('submitBtn');
            const errorElement = document.getElementById('passwordError');

            let isValid = true;

            if (!password || !confirmPassword) {
                isValid = false;
            }

            if (password !== confirmPassword) {
                errorElement.textContent = 'Passwords do not match';
                errorElement.classList.remove('success');
                errorElement.classList.add('error');
                isValid = false;
            } else {
                errorElement.textContent = '';
                errorElement.classList.remove('error');
                errorElement.classList.add('success');
            }

        }
    </script>


</script>

</body>

</html>