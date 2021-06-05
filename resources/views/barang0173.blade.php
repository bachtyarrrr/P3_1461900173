<!DOCTYPE html>
<html>

<head>
    <title>Daftar Barang</title>
</head>

<body>
    <h3>Data Barang</h3>
    <a href="/barang"> Kembali</a>
    <p>CARI :
    <form action="/barang/cari" method="GET">
        </p>
        <input type="text" name="lihat" placeholder="Cari Barang .." value="{{ old('cari') }}">
        <input type="submit" value="CARI">
    </form>
    <br>

    <a href="/barang/tambah"> + Tambah Barang </a>
    <br />
    <br />
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Harga</th>
        </tr>
        <?php $no = 1; ?>
        @foreach($barang as $b)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $b->nama }}</td>
            <td>{{ $b->harga }}</td>
            <td>
                <a href="/barang/edit/{{ $b->id }}">Edit</a>
                |
                <a href="/barang/hapus/{{ $b->id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>