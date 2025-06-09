<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>STUDENTS RECORD MANAGEMENT SYSTEM</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f6f8;
      margin: 0;
      padding: 20px;
    }

    form {
      max-width: 420px;
      margin: 50px auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.05);
    }

    h3 {
      text-align: center;
      color: #7a3c00; /* dark warm orange */
      margin-bottom: 20px;
      font-weight: 700;
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: bold;
      color: #7a3c00; /* dark warm orange */
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #cda36a; /* lighter warm brown */
      border-radius: 6px;
      font-size: 14px;
      color: #4d3b1a;
      box-sizing: border-box;
    }

    input[type="text"]:focus {
      border-color: #b35e00;
      outline: none;
      box-shadow: 0 0 5px rgba(179, 94, 0, 0.4);
    }

    input[type="submit"] {
      width: 100%;
      padding: 12px;
      margin-top: 20px;
      background-color: #b35e00; /* medium dark orange */
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #7a3c00; /* darker orange */
    }

    .message {
      text-align: center;
      margin-top: 10px;
      font-weight: bold;
    }

    .success {
      color: #a65e00; /* warm amber */
    }

    .fail {
      color: #cc3b00; /* warm red */
    }

    .error-text {
      color: #cc3b00;
      font-size: 14px;
    }

    .footer-link {
      text-align: center;
      margin-top: 15px;
      font-size: 14px;
      color: #7a3c00;
    }

    .footer-link a {
      color: #b35e00;
      text-decoration: none;
      font-weight: 600;
    }

    .footer-link a:hover {
      text-decoration: underline;
      color: #7a3c00;
    }
  </style>
</head>
<body>

  <form action="{{ route('studentregister') }}" method="POST">
    <h3>WELCOME TO ECOLE PRIMAILE SAINT ANNE</h3>

    @csrf

    @if(Session::has('success'))
      <div class="message success">{{ Session::get('success') }}</div>
    @endif

    @if(Session::has('fail'))
      <div class="message fail">{{ Session::get('fail') }}</div>
    @endif

    <label>Student Full Names</label>
    <input type="text" name="sname" value="{{ old('sname') }}">
    <div class="error-text">@error('sname'){{ $message }}@enderror</div>

    <label>Username</label>
    <input type="text" name="username" value="{{ old('username') }}">
    <div class="error-text">@error('username'){{ $message }}@enderror</div>

    <label>Password</label>
    <input type="text" name="password">
    <div class="error-text">@error('password'){{ $message }}@enderror</div>

    <input type="submit" value="Register">

    <div class="footer-link">
      Already have an account? <a href="/login">Login</a>
    </div>
  </form>

</body>
</html>
