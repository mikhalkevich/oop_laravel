@extends('layouts.app')
@section('content')
    <div class="py-12 mt-20">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-3xl">{{$obj?->name}}</h2>
                </div>
                <div class="p-6 text-gray-900">
                {!! $obj?->body !!}
                </div>
            </div>
        </div>
    </div>
@endsection
