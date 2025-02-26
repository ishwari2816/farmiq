<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <style>
    /* Global Styles */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    h1 {
      text-align: center;
      margin-top: 20px;
    }

    /* Table Styles */
    table {
      width: 90%;
      margin: 20px auto;
      border-collapse: collapse;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #4CAF50;
      color: white;
    }

    td {
      background-color: #f9f9f9;
    }

    tr:hover td {
      background-color: #f1f1f1;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      table {
        width: 100%;
        font-size: 14px;
      }

      th, td {
        padding: 8px;
      }

      td {
        word-wrap: break-word;
      }
    }
  </style>
</head>
<body>

  <h1>User Information Table</h1>

  <table>
    <thead>
      <tr>
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
      <!-- Data rows will go here -->
    </tbody>
  </table>

</body>
</html>
