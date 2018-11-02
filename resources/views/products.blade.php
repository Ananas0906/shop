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
						<div class="col-lg-4 col-md-6 mb-4">
						<div class="card h-100">
					<a href="#"><img class="card-img-top" src="{{asset('uploads/'.$one->picture)}}"width="100%" alt=""></a>
					<div class="card-body">
					  <h4 class="card-title">
						<a href="#">{{$one->name}}</a>
					  </h4>
					  <h5>${{$one->price}}</h5>
					  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
					</div>
					<div class="card-footer">
					  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
					</div>
				  </div>
				  </div>
				  @endforeach
					</div>
					
            </div>
        </div>
    </div>
</div>
@endsection
