<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>
<body>

<form method="post" action="{{url('nota')}}" class="form-horizontal">
    @csrf
    <fieldset>

    <!-- Form Name -->
    <legend>Crear</legend>

    <!-- Text input-->
    <div class="form-group">
      <div class="col-md-4">
        <div class="form-floating mb-3">
            <input value="{{old('titulo')}}" id="floatingInput" name="titulo" type="text" class="form-control input-md" placeholder="#">
            <label class="col-md-4 control-label" for="floatingInput">Titulo</label>
        </div>
            @error('titulo')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
      </div>
    </div>

    <!-- Textarea -->
    <div class="form-group">
    <div class="col-md-8">
        <div class="form-floating">
            <textarea name="nota" value="{{old('nota')}}" class="form-control" placeholder="#" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Nota</label>
            @error('nota')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
        </div>
    </div>
  </div>


    <!-- Fecha Creacion-->
    <div class="form-group">
        <div class="col-md-4">
        <input value="{{$Actual}}" name="fecha_creacion" type="hidden" placeholder="Nota" class="form-control input-md">
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


    <h4>Se crea el {{$Actual}} </h4>

    @if(!empty($msg)))
        <div class="alert alert-success">
            {{$msg}}
        </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</body>
