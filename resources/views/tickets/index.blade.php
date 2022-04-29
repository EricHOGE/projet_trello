@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tickets') }}</div>
    

                <div class="card-body">

                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">  
                        </div>
                    @endif

                    <a href="{{ route ('tickets.create') }}"> <input type="button" value="Créer un ticket à votre catégorie"></a>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="card">
        <h1>Tickets</h1>
        <div class="categorieslists">
            @foreach ($tickets as $ticket)

                <div> {{ $ticket->content }} </div>
                <form action="{{ route('tickets.destroy', $ticket->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Supprimer le ticket</button>
                </form>
               
            @endforeach
        </div>

    </div>

  
@if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
</div>

@endsection