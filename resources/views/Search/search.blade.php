
@extends('layouts.app')
@section('title', 'Search Page')

@section('content')
  
  <section class="container mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-6">Services</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
        @if($search->isEmpty())
        <p>No results found.</p>
    @else



      @forelse ($search as $item)
      <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <img src="/img/Housekeeping.jpg" alt={{$item->alt}} class="w-full h-48 object-cover">
        <div class="p-4">
          <h3 class="font-semibold text-gray-800">{{$item->nama_layanan}}</h3>
          <p class="text-gray-600">{{$item->user->name}}</p>
        </div>
      </div>
      @empty
      <h3 class="font-semibold text-gray-800">Tidak Ada Service</h3>
      @endforelse
      
      {{ $search->links() }} 
      @endif
      
      
    </div>
  </section>
@endsection