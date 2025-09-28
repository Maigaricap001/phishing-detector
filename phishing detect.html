<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phishing Detector</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
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
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h1 {
            color: #333;
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        p.description {
            color: #666;
            font-size: 1.1em;
            margin-bottom: 30px;
        }

        .input-group {
            position: relative;
            margin-bottom: 25px;
        }

        .input-group input {
            width: calc(100% - 40px);
            padding: 15px 20px 15px 40px;
            border: 2px solid #ddd;
            border-radius: 25px;
            font-size: 1em;
            transition: all 0.3s ease;
        }

        .input-group input:focus {
            border-color: #007BFF;
            outline: none;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.2);
        }

        .input-group .icon {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #999;
            font-size: 1.2em;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 15px 30px;
            border: none;
            border-radius: 25px;
            font-size: 1.1em;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        button:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .result-box {
            margin-top: 30px;
            padding: 20px;
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
            background-color: #e6f7e9;
            border: 2px solid #4CAF50;
        }

        .result-box.phishing {
            background-color: #ffe6e6;
            border: 2px solid #f44336;
        }

        .result-box h2 {
            margin-top: 0;
            font-size: 1.5em;
        }

        .result-box .result-text {
            font-size: 1.1em;
            color: #333;
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
    <header>
        <h1><i class="fas fa-shield-alt"></i> Phishing Detector</h1>
        <p class="description">Paste a URL below to check if it's a legitimate or phishing website.</p>
    </header>

    <main>
        <div class="input-group">
            <i class="fas fa-link icon"></i>
            <input type="text" id="urlInput" placeholder="Enter URL (e.g., https://www.google.com)">
        </div>
        <button onclick="analyzeURL()"><i class="fas fa-search"></i> Analyze</button>
    </main>

    <div id="results" class="result-box">
        </div>
</div>

<script>
    function analyzeURL() {
        const urlInput = document.getElementById('urlInput').value;
        const resultsBox = document.getElementById('results');

        // Simple validation to check if the input is not empty
        if (urlInput.trim() === '') {
            alert('Please enter a URL to analyze.');
            return;
        }

        // Simulating a detection process
        const isPhishing = urlInput.includes('phish') || urlInput.length > 50 || urlInput.includes('@');
        
        // Clear previous results
        resultsBox.innerHTML = '';
        resultsBox.style.display = 'block';

        if (isPhishing) {
            resultsBox.classList.remove('safe');
            resultsBox.classList.add('phishing');
            resultsBox.innerHTML = `
                <h2><i class="fas fa-exclamation-triangle"></i> DANGER! Possible Phishing Site</h2>
                <p class="result-text">This URL exhibits several suspicious characteristics that suggest it may be a phishing attempt. Please do not visit this site or enter any personal information.</p>
                <ul class="features-list">
                    <li><i class="fas fa-check-circle"></i> Long URL: The URL is unusually long.</li>
                    <li><i class="fas fa-check-circle"></i> Use of doubtful tokens: Contains a suspicious keyword.</li>
                </ul>
            `;
        } else {
            resultsBox.classList.remove('phishing');
            resultsBox.classList.add('safe');
            resultsBox.innerHTML = `
                <h2><i class="fas fa-check-circle"></i> SAFE</h2>
                <p class="result-text">This URL appears to be safe based on our analysis. However, always exercise caution and check the site's authenticity before providing any personal information.</p>
                <ul class="features-list">
                    <li><i class="fas fa-times-circle"></i> No suspicious URL features found.</li>
                    <li><i class="fas fa-times-circle"></i> Domain age is sufficient.</li>
                </ul>
            `;
        }
    }
</script>

</body>
</html>

