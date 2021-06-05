<!DOCTYPE html>
<html>

<head>
    <title>Tambah Barang</title>
</head>

<body>
    <h3>Tambah Barang</h3>
    <a href="/barang"> Kembali</a>
    <br />
    <br />
    <form action="/barang/store" method="post">
        {{ csrf_field() }}
        Nama <input type="text" name="nama" required="required"> <br />
        Harga <textarea name="harga" required="required"></textarea> <br />
        <input type="submit" value="Simpan Data">
    </form>
</body>

</html>