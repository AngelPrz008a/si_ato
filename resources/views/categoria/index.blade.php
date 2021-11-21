
@extends('plantilla.plantilla')
@section('contenido')


<!----------------------------------------->
<!--MODAL CREATE-->
<!----------------------------------------->
<button data-target="#CreateCategoria" data-toggle="modal" type="button" class="btn btn-outline-success btn-rounded"><i
    class="fas fa-plus"></i>
</button>
<!----------------------------------------->
<!--END MODAL CREATE-->
<!----------------------------------------->


<!----------------------------------------->
<!--TABLE-->
<!----------------------------------------->
<div class="row">
    <div class="col-12 mt-4">
        <div class="card-columns">


            @foreach ($categorias as $categoria)


            <div class="card text-white bg-dark">
                <div class="card-body">
                    <h3 class="card-title text-white text-center">  {{  $categoria->nombre  }}  </h3>

                    <button data-target="#ShowCategoria{{  $categoria->id  }}" data-toggle="modal" type="button" class="btn btn-outline-success btn-rounded"><i
                        class="fas fa-info"></i>
                    </button>

                    <button data-target="#EditCategoria{{  $categoria->id  }}" data-toggle="modal" type="button" class="btn btn-outline-warning btn-rounded"><i
                        class="fas fa-edit"></i>
                    </button>

                    <button data-target="#DeleteCategoria{{  $categoria->id  }}" data-toggle="modal" type="button" class="btn btn-outline-danger btn-rounded"><i
                        class="fas fa-trash"></i>
                    </button>

                </div>
            </div>


            @endforeach


        </div>
    </div>
</div>
<!----------------------------------------->
<!--END TABLE-->
<!----------------------------------------->

    @if (session('msg'))
        <div class="alert alert-success">
            {{session('msg')}}
        </div>
    @endif


@include('plantilla.modales.nota')
@include('plantilla.modales.categoria')

@endsection






