@foreach ($result as $item)
<div class="post-id" id="{{ $item->id }}">
    <h3><a href="">{{ $item->id }}. {{ $item->title }}</a></h3>
    <p>{{ $item->deskripsi }}</p>
    <p>{{ $item->deskripsi }}</p>
    <p>{{ $item->deskripsi }}</p>
    <div class="text-right">
        <button class="btn btn-success">Read More</button>
    </div>
    <hr style="margin-top:5px;">
</div>
@endforeach