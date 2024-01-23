<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <link rel="stylesheet" href="{{ url('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>

    @if ($message = Session::get('Error'))
        <div class="alert" id="alert">
            <span id="alertMessage" class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            {{ $message }}
        </div>
    @endif

    <div class="container">
        <div class="wrapper">
            <form id="LoginForm" method="POST" action="{{ route('LoginCheck') }}">
                @csrf
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="email" id='email' name="email" placeholder="Email or Phone">
                </div>
                <span id="emailErr" class="error"></span>

                <div class="row">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" name="password" placeholder="Password">
                </div>
                <span id="passwErr" class="error"></span>

                <div class="row button">
                    <input type="submit" value="Login">
                </div>
            </form>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
{{-- jquery Validation plugin --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

<script>
    $(function() {
        setTimeout(function() {
            $("#alertMessage").trigger("click");
        }, 4000);
    });

    $("#LoginForm").validate({
        // Specify validation rules
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 8
            }
        },
        // Specify validation error messages
        messages: {
            email: {
                required: "Please provide User Name",
                email: "Your email should a be valid email"
            },
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 8 characters long",
            }
        },
        errorPlacement: function(error, element) {
            //Custom position:
            if (element.attr("name") == "email") {
                error.appendTo("#emailErr");
            }
            //Custom position:
            else if (element.attr("name") == "password") {
                error.appendTo("#passwErr");
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
</script>

</html>
