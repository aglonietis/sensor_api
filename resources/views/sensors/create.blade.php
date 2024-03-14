@extends('layouts.app')
@section('content')
<h1 class="text-4xl mt-6 tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">Create Sensor</h1>
<form class="w-full max-w-lg mt-5" method="POST" action="{{route('sensors.store')}}">
    @csrf
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-100 px-3 mb-6 md:mb-0">
            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-ip">
                IP
            </label>
            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-ip" name="ip" type="text" placeholder="123.123.123.123">
        </div>
    </div>
    <div class="flex justify-start">
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Create
        </button>
    </div>
</form>
@endsection
