
@extends('plantilla.plantilla')
@section('contenido')


<!----------------------------------------->
<!--MODAL CREATE-->
<!----------------------------------------->
<button data-target="#CreateNota" data-toggle="modal" type="button" class="btn btn-outline-success btn-rounded"><i
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


            @foreach ($notas as $nota)


            <div class="card text-white bg-dark">
                <div class="card-body">
                    <h3 class="card-title text-white text-center">  {{  $nota->titulo  }}  </h3>

                    <button data-target="#ShowNota{{  $nota->id  }}" data-toggle="modal" type="button" class="btn btn-outline-success btn-rounded"><i
                        class="fas fa-info"></i>
                    </button>

                    <button data-target="#EditNota{{  $nota->id  }}" data-toggle="modal" type="button" class="btn btn-outline-warning btn-rounded"><i
                        class="fas fa-edit"></i>
                    </button>

                    <button data-target="#DeleteNota{{  $nota->id  }}" data-toggle="modal" type="button" class="btn btn-outline-danger btn-rounded"><i
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






