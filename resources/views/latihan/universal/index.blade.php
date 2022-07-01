<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengujian Package</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <header class="p-3 text-center">
            PENGUJIAN PACKAGE ZELNARA/UNIVERSE Class Universal
        </header>
        <div class="card">
            <div class="card-header bg-primary p-2 text-white">
                <h4>HELPER BILANGAN</h4>
            </div>
            <div class="card-body">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Mata Uang
                            </button>
                        </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Fungsi</th>
                                            <th>Parameter</th>
                                            <th>Kegunaan</th>
                                            <th>Hasil</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>rupiah($bilangan)</td>
                                            <td>$bilangan : variable angka nominal</td>
                                            <td>Digunakan untuk menampilkan nominal dalam bentuk rupiah</td>
                                            <td>{{ $universal->rupiah(15000000) }}</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>norupiah($bilangan)</td>
                                            <td>$bilangan : variable angka nominal</td>
                                            <td>Digunakan untuk menampilkan nominal dalam bentuk rupiah tanpa tanda Rp dan angka dibelakang rupiah</td>
                                            <td>{{ $universal->norupiah(15000000) }}</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>terbilang($bilangan)</td>
                                            <td>$bilangan : variable rupiah</td>
                                            <td>Digunakan untuk menampilkan terbilang dalam kalimat sesuai dengan nominal</td>
                                            <td>{{ $universal->terbilang(15000000) }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        </div>
                    </div>
                    {{-- <div class="card">
                        <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Collapsible Group Item #3
                            </button>
                        </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
                        </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>