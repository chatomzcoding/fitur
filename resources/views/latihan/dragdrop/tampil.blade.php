<div class="row">
    @foreach ($gambar as $item)
        <div class="col-md-2">
            <!-- data ditampilkan dalam bentuk gambar -->
            <img src="{{ asset('img/'.$item->nama_file) }}" width="100%" />
            {{-- <form action="{{ url('hapus/'.$item->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit">HAPUS</button>
            </form> --}}
            <!-- data ditampilkan dalam bentuk text  -->
        </div>
    @endforeach
</div>