@extends('layouts.app')
@section('content')

    <div class="d-flex justify-content-center">
        <img src="/images/banner.jpg" alt="" class="img-fluid">
    </div>

    <div class="container">
        <h1 class="text-center">Download Recital Music</h1>

            {{ $code = "" }}

            @if(isset($_POST['code']))
                <div style="display: none;">
                    {{ $code = $_POST['code'] }}
                </div>
            @endif

            @if($code == 'music2025')
                @include('connected')
            @else
                <div style="height: 100%;" class="d-flex align-items-center justify-content-center text-center">
                    <form method="post" action="recital-music" style="border: 1px solid silver; border-radius: 10px;" class="p-5">
                        <div class="form-inline">
                            <div class="form-group">
                                <label for="code">Password</label>
                                <input type="password" class="form-control my-2" id="code" name="code" aria-describedby="code">
                            </div>
                            @csrf
                            <button type="submit" class="shadow btn btn-red btn-family">Submit</button>
                        </div>
                    </form>
                </div>
            @endif

        </div>
    </div>

@endsection
