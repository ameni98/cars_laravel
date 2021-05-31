@extends('layouts.app')
@section('content')
<div cmass="m-auto w-4/8  py-24">
<div class="text-center">
<h1 class="text-5xl uppercase bold"> create cars</h1>
</div>
</div>
<div class="flex justify-center pt-20">
<form action="/cars" method="post">
@CSRF
<div class="block">
<input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" name="name"
placeholder="brand name.. ">
<input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" name="founded"
placeholder="founded.. ">
<input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" name="description"
placeholder="brand descriprion.. ">
<button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">submit</button>

</div>
</form>

</div>
@endsection