@extends('layout')

@section('title', 'Add a Track')

@section('main')
    <div class="row">
        <div class="col">
            <form action="/tracks/store" method="post" id="addform">
                @csrf
                <div class="form-group col-6 mx-auto">
                    <label for="name">Name</label>
                    <input type="text" id='name' name="name" class="form-control">
                    <small class="text-danger">{{$errors->first('name')}}</small>
                    <label for="albums">Albums</label>
                    <select class='form-control' name="albums" id='albums' form="addform">
                        @forelse($albums as $album)
                            <option value={{$album->AlbumId}}>{{$album->Title}}</option>
                        @empty
                            <option value='no available'>No Album Available</option>
                        @endforelse
                    </select>
                    <small class="text-danger">{{$errors->first('albums')}}</small>
                    <label for="media">Media Types</label>
                    <select class='form-control' name="media" id='media' form="addform">
                        @forelse($media as $mediatype)
                            <option value={{$mediatype->MediaTypeId}}>{{$mediatype->Name}}</option>
                        @empty
                            <option value='no available'>No Media Available</option>
                        @endforelse
                    </select>
                    <small class="text-danger">{{$errors->first('media')}}</small>
                    <label for="genres">Genres</label>
                    <select class='form-control' name="genres" id='genres' form="addform">
                        @forelse($genres as $genre)
                            <option value={{$genre->GenreId}} {{$genre->GenreId == old('genres') ? 'selected' : ''}}>{{$genre->Name}}</option>
                        @empty
                            <option value='no available'>No Genre Available</option>
                        @endforelse
                    </select>
                    <small class="text-danger">{{$errors->first('genres')}}</small>
                    <label for="mili">Miliseconds</label>
                    <input type="text" id='mili' name="mili" class="form-control">
                    <small class="text-danger">{{$errors->first('mili')}}</small>
                    <label for="composer">Composer</label>
                    <input type="text" id='composer' name="composer" class="form-control">
                    <small class="text-danger">{{$errors->first('composer')}}</small>
                    <label for="bytes">Bytes</label>
                    <input type="text" id='bytes' name="bytes" class="form-control">
                    <small class="text-danger">{{$errors->first('bytes')}}</small>
                    <label for="unit">Unit Price</label>
                    <input type="text" id='unit' name="unit" class="form-control">
                    <small class="text-danger">{{$errors->first('unit')}}</small>
                    <button type="submit" class="btn btn-primary form-control">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
