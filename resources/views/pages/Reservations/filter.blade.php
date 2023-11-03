@extends('layouts.dashboard')

@section('content')
<div class="card p-3">
    <div class="card-header mb-4">Input valid details.</div>

    <div class="row">
        <div class="col-md-6 d-flex justify-content-center align-items-center mb-2 flex-column">
            <h2> Add New Room </h2>
            <form action="{{route('Admin.reserve.create')}}" method="POST">
                @csrf

                <div class="form-group mb-2">
                    <label for="issued_date">Checking Date</label>
                    <input type="date" class="form-control" id="issued_date" name="checkin_date" required>
                </div>
                <div class="form-group mb-2">
                    <label for="issued_date">Checkout Date</label>
                    <input type="date" class="form-control" id="issued_date" name="checkout_date" required>
                </div>
                <div class="form-group mb-2">
                    <label for="title">Room Count</label>
                    <input type="text" class="form-control" id="number" name="number" required>
                </div>

                <div class="form-group mb-2">
                    <label for="Room_type">Room Type</label>
                    <select class="form-control" id="roomtype_id" name="roomtype_id" required>
                        @foreach ($roomtypes as $roomtype)
                            <option value="{{ $roomtype->id }}">{{ $roomtype->name }}</option>
                        @endforeach
                    </select>
                </div>





                <button type="submit" class="btn btn-primary">Filter Rooms </button>
            </form>
        </div>

        <div class="col-md-6">
            <img src="{{ asset('images/createbg.jpg') }}" alt="Background Image" class="img-fluid" style="height: 100%;max-height:500px">
        </div>
    </div>
</div>
@endsection
