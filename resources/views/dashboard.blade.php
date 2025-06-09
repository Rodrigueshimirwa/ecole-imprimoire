<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 20px;
        }

        h3 {
            background-color: #b35e00; /* warm medium orange */
            color: white;
            padding: 15px 20px;
            border-radius: 6px;
            box-shadow: 0 4px 8px rgba(179, 94, 0, 0.2);
            max-width: 400px;
            margin: 30px auto;
            text-align: center;
            font-weight: 600;
        }
    </style>
</head>
<body>

    <x-nav></x-nav>

    <h3>Welcome User: {{ $select->username }}</h3>

</body>
</html>
