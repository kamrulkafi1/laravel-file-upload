<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Output</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            text-align: center;
            padding: 10px;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .section-title {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            color: #4CAF50;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Profile Output</h1>

        <div class="section-title">Associative Array Output</div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $data['id'] }}</td>
                    <td>{{ $data['name'] }}</td>
                    <td>{{ $data['age'] }}</td>
                </tr>
            </tbody>
        </table>

        <div class="section-title">Cookie Output</div>
        <table>
            <thead>
                <tr>
                    <th>Cookie Name</th>
                    <th>Cookie Value</th>
                    <th>Cookie Duration (min)</th>
                    <th>Cookie Path</th>
                    <th>Cookie Domain</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>access_token</td>
                    <td>123-XYZ</td>
                    <td>1</td>
                    <td>/</td>
                    <td>{{ $_SERVER['SERVER_NAME'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
