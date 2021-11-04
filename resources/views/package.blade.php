@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
    
        <div class="col-md-8">
        
            <div class="card">
                
                <div class="card-header">Delivery number {{ $pack[0]->packageNumber }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table style="width:400px;">
                        <tr>
                            <th>ID:</th>
                            <th>Package Number:</th>
                            <th>Delivery Status</th>
                        </tr>
                        @foreach($pack as $p)
                        <tr>
                            @csrf
                            <form action="">
                                <td style="Border: 1px solid black;">{{ $p->id }}</tdh>
                                <input type="hidden" name="id" value="{{ old('$p]->id', $p->id) }}">
                                <td style="Border: 1px solid black;">{{ $p->packageNumber }}</td>
                                <td style="Border: 1px solid black;">
                                    <select name="progress" id="progress">
                                        <option value="Delivered">Delivered</option>
                                        <option value="On Route">On Route</option>
                                        <option value="On Hold">On Hold</option>
                                    </select>
                                </td>
                                <td><input type="submit" name="Save" id="save"></td>
                            </form>
                            
                            
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
