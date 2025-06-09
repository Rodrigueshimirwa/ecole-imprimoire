<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Navigation</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
    }

    .container {
      background-color: #b35e00; /* warm medium orange */
      padding: 15px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    .nav-left, .nav-right {
      display: flex;
      gap: 20px;
    }

    .container a {
      text-decoration: none;
      color: white;
      font-weight: bold;
      padding: 10px 15px;
      border-radius: 5px;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    .container a:hover {
      background-color: #e0a042; /* lighter orange on hover */
      color: black;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="nav-left">
      <a href="/recordstudent">Record Student</a>
      <a href="/viewstudentrecord">View Student Records</a>
    </div>
    <div class="nav-right">
      <a href="{{ route('logout') }}">Logout</a>
    </div>
  </div>

</body>
</html>
