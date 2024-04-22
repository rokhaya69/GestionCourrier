@extends('backend.layouts.app')

@section('title', __('GESCO - Ajouter un courrier'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            <h2>Ajouter un courrier</h2>
        </x-slot>

        <x-slot name="body">
           <form action="{{ route('admin.courrier.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="numero">Numero du courrier</label>
                <input type="number" name="numero" id="numero" class="form-control">
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <select name="type" id="type" class="form-control">
                    <option value="0">Départ</option>
                    <option value="1">Arrivé</option>
                </select>
            </div>

            <div class="form-group">
                <label for="expediteur">Expediteur</label>
                <input type="text" name="expediteur" id="expediteur" class="form-control">
            </div>

            <div class="form-group">
                <label for="destinataire">Destinataire</label>
                <input type="text" name="destinataire" id="destinataire" class="form-control">
            </div>

            <div class="form-group">
                <label for="file">Fichier <span>(pdf)</span></label>
                <input type="file" name="fichier" id="file" class="form-control">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
           </form>
        </x-slot>
    </x-backend.card>
@endsection