<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>
<body>

    <a class="btn btn-primary" href="{{url('nota/create')}}">
        More
    </a>


    <div class="row row-cols-1 row-cols-md-3 g-4">

        @foreach ($notas as $nota)

        <div class="col">
            <div class="card text-center">
                <!--<img src="..." class="card-img-top" alt="...">-->
                <div class="card-body">
                    <h5 class="card-title"><a href="{{url('nota/'.$nota->id.'/edit')}}">{{$nota->titulo}} </a></h5>

                    <p class="card-text">{{$nota->nota}}</p>

                    <a class="btn btn-warning" href="{{url('nota/'.$nota->id.'/edit')}}">Put</a>
                    <a class="btn btn-danger" href="{{url('nota/'.$nota->id.'/delete')}}">Delete</a>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#a{{$nota->id}}" data-bs-whatever="{{$nota->id}}">Show</button>

                    <div class="card-footer">
                        <small class="text-muted">
                            Creado: {{$nota->fecha_creacion}}
                            <br>
                            @if ($nota->fecha_modificacion != null)
                                Modificado: {{$nota->fecha_modificacion}}
                            @endif
                        </small>
                    </div>
                </div>
            </div>
        </div>
{{--
            <!--MODAL, UPDATE-->
            <form action="{{url('nota/'.$nota->id)}}" method="post">
                @csrf
                @method('PUT')
            <div class="modal fade" id="a{{$nota->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nota</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Titulo:</label>
                                <input name="titulo" value="{{$nota->titulo}}" type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Nota:</label>
                                <textarea name="nota" class="form-control" id="message-text">{{$nota->nota}}</textarea>
                            </div>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">X</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>

                </div>
                </div>
            </div>
            </form>
--}}

        @endforeach

    </div>


    @if (session('msg'))
        <div class="alert alert-success">
            {{session('msg')}}
        </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</body>
