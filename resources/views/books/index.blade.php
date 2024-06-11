<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selfwork 008</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <ul>
      @forelse($books as $book)
        <li>{{$book->title}} - {{$book->year ?? 'data ignota'}}</li>
      @empty
        Nessun libro trovato
      @endforelse
    </ul>

    <form class='container' method="POST" action="{{route('store')}}">
      @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Titolo</label>
        <input type="text" name="title" class="form-control" value="{{old('title')}}">
        @error('title')
          {{$message}}
        @enderror
        
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Anno</label>
        <input type="text" name="year" class="form-control" value="{{old('year')}}">
        @error('year')
          {{$message}}
        @enderror
        
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Pagine</label>
        <input type="text" name="pages" class="form-control" value="{{old('pages')}}">
        @error('pages')
          {{$message}}
        @enderror
        
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Autore</label>
        <input type="text" name="author" class="form-control" value="{{old('author')}}">
        @error('author')
          {{$message}}
        @enderror
        
      </div>



      <button type="submit" class="btn btn-primary">Salva</button>
    </form>



  </body>
</html>