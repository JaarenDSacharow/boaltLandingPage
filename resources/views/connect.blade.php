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
        <div class="flex-column position-ref">
            <div class="boalt-logo-connect">
                <img src="assets/img/BoaltLogo.png"/>
            </div>
                <div style="width:12px; height:33px; position: relative;top: 65px; right: 46px;">
                    <img src="assets/img/circlePlugLarge.png" />
                </div>
              
                  <div style="height:800px; width:100%;"> 
                 
                    <svg height="865" width="1920">
                        <circle cx="950" cy="1225" r="1200"  fill="#E11331" />
                    </svg>
                    <div>
                     
        </div> 

        <div id="connect-form">
            <div style="width:580px; text-align:center;">
            <h1>Connect.</h1>
            </div>
            <form>
                <input type="text" size="81" placeholder="Full Name"/>
                <input type="text" size="81" placeholder="Email Address"/>
                <input type="text" size="81" placeholder="Company Name"/>
                <textarea id="styled" placeholder="A few words about your company and what it is you’re trying to accomplish."></textarea>
            </form>
            <div style="width:580px; font-size:13px; opacity:.5;">
            By filling in the form, you agree to our Privacy Policy, including our cookie use.
            </div>
            
        </div>

    </body>
</html>


