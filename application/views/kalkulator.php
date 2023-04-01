<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    
    <h1>Hello world</h1>
    <div class="kalkulator-container container">
        <div class="row">
            <div class="col">
                <form action="" method="POST">
                    <input class="form-control" type="text" name="angka1" placeholder="Masukan angka">
                    <input class="form-control" type="text" name="angka2" placeholder="Masukan angka">
                    <input class="form-control" type="text" name="operator" placeholder="Masukan operator (+, -, /, *)">
                    <button type="submit" name="hitung" value="hitung" class="btn btn-primary">Hitung</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </form>
            </div>
            <div class="col">
                <p>Hasil: <?= $hasil ?></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>