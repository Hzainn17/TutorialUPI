<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleloginregis.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register Tutorial UPI</title>
    <link rel="icon" type=”image/png” href="img/logo.png" />
</head>
<body>
  <div class="wrapper">
    <div class="container main">
        <div class="row">
            <div class="col-md-6 side-image">
            </div>

            <div class="col-md-6 right">
                
                <div class="input-box">
                   
                   <header>Create account</header>
                   <form action="/register" method="POST">
                    @csrf
                   <div class="input-field">
                        <input type="text" class="input" id="name" required="" autocomplete="off" name="name" >
                        <label for="nama">Nama Lengkap</label> 
                    </div> 
                    <div class="input-field">
                        <input type="email" class="input" id="email" required="" autocomplete="off" name="email" >
                        <label for="email">Email</label> 
                    </div>  
                    <div class="input-field">
                        <input type="password" class="input" id="pass" required="" name="password">
                        <label for="pass">Password</label>
                    </div> 
                    <div class="input-field">
                        <input type="submit" class="submit" value="Sign Up">
                    </div> 
                </form>
                   <div class="signin">
                    <span>Already have an account? <a href="/login">Log in here</a></span>
                   </div>
                </div>  
            </div>
        </div>
    </div>
</div>
</body>
</html>