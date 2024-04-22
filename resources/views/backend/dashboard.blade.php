@extends('backend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            <a href="{{ route('admin.courrier.add') }}" class="btn btn-success">Ajouter un courrier</a>
        </x-slot>

        <x-slot name="body">
            <table class="table">
                <thead>
                    <td>Numero</td>
                    <td>Expediteur</td>
                    <td>Destinataire</td>
                    <td>Type</td>
                </thead>
                <tbody>
                    @foreach($courriers as $courrier)
                    <tr>
                        <td>{{ $courrier->numero }}</td>
                        <td>{{ $courrier->expediteur }}</td>
                        <td>{{ $courrier->destinataire }}</td>
                        @if($courrier->type == 0)
                            <td>Depart</td>
                        @else
                            <td>Arrivé</td> 
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </x-slot>
    </x-backend.card>
@endsection
