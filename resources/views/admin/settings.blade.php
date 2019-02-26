@extends('layout')

@section('title', 'Edit Genres')

@section('main')
    <div>
        <form method="post" action = "/settings/update">
            @csrf
            @if ($maintenance)
                <input name="maintenance" type="checkbox" value="on" class="form-control" checked>On Maintenance
            @else
                <input name="maintenance" type="checkbox" value="on" class="form-control">On Maintenance
            @endif
            <input type="submit" value="submit">
        </form>
    </div>
@endsection
