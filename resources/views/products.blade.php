@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{$cat->name}}</div>

                <div class="card-body">
                    

					{!!$cat->body!!}
					<div class="row">
						@foreach ($cat->products()->get() as $one)
						@include('templates.product')
				  @endforeach
					</div>
					
            </div>
        </div>
    </div>
</div>
@endsection
