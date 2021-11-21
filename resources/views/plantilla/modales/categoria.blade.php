<!------------------------------------------------------>
<!--CATEGORIA-->
<!------------------------------------------------------>


<!------------------------------------------------------>
<!--CREATE-->
<!------------------------------------------------------>
<div id="CreateCategoria" class="modal fade" tabindex="-1" role="dialog"
aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

        <div class="modal-body">
            <div class="text-center mt-2 mb-4">
                <h3 class="modal-title">Crear nueva categoria</h3>
            </div>

            <form action="{{  url('categoria')  }}" method="POST">
                @csrf

                <div class="form-body">

                <!--NOMBRE-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input name="nombre" value="{{  old('nombre')  }}" type="text" class="form-control"
                                placeholder="Nombre">
                        </div>
                        @error('nombre')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                        @enderror
                    </div>
                </div>



                </div>

                <!------------------------------>
                <!--BTNS-->
                <!------------------------------>
                <div class="form-actions">
                    <div class="text-right">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <!------------------------------>
                <!--END BTNS-->
                <!------------------------------>

            </form>

        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!------------------------------------------------------>
<!--END CREATE-->
<!------------------------------------------------------>






@foreach(App\Models\Categoria::all() as $categoria)
<!------------------------------------------------------>
<!--SHOW-->
<!------------------------------------------------------>
<div id="ShowCategoria{{  $categoria->id  }}" class="modal fade" tabindex="-1" role="dialog"
aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

        <div class="modal-body">
            <div class="text-center mt-2 mb-4">
                <h3 class="modal-title">Visualizar categoria</h3>
            </div>


                <!--TITULO-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input name="nombre" value="{{  $categoria->nombre  }}" type="text" class="form-control"
                                placeholder="Nombre">
                        </div>
                        @error('nombre')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                        @enderror
                    </div>
                </div>


<!--------------------->
<!--CARD NOTA-->
<!--------------------->
<div class="row">
    <div class="col-12 mt-4">
        <div class="card-columns">


            @foreach ($categoria->nota() as $nota)


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
<!--------------------->
<!--END CARD NOTA-->
<!--------------------->


                <!------------------------------>
                <!--BTNS-->
                <!------------------------------>
                <div class="form-actions">
                    <div class="text-right">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <!------------------------------>
                <!--END BTNS-->
                <!------------------------------>

            </form>

        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!------------------------------------------------------>
<!--END SHOW-->
<!------------------------------------------------------>







<!------------------------------------------------------>
<!--EDIT-->
<!------------------------------------------------------>
<div id="EditCategoria{{  $categoria->id  }}" class="modal fade" tabindex="-1" role="dialog"
aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

        <div class="modal-body">
            <div class="text-center mt-2 mb-4">
                <h3 class="modal-title">Editar categoria</h3>
            </div>

            <form action="{{  url('categoria/'.$categoria->id)  }}" method="POST">
                @method('PUT')
                @csrf

                <div class="form-body">

                <!--TITULO-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input name="nombre" value="{{  $categoria->nombre  }}" type="text" class="form-control"
                                placeholder="Nombre">
                        </div>
                        @error('nombre')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                        @enderror
                    </div>
                </div>


                </div>

                <!------------------------------>
                <!--BTNS-->
                <!------------------------------>
                <div class="form-actions">
                    <div class="text-right">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <!------------------------------>
                <!--END BTNS-->
                <!------------------------------>

            </form>

        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!------------------------------------------------------>
<!--END EDIT-->
<!------------------------------------------------------>
@endforeach


<!------------------------------------------------------>
<!--END CATEGORIA-->
<!------------------------------------------------------>
