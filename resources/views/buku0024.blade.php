<!DOCTYPE html>
<html>
<head>
<title>Buku</title>
</head>
<body>
    <h2>Yogo Dananjoyo M</h2>
    <a href="/export"> Export Excel </a>
    <p>Cari Buku :</p>
        <form action="/buku/cari" method="GET">
        <input type="text" name="lihat" placeholder="Masukan Judul .." value="{{ old('cari') }}">
        <input type="submit" value="CARI">
        </form>
    <table border="1">
<tr>
<th>Id Buku</th>
<th>Judul Buku</th>
<th>Tahun Terbit</th>
</tr>
@foreach($buku as $p)
    <tr>
    <td>{{ $p->id }}</td>
    <td>{{ $p->judul }}</td>
    <td>{{ $p->tahun_terbit}}</td>
    </tr>
@endforeach
</table>
</body>
</html>