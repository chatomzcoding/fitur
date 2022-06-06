    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Dropzone css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.6/dropzone.css"
        integrity="sha512-7uSoC3grlnRktCWoO4LjHMjotq8gf9XDFQerPuaph+cqR7JC9XKGdvN+UwZMC14aAaBDItdRj3DcSDs4kMWUgg=="
        crossorigin="anonymous" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="container">
        <form action="{{ url('upload') }}" method="post" class="dropzone" id="myDropzone">
            @csrf
            <div id="data">
                <!-- file yang telah disimpan di database akan ditampilkan disini -->
            </div>
        </form>
    </div>
    <!-- <script src="js/dropzone.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.6/dropzone.js"
        integrity="sha512-/diY7kiMCU8WBbgrhBMJjMDtrsJGPP2LQG4gaw9tHRYlQ50sJLhAQZH/MSpEPdQHcY0YXYfsosyjMArCDTa3SA=="
        crossorigin="anonymous"></script>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- bootstrap js  -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script>
        // saat dokumen selesai dibuat maka jalankan fungsi update 
        $(document).ready(function () {
            update();
        });

        // myDropzone adalah id form 
        Dropzone.options.myDropzone = {
            // saat upload file berhasil maka jalankan fungsi update 
            success: function (file, data) {
                update()
            }
        }

        var myDropzone = new Dropzone("#myDropzone");

        //jika proses upload selesai, maka hapus field atau thumbnail upload
        myDropzone.on("complete", function (file) {
            myDropzone.removeFile(file);
        });

        //fungsi tampil data
        function update() {
            $.ajax({
                url: "{{ route('data') }}",
                type: 'get',
                success: function (data) {
                    $('#data').html(data);
                }
            });
        }

    </script>
</body>

</html>
