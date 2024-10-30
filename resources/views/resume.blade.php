<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $resume->name }} | Resume</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f5;
            color: #333;
            padding: 30px;
        }

        .container {
            background-color: #fff;
            width: 70%;
            margin: 0 auto;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        h1 {
            text-align: left;
            font-size: 2.5em;
            color: #333;
        }

        .contact {
            text-align: left;
            margin-top: 15px;
        }

        .contact p {
            font-size: 1.2em;
            color: #555;
            display: inline-block;
            margin-right: 10px;
        }

        hr.thick {
            border: none;
            height: 3px;
            background-color: #333;
            margin: 20px 0;
        }

        hr {
            border: none;
            height: 2px;
            background-color: #b6b2b2;
            margin: 20px 0;
        }

        .info, .educ, .elig, .skill {
            display: flex;
            margin-bottom: 10px;
        }

        .info h2, .educ h2, .elig h2, .skill h2 {
            width: 20%;
            margin: 0;
            color: #5fa8f5;
        }

        .info_content, .educ_content, .elig_content, .skill_content {
            display: flex;
            width: 80%;
            justify-content: space-between;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>{{ $resume->name }}</h1>

        <div class="contact">
            <p>Phone: {{ $resume->phone }}</p>
            <p>Email: {{ $resume->email }}</p>
        </div>

        <hr class="thick">

        <div class="info">
            <h2>Personal Information</h2>
            <div class="info_content">
                <div>
                    <p><strong>Date of Birth:</strong> {{ $resume->date_of_birth }}</p>
                    <p><strong>Place of Birth:</strong> {{ $resume->place_of_birth }}</p>
                    <p><strong>Age:</strong> {{ $resume->age }} yrs. old</p>
                    <p><strong>Weight:</strong> {{ $resume->weight }}</p>
                </div>
                <div>
                    <p><strong>Religion:</strong> {{ $resume->religion }}</p>
                    <p><strong>Citizenship:</strong> {{ $resume->citizenship }}</p>
                    <p><strong>Height:</strong> {{ $resume->height }}</p>
                    <p><strong>Civil Status:</strong> {{ $resume->civil_status }}</p>
                </div>
            </div>
        </div>

        <hr>

        <div class="educ">
            <h2>Education</h2>
            <div class="educ_content">
                <div>
                    <h3>Tertiary</h3>
                    <p>{{ $resume->tertiary_education }}</p>
                </div>
                <div>
                    <h3>Secondary</h3>
                    <p>{{ $resume->secondary_education }}</p>
                </div>
            </div>
        </div>

        <hr>

        <div class="elig">
            <h2>Eligibility</h2>
            <div class="elig_content">
                <div>
                    <p>{{ $resume->eligibility }}</p>
                </div>
            </div>
        </div>

        <hr>

        <div class="skill">
            <h2>Key Skills</h2>
            <div class="skill_content">
                <div>
                    <p>{{ $resume->skills }}</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
