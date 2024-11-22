<div class="card-{{$index}}">
    <img class="main-cartao__body-image" src="{{asset("storage/$image")}}" alt="{{$title}}" style="width: 100%" />
    <div class="container texto-card">
        <h4><b>{{$title}}</b></h4>
        <p>
            {{$resume}}
        </p>
        <p><small>{{$author}} | {{$year}}</small></p>
    </div>
</div>