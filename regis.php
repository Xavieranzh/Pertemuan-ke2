<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prak Week 2.2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h2>Form Registrasi</h2>
    <div class="container px-5 my-5">
        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label" for="nim">NIM</label>
                <input class="form-control" id="nim" type="text" placeholder="NIM" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="nim:required">Harap Masukan NIM!</div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="namaLengkap">NAMA LENGKAP</label>
                <input class="form-control" id="namaLengkap" type="text" placeholder="NAMA LENGKAP"
                    data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="namaLengkap:required">Harap Masukan Nama Lengkap!</div>
            </div>
            <div class="mb-3">
                <label class="form-label d-block">Jenis Kelamin</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="lakiLaki" type="radio" name="jenisKelamin"
                        data-sb-validations="" />
                    <label class="form-check-label" for="lakiLaki">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" id="perempuan" type="radio" name="jenisKelamin"
                        data-sb-validations="" />
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
                <?php
                $ar_prodi = ["TI => Teknik Informatika", "SI => Sistem Informasi", "BD => Bisnis Digital"];
            ?>
                <div class="mb-3">
                    <label class="form-label" for="programStudi">Program Studi</label>
                    <select class="form-select" id="programStudi" aria-label="Program Studi">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Bisnis Digital">Bisnis Digital</option>
                        <?php foreach ($ar_prodi as $k => $v)
                    echo "<option value='$k'>$v</option>";
                    ?>
                    </select>
                </div>
                <?php $ar_skill=["HTML => 10, CSS => 20, JS => 20, PHP => 30, JAVA => 30, PYTHON => 30"]; ?>
                <div class="mb-3">
                    <label class="form-label d-block">Web & Programming Skill</label>
                    <?php foreach ($ar_skill as $k => $v)
                    echo "input type='checkbox' name='skill[]' value='$k' > '$k'";
                    ?>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="domisili">Domisili</label>
                    <input class="form-control" id="domisili" type="text" placeholder="Domisili"
                        data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="domisili:required">Domisili is required.</div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" id="email" type="text" placeholder="Email"
                        data-sb-validations="required" />
                    <div class="invalid-feedback" data-sb-feedback="email:required">Email is required.</div>
                </div>
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        <p>To activate this form, sign up at</p>
                        <a
                            href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                    </div>
                </div>
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
                </div>
        </form>
    </div>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>