@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{$obj->name}}</div>

                <div class="card-body">
                    
					{{$obj->price}}
					{!!$obj->body!!}
					<div class="row">
					
					</div>
					
            </div>
        </div>
    </div>
</div>
@endsection
