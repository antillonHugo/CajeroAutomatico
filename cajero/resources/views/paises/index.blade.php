@extends('layouts.app')

@section('title', 'Lista de Países')

@section('content')
   
    @if($pais->isEmpty())
        <p>No hay países disponibles.</p>
    @else
   
        <div class="container">
        
                <div class="">
                    <button class="btn btn-success">Agregar</button>
                    <h4 class="fw-bold py-3">Lista de Países</h2>

                    <ul class="list-unstyled">
                        @foreach($pais as $p)
                            <li class="click-registro">
                                <a href="#" class="text-decoration-none text-secondary d-flex justify-content-between py-2">
                                    {{ $p->pais }}
                                    <i class="fa-solid fa-eye text-black-50"></i>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                
        </div>

    
    @endif
@endsection

