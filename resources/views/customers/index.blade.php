@extends('layout')
@section('title')
    Customer List
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>customer</h1>
            <p><a href="customers/create">Add New</a></p>
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <h3>Active customers</h3>
            <ul>

                @foreach ($activeCustomers as $activeCustomer)
                    <li>{{ $activeCustomer->name}}<span class="text-muted">({{ $activeCustomer->company->name}})</span></li>
                @endforeach

            </ul>
        </div>

        <div class="col-6">
            <h3>Inactive Customers</h3>
        <ul>

            @foreach ($inactiveCustomers as $inactiveCustomer)
                <li>{{ $inactiveCustomer->name}}<span class="text-muted">({{ $inactiveCustomer->company->name}})</span></li>
            @endforeach

        </ul>
    </div>
    </div>

    <div class="=row">
        <div class="col-12">
            @foreach($companies as $company)
                <h3>{{ $company->$name }}</h3>

                <ul>
                    @foreach($companies->customers as $customer)
                        <li>{{ $customer->name }}</li>
                        @endforeach
                </ul>
            @endforeach
        </div>
    </div>




@endsection

