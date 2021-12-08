<article>
    <!-- Post header-->
    <header class="mb-4">
        <!-- Post title-->
        <h1 class="fw-bolder mb-1">{{$post['title']}}</h1>
        <!-- Post meta content-->
        <div class="text-muted fst-italic mb-2">Posted on January 1, 2021 by Start Bootstrap</div>
        <!-- Post categories-->
        <a class="badge bg-secondary text-decoration-none link-light" aria-disabled="">Web Design</a>
        <a class="badge bg-secondary text-decoration-none link-light" aria-disabled=""">Freebies</a>
    </header>
    <!-- Posts content-->
    <section class="mb-5">
        <p class="fs-5 mb-4">{{$post['desc']}}</p>

        <!-- Post content-->
        @foreach ($post['body'] as $item)
        <h3 class="fw-bolder mb-4 mt-5">{{$item['title']}}</h3>
        <figure class="mb-2"><img class="img-fluid rounded" src="{{$item['image']}}"" alt="..." /></figure>
        <p class="fs-5 mb-4">{{$item['body']}}</p>
        @endforeach
    </section>
</article>