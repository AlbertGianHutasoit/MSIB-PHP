<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<body>
    ADD PAGE
    <form action="proses_tambah.php" method="post">
    <table>
        <tr>
            <td>Id</td>
            <td>:</td>
            <td><input type="number" name="id"></td>
        </tr>
        <tr>
            <td>Nama Depan</td>
            <td>:</td>
            <td><input type="text" name="first_name"></td>
        </tr>
        <tr>
            <td>Nama Belakang</td>
            <td>:</td>
            <td><input type="text" name="last_name"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td>:</td>
            <td><input type="number" name="phone"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td>:</td>
            <td><input type="text" name="address"></td>
        </tr>
    </table>
    <input type="submit" name="Submit" value="Simpan">

    </form>
</body>
</html>