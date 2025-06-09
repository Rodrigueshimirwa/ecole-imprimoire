<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Records</title>

  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f6f8;
      margin: 0;
      padding: 20px;
    }

    .table-container {
      max-width: 100%;
      overflow-x: auto;
      background: #fff;
      padding: 15px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    th, td {
      padding: 12px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #b35e00; /* dark orange */
      color: white;
      font-weight: 600;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:hover {
      background-color: #f3e6d6; /* light beige/orange */
    }

    a {
      color: #b35e00; /* same dark orange for links */
      text-decoration: none;
      font-weight: 500;
    }

    a:hover {
      text-decoration: underline;
      color: #7a3c00; /* darker orange on hover */
    }

    button {
      background-color: #dc3545; /* red, kept as is */
      color: white;
      border: none;
      padding: 6px 12px;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #a72a37; /* darker red on hover */
    }
  </style>
</head>
<body>

<x-nav></x-nav>
<br>

<div class="table-container">
  <table>
    <thead>
      <tr>
        <th>Student N<sup>o</sup></th>
        <th>Student Fullnames</th>
        <th>Course 1</th>
        <th>Marks for Course 1</th>
        <th>Course 2</th>
        <th>Marks for Course 2</th>
        <th>Course 3</th>
        <th>Marks for Course 3</th>
        <th>Class</th>
        <th>Total</th>
        <th>Decision</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($records as $rd)
      <tr>
        <td>{{ $rd->id }}</td>
        <td>{{ $rd->studentfullnames }}</td>
        <td>{{ $rd->subject1 }}</td>
        <td>{{ $rd->marksforsubject1 }}</td>
        <td>{{ $rd->subject2 }}</td>
        <td>{{ $rd->marksforsubject2 }}</td>
        <td>{{ $rd->subject3 }}</td>
        <td>{{ $rd->marksforsubject3 }}</td>
        <td>{{ $rd->Class }}</td>
        <td>{{ $rd->Total }}</td>
        <td>{{ $rd->Decision }}</td>
        <td><a href="#">Update</a></td>
        <td>
          <form action="{{ route('delete', $rd->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
