@extends('auth.layouts.app')

@section('content')
    <div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Vertical Layout with Navbar</h3>
                <p class="text-subtitle text-muted">Navbar will appear on the top of the page.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        {{-- <li class="breadcrumb-item active" aria-current="page">Layout Vertical Navbar</li> --}}
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">About Vertical Navbar</h4>
            </div>
            <div class="card-body">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vitae malesuada arcu, nec rutrum orci. Morbi arcu arcu, commodo sed quam ut, venenatis dictum augue. Quisque at diam sed ante iaculis dapibus non id ipsum. Quisque tincidunt arcu posuere pharetra commodo. Nunc faucibus ipsum aliquam ipsum facilisis, quis pulvinar tortor suscipit. Proin aliquet elementum tellus ac ornare. Vestibulum laoreet id metus et venenatis.</p>
                
            </div>
        </div>
    </section>

@endsection