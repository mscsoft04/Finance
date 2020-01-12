
@extends('layouts.main')
@section('title', 'Master')
@section('breadcrumb')
<div class="col-lg-9 col-md-8 col-sm-8 col-2">
   <div class="breadcrumbbar">
      <ul>
         <li class="breadcrumb-item">
            <a href="{{ url('home') }}"><span>Dashboard</span><i class="fas fa-arrow-left fa-fw"></i></a>
         </li>
         <li class="breadcrumb-item">
             Master
         </li>
      </ul>
   </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
                    
        <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="{{ url('state') }}" class="after-loop-item card border-0 card-templates">
                <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>State</h4>
                <h2></h2>
                <i class="far fa-map"></i>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="{{ url('city') }}" class="after-loop-item card border-0 card-snippets">
                <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>City</h4>
                <h2 class="w-75"></h2>
                <i class="fas fa-building"></i>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="{{ url('taluk') }}" class="after-loop-item card border-0 card-guides shadow-lg">
            <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>Taluk</h4>
                <h2 class="w-75"></h2>
            <i class="fas fa-home "></i>
            </div>
            </a>
        </div>
         <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="{{ url('village') }}" class="after-loop-item card border-0 card-expence">
                <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>Village</h4>
                <h2></h2>
                <i class="fas fa-map-pin"></i>
                </div>
            </a>
        </div>

        <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="{{ url('documentType') }}" class="after-loop-item card border-0 card-guides">
                <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>Document Type</h4>
                <h2></h2>
                <i class="fas fa-file" aria-hidden="true"></i>
                </div>
            </a>
        </div>

        <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="{{ url('relationship') }}" class="after-loop-item card border-0 card-templates">
                <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>Relationship</h4>
                <h2></h2>
                <i class="fas fa-user" aria-hidden="true"></i>
                </div>
            </a>
        </div>

        <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="{{ url('sourceOfFunds') }}" class="after-loop-item card border-0 card-templates">
                <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>Source Of Funds</h4>
                <h2></h2>
                <i class="fas fa-rupee-sign"></i>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="{{ url('employee') }}" class="after-loop-item card border-0 card-expence">
                <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>Employee</h4>
                <h2></h2>
                <i class="fas fa-users"></i>
                </div>
            </a>
        </div>
        <div class="col-12 col-sm-12 col-lg-4 col-md-4 bottomgap">
            <a href="{{ url('agent') }}" class="after-loop-item card border-0 card-snippets">
                <div class="card-body d-flex align-items-end flex-column text-right">
                <h4>Agent</h4>
                <h2></h2>
                <i class="fas fa-users"></i>
                </div>
            </a>
        </div>
        
         
    </div>
</div>



@endsection
