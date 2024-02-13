<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>BLOG</title>
</head>
<body>
   
   <h1>BLOG</h1>

   

   
    <a href= "{{ route('articoli') }}" >Articoli</a>
    <a href= "{{ route('contatti') }}" >Chi Sono</a>
    <a href= "{{ route('home') }}" >Home</a>


    <div class="row">
        @foreach ($articoli as $chiave => $articolo)
         <div class="card" style="width: 20rem;display: flex;flex-direction:row;margin-left: 20px;margin-top:40px;">
             <div class="card-body" style="padding-right:20px;" >
                <h5 class="card-title">{{$articolo['titolo']}}</h5>
                <p class="card-text">{{$articolo['descrizione']}}.</p>
                <p class="card-text">{{$articolo['categoria']}}.</p>
                <a href="{{ route('articoli.dettaglio', ['id'=>$chiave]) }}" class="btn btn-primary">Dettaglio</a>
            </div>
         </div>
        @endforeach 
    
    </div>



    
</body>
</html>