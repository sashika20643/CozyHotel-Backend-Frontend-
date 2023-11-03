@extends('layouts.dashboard')

@section('content')
<div class="container">
<h2 style="text-align:center;" class="mb-5">Dashboard</h2>

<!-- Add Book Button -->
<div class="w-100 text-right" style="text-align: right;">
    <a href="{{route('Admin.reserve.filter')}}" class="btn btn-primary mb-3">Add New Reservation </a>
</div>

<div class="container">
<!-- Display Books as Cards -->
<div class="row">
    {{-- {{@foreach ($rooms as $room)
        <div class="col-md-4 mb-4">
            <div class="card bookc">
                <div class="card-body">

                    <h5 class="card-title">{{ $room->number }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                    <p class="card-text">Price(rate per night): ${{ $room->price }}</p>
                    <p class="card-text">Maximum Guest Capacity: {{ $room->capacity }}</p>

                    <div class=" w-100 justify-content-center hover-effect pt-2 pb-2">
                        <a href="{{route('Admin.roomtype.edit',$room->id)}}" class="btn btn-warning me-2">Edit</a>
                        <form action="{{route('Admin.roomtype.delete',$room->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach }} --}}
</div>
</div>
</div>

@endsection


