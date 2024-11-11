@props(['developer'])
<div class ="card">
    <img src="{{$developer->image}}" alt="Foto de {{$developer->name}}">
    <h3>{{$developer->name}}</h3>
    <p>{{$developer->description}}</p>
</div>

<div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4 animate-card">
            <div class="developer-card text-center shadow-sm p-4">
                <div class="img-container">
                <img class="img-fluid" src="{{asset('/img/Edson01.svg')}}" loading ="lazy">
                </div>
                <div class="card-body">
                    <h4 class="card-title">Edson Cunha</h4>
                    <p class="text-muted role">Programador Full Stack</p>
                    
                    <div class="skills">
                        <span class="badge bg-primary">Java</span>
                        <span class="badge bg-warning text-dark">Spring</span>
                        <span class="badge bg-success">MySQL</span>
                    </div>
                    <div class="social-links d-flex justify-content-center mt-3">
                        <a href="https://github.com/EdsonJuniorP13" aria-label="GitHub"><i
                                class="fab fa-github"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a>
                        <a href="mailto:digitandohouse@gmail.com" aria-label="Email"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>

        