<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Form Nilai</title>
    <style>
        body {
            background-color: #DFF6FF;
        }

        .nilai {
            width: 30%;
            margin: auto;
            margin-top: 1cm;
            margin-bottom: 1cm;
            border: 2px dashed black;
            padding: 10px;
            background-color: #CD5C5C;
        }

        label {
            font-weight: bold;
        }

        hr {
            border: 1px solid grey;
        }

        header {
            padding: 10px;
            background-color: whitesmoke;
            border-bottom: 1px solid grey;
        }

        .main {
            display: flex;
        }

        main {
            margin: auto;
            border: 2px dashed black;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="main">
        <form class="form-horizontal nilai" method="POST" action="index3result.php">
            <h4><strong>Form Nilai Siswa</strong></h4>
            <hr />
            <div class="form-group">
                <label for="text">Nama Lengkap</label>
                <input id="text" name="nama" pattern="[A-Za-z ]{1,}" title="Hanya Huruf" placeholder="Nama Lengkap" type="text" required="required" class="form-control">
            </div>
            <div class="form-group">
                <label for="select">Mata Kuliah</label>
                <div>
                    <select id="select" name="matkul" required="required" class="custom-select">
                        <option value="Basis Data">Basis Data</option>
                        <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                        <option value="Statistika dan Probabilitas">Statistika dan Probabilitas</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="text1">Nilai UTS</label>
                <input id="text1" name="nilai_uts" placeholder="Nilai UTS" pattern="[0-9]{1,3}" title="Hanya Angka 1-100" type="text" required="required" value="" class="form-control">
            </div>
            <div class="form-group">
                <label for="text2">NIlai UAS</label>
                <input id="text2" name="nilai_uas" placeholder="Nilai UAS" type="text" pattern="[0-9]{1,3}" title="Hanya Angka 1-100" required="required" value="" class="form-control">
            </div>
            <div class="form-group">
                <label for="text3">Nilai Tugas/Praktikum</label>
                <input id="text3" pattern="[0-9]{1,3}" name="nilai_tugas" placeholder="Nilai Tugas" type="text" title="Hanya Angka 1-100" required="required" value="" class="form-control">
            </div>
            <div class="form-group text-center">
                <button name="proses" value="proses" type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</body>

</html>