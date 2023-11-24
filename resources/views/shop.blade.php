@extends('shopify-app::layouts.default')

@section('content')
    <h1>{{ $results['id'] }}</h1>
@endsection

@section('scripts')
    @parent

    <script>
        actions.TitleBar.create(app, { title: 'Shop Details' });
    </script>
@endsection