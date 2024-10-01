@extends('app')
@section('content')
    <div class="wrapper">
        <div class="event-dt-block p-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="error-404-content text-center">
                            <h2>404</h2>
                            <h4>Oops! Página não encontrada</h4>
                            <p>Parece que está à procura de algo que não existe. Se acha que isto é um problema connosco, por favor diga-nos .</p>
                            <a href="{{route('home')}}" class="main-btn btn-hover h_50"><i class="fa-solid fa-house me-3"></i>Explorar eventos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
