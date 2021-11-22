@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
    
        <div class="col-md-8">
        
            <div class="card">
                
                <div class="card-header">{{ __('Search the Delivery') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($pack as $p)
                        <tr>
                            @csrf
                            {{ $p->id }}
                            {{ $p->packageNumber }}
                            {{ $p->deliveryStatus }}
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
