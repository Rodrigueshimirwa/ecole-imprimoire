<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Record Student Marks</title>

  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f6f8;
      margin: 0;
      padding: 20px;
    }

    form {
      max-width: 500px;
      margin: 30px auto;
      padding: 25px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    h2 {
      text-align: center;
      color: #7a3c00; /* dark orange */
      margin-bottom: 20px;
      font-weight: 700;
    }

    label {
      font-weight: 600;
      display: block;
      margin-top: 15px;
      color: #7a3c00; /* dark orange */
    }

    input[type="text"],
    select {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #cda36a; /* lighter brown/orange */
      border-radius: 6px;
      box-sizing: border-box;
      font-size: 14px;
      color: #4d3b1a;
    }

    input[type="text"]:focus,
    select:focus {
      border-color: #b35e00; /* medium dark orange */
      outline: none;
      box-shadow: 0 0 5px rgba(179, 94, 0, 0.5);
    }

    input[type="submit"] {
      margin-top: 25px;
      background-color: #b35e00; /* medium dark orange */
      color: white;
      border: none;
      padding: 12px;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      width: 100%;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #7a3c00; /* darker orange */
    }
  </style>
</head>

<body>
  <x-nav></x-nav>

  <form action="{{ route('recordstudent') }}" method="POST">
    @csrf
    <h2>Record Student Marks</h2>

    <label>Student Full Names</label>
    <input type="text" name="sname" required>

    <label>Course 1</label>
    <select name="course1" required>
      <option value="">--Select Course--</option>
      <option value="Math">Math</option>
      <option value="English">English</option>
    </select>

    <label>Marks for Course 1</label>
    <input type="text" name="cmarks1" required>

    <label>Course 2</label>
    <select name="course2" required>
      <option value="">--Select Course--</option>
      <option value="Science Elementary Techology">Science Elementary Techology</option>
      <option value="Social and Religious Study">Social and Religious Study</option>
    </select>

    <label>Marks for Course 2</label>
    <input type="text" name="cmarks2" required>

    <label>Course 3</label>
    <select name="course3" required>
      <option value="">--Select Course--</option>
      <option value="Kinyarwanda">Kinyarwanda</option>
      <option value="EPS(Sport)">EPS(Sport)</option>
    </select>

    <label>Marks for Course 3</label>
    <input type="text" name="cmarks3" required>

    <input type="submit" value="Record Student">
  </form>
</body>
</html>
