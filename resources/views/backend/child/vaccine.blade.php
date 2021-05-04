@extends('backend.master')
@section('content')
    
<div style="text-align:center">
    
        <pre>{{$item-> first_name }} {{ $item->last_name }}</pre>
    <pre>{{ $item-> age }}</pre>
    <pre>{{ $item-> email }}</pre>
    <ul>
        <li>{{ $item->vc_name }}</li>
    </ul>
    
    
    
    
    
</div>

@endsection