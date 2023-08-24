@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="text-end mt-5 mb-3">
            <a href="{{route('admin.works.index')}}" class="btn back-btn">Back</a>
        </div>
        <div class="col-6 text-white">

            <form action="{{route('admin.works.update', $site->id)}}" method="POST" enctype="multipart/form-data">
                
                @csrf
                @method('PUT')
                <div class="form-group my-5 d-flex flex-column ">
                    <div class="col-12 text-center my-5">
                        <img width="450px" src="{{asset('storage/'.$site->image)}}" alt="">
                    </div>
                    <label for="" class="control-label mb-3">
                        Image URL:
                    </label>
                    <input class="ps-3 form-control" type="file" id="image" name="image" value="{{$site->image}}">
                </div>
                <div class="form-group my-5 d-flex flex-column ">
                    <label for="" class="control-label mb-3">
                        Title:
                    </label>
                    <input class="ps-3 form-control" type="text" id="title" name="title" value="{{$site->title}}">
                </div>
                <div class="form-group my-5 d-flex flex-column ">
                    <label for="" class="control-label mb-3">
                       Frontend:
                    </label>
                    <input class="ps-3 form-control" type="text" id="front_ender" name="front_ender" value="{{$site->front_ender}}">
                </div>
                <div class="form-group my-5 d-flex flex-column ">
                    <label for="" class="control-label mb-3">
                        Backend:
                    </label>
                    <input class="ps-3 form-control" type="text" id="back_ender" name="back_ender" value="{{$site->back_ender}}">
                </div>
                <div class="form-group my-5 d-flex flex-column ">
                    <label for="" class="control-label mb-3">
                        User Interface:
                    </label>
                    <input class="ps-3 form-control" type="text" id="ui" name="ui" value="{{$site->ui}}">
                </div>
                <div class="form-group my-5 d-flex flex-column ">
                    <label for="" class="control-label mb-3">
                       User Experience:
                    </label>
                    <input class="ps-3 form-control" type="text" id="ux" name="ux" value="{{$site->ux}}">
                </div>
                <div class="form-group my-5 d-flex flex-column ">
                    <label for="" class="control-label mb-3">
                        Illustrator:
                    </label>
                    <input class="ps-3 form-control" type="text" id="illustrator" name="illustrator" value="{{$site->illustrator}}">
                </div>
                <div class="form-group my-5 d-flex flex-column ">
                    <label for="" class="control-label mb-3">
                       Description:
                    </label>
                    <textarea class="ps-3 form-control" type="text" id="description" name="description">{{$site->description}}</textarea>
                </div>
                <div class="form-group my-5 d-flex flex-column ">
                    <label for="" class="control-label mb-3">
                        Link:
                    </label>
                    <input class="ps-3 form-control" type="text" id="link" name="link" value="{{$site->link}}">
                </div>
                <div class="col-12 d-flex justify-content-center py-4">
                    <button type="submit" class="btn btn-md new-btn">Confirm Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection