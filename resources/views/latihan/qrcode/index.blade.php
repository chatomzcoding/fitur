<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <x-bootstrap></x-bootstrap>
    <title>QRCode</title>
</head>
<body>
    <main class="row justify-content-center">
        <section class="col-md-4 text-center">
            <h3>Hasil dari QrCode</h3>
            <form action="" method="get" class="mb-4">
                <div class="form-group">
                    <input type="text" name="isi" value="{{ $isi }}">
                    <input type="number" name="ukuran" value="{{ $ukuran }}">
                </div>
                <div class="from-group">
                    <button type="submit" class="btn btn-primary btn-sm">BUAT QRCODE</button>
                </div>
            </form>
            {!! QrCode::size($ukuran)->generate($isi); !!}
        </section>
    </main>
</body>
</html>