@extends('layout')

@section('title', 'Genres')

@section('main')
    <table class="table">
        <tr>
            <th>Genres</th>
        </tr>
        @foreach($genres as $genre)
            <tr>
                <td>
                    <a href="/tracks?genre=<?php echo urlencode($genre->Name) ?>">{{$genre->Name}}</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
