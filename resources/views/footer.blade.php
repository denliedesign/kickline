<div class="bg-white">
    <div class="container">
        <div id="next-steps-copy" class="row row-cols-1 row-cols-sm-1 row-cols-md-3 row-cols-lg-3 d-flex justify-content-center bg-white pt-5 pb-3">
            <div class="next-step mt-3 mt-md-0 shadow">
                <p class="txt-red">Ready To Leap In?</p>
                <a href="https://app.thestudiodirector.com/kicklinedancecenter/portal.sd?page=Login" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-red btn-family">&#10097; Enroll today!</div></a>
            </div>
            <div class="next-step mt-3 mt-md-0 shadow">
                <p class="txt-blue">Want To Give It A Try?</p>
                <a href="https://webforms.pipedrive.com/f/1FR1zjMCQ3R9Ok1y4OLDL0FKeJSyUNNOCIkAjk2gxlII9jWNxFIJZ3NFe3Y6sl0HN" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-blue btn-family">&#10097; Schedule A Trial!</div></a>
            </div>
            <div class="next-step mt-3 mt-md-0 shadow">
                <p class="txt-grey">Still Have Questions?</p>
                <a href="#footer" class="btn-opacity"><div class="shadow btn btn-lg btn-grey btn-family">&#10097; Contact Us!</div></a>
            </div>
        </div>
    </div>
</div>
<div class="bg-white pb-5">
    <div class="container" id="footer">
        <div class="pt-5">
            <div class="row m-0 p-0">
                <div class="col-sm-4 mt-3">
                    <p class="lead">CONTACT</p>
                    <ul class="list-group">
                        <li class="list-group-item px-0 border-0">
                            <ion-icon name="navigate"></ion-icon>
                            531 Georgetown Rd, Lawrence, PA 15055
                        </li>
                        <li class="list-group-item px-0 border-0">
                            <ion-icon name="gift"></ion-icon>
                            118 Scenic Ridge Dr, Venetia, PA 15367
                        </li>
                        <li class="list-group-item px-0 border-0">
                            <ion-icon name="call"></ion-icon>
                            724-941-9839
                        </li>
                        <li class="list-group-item px-0 border-0">
                            <ion-icon name="mail"></ion-icon>
                            <a href="mailto:cindy@kicklinedancecenter.com" style="color: black; text-decoration: none;">cindy@kicklinedancecenter.com</a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-2 mt-3">
                    <p class="lead">SOCIAL</p>
                    <div class="d-flex d-inline">
                        <div class="d-inline">
                            <a class="nav-link text-dark p-0" href="https://www.facebook.com/kicklinedancecenter" target="_blank">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </div>
                        <div class="d-inline">
                            <a class="nav-link text-dark p-0 mx-3" href="https://www.instagram.com/kicklinedancecenter/" target="_blank">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </div>
                        <div class="d-inline">
                            <a class="nav-link text-dark p-0" href="https://www.youtube.com/user/KicklineDanceCenter" target="_blank">
                                <ion-icon name="logo-youtube"></ion-icon>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 mt-3 ml-4">
                    <div style="width: 100%"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=300&amp;hl=en&amp;q=531%20Georgetown%20Rd,%20Lawrence,%20PA%2015055+(Kickline%20Dance%20Center)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div id="bottom" class="text-white-50 text-center pt-3" style="background: black;">
    © 2022 Kickline Dance Center
</div>
<p id="credit" class="text-center m-0" style="background: black;">
    <a class="text-decoration-none" href="https://denliedesign.com/" target="_blank"><small class="text-muted">Dance Website Design by Denlie Design</small></a>
</p>
<div style="background: black;" class="text-center pb-3">
    @guest
        <small>
            <a class="text-decoration-none text-muted" href="{{ route('login') }}">{{ __('Admin') }}</a>
        </small>
    @else
        <small class="dropdown">
            <a class="text-decoration-none text-muted" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </small>
    @endguest
</div>
