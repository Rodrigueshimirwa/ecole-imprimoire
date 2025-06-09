<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>STUDENT RECORD MANAGEMENT SYSTEM</title>

  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f6f8;
      margin: 0;
      padding: 20px;
    }

    form {
      max-width: 400px;
      margin: 50px auto;
      padding: 30px;
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    h3 {
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
    input[type="password"] {
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
    input[type="password"]:focus {
      border-color: #b35e00; /* medium dark orange */
      outline: none;
      box-shadow: 0 0 5px rgba(179, 94, 0, 0.5);
    }

    input[type="submit"] {
      margin-top: 20px;
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
      margin-top: 4px;
    }

    .footer-link {
      margin-top: 15px;
      text-align: center;
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

  <form action="{{ route('studentlogin') }}" method="POST">
    <h3>WELCOME TO ECOLE PRIMAIRE</h3>

    @csrf

    @if(Session::has('success'))
      <div class="message success">{{ Session::get('success') }}</div>
    @endif

    @if(Session::has('fail'))
      <div class="message fail">{{ Session::get('fail') }}</div>
    @endif

    <label>Username</label>
    <input type="text" name="username" value="{{ old('username') }}">
    <div class="error-text">@error('username'){{ $message }}@enderror</div>

    <label>Password</label>
    <input type="password" name="password">
    <div class="error-text">@error('password'){{ $message }}@enderror</div>

    <input type="submit" value="Login">

    <div class="footer-link">
      Don't have an account? <a href="/">Create Account</a>
    </div>
  </form>

</body>
</html>
