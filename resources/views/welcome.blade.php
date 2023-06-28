@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Welcome Page</h1>
    <div class="row g-4">
        <div class="col">
            <div>
                <h1>CONTENT MAIN</h1>
                <div>
                    @foreach ($movies as $movie)
                        <p>{{$movie}}</p>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

</div>
@endsection