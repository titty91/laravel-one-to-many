@extends('layouts.main-layout')
@section('contain')
    <div>
        <h1>
            Post:
        </h1>

        <ul>
            @foreach ($posts as $post)
                <li>
                    <h4>
                        {{$post -> title}}
                    </h4>
                    <p>
                        {{$post -> text}}
                    </p>
                    <p>
                        TAG {{$post -> tag ->name}}
                        {{$post -> tag -> description}}
                    </p>
                    <p>
                        Likes: {{$post -> detail -> likes}}
                        arguments: {{{$post -> detail -> argument}}
                    </p>

                </li>
            @endforeach
        </ul>

    </div>
@endsection