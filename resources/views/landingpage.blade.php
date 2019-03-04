<!doctype html>
<html>
    <head>
        <title>
            InFund - Where a start happens
        </title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
    </head>
    <body>
        <nav class="infund-nav-inlanding infund-nav">
            <a href="/" class="infund-nav-logo">
                <img src="{{ URL::asset('img/infund-header-logo.png') }}" height="42">
            </a>
            <div class="infund-nav-item-container">
                <div>Get the app</div>
                <a href="/signin">Sign In</a>
                <a href="/signup">Sign Up</a>
            </div>
        </nav>

        <header class="infund-landing">
            <div class="infund-nav infund-landing-nav">
                <a href="/" class="infund-nav-logo">
                    <img src="{{ URL::asset('img/infund-header-logo.png') }}" height="42">
                </a>
                <div class="infund-nav-item-container">
                    <div>Get the app</div>
                    <a href="/signin">Sign In</a>
                    <a href="/signup">Sign Up</a>
                </div>
            </div>
            <div class="infund-landing-desc">
                <div class="infund-logo-text">
                    InFund
                </div>
                <div style="text-align: center">
                        Where a Start Happens
                </div>
                <div class="infund-button">
                    Start Now
                </div>
            </div>
            <div class="infund-landing-background"></div>
        </header>

        <main id="mainExplanation" class="infund-landing-page-desc">
            <div>
                <div>
                    <h1>
                        How it Works
                    </h1>
                    <div>
                        <div class="infund-how-to-card">
                            <h4 style="text-align: center; margin-top: 12px; font-size: 14pt;">Register</h4>
                            <div style="text-align: center; margin-top: 20px; margin-bottom: 40px;">
                                <i class="fas fa-pencil-alt fa-7x"></i>
                            </div>
                            <hr>
                            <span style="display: block; margin-top: 20px;">
                                Before you use our app, please register to get access to our features
                            </span>
                        </div>
                        <div class="infund-how-to-card">
                            <h4 style="text-align: center; margin-top: 12px; font-size: 14pt;">Upload Work</h4>
                            <div style="text-align: center; margin-top: 20px; margin-bottom: 40px;">
                                <i class="fas fa-file-upload fa-7x"></i>
                            </div>
                            <hr>
                            <span style="display: block; margin-top: 20px;">
                                Upload all of your best work in your Create page, and watch the magic happen!
                            </span>
                        </div>
                        <div class="infund-how-to-card">
                            <h4 style="text-align: center; margin-top: 12px; font-size: 14pt;">Customize</h4>
                            <div style="text-align: center; margin-top: 20px; margin-bottom: 40px;">
                                <i class="fas fa-paint-brush fa-7x"></i>
                            </div>
                            <hr>
                            <span style="display: block; margin-top: 20px;">
                                After uploading your portfolio, add some little touches to your profile to make it more you!
                            </span>
                        </div>
                    </div>
                </div>
                <div>
                    <h1>
                        Features
                    </h1>
                    <div>
                        <div class="infund-how-to-card">
                            <h4 style="text-align: center; margin-top: 12px; font-size: 14pt;">Register</h4>
                            <div style="text-align: center; margin-top: 20px; margin-bottom: 40px;">
                                <i class="fas fa-pencil-alt fa-7x"></i>
                            </div>
                            <hr>
                            <span style="display: block; margin-top: 20px;">
                                Before you use our app, please register to get access to our features
                            </span>
                        </div>
                        <div class="infund-how-to-card">
                            <h4 style="text-align: center; margin-top: 12px; font-size: 14pt;">Upload Work</h4>
                            <div style="text-align: center; margin-top: 20px; margin-bottom: 40px;">
                                <i class="fas fa-file-upload fa-7x"></i>
                            </div>
                            <hr>
                            <span style="display: block; margin-top: 20px;">
                                Upload all of your best work in your Create page, and watch the magic happen!
                            </span>
                        </div>
                        <div class="infund-how-to-card">
                            <h4 style="text-align: center; margin-top: 12px; font-size: 14pt;">Customize</h4>
                            <div style="text-align: center; margin-top: 20px; margin-bottom: 40px;">
                                <i class="fas fa-paint-brush fa-7x"></i>
                            </div>
                            <hr>
                            <span style="display: block; margin-top: 20px;">
                                After uploading your portfolio, add some little touches to your profile to make it more you!
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer style="display: flex; align-items: center;">
            <div style="margin: auto;">
                <div style="text-align: center">
                    <i>The biggest failure you can do is not trying</i>
                </div>
                <div style="text-align: center">
                    <input type="text" placeholder="Enter email.." style="width: 250px; height: 32px; padding-left: 10px; border-radius: 10px; border: 0; outline: none;">
                </div>
                <div class="infund-button">
                    Start Now
                </div>
            </div>
        </footer>
    </body>

    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"></script>
    <script>
        var bindEvent = true;
        reachedExplanation();
        function reachedTop(){
            $(document).bind('scroll', function() {
                if($(this).scrollTop()<$('#mainExplanation').position().top && bindEvent === false){
                    reachedExplanation();
                    bindEvent = true;
                    $('nav.infund-nav').css("transform", "translateY(-57px)");
                }
            });
        }
        function reachedExplanation(){
            $(document).bind('scroll', function() {
                if($(this).scrollTop()>=$('#mainExplanation').position().top && bindEvent === true){
                    $(document).unbind();
                    bindEvent = false;
                    $('nav.infund-nav').css("transform", "translateY(0px)");
                    reachedTop();
                }
            });
        }
    </script>
</html>