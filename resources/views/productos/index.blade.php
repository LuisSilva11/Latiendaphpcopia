@extends('layouts.menu')

@section('contenido')

    <div class="row teal-text text-darken-2">
        <center>
        <h1> Catálogo de productos </h1>
        </center>
    </div>
    @foreach($productos as $producto)
    <div class="row " >
        <div class="col s8 m5 teal lighten-5">
            <div class="card teal lighten-4">
                
                <div class="card-image">
                    @if($producto->imagen === null)
                        <img src="{{  asset('img/nodisponible' )  }}" alt="">
                    @else
                    <img src="{{  asset('img/'.$producto->imagen )  }}" alt="">
                    @endif
                    
                    <span class="card-title teal-text darken-1">{{  $producto->nombre  }}</span>
                </div>
                
                <a class="btn-floating halfway-fab waves-effect waves-light red"></a>
                <div class="card-content">
                    <p>  {{  $producto->desc  }}  </p>
                </div>
                <div class="card-action">
                    <a class="btn-floating halfway-fab waves-effect waves-light teal lighten-2"
                     href=" {{  route('productos.show' , $producto->id)  }} "> <center>VER</center> 
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection