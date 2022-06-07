@extends('layouts.menu')

@section('contenido')
    <div class="row teal-text text-darken-2">
        <h1>{{  $producto->nombre  }}</h1>
    </div>
    <div class="row">
        <div class="col s8 ">
            
            <ul>
                    @if($producto->imagen === null)
                        <img src="{{  asset('img/nodisponible' )  }}" alt="">
                    @else
                    <img src="{{  asset('img/'.$producto->imagen )  }}" alt="">
                    @endif
                <h4 class="teal-text text-darken-2">Marca:</h4><p> {{  $producto->marca->nombre  }}</p>
                <h4 class="teal-text text-darken-2">Precio: </h4><p> US ${{  $producto->precio  }}</p>
                <h4 class="teal-text text-darken-2">Descripción: </h4><p> {{  $producto->desc  }}</p>
                <h4 class="teal-text text-darken-2">Categoria: </h4><p>{{  $producto->categoria->nombre }}</p>
               
                
            </ul>
        </div>
        <div class="col s4">
            <div class="row ">
                <h3 class="teal-text text-darken-2">Añadir al Carrito</h3>
            </div>
            <form action="{{  route('cart.store')  }}" method="POST">
                @csrf
                <input type="hidden" 
                name="prod_id"
                value="{{  $producto->id  }}">
                <div class="row">
                    <div class="col s4 input field">
                        <select name="cantidad" id="cantidad">
                            <option value="1"> 1 </option>
                            <option value="2"> 2 </option>
                            <option value="3"> 3 </option>
                        </select>
                        <label for="cantidad">Cantidad</label>
                    </div>
                </div>
                <button class="btn waves-effect teal lighten-2  col s8" 
                        type="submit" 
                        name="action">Añadir
                        </button>
            </form>
            
        </div>
    </div>
@endsection