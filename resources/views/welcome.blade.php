@extends('layouts.app')
@section('content')

    <div class="gradient-splash">
        <div id="primary-bg">
{{--            <div class="color-filter-black"></div>--}}
            <h2 id="primary-txt-mobile" class="d-md-none">More Than Just Great Dancing!</h2>
            <h2 id="primary-txt" class="d-none d-md-block">More Than Just Great Dancing!</h2>
            {{--        <a href="https://kenosha-academy-performing-arts.studiosuite.io/m/website-studio-info-kit" target="_blank" class="d-md-none btn-opacity"><div id="button-mobile" class="shadow btn btn-lg btn-kapa-blue primary-btn-pos btn-family">&#10097; Download Our Studio Info Kit</div></a>--}}
            {{--        <a href="https://kenosha-academy-performing-arts.studiosuite.io/m/website-studio-info-kit" target="_blank" class="d-none d-md-block btn-opacity"><div id="button-tablet" class="shadow btn btn-lg btn-kapa-blue primary-btn-pos btn-family">&#10097; Download Our Studio Info Kit</div></a>--}}
        </div>

        {{--    @include('trial-modal')--}}

        <div class="container">
            <div id="next-steps" style="font-size: 0.85em;">
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 d-flex justify-content-center">
                    <div class="next-step mt-3 mt-md-0 shadow">
                        <p class="txt-red">Register Online</p>
                        <a href="https://app.thestudiodirector.com/kicklinedancecenter/portal.sd" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family" style="font-size: 0.85em;">Use Our Online Portal</div></a>
                    </div>
                    <div class="next-step mt-3 mt-md-0 shadow">
                        <p class="txt-blue">Easily Pre-Register</p>
                        <a href="https://forms.gle/rV5fQVnmuFuaWuQ49" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-blue btn-family" style="font-size: 0.85em;">We’ll Call To Complete The Process</div></a>
                        {{--                    <div>--}}
                        {{--                        <button type="button" class="shadow btn btn-lg btn-blue btn-family  style="font-size: 0.85em;" btn-opacity" data-bs-toggle="modal" data-bs-target="#exampleModal">Schedule A Trial!</button>--}}
                        {{--                    </div>--}}
                    </div>
                    <div class="next-step mt-3 mt-md-0 shadow">
                        <p class="txt-grey">Visit & Register In Person</p>
                        <a href="/visit-us" class="btn-opacity"><div class="shadow btn btn-lg btn-grey btn-family" style="font-size: 0.85em;">Take A Tour & See Our Facility</div></a>
                    </div>
                </div>
            </div>
        </div>

        <div id="vision" class="text-center text-white">
            <div class="container">
                <h2>We Have Built a Reputation for Excellence in Dance Instruction</h2>
                <p>
                    From your child’s first class to their graduation performance, KDC has a class for everyone! We specialize in beginners of all ages and offer training through pre-professional levels. But, KDC is More Than Just Great Dancing®! Our dancers go beyond technique to develop important life skills, learning to be respectful, confident and conscientious young people who share their gifts and talents with the community.
                </p>
            </div>
        </div>
    </div>

    <div class="bg-white pb-5" id="class-categories">
        <div class="container pb-5">
            <h2 class="text-center pt-5">Dance Classes</h2>
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
                <div class="col-sm mt-4">
                    <img src="/images/classes-preschool.gif" alt="dancers" class="img-fluid shadow rounded" style="max-height: 752px; object-fit: cover; object-position: -20% 0; width: 100%;">
                    <a href="/classes" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family mt-2" style="width: 100%;">Pre-School/Elementary</div></a>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/classes-tap.gif" alt="dancers" class="img-fluid shadow rounded" style="max-height: 752px; object-fit: cover; object-position: -20% 0; width: 100%;">
                    <a href="/classes" class="btn-opacity"><div class="shadow btn btn-lg btn-blue btn-family mt-2" style="width: 100%;">Tap</div></a>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/classes-jazz.gif" alt="dancers" class="img-fluid shadow rounded" style="max-height: 752px; object-fit: cover; object-position: -20% 0; width: 100%;">
                    <a href="/classes" class="btn-opacity"><div class="shadow btn btn-lg btn-grey btn-family mt-2" style="width: 100%;">Jazz</div></a>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/classes-ballet.gif" alt="dancers" class="img-fluid shadow rounded" style="max-height: 752px; object-fit: cover; object-position: -20% 0; width: 100%;">
                    <a href="/classes" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family mt-2" style="width: 100%;">Ballet/Pointe</div></a>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/classes-musical-theater.gif" alt="dancers" class="img-fluid shadow rounded" style="max-height: 752px; object-fit: cover; object-position: -20% 0; width: 100%;">
                    <a href="/classes" class="btn-opacity"><div class="shadow btn btn-lg btn-blue btn-family mt-2" style="width: 100%;">Musical Theater</div></a>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/classes-hip-hop.gif" alt="dancers" class="img-fluid shadow rounded" style="max-height: 752px; object-fit: cover; object-position: -20% 0; width: 100%;">
                    <a href="/classes" class="btn-opacity"><div class="shadow btn btn-lg btn-grey btn-family mt-2" style="width: 100%;">Hip-Hop</div></a>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/classes-acro.gif" alt="dancers" class="img-fluid shadow rounded" style="max-height: 752px; object-fit: cover; object-position: -20% 0; width: 100%;">
                    <a href="/classes" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family mt-2" style="width: 100%;">Acro</div></a>
                </div>
                <div class="col-sm mt-4">
                    <img src="/images/classes-modern.gif" alt="dancers" class="img-fluid shadow rounded" style="max-height: 752px; object-fit: cover; object-position: -20% 0; width: 100%;">
                    <a href="/classes" class="btn-opacity"><div class="shadow btn btn-lg btn-blue btn-family mt-2" style="width: 100%;">Modern/Lyrical</div></a>
                </div>
            </div>
        </div>
    </div>

    <div id="checklist-bg">
        <div class="color-filter-black"></div>
        <h2 class="secondary-txt d-none d-md-block">We <ion-icon name="heart"></ion-icon> <span class="txt-red">KDC</span>...</h2>
        <div class="row secondary-txt-pos text-white text-center">
            <div class="col-sm">
                <p class="my-0 text-capitalize">
                    <ion-icon name="heart"></ion-icon> Family First
                    <br><ion-icon name="heart"></ion-icon> Positive Role Models
                    <br><ion-icon name="heart"></ion-icon> Age appropriate Choreography & Costumes
                </p>
            </div>
            <div class="col-sm">
                <p class="my-0">
                    <ion-icon name="heart"></ion-icon> Excellence
                    <br><ion-icon name="heart"></ion-icon> Building Self Confidence
                    <br><ion-icon name="heart"></ion-icon> Encourage Creativity
                    <br><ion-icon name="heart"></ion-icon> YPAD Certified Safer Studio
                </p>
            </div>
            <div class="col-sm">
                <p class="my-0">
                    <ion-icon name="heart"></ion-icon> Exceed Expectations
                    <br><ion-icon name="heart"></ion-icon> Dance Lessons Teach Life Lessons
                    <br><ion-icon name="heart"></ion-icon> Giving Back to Our Community
                    <br><ion-icon name="heart"></ion-icon> Background Checked Instructors
                </p>
            </div>
        </div>
    </div>

    <div class="bg-white py-5">
        <div class="container">
            <div class="row my-5">
                <div class="col-sm d-flex align-items-center justify-content-center">
                    <div class="">
{{--                        <img src="/images/logo-tutus-and-tap.png" alt="tutu and tap logo" class="img-fluid">--}}
                        <img src="/images/tutus-and-tap.jpeg" alt="dancer in tutu" class="img-fluid rounded shadow">
                    </div>
                </div>
                <div class="col-sm d-flex align-items-center">
                    <div>
{{--                        <div class="d-flex justify-content-center mb-0">--}}
{{--                            <img src="/images/tutus-and-tap.jpeg" alt="dancer in tutu" class="img-fluid rounded shadow">--}}
{{--                        </div>--}}
                        <p class="lead text-center"><span class="px-3 py-2" style="border: 1px solid #363839;">Featured Program</span></p>
                        <h1 class="text-center txt-red">Tutus & Tap <span style="color: #363839; font-size: 0.5em;"><em>ages 3-6</em></span></h1>
                        <p class="mb-4 text-center" style="font-size: 1.33em;">
                            Imagine your child making friends, learning new skills and twirling to music!  Learning to dance is so much fun!  Parents will be so proud as their child develops creativity, imagination, self-confidence, and teamwork! Dancers can’t wait to showcase their skills in our amazing and professional recitals! Dancing at Kickline is fun and enjoyable for each child!
                            {{--                            Spin Your Child’s Imagination Into Dance with our special Tutu’s and Tap combo classes for Ages 3-6--}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="mtjgd-bg" class="text-white">
        <div class="color-filter-black"></div>
        <h2 class="secondary-txt">Dance Lessons Teach Life Lessons</h2>
        <div>
            <div class="row tertiary-txt-pos">
                <div class="col-sm my-4">
                    “We don’t teach kids to make great dancers, we teach dance to make great kids.”
                    <br>
                    <em>-Misty Lown</em>
                </div>
                <div class="col-sm">
                    <img src="/images/mtjgd-logo.png" alt="more than just great dancing logo" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div id="safer-youth" class="bg-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/safer-studio-logo.png" alt="safer studio logo" class="img-fluid" style="width: 100%; height: 100%; filter: invert(1);">
                    </div>
                    <h2 class="text-center">KDC is a Safer Studio™</h2>
                    <p>
                        KDC focuses on a hierarchy of measures to create a Safer Studio™ environment beginning with requiring students and staff who are ill to stay home, followed by frequent hand cleaning and good hygiene practices, amplified cleaning.
                    </p>
                </div>
                <div class="col-sm">
                    <div class="d-flex justify-content-center">
                        <img src="/images/ypad-badge.png" alt="ypad logo" class="img-fluid" style="max-height: 354.04px;">
                    </div>
                    <h2 class="text-center">KDC is Youth Protection Advocates in Dance®  Certified!</h2>
                    <p>
                        <span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Background checked teachers
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Safer Studio™ Policy
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Teacher training & proven curriculum
                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> A focus on safety & wellness for every student
{{--                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Secured facilities--}}
{{--                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Viewing windows--}}
{{--                        <br><span class="txt-pink"><ion-icon name="heart"></ion-icon></span> Social media safety practices--}}
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{--    @include('testimonials')--}}

    <div id="call-to-action" class="bg-white pt-5 pb-1">
        <div class="text-center pt-2">
            <h2 class="txt-kapa-blue">Be A Part Of Our <span class="txt-red">KDC</span> Family!</h2>
            {{--            <a href="https://app.thestudiodirector.com/mistysdance/portal.sd?page=Login" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-green btn-family">&#10097; Dance With Us Today!</div></a>--}}
        </div>
    </div>


@endsection
