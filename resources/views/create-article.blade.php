<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <h1>Crea il tuo Store</h1>
    
    <div style="display: flex;justify-content:center;align-items:center;height: 100vh;">
     <div style="width: 50%;height: 60%;display:flex;align-items:center;">
    <form action="{{route('article.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Titolo</label>
        <input name="title" type="name" value="{{old('title')}}" class="form-control" id="tile" >
        @error('title')<div><span class="text-danger">{{$message}}</span></div>@enderror
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <input name="description" type="text" value="{{old('description')}}" class="form-control" id="description">
        @error('description')<div><span class="text-danger">{{$message}}</span></div>@enderror
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Categoria</label>
        <input name="category" type="text" value="{{old('category')}}" class="form-control" id="category">
        @error('category')<div><span class="text-danger">{{$message}}</span></div>@enderror
      </div>
      <div class="mb-3">
        <label for="address" class="form-label">Autore</label>
        <input name="author" type="text" value="{{old('author')}}" class="form-control" id="author" >
        @error('author')<div><span class="text-danger">{{$message}}</span></div>@enderror
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Immagine</label>
        <input name="image" type="image" value="{{old('image')}}" class="form-control" id="image" style="height:30px;width:60vh;" >
        @error('image')<div><span class="text-danger">{{$message}}</span></div>@enderror
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

  </div>
    </div>

    
</body>
</html>