<!DOCTYPE html>
<html>
<head>
    <title>Data Animal</title>
</head>
<body>

<h2>Data Hewan</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama Hewan</th>
        <th>Jenis</th>
        <th>Umur</th>
    </tr>

    @foreach ($animals as $animal)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $animal->nama_hewan }}</td>
        <td>{{ $animal->jenis }}</td>
        <td>{{ $animal->umur }} tahun</td>
    </tr>
    @endforeach

</table>

</body>
</html>
