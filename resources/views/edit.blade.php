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
                    <table style="width:100%;margin-left: auto;margin-right: auto;">
                        <tr>
                            <th>ID:</th>
                            <th>Name</th>
                            <th>Adress</th>
                            <th>Email</th>
                            <th>Package ID</th>
                            <th>Delivery Status</th>
                        </tr>
                        @foreach($packs as $p)
                        <tr>
                            @csrf
                            <td style="Border: 1px solid black;">{{ $p->id }}</tdh>
                            <td style="Border: 1px solid black;">{{ $p->name }}</tdh>
                            <td style="Border: 1px solid black;">{{ $p->adress }}</tdh>
                            <td style="Border: 1px solid black;">{{ $p->email }}</tdh>
                            <td style="Border: 1px solid black;"><a href="/package/{{ $p->packageId }}">{{ $p->packageId }}</a></td>
                            <td style="Border: 1px solid black;">{{ $p->deliveryStatus }}</td>
                            
                        </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
