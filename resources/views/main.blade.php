@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <h1>  {{ Auth::user()->name }}, jūsu pasūtījumu saraksts:</h1>
                <table style="width:400px;">
                        <tr>
                            <th>ID:</th>
                            <th>Package Number:</th>
                            <th>Delivery Status</th>
                        </tr>
                        @foreach($packs as $p)
                        <tr>
                            @csrf
                            <td style="Border: 1px solid black;">{{ $p->id }}</tdh>
                            <td style="Border: 1px solid black;">{{ $p->packageNumber }}</td>
                            <td style="Border: 1px solid black;">{{ $p->deliveryStatus }}</td>
                            
                        </tr>
                        @endforeach
                    </table>

            </div>
        </div>
    </div>
</div>
@endsection
