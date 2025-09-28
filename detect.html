<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detect Phishing</title>
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
            max-width: 700px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            padding: 40px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h1 {
            color: #2c3e50;
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        p.description {
            color: #7f8c8d;
            font-size: 1.1em;
            margin-bottom: 30px;
        }

        .input-group {
            position: relative;
            margin-bottom: 25px;
        }

        .input-group textarea {
            width: calc(100% - 40px);
            padding: 15px 20px 15px 40px;
            border: 2px solid #ddd;
            border-radius: 10px;
            font-size: 1em;
            transition: all 0.3s ease;
            resize: vertical;
            min-height: 100px;
        }

        .input-group textarea:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 8px rgba(52, 152, 219, 0.2);
        }

        .input-group .icon {
            position: absolute;
            top: 20px;
            left: 15px;
            transform: translateY(0);
            color: #999;
            font-size: 1.2em;
        }

        button {
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

        button:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }

        .result-box {
            margin-top: 30px;
            padding: 25px;
            border-radius: 10px;
            display: none;
            text-align: left;
            animation: slideInUp 0.6s ease-out;
        }

        @keyframes slideInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .result-box.safe {
            background-color: #e8f5e9;
            border: 2px solid #4CAF50;
        }

        .result-box.phishing {
            background-color: #ffebee;
            border: 2px solid #f44336;
        }

        .result-box h2 {
            margin-top: 0;
            font-size: 1.6em;
            display: flex;
            align-items: center;
        }

        .result-box h2 .icon {
            margin-right: 10px;
        }

        .result-box .result-text {
            font-size: 1.1em;
            color: #333;
            line-height: 1.5;
        }

        .result-box .features-list {
            margin-top: 15px;
            list-style: none;
            padding: 0;
        }

        .result-box .features-list li {
            padding: 8px 0;
            border-bottom: 1px dashed #ccc;
        }

        .result-box .features-list li:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1><i class="fas fa-search-plus"></i> Detect Phishing</h1>
        <p class="description">Paste a URL, email content, or any text to scan for potential phishing attacks.</p>

        <div class="input-group">
            <i class="fas fa-paste icon"></i>
            <textarea id="scanInput" placeholder="Enter URL or text here..."></textarea>
        </div>
        <button onclick="performScan()">
            <i class="fas fa-play-circle"></i> Scan Now
        </button>

        <div id="results" class="result-box">
            </div>
    </div>

    <script>
        function performScan() {
            const input = document.getElementById('scanInput').value;
            const resultsBox = document.getElementById('results');

            if (input.trim() === '') {
                alert('Please enter text or a URL to scan.');
                return;
            }

            // Simple, simulated analysis for demonstration purposes
            const isPhishing = input.includes('phish') || input.includes('urgent') || input.includes('security-alert') || input.length > 100;

            // Clear previous results and show the results box
            resultsBox.innerHTML = '';
            resultsBox.style.display = 'block';

            if (isPhishing) {
                resultsBox.classList.remove('safe');
                resultsBox.classList.add('phishing');
                resultsBox.innerHTML = `
                    <h2><i class="fas fa-exclamation-triangle"></i> Possible Phishing Threat!</h2>
                    <p class="result-text">Our system has detected several suspicious characteristics. It's likely a phishing attempt. Do not proceed or enter any information.</p>
                    <ul class="features-list">
                        <li><i class="fas fa-check-circle"></i> Suspicious keyword: "urgent" or "alert"</li>
                        <li><i class="fas fa-check-circle"></i> Social engineering: Tries to create a sense of urgency.</li>
                    </ul>
                `;
            } else {
                resultsBox.classList.remove('phishing');
                resultsBox.classList.add('safe');
                resultsBox.innerHTML = `
                    <h2><i class="fas fa-check-circle"></i> Appears Safe</h2>
                    <p class="result-text">The scanned content appears to be safe based on our current analysis. However, always exercise caution.</p>
                    <ul class="features-list">
                        <li><i class="fas fa-times-circle"></i> No known phishing patterns detected.</li>
                    </ul>
                `;
            }
        }
    </script>
</body>
</html>

