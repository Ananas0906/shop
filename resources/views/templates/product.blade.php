<div class="col-lg-4 col-md-6 mb-4">
						<div class="card h-100">
					<a href="{{asset ('product/'.$one->id)}}"><img class="card-img-top" src="{{asset('uploads/'.$one->picture)}}"width="100%" alt=""></a>
					<div class="card-body">
					  <h4 class="card-title">
						<a href="{{asset ('product/'.$one->id)}}">{{$one->name}}</a>
					  </h4>
					  <h5>${{$one->price}}</h5>
					  <p class="card-text">{!!$one->body!!}</p>
					
					
					</div>
				  </div>
				  </div>