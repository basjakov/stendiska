@extends ('layouts.master')

  @section('content')
       <div class="container"> 
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"> 
          </div>
            @foreach($girls as $girl)
           <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10"> 
                            
              
             <img src="uploads/{{$girl->file}}" class="girls_img">
               
                      <ul>

                          <li class="name">{{$girl->name}}</li>
                          <li>{{$girl->lastname}}</li>
                          <li>{{$girl->age}}</li>
                          <li>{{$girl->height}}</li>
                      </ul>
             </div>
                 
                
                @endforeach
      </div>   
       </div>


@endsection

@section('footer')
   
@endsection