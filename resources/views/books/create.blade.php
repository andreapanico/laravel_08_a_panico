<x-main>
    <div class="px-4 px-md-5 mb-5">
        <div class="row gx-5 justify-content-center ">
            <div class="col-lg-8 col-xl-6 border p-5 rounded">

                <form action="{{route('books.store')}}" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input class="form-control" id="title" value="{{old('title')}}"
                            name="title" type="text">
                        <label for="title">titolo libro</label>
                        @error('title')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="year" value="{{old('year')}}"
                            name="year" type="text">
                        <label for="year">anno</label>
                        @error('year')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="pages" value="{{old('pages')}}"
                            name="pages" type="text">
                        <label for="pages">pagine</label>
                        @error('pages')
                            {{$message}}
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input class="form-control" id="author" value="{{old('author')}}"
                            name="author" type="text">
                        <label for="name">Autore</label>
                        @error('author')
                            {{$message}}
                        @enderror
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg"
                            type="submit">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-main>