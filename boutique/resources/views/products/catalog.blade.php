@extends('../layouts.app')

@section('page_title', 'Catalog')
@section('css')
<link href="{{ asset('css/style_products.css') }}" rel="stylesheet">
@endsection

@section('content')
    <header>
        <div class="container">
            <div class="row header">
                <div class="col-12">
                    <h1>Catalog</h1>
                </div>
            </div>
        </div>
    </header>
@endsection
