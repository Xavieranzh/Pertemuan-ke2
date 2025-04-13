<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container px-5 my-5">
    <form id="contactForm" method="POST">
        <div class="form-floating mb-3">
            <input class="form-control" id="nama" name="nama" type="text" placeholder="Nama" data-sb-validations="required" required />
            <label for="nama">Nama</label>
            <div class="invalid-feedback" data-sb-feedback="nama:required">Nama is required.</div>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" id="mataKuliah" name="mataKuliah" aria-label="Mata Kuliah" required>
                <option value="Pemrograman Web2">Pemrograman Web2</option>
                <option value="Basis Data">Basis Data</option>
                <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
            </select>
            <label for="mataKuliah">Mata Kuliah</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="nilaiTugas" name="nilaiTugas" type="number" placeholder="Nilai Tugas" data-sb-validations="required" required />
            <label for="nilaiTugas">Nilai Tugas</label>
            <div class="invalid-feedback" data-sb-feedback="nilaiTugas:required">Nilai Tugas is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="nilaiUts" name="nilaiUts" type="number" placeholder="Nilai UTS" data-sb-validations="required" required />
            <label for="nilaiUts">Nilai UTS</label>
            <div class="invalid-feedback" data-sb-feedback="nilaiUts:required">Nilai UTS is required.</div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="nilaiUas" name="nilaiUas" type="number" placeholder="Nilai UAS" data-sb-validations="required" required />
            <label for="nilaiUas">Nilai UAS</label>
            <div class="invalid-feedback" data-sb-feedback="nilaiUas:required">Nilai UAS is required.</div>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Submit</button>
        </div>
    </form>
</div>
<div class="container px-5 my-5"></div>
<div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Matkul</th>
            <th>Nilai Tugas</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Total Nilai</th>

        </tr>
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            $mataKuliah = $_POST['mataKuliah'];
            $nilaiTugas = $_POST['nilaiTugas'];
            $nilaiUts = $_POST['nilaiUts'];
            $nilaiUas = $_POST['nilaiUas'];

            $totalNilai = ($nilaiTugas * 0.2) + ($nilaiUts * 0.4) + ($nilaiUas * 0.4);

            if ($totalNilai >= 80) {
                $predikat = 'A';
            } elseif ($totalNilai >= 75) {
                $predikat = 'B+';
            } elseif ($totalNilai >= 70) {
                $predikat = 'B';
            } elseif ($totalNilai >= 65) {
                $predikat = 'C+';
            } elseif ($totalNilai >= 60) {
                $predikat = 'C';
            } elseif ($totalNilai >= 50) {
            }

            echo "<tr>";
            echo "<td>1</td>";
            echo "<td>$nama</td>";
            echo "<td>$mataKuliah</td>";
            echo "<td>$nilaiTugas</td>";
            echo "<td>$nilaiUts</td>";
            echo "<td>$nilaiUas</td>";
            echo "<td>$totalNilai</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>
</body>
</html>