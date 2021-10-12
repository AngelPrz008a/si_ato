<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>
<body>

<form method="post" action="{{url('nota/'.$nota->id)}}" class="form-horizontal">
    @method('PUT')
    @csrf
    <fieldset>

    <!-- Form Name -->
    <legend>Editar</legend>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="">Titulo</label>
      <div class="col-md-4">
      <input value="{{$nota->titulo}}" name="titulo" type="text" class="form-control input-md" placeholder="Titulo">
        @error('titulo')
            <div class="alert alert-danger">
                {{$message}}
            </div>
        @enderror
      </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="">Nota</label>
    <div class="col-md-8">
      <textarea style="height:80%;" name="nota" class="form-control" placeholder="Nota">{{$nota->nota}}
      </textarea>
      @error('nota')
        <div class="alert alert-danger">
            {{$message}}
        </div>
     @enderror
    </div>
  </div>


    <!-- Fecha Creacion-->
    <div class="form-group">
        <div class="col-md-4">
        <input value="{{$nota->fecha_creacion}}" name="fecha_creacion" type="hidden" placeholder="Nota" class="form-control input-md">
        </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for=""></label>
      <div class="col-md-4">
        <button type="submit" class="btn btn-primary btn-success">
            Ctrl + S
        </button>
      </div>
    </div>

    </fieldset>
    </form>


    <h4>Se creo el {{$nota->fecha_creacion}} </h4>

    @if(!empty($msg)))
        <div class="alert alert-success">
            {{$msg}}
        </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</body>
