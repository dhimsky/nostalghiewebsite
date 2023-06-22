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

<h1 style="text-align: center">Data Reservasi</h1>

<table id="customers">
  <tr>
    <th>No</th>
    <th>Nama Pemesan</th>
    <th>Nama Paket</th>
    <th>Harga Paket</th>
    <th>No. HP</th>
    <th>Tanggal</th>
    <th>Jam</th>
    <th>Jumlah Orang</th>
    <th>Deskripsi</th>
  </tr>
  @foreach ($reservasi as $r)
  <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $r->nama_pemesan }}</td>
    <td>{{ $r->nama_paket }}</td>
    <td>{{ $r->harga_paket }}</td>
    <td>{{ $r->no_hp }}</td>
    <td>{{ $r->tanggal }}</td>
    <td>{{ $r->jam }}</td>
    <td>{{ $r->jumlah_orang }}</td>
    <td>{{ $r->deskripsi }}</td>
  </tr>
  @endforeach
</table>

</body>
</html>


