<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Information Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: green;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>
    <center>
        <h1>Farmer Information Table</h1>
    </center>
    <table>
        <thead>
            <tr>
                <th>Serial No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Mobile No</th>
                <th>Address</th>
                <th>Full Name</th>
                <th>Adhar</th>
                <th>Description</th>
                <th>Flag</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>random_user1</td>
                <td>******</td>
                <td>9876543212</td>
                <td>Chicago, USA</td>
                <td>Alex Johnson</td>
                <td>3456-7890-1234</td>
                <td>Sample entry 1</td>
                <td>Active</td>
            </tr>
            <tr>
                <td>2</td>
                <td>random_user2</td>
                <td>******</td>
                <td>9876543213</td>
                <td>Houston, USA</td>
                <td>Emily Davis</td>
                <td>4567-8901-2345</td>
                <td>Sample entry 2</td>
                <td>Inactive</td>
            </tr>
        </tbody>
    </table>
</body>

</html>