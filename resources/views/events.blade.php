@extends('layouts.app')
@section('content')

    <div class="d-flex justify-content-center">
        <img src="/images/banner.jpg" alt="" class="img-fluid">
    </div>

    <div class="container">
        <h1 class="text-center">Calendar of Events</h1>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <table class="table">
                    <tbody>
                    <tr>
                        <th>June 5</th>
                        <td>Last Day of Classes</td>
                    </tr>
                    <tr>
                        <th>June 7-11</th>
                        <td>Tentative Dress Rehearsal & Recitals</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>


@endsection
