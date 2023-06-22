<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: 'Times New Roman', Times, serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  padding-right: 5px;
  text-align: center;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1 style="text-align: center">Data User</h1>

<table id="customers">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Username</th>
    <th>Level</th>
  </tr>
  @foreach ($user as $p)
  <tr>
    <td>{{$loop->iteration}}</td>
    <td>{{ $p->name }}</td>
    <td>{{ $p->email }}</td>
    <td>{{ $p->username }}</td>
    <td>{{ $p->level }}</td>
  </tr>
  @endforeach
</table>

</body>
</html>


