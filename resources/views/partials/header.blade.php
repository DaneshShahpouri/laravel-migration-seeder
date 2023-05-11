<nav class="navbar bg-secondary">

    <div class="container d-flex">
        <div class="logo text-white">
            Prova
        </div>
    
        <ul class="d-flex align-items-center list-unstyled m-0">

            @foreach ($data['headerLinks'] as $item)
                
            <li><a class="text-white text-decoration-none text-uppercase px-3" href="{{route($item)}}">{{$item}}</a></li>

            @endforeach
            
        </ul>
    </div>

</nav>