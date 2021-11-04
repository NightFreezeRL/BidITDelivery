@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <h1>  {{ Auth::user()->name }}, jūsu pasūtījumu saraksts:</h1>
                <table brder = "1">
                        <tr>
                            <th>ID:</th>
                            <th>Package Number:</th>
                            <th>Delivery Status</th>
                        </tr>
                        @foreach($packs as $p)
                        <tr>
                            @csrf
                            <td>{{ $p->id }}</tdh>
                            <td>{{ $p->packageNumber }}</td>
                            <td>{{ $p->deliveryStatus }}</td>
                            
                        </tr>
                        @endforeach
                    </table>

            </div>
        </div>
    </div>
</div>
@endsection
