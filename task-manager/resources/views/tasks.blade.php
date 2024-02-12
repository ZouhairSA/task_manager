<!-- resources/views/tasks.blade.php -->

@extends('layouts.app') <!-- Assurez-vous que vous avez un layout parent dans votre application Laravel -->

@section('content')
    <div id="app">
        <!-- Incluez ici les composants Vue.js -->
        <task-list></task-list>
    </div>
@endsection

@section('scripts')
    <!-- Incluez les fichiers JavaScript de votre application Vue.js -->
    <script src="{{ mix('js/app.js') }}"></script>
@endsection
