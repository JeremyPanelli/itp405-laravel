<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class TracksController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('tracks');
        // if genre is specified
        if($request->query('genre')) {
            $query->join('genres', function($join) use ($request) {
                        $join
                            ->on('genres.GenreId', '=', 'tracks.GenreId')
                            ->on('genres.Name', '=', $request->query('genre'));
                    });
        }
        $query->join('albums', 'albums.AlbumId', '=', 'tracks.AlbumId');
        $query->join('artists', 'artists.ArtistId', '=', 'albums.ArtistId');
        $query->select('tracks.Name as trackName', 'tracks.UnitPrice as price', 'albums.Title as title', 'artists.Name as artistName');
        $tracks = $query->get();
        return view('tracks', [
            'tracks' => $tracks,
            'genre' => $request->query('genre')
        ]);
    }
}
