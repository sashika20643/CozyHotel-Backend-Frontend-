@extends('layouts.dashboard')

@section('content')
<div class="card p-3">
    <div class="card-header mb-4">Input valid details.</div>

    <div class="row">
        <div class="col-md-6 d-flex justify-content-center align-items-center mb-2 flex-column">
            <h2> Update Room Type</h2>
            <form action="{{route('Admin.roomtype.update',$roomtype->id )}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-2">
                    <label for="title">Name</label>
                    <input type="text" class="form-control" id="title" value="{{$roomtype->name}}" name="name" required>
                </div>

                <div class="form-group mb-2">
                    <label for="author">Maximum guest Capacity</label>
                    <input type="text" class="form-control" id="author" value="{{$roomtype->capacity}}"  name="capacity" required>
                </div>

                <div class="form-group mb-2">
                    <label for="price">Price(Rate per night)</label>
                    <input type="number" class="form-control" id="price" value="{{$roomtype->price}}"  name="price" step="0.01" required>
                </div>



                <button type="submit" class="btn btn-primary">Update Room type</button>
            </form>
        </div>

        <div class="col-md-6">
            <img src="{{ asset('images/createbg.jpg') }}" alt="Background Image" class="img-fluid" style="height: 100%;max-height:500px">
        </div>
    </div>
</div>
@endsection
