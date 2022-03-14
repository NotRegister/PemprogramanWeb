<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3 - Form</title>
</head>

<body>
    <h1>Input Data Mahasiswa</h1>
    <form action="">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name=""></td>
            </tr>
            <tr>
                <td>Usia</td>
                <td>:</td>
                <td><input type=" text" name="" id=""></td>
            </tr>
            <tr>
                <td>Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jk">
                    <label for="jk">Laki Laki</label>
                    <input type="radio" name="jk">
                    <label for="jk">Perempuan</label>
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <select>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Elektro">Teknik Elektro</option>
                        <option value="Pendidikan Teknik Informatika">Pendidikan Teknik Informatika</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="text" name="" id=""></td>
            </tr>
            <tr>
                <td>Web</td>
                <td>:</td>
                <td><input type="text" name="" id=""></td>
            </tr>
            <tr>
                <td valign="top">Hobi</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="">
                    <label for="">Mukbang</label><br>
                    <input type="checkbox" name="">
                    <label for="">Renang</label><br>
                    <input type="checkbox" name="">
                    <label for="">Renang tapi gak basah</label>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="" id=""></td>
            </tr>
            <tr colspan="3">
                <td>
                    <button type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>