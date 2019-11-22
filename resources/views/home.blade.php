
@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
                    
        <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="#" class="after-loop-item card border-0 card-templates">
                <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>Group</h4>
                <h2>50</h2>
                <i class="far fa-object-group"></i>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="/snippets/" class="after-loop-item card border-0 card-snippets">
                <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>Branch</h4>
                <h2 class="w-75">40</h2>
                <i class="fas fa-code-branch"></i>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="/guides/" class="after-loop-item card border-0 card-guides shadow-lg">
            <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>Scheme</h4>
                <h2 class="w-75">20</h2>
                <i class="fas fa-pencil-ruler"></i>
            </div>
            </a>
        </div>
         <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="#" class="after-loop-item card border-0 card-expence">
                <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>Expence</h4>
                <h2>50</h2>
                <i class="fas fa-file-invoice-dollar"></i>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="/snippets/" class="after-loop-item card border-0 card-pending">
                <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>Pending Amount</h4>
                <h2 class="w-75">40</h2>
                <i class="fas fa-exclamation-circle"></i>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="/guides/" class="after-loop-item card border-0 card-auction shadow-lg">
            <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>Auction</h4>
                <h2 class="w-75">20</h2>
                <i class="fas fa-chalkboard-teacher"></i>
            </div>
            </a>
        </div>
        <div class="col-12 col-sm-12 col-lg-6 col-md-6 bottomgap">
            <div id="piechart"></div>
        </div>
        <div class="col-12 col-sm-12 col-lg-6 col-md-6 bottomgap">
            <div id="columnchart"></div>
        </div>
        <div class="col-12 col-sm-12 col-lg-6 col-md-6 bottomgap">
            <div id="barchart"></div>
        </div>
        <div class="col-12 col-sm-12 col-lg-6 col-md-6 bottomgap">
            <div id="areachart"></div>
        </div>
        
    </div>
</div>

@endsection
