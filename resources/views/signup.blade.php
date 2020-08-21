<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/sign-up.css')}}"">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</head>
<body>

    <header>
        <span class="header-text"> AKAD </span>
    
    </header>
    
    
    <div class="sign-up-div d-flex justify-content-center align-items-center">
    {{ Form::open(array('url' => 'signup/store','method'=>'post','class' => 'form-container')) }}
        <form method="" action="#" class="signup-form justify-content-center">
        
            <span class="signup-header-text "> SIGN UP </span>
            
            <div class="form-row">
                <div class="form-group col">
                    <label for="inputFirstName">First Name</label>    
                    <input type="text" id="inputFirstName" name="fname" class="input-field form-control" required>
                </div>
                <div class="form-group col">
                    <label for="inputLastName">Last Name</label>    
                    <input type="text" id="inputLastName" name="lname" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail">Email</label>    
                <input type="email" id="inputEmail" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <input type="radio" name="userType" value="Teacher" checked>Teacher
                <input type="radio" name="userType" value="Student">Student
            </div>
            <div class="form-group">
                <label for="inputPassword">Password</label>    
                <input type="password" id="inputPassword" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="inputConfirmPassword">Confirm Password</label>    
                <input type="password" id="inputConfirmPassword" class="form-control" required>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="signupSubmit">Let's get started</button>
            </div>
            
        
        </form>
    
    </div>
    
</body>
</html>