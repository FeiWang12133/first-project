@extends('layout')
@section('title')
    Customer List
@endsection

@section('content')

    <h1>customer</h1>

    <form action="customers" method="POST">
        @csrf

        <div class = "form-group" >
            <label for="name">Name</label>
            <label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control">
            </label>
            <div>{{ $errors->first('name') }}</div>
        </div>

        <div class = "form-group">
            <label for="email">Email</label>
            <label>
                <input type="text" name="email" value="{{ old('email') }}" class="form-control">
            </label>
            <div>{{ $errors->first('email') }}</div>
        </div>

        <div class="form-group">
            <label class="active">Status</label>
            <select name="active" id="active" class="form-control">
                <option value="" disabled>Select customer status</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">
            Add customer
        </button>

    </form>

    <div class="row">
        <div class="col-6">
            <h3>Active customers</h3>
            <ul>

                @foreach ($activeCustomers as $activeCustomer)
                    <li>{{ $activeCustomer->name}}<span class="text-muted">({{ $activeCustomer->email}})</span></li>
                @endforeach

            </ul>
        </div>

        <div class="col-6">
            <h3>Inactive Customers</h3>
        <ul>

            @foreach ($inactiveCustomers as $inactiveCustomer)
                <li>{{ $inactiveCustomer->name}}<span class="text-muted">({{ $inactiveCustomer->email}})</span></li>
            @endforeach

        </ul>
    </div>
    </div>



@endsection

