@extends('layouts.main')
@section('content')



          <div class="row">
		  
		  
<h2>{{$obj->name}}</h2>
<div>
{!!$obj->bool!!}
</div>
          </div>
          <!-- /.row -->
@endsection 
