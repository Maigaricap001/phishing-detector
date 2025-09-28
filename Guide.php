<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phishing Mitigation Guide</title>
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
            max-width: 900px;
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

        .guide-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }

        .guide-card {
            background-color: #ecf0f1;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .guide-card:hover {
            transform: translateY(-5px);
        }

        .guide-card .icon {
            font-size: 2.5em;
            color: #3498db;
            margin-bottom: 15px;
        }

        .guide-card h2 {
            font-size: 1.4em;
            color: #2c3e50;
            margin-top: 0;
            margin-bottom: 10px;
        }

        .guide-card p {
            font-size: 1em;
            line-height: 1.6;
            color: #555;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1><i class="fas fa-book-open"></i> Phishing Mitigation Guide</h1>
        <p class="description">Educate yourself and your team on how to recognize and prevent phishing attacks with these simple, actionable steps.</p>

        <div class="guide-section">
            <div class="guide-card">
                <div class="icon"><i class="fas fa-mouse-pointer"></i></div>
                <h2>Verify Links Before You Click</h2>
                <p>Always **hover your mouse** over a link to see the actual URL. Look for misspellings, strange characters, or domains that don't match the company's official website.</p>
            </div>

            <div class="guide-card">
                <div class="icon"><i class="fas fa-user-check"></i></div>
                <h2>Check the Sender's Email Address</h2>
                <p>Inspect the sender's full email address, not just the display name. Phishers often use addresses that are slightly different from the real one (e.g., `spport@company.com` vs. `support@company.com`).</p>
            </div>

            <div class="guide-card">
                <div class="icon"><i class="fas fa-lock"></i></div>
                <h2>Use Multi-Factor Authentication (MFA)</h2>
                <p>Enable MFA on all critical accounts. Even if an attacker steals your password, they can't log in without the second form of verification from your phone or device. </p>
            </div>

            <div class="guide-card">
                <div class="icon"><i class="fas fa-exclamation-triangle"></i></div>
                <h2>Beware of Urgency and Threats</h2>
                <p>Phishing emails often create a **false sense of urgency**, claiming your account will be suspended or a great offer will expire. Stay calm and verify the information through a separate, trusted channel.</p>
            </div>

            <div class="guide-card">
                <div class="icon"><i class="fas fa-key"></i></div>
                <h2>Never Reuse Passwords</h2>
                <p>Use a unique, strong password for every account. Consider using a **password manager** to keep track of complex passwords. If one account is breached, your others will remain secure.</p>
            </div>

            <div class="guide-card">
                <div class="icon"><i class="fas fa-desktop"></i></div>
                <h2>Keep Your Software Updated</h2>
                <p>Regularly update your operating system, web browser, and antivirus software. These updates often include security patches that protect you from new vulnerabilities exploited by attackers.</p>
            </div>
        </div>
    </div>
</body>
</html>

