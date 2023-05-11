<nav class="navbar bg-secondary">

    <div class="container d-flex">
        <div class="logo text-white">
            Prova
        </div>
    
        <ul class="d-flex list-unstyled">

            @foreach ($data['headerLinks'] as $item)
                
            <li><a class="text-white text-decoration-none px-3" href="{{route($item)}}">{{$item}}</a></li>
            @endforeach
            
        </ul>
    </div>

</nav>