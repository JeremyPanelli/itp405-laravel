@extends('layout')

@section('title', 'Tracks')

@section('main')
    <table class="table">
        <tr>
            <th>Track Name</th>
            <th>Album Title</th>
            <th>Artist Name</th>
            <th>Price</th>
        </tr>
        @foreach($tracks as $track)
            <tr>
                <td>
                    {{$track->trackName}}
                </td>
                <td>
                    {{$track->title}}
                </td>
                <td>
                    {{$track->artistName}}
                </td>
                <td>
                    {{$track->price}}
                </td>
            </tr>

        @endforeach
    </table>
@endsection
