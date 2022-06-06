@extends('layouts.app')
@section('content')

    <div class="d-flex justify-content-center">
        <img src="/images/banner.jpg" alt="" class="img-fluid">
    </div>

    <div class="container">
        <h1 class="text-center">Classes</h1>
        <div class="d-flex justify-content-center mb-4">
            <div class="text-center">
                <a href="/images/schedule-22-23.pdf" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family">2022-2023 Fall Schedule</div></a>
{{--                <p><small class="text-muted text-center">coming soon</small></p>--}}
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5">
                <img src="/images/classes-page-1.jpeg" alt="dancer in costume" class="img-fluid shadow rounded">
            </div>
            <div class="col-sm-7 d-flex align-items-center" style="font-size: 1.33em;">
                <div>
                    <p>
                        Kickline Dance Center offers a wide range of dance disciplines with amazing benefits including:
                    </p>
                    <ul>
                        <li>Getting kids in shape</li>
                        <li>Boosting their self-confidence</li>
                        <li>Building stamina</li>
                        <li>Encouraging creativity, imagination and self-awareness</li>
                        <li>Learning teamwork</li>
                    </ul>
                    <p>
                        We provide children of all ages with a strong foundation in dance and movement. Some of the concepts taught include; basic motor skills, opposites and directions, musicality, stretching, and balance.
                        <br><br>
                        Through participation in these classes, students also learn basics of classroom behavior and manners including taking turns, following another dancer or leading the way, waiting patiently, working with others, and having a positive attitude.
                    </p>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col-sm-7 d-flex align-items-center" style="font-size: 1.33em;">
                <div>
                    <p>
                        Training young children in concepts of movement sequencing, patterning, and spatial relationships lays a strong foundation for later development of reading, mathematics, and other academic skills.
                        <br><br>
                        To ensure the best possible dance experience we:
                    </p>
                    <ul>
                        <li>Limit class sizes.</li>
                        <li>Level and evaluate each student based on age and ability to ensure they have a great dance experience.</li>
                        <li>Ensure music, choreography, and costumes are always age appropriate and tasteful.</li>
                    </ul>
                    <p>
                        At all times, dancing at Kickline remains fun and enjoyable for each child! We wish to instill a love of dance that lasts a lifetime.
                    </p>
                </div>
            </div>
            <div class="col-sm-5">
                <img src="/images/classes-page-2.jpeg" alt="dancer in costume" class="img-fluid shadow rounded">
            </div>
        </div>
        <section id="classes">
            <div class="row">
{{--                <div class="col-sm">--}}
{{--                    <video width="100%" height="auto" controls class="shadow rounded">--}}
{{--                        <source src="/images/classes-1.mp4" type="video/mp4">--}}
{{--                    </video>--}}
{{--                </div>--}}
                <div class="col-sm d-flex align-items-center">
                    <div>
                        <div class="heading-1">Pre-School/Elementary</div>
                        <p class="bigger-font">
                            Learn a solid foundation in dance and movement including basic motor skills, opposites and directions, musicality, stretching, and balance.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row my-3">
{{--                <div class="col-sm">--}}
{{--                    <video width="100%" height="auto" controls class="shadow rounded">--}}
{{--                        <source src="/images/classes-2.mp4" type="video/mp4">--}}
{{--                    </video>--}}
{{--                </div>--}}
                <div class="col-sm d-flex align-items-center">
                    <div>
                        <div class="heading-1">Tap</div>
                        <p class="bigger-font">
                            Kids learn the fundamentals of tap dance combining rhythm and the sounds of tap shoes striking the floor as a form of percussion.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row my-3">
{{--                <div class="col-sm">--}}
{{--                    <video width="100%" height="auto" controls class="shadow rounded">--}}
{{--                        <source src="/images/classes-3.mp4" type="video/mp4">--}}
{{--                    </video>--}}
{{--                </div>--}}
                <div class="col-sm d-flex align-items-center">
                    <div>
                        <div class="heading-1">Jazz</div>
                        <p class="bigger-font">
                            Originating in New Orleans in the late 19th and early 20th centuries, jazz has become recognized as a major form of musical expression.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row my-3">
{{--                <div class="col-sm">--}}
{{--                    <video width="100%" height="auto" controls class="shadow rounded">--}}
{{--                        <source src="/images/classes-4.mp4" type="video/mp4">--}}
{{--                    </video>--}}
{{--                </div>--}}
                <div class="col-sm d-flex align-items-center">
                    <div>
                        <div class="heading-1">Ballet/Pointe</div>
                        <p class="bigger-font">
                            Ballet is an artistic dance form performed to music using precise and highly formalized set steps and gestures originating in Renaissance Italy. It is characterized by light, graceful fluid movements and the use of pointe shoes.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row my-3">
{{--                <div class="col-sm">--}}
{{--                    <video width="100%" height="auto" controls class="shadow rounded">--}}
{{--                        <source src="/images/classes-5.mp4" type="video/mp4">--}}
{{--                    </video>--}}
{{--                </div>--}}
                <div class="col-sm d-flex align-items-center">
                    <div>
                        <div class="heading-1">Musical Theater</div>
                        <p class="bigger-font">
                            Children learn this genre of drama in which singing and dancing play an essential part. The movement and technical aspects of dancing enhances the emotional content of a musical
                        </p>
                    </div>
                </div>
            </div>
            <div class="row my-3">
{{--                <div class="col-sm">--}}
{{--                    <video width="100%" height="auto" controls class="shadow rounded">--}}
{{--                        <source src="/images/classes-6.mp4" type="video/mp4">--}}
{{--                    </video>--}}
{{--                </div>--}}
                <div class="col-sm d-flex align-items-center">
                    <div>
                        <div class="heading-1">Hip-Hop</div>
                        <p class="bigger-font">
                            Hip-hop is a street dance style of dance primarily performed to hip-hop music and includes a range of styles created in the 1970s and made popular by dance crews in the United States
                        </p>
                    </div>
                </div>
            </div>
            <div class="row my-3">
{{--                <div class="col-sm">--}}
{{--                    <video width="100%" height="auto" controls class="shadow rounded">--}}
{{--                        <source src="/images/classes-7.mp4" type="video/mp4">--}}
{{--                    </video>--}}
{{--                </div>--}}
                <div class="col-sm d-flex align-items-center">
                    <div>
                        <div class="heading-1">Acro</div>
                        <p class="bigger-font">
                            Acro dance is a style of dance that combines classical dance technique with precision acrobatic elements. It is defined by its athletic character & unique choreography that blends dance and acrobatics.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row my-3">
{{--                <div class="col-sm">--}}
{{--                    <video width="100%" height="auto" controls class="shadow rounded">--}}
{{--                        <source src="/images/classes-8.mp4" type="video/mp4">--}}
{{--                    </video>--}}
{{--                </div>--}}
                <div class="col-sm d-flex align-items-center">
                    <div>
                        <div class="heading-1">Modern</div>
                        <p class="bigger-font">
                            This is a free, expressive style of dancing that started in the early 20th century as a “rebellion” against classical ballet.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row my-3">
{{--                <div class="col-sm">--}}
{{--                    <video width="100%" height="auto" controls class="shadow rounded">--}}
{{--                        <source src="/images/classes-9.mp4" type="video/mp4">--}}
{{--                    </video>--}}
{{--                </div>--}}
                <div class="col-sm d-flex align-items-center">
                    <div>
                        <div class="heading-1">Lyrical</div>
                        <p class="bigger-font">
                            Lyrical dance is a style of dance created from the fusion of ballet with jazz and contemporary dance techniques and performed to music with lyrics to inspire movements to express emotions.
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </div>


@endsection
