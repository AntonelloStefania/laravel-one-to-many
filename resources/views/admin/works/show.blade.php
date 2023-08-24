@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="text-end mt-5 mb-3">
            <a href="{{route('admin.works.index')}}" class="btn back-btn">Back</a>
        </div>
        <div class="col-12 my-5 text-white">
            <div class="text-center">
                <div class="my-5 text-white">
                    <h1 >{{$site->title}}</h1>
                </div>
                <div>
                    <img src="{{asset('storage/'.$site->image)}}" width="600px" alt="">
                </div>
                <div class="my-5">
                    <h5>Description:</h5>
                    <p>{{$site->description}}</p>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <h5>Development team:</h5>
                <ul>
                    <li>
                        <span class="fw-bold">frontend:</span> {{$site->front_ender}}
                    </li>
                    <li>
                        <span class="fw-bold"> backend:</span> {{$site->back_ender}}
                    </li>
                    <li>
                        <span class="fw-bold">user experience:</span> {{$site->ux}}
                    </li>
                    <li>
                        <span class="fw-bold"> user interface:</span> {{$site->ui}}
                    </li>
                    <li>
                        <span class="fw-bold">illustrator:</span> {{$site->illustrator}}
                    </li>
                </ul>
            </div>
            <div class="text-center">
              <span>Link to Project: <a href="#">{{$site->link}}</a></span>
            </div>
        </div>
        
    </div>
</div>


@endsection