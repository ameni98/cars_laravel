@extends('layouts.app')
@section('content')
<div cmass="m-auto w-4/8  py-24">
<div class="text-center">
<h1 class="text-5xl uppercase bold"> update cars</h1>
</div>
</div>
<div class="flex justify-center pt-20">
<form action="/cars/{{$car->id}}" method="post">
@CSRF
{{--on a fait @methode put parceque il nous affiche un erreur que la methode unsupprted 
et les methodes supported sont seulement head,get,..}}
@method('put')
<div class="block">
<input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" name="name"
placeholder="brand name.. " value="{{$car->name}}">
<input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" name="founded"
placeholder="founded.. "  value="{{$car->founded}}">
<input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" name="description"
placeholder="brand descriprion.. " value="{{$car->description}}">
<button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">submit</button>

</div>
</form>

</div>
@endsection