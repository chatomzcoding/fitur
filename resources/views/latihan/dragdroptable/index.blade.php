  <!DOCTYPE html>
  <html>
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css"/>
  </head>
  <body>
      <div class="container mt-5">
  
          <h3 class="alert alert-info mb-4">Tutorial Membuat Tabel Drag n Drop dengan Datatable</h3>
  
          <div class="card">
              <div class="card-body">
                  <table id="example" class="table table-striped">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>Judul Kegiatan</th>
                              <th>Keterangan Kegiatan</th>
                          </tr>
                      </thead>
                      <tbody class="row_position">
                          @foreach ($data as $item)
                            <tr id="{{ $item->id }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->deskripsi }}</td>
                            </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div> <!-- container / end -->
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
      <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
      <script type="text/javascript">
  
          //script datatable
          $(document).ready(function () {
              $("#example").DataTable({});
          });
  
          //script untuk sorting tabel
          $(".row_position").sortable({
              delay: 150,
              stop: function() {
                  var selectedData = new Array();
                  $('.row_position>tr').each(function() {
                      selectedData.push($(this).attr("id"));
                  });
                  console.log(selectedData);
                  updateOrder(selectedData);
              }
          });
      
      
          //script untuk menyimpan data
          function updateOrder(data) {
              $.ajax({
                  url: "{{ route('simpan') }}",
                  type:'post',
                  data:{position:data},
                  success:function(){
  
                      //jika berhasil tampilkan pesan
                      alert('perubahan data berhasil disimpan!');
                  }
              })
          }
      </script>
  </body>
  
  </html>