<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto|Source+Sans+Pro:100" rel="stylesheet">

        <link href="css/app.css" rel="stylesheet" /> 

     
    </head>
    <body>
        <div class="flex-left position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

           
                <div class="main-left full-height">
                    <div class="boalt-logo-main">
                        <img src="assets/img/BoaltLogo.png" style="width:100%;"/>
                    </div>
                    <div style="float:left; margin-top:446px;">
                        <div class="main-right-line"></div>
                        <div class="main-right-text">
                            DIGITAL EXPERIENCE CONSULTANCY
                        </div>
                    </div>  
                </div>
                <div class="main-right full-height">
                    <div class="main-right-image full-height" >
                        <div class="full-height" style="background-image: url('assets/img/mainLeftBG.png'); width: 100%; background-size: 100% 100%;">
                            <div class="main-left-text">
                                <div>Stirring Innovation.</div>
                                <div>Creating Experiences.</div>
                                <div>Maximizing Opportunity.</div>
                                <div>Building Value.</div>
                            </div>
                            <div class="circle-link">
                            
                                <div style="width:12px; height:33px; position: relative;top: 45px; left: 22px;">
                                    <a href="{{ url('/connect') }}"><img src="assets/img/circlePlug.png" /></a>
                                </div>
                                <svg height="56" width="56">
                                    <circle cx="28" cy="28" r="26"  fill="#E11331" />
                                </svg>
                            </div>      
                        </div>
                    </div>
                </div>

            </div>

            <div class="footer-rectangle">
                <div class="footer-logo">
                    <div style="background-image: url('assets/img/client_logos/logo_EXPERIENCE.png'); margin:auto auto; height: 25px; width:76px; background-repeat: no-repeat;"></div>
                </div>
                <div class="footer-logo">
                    <div style="background-image: url('assets/img/client_logos/logo_SONY.png'); margin:auto auto; height: 25px; width:104px; background-repeat: no-repeat;"></div>
                </div>
                <div class="footer-logo">
                    <div style="background-image: url('assets/img/client_logos/logo_WESTIN.png'); margin:auto auto; height: 31px; width:97px; background-repeat: no-repeat;"></div>
                </div>
                <div class="footer-logo">
                    <div style="background-image: url('assets/img/client_logos/logo_BACARDI.png'); margin:auto auto; height: 48px; width:82px; background-repeat: no-repeat;"></div>
                </div>
                <div class="footer-logo">
                    <div style="background-image: url('assets/img/client_logos/logo_FORD.png'); margin:auto auto; height: 43px; width:100px; background-repeat: no-repeat;"></div>
                </div>
                <div class="footer-logo">
                    <div style="background-image: url('assets/img/client_logos/logo_STERICYCLE.png'); margin:auto auto; height: 25px; width:118px; background-repeat: no-repeat; "></div>
                </div>
                <div class="footer-logo">
                    <div style="background-image: url('assets/img/client_logos/logo_RADISSON.png'); margin:auto auto; height: 62px; width:97px; background-repeat: no-repeat;"></div>
                </div>
                <div class="footer-logo">
                    <div style="background-image: url('assets/img/client_logos/logo_CVS.png'); margin:auto auto; height: 17px; width:128px; background-repeat: no-repeat;"></div>
                </div>
            </div>
    </body>
</html>
