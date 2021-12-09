<article>
    <!-- Post header-->
    <header class="mb-4">
        <!-- Post title-->
        <h1 class="fw-bolder mb-1">{{$post['title']}}</h1>
        <!-- Post meta content-->
        <div class="text-muted fst-italic mb-2">Publikasi tanggal {{$post['date']}}</div>
        <!-- Post categories-->
        <a class="badge bg-secondary text-decoration-none link-light" aria-disabled="">{{$post['kategori']}}</a>
        {{-- <a class="badge bg-secondary text-decoration-none link-light" aria-disabled=""">Freebies</a> --}}
    </header>
    <!-- Posts content-->
    <section class="mb-5">
        <p class="fs-5 mb-4">{{$post['desc'],}}
            <a class="text-decoration-none fs-10" href="{{$post['toko']}}">
                Kunjungi toko
                <i class="bi bi-arrow-right"></i>
            </a>
        </p>
        

        <!-- Post content-->
        @foreach ($post['body'] as $item)
        <h3 class="fw-bolder mb-4 mt-5">{{$item['title']}}</h3>
        <figure class="mb-2"><img class="img-fluid col-4 rounded" src="{{$item['image']}}"" alt="..." /></figure>
        <p class="fs-5">{{$item['body']}}</p>
        <a class="text-decoration-none fs-10" href="{{$item['link']}}">
            Kunjungi produk ->
            <i class="bi bi-arrow-right"></i>
        </a>
        @endforeach
    </section>
</article>