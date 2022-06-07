<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- ajax source -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

    <!-- bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <!-- skeleton source  -->
    <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
</head>

<body>
    <div class="container mt-4">
        <!-- membuat menu, dengan warna primary atau warna biru gelap  -->
        <nav class="navbar navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Skeleton Loading Exercise</a>
            </div>
        </nav>
        <div class="col-12 mt-4">
            <!-- dynamic content akan tampil di bagian ini  -->
            <div class="row" id="dynamic_content">
            </div>

        </div>
    </div>

    <script>
        $(document).ready(function () {

            $('#dynamic_content').html(make_skeleton())

            // jalankan fungsi load content setelah 2 detik 
            setTimeout(function(){
                load_content()
            }, 2000);

            function make_skeleton() {
                var output = '';
                for (var count = 0; count < 6; count++) {
                    output += '<div class="col-4">';
                    output += '<div class="ph-item">';
                    output += '<div class="ph-col-12">';
                    output += '<div class="ph-picture"></div>';
                    output += '<div class="ph-row">';
                    output += '<div class="ph-col-6 big"></div>';
                    output += '<div class="ph-col-4 empty big"></div>';
                    output += '<div class="ph-col-12"></div>'
                    output += '<div class="ph-col-12"></div>'
                    output += '</div>';
                    output += '</div>';
                    output += '</div>';
                    output += '</div>';
                }
                return output;
            }

            //membuat fungsi load data dari data.php
            function load_content(limit){
                $.ajax({
                    url: "{{ url('skeleton') }}",
                    method: 'POST',
                    data:{limit:limit},

                    //jika sukses maka gantilah skeleton loader dengan data.php
                    success:function(data){
                        $('#dynamic_content').html(data);
                    }
                })
            }

        })

    </script>
</body>

</html>
