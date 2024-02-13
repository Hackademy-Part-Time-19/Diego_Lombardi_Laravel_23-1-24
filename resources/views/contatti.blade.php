<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $titolo2 }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <h1>{{ $titolo2 }}</h1>

    <a href= "{{ route('articoli') }}" >Articoli</a>
    <a href= "{{ route('contatti') }}" >Chi Sono</a>
    <a href= "{{ route('home') }}" >Home</a>

    <h1>Contattaci tramite il form!</h1>
    
    @if(session()->has('success'))
      
       <h2 class="alert alert-success">{{session('success')}}</h2>

    @endif

    @if(session()->has('error'))
      
       <h2 class="alert alert-danger">{{session('error')}}</h2>

    @endif

    <form action="{{route('contact.send')}}" method="POST">
      @csrf 
        <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input name="name" type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input name="email" type="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Descrizione</label>
          <input name="description" type="text" class="form-control" id="description" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="address" class="form-label">Indirizzo</label>
          <input name="address" type="text" class="form-control" id="address" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    
</body>
</html>