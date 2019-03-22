@extends('layout')

@section('title', 'Document')

@section('main')
<!doctype html>
<div id="doc" contenteditable="true">
  This is your's to edit!
</div>
 <script src="{{secure_asset('js/main.js')}}"></script>
 @endsection
