<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Account</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f9;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 800px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            padding: 40px;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h1 {
            color: #2c3e50;
            font-size: 2.5em;
            text-align: center;
            margin-bottom: 10px;
        }

        p.description {
            color: #7f8c8d;
            font-size: 1.1em;
            text-align: center;
            margin-bottom: 40px;
        }

        .security-card {
            background-color: #ecf0f1;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 20px;
            transition: transform 0.3s ease;
        }

        .security-card:hover {
            transform: translateY(-5px);
        }

        .security-card h2 {
            margin-top: 0;
            font-size: 1.8em;
            color: #34495e;
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .security-card h2 .icon {
            margin-right: 15px;
            font-size: 1.2em;
        }

        .security-card p {
            font-size: 1em;
            line-height: 1.6;
            color: #555;
        }

        .security-card .input-group {
            position: relative;
            margin-top: 20px;
            margin-bottom: 15px;
        }

        .security-card input {
            width: calc(100% - 40px);
            padding: 15px 20px 15px 40px;
            border: 2px solid #ddd;
            border-radius: 25px;
            font-size: 1em;
            transition: all 0.3s ease;
        }

        .security-card input:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 8px rgba(52, 152, 219, 0.2);
        }

        .security-card .input-group .icon {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #999;
            font-size: 1.2em;
        }

        .security-card button {
            background-color: #3498db;
            color: #fff;
            padding: 15px 35px;
            border: none;
            border-radius: 25px;
            font-size: 1.1em;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .security-card button:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }

        .result-message {
            margin-top: 20px;
            padding: 15px;
            border-radius: 8px;
            font-weight: bold;
            display: none;
        }

        .result-message.success {
            background-color: #e8f5e9;
            color: #2e7d32;
        }

        .result-message.danger {
            background-color: #ffebee;
            color: #c62828;
        }

        .result-message.warning {
            background-color: #fff3e0;
            color: #e65100;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1><i class="fas fa-user-cog"></i> Manage Account</h1>
        <p class="description">Review your account's security status and take proactive steps to protect yourself from phishing and data breaches.</p>

        <div class="security-card">
            <h2><i class="fas fa-lock"></i> Check for Compromised Credentials</h2>
            <p>Enter your email address to check if it has been found in any known data breaches. This tool helps you identify if your information might be at risk.</p>
            <div class="input-group">
                <i class="fas fa-envelope icon"></i>
                <input type="email" id="emailInput" placeholder="Enter your email address...">
            </div>
            <button onclick="checkBreach()">
                <i class="fas fa-database"></i> Check for Breaches
            </button>
            <div id="resultMessage" class="result-message"></div>
        </div>

        <div class="security-card">
            <h2><i class="fas fa-key"></i> Enable Two-Factor Authentication (2FA)</h2>
            <p>Two-factor authentication adds an essential layer of security. Even if your password is stolen, attackers cannot access your account without the second factor (e.g., a code from your phone).</p>
            <p style="color: #34495e;"><strong>💡 Tip:</strong> We highly recommend enabling 2FA on all your critical accounts, including email and social media.</p>
        </div>

        <div class="security-card">
            <h2><i class="fas fa-bell"></i> Set Up Security Alerts</h2>
            <p>Receive notifications whenever suspicious activity is detected on your account, such as a login from an unknown device or location.</p>
            <button onclick="setupAlerts()">
                <i class="fas fa-bell-slash"></i> Manage Alerts
            </button>
        </div>

    </div>

    <script>
    async function checkBreach() {
        const emailInput = document.getElementById('emailInput');
        const resultMessage = document.getElementById('resultMessage');
        const email = emailInput.value.trim().toLowerCase();

        if (!email || !email.includes('@')) {
            resultMessage.textContent = 'Please enter a valid email address.';
            resultMessage.className = 'result-message warning';
            resultMessage.style.display = 'block';
            return;
        }

        // Show a loading state
        resultMessage.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Checking for breaches...';
        resultMessage.className = 'result-message warning';
        resultMessage.style.display = 'block';

        try {
            // Make an API call to your backend server
            const response = await fetch('YOUR_BACKEND_API_ENDPOINT/check-breach', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ email })
            });

            const data = await response.json();

            if (data.isBreached) {
                // Display specific breach details if available
                const breachList = data.breaches.map(b => `<li>${b.Title} (${b.BreachDate})</li>`).join('');
                resultMessage.innerHTML = `
                    <p>🔴 <strong>Oh no!</strong> This email has been found in a known data breach.</p>
                    <p>Change your password immediately for all affected services.</p>
                    <p><strong>Breaches found:</strong></p>
                    <ul>${breachList}</ul>
                `;
                resultMessage.className = 'result-message danger';
            } else {
                resultMessage.innerHTML = '🟢 <strong>Great!</strong> This email was not found in any of the known data breaches. Stay vigilant!';
                resultMessage.className = 'result-message success';
            }

        } catch (error) {
            console.error('Error:', error);
            resultMessage.innerHTML = '❌ <strong>An error occurred.</strong> Please try again later.';
            resultMessage.className = 'result-message danger';
        }
    }

    function setupAlerts() {
        alert("Redirecting to the alerts management page... (Simulated)");
    }
</script>

</body>
</html>

