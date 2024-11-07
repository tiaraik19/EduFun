<div class="container d-flex flex-column align-items-center gap-4">
{{-- variable 'articles' disini diassigned dari ArticleController --}}
@foreach ($article as $item)
    <div class="card d-flex flex-row" style="width: 65rem; border-color: transparent; background-color: transparent ">
        <img src="{{ asset('image/'.$item->picture) }}" class="card-img-top" alt="..." style="border-radius: 20px; height: 250px; width: 600px">
        <div class="card-body">
            {{-- Mengambil item berupa title dari articles --}}
            {{-- Kalau mau ambil value sebuah variable, pakai kurung kurawal {{}} --}}
            <h5 class="card-title">{{$item->title}}</h5>
            <div class="date">
                <p class="date"> {{$item->created_at->format('d M Y')}} | by: {{strstr($item->author->name, " ", true)}}</p>
            </div>
            <p class="card-text">{{substr($item->description, 0, 100)}}...</p>
            <a href={{ route('articledetail.view', $item->id) }} class="btn btn-primary d-flex float-end justify-content-center" style="background-color: rgb(0,139,139); border-radius: 100px; width: 150px;">Read more...</a>
        </div>
    </div>
    @endforeach
</div>


