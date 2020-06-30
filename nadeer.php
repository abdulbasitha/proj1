<html>
<head>
    <title>USER LOGIN AND REGISTRATION</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
</head>
<body>

<div class="container">
    <div class="login-box">
    <div class="row">
    <div class="col-md-6">
        <h2> Login Here</h2>
        <form action="validation page" method="post">
        <div class="form-group">
            <label>username</label>
            <input type="text" name="user" class="form-control" required>
            </div>
         <div class="form-group">
            <label>password</label>
            <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
         <div class="col-md-6">
        <h2> Register Here</h2>
        <form action="registration.php" method="post">
        <div class="form-group">
            <label>username</label>
            <input type="text" name="user" class="form-control" required>
            </div>
         <div class="form-group">
            <label>password</label>
            <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">register</button>
        </form>
    </div>
        </div>
    </div>
</body>
</html>
