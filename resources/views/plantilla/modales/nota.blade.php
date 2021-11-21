<!------------------------------------------------------>
<!--NOTA-->
<!------------------------------------------------------>


<!------------------------------------------------------>
<!--CREATE-->
<!------------------------------------------------------>
<div id="CreateNota" class="modal fade" tabindex="-1" role="dialog"
aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

        <div class="modal-body">
            <div class="text-center mt-2 mb-4">
                <h3 class="modal-title">Crear nueva nota</h3>
            </div>

            <form action="{{  url('nota')  }}" method="POST">
                @csrf

                <div class="form-body">

                <!--TITULO-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input name="titulo" value="{{  old('titulo')  }}" type="text" class="form-control"
                                placeholder="Titulo">
                        </div>
                        @error('titulo')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                        @enderror
                    </div>
                </div>



                <!--NOTA-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea name="nota" type="text" class="form-control"
                                placeholder="Nota">{{  old('nota')  }}</textarea>
                        </div>
                        @error('nota')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>



                <!--ID_CATEGORIA-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                           <select name="id_categoria" class="form-control">
                               <option value="">Seleccione</option>
                                @foreach(App\Models\Categoria::all() as $categoria)
                                    <option value="{{  $categoria->id  }}">{{  $categoria->nombre  }}</option>
                                @endforeach
                           </select>
                        </div>
                        @error('id_categoria')
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






@foreach(App\Models\Nota::all() as $nota)
<!------------------------------------------------------>
<!--SHOW-->
<!------------------------------------------------------>
<div id="ShowNota{{  $nota->id  }}" class="modal fade" tabindex="-1" role="dialog"
aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

        <div class="modal-body">
            <div class="text-center mt-2 mb-4">
                <h3 class="modal-title">Visualizar nota</h3>
            </div>


                <!--TITULO-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input name="titulo" value="{{  $nota->titulo  }}" type="text" class="form-control"
                                placeholder="Titulo">
                        </div>
                        @error('titulo')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                        @enderror
                    </div>
                </div>



                <!--NOTA-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea name="nota" type="text" class="form-control"
                                placeholder="Nota">{{  $nota->nota  }}</textarea>
                        </div>
                        @error('nota')
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
<!--END SHOW-->
<!------------------------------------------------------>







<!------------------------------------------------------>
<!--EDIT-->
<!------------------------------------------------------>
<div id="EditNota{{  $nota->id  }}" class="modal fade" tabindex="-1" role="dialog"
aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">

        <div class="modal-body">
            <div class="text-center mt-2 mb-4">
                <h3 class="modal-title">Editar nota</h3>
            </div>

            <form action="{{  url('nota/'.$nota->id)  }}" method="POST">
                @method('PUT')
                @csrf

                <div class="form-body">

                <!--TITULO-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input name="titulo" value="{{  $nota->titulo  }}" type="text" class="form-control"
                                placeholder="Titulo">
                        </div>
                        @error('titulo')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                        @enderror
                    </div>
                </div>



                <!--NOTA-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea name="nota" type="text" class="form-control"
                                placeholder="Nota">{{  $nota->nota  }}</textarea>
                        </div>
                        @error('nota')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>



                <!--ID_CATEGORIA-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                           <select name="id_categoria" class="form-control">
                               <option value="">Seleccione</option>
                                @foreach(App\Models\Categoria::all() as $categoria)
                                    <option {{  $categoria->id == $nota->id_categoria ? 'selected' : ''  }} value="{{  $categoria->id  }}">{{  $categoria->nombre  }}</option>
                                @endforeach
                           </select>
                        </div>
                        @error('id_categoria')
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
<!--END NOTA-->
<!------------------------------------------------------>
