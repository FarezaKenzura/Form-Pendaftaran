<!DOCTYPE html>
<html>
<head>
    <title>New Student Registration Form | Mystika Elemental Academy</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <header>
        <h3>New Student Registration Form</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="Nama lengkap" required />
        </p>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat" required></textarea>
        </p>
        <p>
            <label for="nomor_telepon">Nomor Telepon: </label>
            <input type="text" name="nomor_telepon" placeholder="Nomor telepon" onkeypress="return event.charCode >= 48 && event.charCode <= 57" required />
        </p>
        <p>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" required> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan" required> Perempuan</label>
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama" required>
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <input type="text" name="sekolah_asal" placeholder="nama sekolah" required/>
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>