@extends('layouts.app')
@extends('layouts.sidebar')

@section('container')
<h1>hello this is user page</h1>



@forelse($users as $user)

<td>
    
    {{$user->name}}
</td>
@endforelse
@endsection