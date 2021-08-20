@extends('adminlte::page')

@section('content')

    <div class="card-body">
        <div class="dataTables_wrapper dt-bootstrap4">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Notícia</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($noticias as $noticia)
                        <tr>
                            <th>{{ $noticia->titulo }}</th>
                            <th>{{ $noticia->noticia }}</th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
