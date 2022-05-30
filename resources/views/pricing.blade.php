@extends('layouts.app')
@section('content')

    <div class="d-flex justify-content-center">
        <img src="/images/banner.jpg" alt="" class="img-fluid">
    </div>

    <div class="container">
        <h1 class="text-center">Pricing</h1>
        <p class="text-center">Call for additional pricing beyond 5 hours per family</p>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Total Class Length <small style="font-weight: normal;">price per family</small></th>
                <th scope="col">Monthly Tuition</th>
            </tr>
            </thead>
            <tbody>
            <tr><td>.75-1hr</td><td>$75</td></tr>
            <tr><td>1.25hrs</td><td>$95</td></tr>
            <tr><td>1.5hrs</td><td>$105</td></tr>
            <tr><td>1.75hrs</td><td>$125</td></tr>
            <tr><td>2hrs</td><td>$140</td></tr>
            <tr><td>2.25hrs</td><td>$150</td></tr>
            <tr><td>2.5hrs</td><td>$160</td></tr>
            <tr><td>2.75hrs</td><td>$170</td></tr>
            <tr><td>3hrs</td><td>$180</td></tr>
            <tr><td>3.25hrs</td><td>$190</td></tr>
            <tr><td>3.5hrs</td><td>$200</td></tr>
            <tr><td>3.75hrs</td><td>$210</td></tr>
            <tr><td>4hrs</td><td>$220</td></tr>
            <tr><td>4.25hrs</td><td>$230</td></tr>
            <tr><td>4.5hrs</td><td>$240</td></tr>
            <tr><td>4.75hrs</td><td>$250</td></tr>
            <tr><td>5hrs</td><td>$260</td></tr>
            </tbody>
        </table>

    </div>


@endsection
