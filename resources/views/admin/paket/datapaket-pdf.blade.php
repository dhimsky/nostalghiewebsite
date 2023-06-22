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

<h1 style="text-align: center">Data Paket</h1>

<table id="customers">
  <tr>
    <th>No</th>
    <th>Nama Paket</th>
    <th>Harga Paket</th>
    <th>Status</th>
    <th>Deskripsi</th>
  </tr>
  @foreach ($paket as $p)
  <tr>
    <td>{{$loop->iteration}}</td>
    <td>{{ $p->nama_paket }}</td>
    <td>{{ $p->hrg_paket }}</td>
    <td>{{ $p->status }}</td>
    <td>{{ $p->deskripsi }}</td>
  </tr>
  @endforeach
</table>

</body>
</html>


