@extends('layout')

@section('content')

    <h1>customer</h1>
    <ul>

        <!--  same with below  --><?php
        //        foreach ($customers as $customer){
        //            echo '<h2>' . $customer . '</h2>';
        //        }
        //    ?>

        @foreach ($customers as $customer)
            <li>{{ $customer }}</li>
        @endforeach

    </ul>

@endsection

