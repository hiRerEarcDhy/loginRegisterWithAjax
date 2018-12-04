<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration Form using jQuery Ajax and PHP MySQL</title>
        <!--This is a CDN link to bootstrap 4 CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <!--This is a CDN link to the jQuery Library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!--This is a link to a jQuery script to validate form data-->
        <script type="text/javascript" src="validation.min.js"></script>
        <!--This is a CDN link to bootstrap 4 JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <!--This is a CDN link to bootstrap 4 JS-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <!--This is a link to custom styles within the project-->
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <!--This is a link to the custom JavaScript within the project-->
        <script type="text/javascript" src="regScript.js"></script>
        <script src="https://use.fontawesome.com/ee309940e2.js"></script>
    </head>

    <body>

        <div class="signin-form">

            <div class="container small-container">
                <form class="form-signin" method="post" id="register-form">
                    <h2>Register</h2>
                    <hr />
                    <div id="error">
                        <!-- error will be showen here ! -->
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" name="user_name" id="user_name" />
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email address" name="user_email" id="user_email" />
                        <span id="check-e"></span>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password" />
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Retype Password" name="cpassword" id="cpassword" />
                    </div>
                    <hr />

                    <div class="form-group">
                        <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
                            <i class="fa fa-user-plus" aria-hidden="true"></i> &nbsp; Create Account
                        </button> 
                    </div>  

                </form>

            </div>

        </div>

    </body>
</html>