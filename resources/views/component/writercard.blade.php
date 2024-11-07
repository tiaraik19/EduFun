<div class="container d-flex flex-row justify-content-center p-5 gap-4">
    @foreach ($authors as $item)
        <div class="card d-flex flex-column align-items-center" style="width: 18rem; border-color: transparent; background-color: transparent">
            <a href={{ route('writerdetail.view', $item->id) }}>
                <img src="{{ asset('image/'.$item->picture) }}" class="card-img-center rounded-circle" alt="..." style="width: 150px; height: 150px; object-fit: cover;">
            </a>
            <div class="card-body d-flex flex-column align-items-center">
                <a href={{ route('writerdetail.view', $item->id) }} class="text-decoration-none text-dark">
                    <h5 class="card-title">{{$item->name}}</h5>
                </a>
                <p class="card-text">{{$item->specialist}}</p>
            </div>
        </div>
    @endforeach
</div>

