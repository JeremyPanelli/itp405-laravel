<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PlaylistController extends Controller
{
    public function index($playlistId = null)
    {
        $playlists = DB::table('playlists')->get();
        if($playlistId){
          $tracks = DB::tracks('tracks')
          ->join('playlist_track', 'tracks.TrackId', '=', 'playlist_track.TrackId')
          ->where('PlaylistId', '=', $playlistId)
          ->get();
        }
        else {
          $tracks = [];
        }
        return view('playlist.index', [
          'playlists' => $playlists
        ]);
    }
}
