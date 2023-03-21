<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP JajarGenjang</title>
</head>

<body>
    <!-- Styling CSS Internal -->
    <style>
        body {
            background-color: navy;
            color: white;
            margin: 50px;
            padding: 10px;
        }

        h1 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            margin: auto;
            font-family: Arial, sans-serif;
            font-size: 18px;
            table-layout: fixed;
            text-align: center; 
            border-style: solid;
            border-color: maroon;
            background-color: #FFFAFA;
            color: black;
            
        }

        td {
            padding: 10px;
            border: 1px solid black;
        }

        input{
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
            font-size: 18px;
        }
    </style>

    <!-- Bagian Header judul hanya pakai tag html -->
    <h1 align='center'>MENGHITUNG RUMUS JAJARGENJANG<br>MENGGUNAKAN PHP</h1>
    <hr color='white'>

    <!-- Bagian menampilkan rumus hanya pakai tag html -->
    <h2>RUMUS</h2>
    <h3>
        Keliling = 2 * (Alas + Sisi Miring)
        <br>
        Luas = Alas * Tinggi
    </h3>
    <hr color='white'>

    <!-- Bagian Form -->
    <h2>FORM PENGHITUNG RUMUS</h2>
	<form method="POST">
        <table>
            <tr>
                <td colspan="2" style="font-weight: bold; background-color: gold;">FORM<br>PENGHITUNG KELILING DAN LUAS JAJARGENJANG</td>
            </tr>
            <tr>
                <td><label>Masukkan Alas</label></td>
                <td><input type="number" name="alas" placeholder="Input Besaran Alas" required></td>
            </tr>
            <tr>
                <td><label>Masukkan Tinggi</label></td>
                <td><input type="number" name="tinggi" placeholder="Input Besaran Tinggi" required></td>
            </tr>
            <tr>
                <td><label>Masukkan Sisi Miring</label></td>
                <td><input type="number" name="sisimiring" placeholder="Input Besaran Sisi Miring" required></td>
            </tr>
            <tr>
                <td colspan="2" ><input type="submit" name="hitung" value="HITUNG"></td>
            </tr>
        </table>
    </form>

    <!-- Bagian PHP -->
    <hr color='white'>
    <h2>OUTPUT</h2>
    
        <?php
            //bagian ini memeriksa apakah terdapat data yang dikirim melalui metode POST
            if(isset($_POST['hitung'])){
                    $alas = $_POST['alas'];
                    $tinggi = $_POST['tinggi'];
                    $sisimiring = $_POST['sisimiring'];

                    // Deklarasi variabel keliling & luas yang didalamnya ada proses perhitungan sesuai rumus
                    $keliling = 2 * ($alas + $sisimiring);
                    $luas = $alas * $tinggi;
                    
                    // Bagian ini menampilkan inputan dari form tersebut
                    echo 'HASIL INPUT FORM PENGHITUNG RUMUS BANGUN DATAR JAJARGENJANG';
                    echo '<br> Diketahui :';
                    echo '<ul> <li> Alas = ' . $alas . ' cm';
                    echo '<li> Tinggi = ' . $tinggi . ' cm';
                    echo '<li> Sisi Miring = '. $sisimiring. ' cm </ul>';

                    // Bagian ini menampilkan hasil dari proses perhitungan dari variabel keliling & luas
                    echo '<h3>Maka Keliling JajarGenjang tersebut adalah ' . $keliling . ' cm';
                    echo '<br> Maka Luas JajarGenjang tersebut adalah '. $luas.' cm² </h3>';
                }
        ?>
</body>
</html>