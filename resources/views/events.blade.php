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
                        <th>September 6, 2022</th>
                        <td>First Day Of Fall Classes</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>


@endsection
