<html>
<head>
    <title>Contact us form using php mysql</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<style>
    .container{
        max-width:1140px;
        margin:auto;
        position: relative;
        min-height: 1px;
        background-color: #C8C8C8;
        height: 550px;
    }
    .form-group{
        font-size: 20px;
        font-family: Arial;

    }
    *{
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
    }
    a{
      text-decoration: none;
      outline: none;
    }
    .footer-main-div{
      width: 100%;
      height: auto;
      margin: auto;
      background: #272727;
      padding: 40px 0px;
    }
    .footer-social-icons{
      width: 100%;
      height: auto;
      margin: auto;
    }
    .footer-social-icons ul{
      margin: 0px;
      padding: 0px;
      text-align: center;
    }
    .footer-social-icons ul li{
      display: inline-block;
      width: 50px;
      height: 50px;
      margin: 0px 10px;
      border-radius: 100%;
      background: #32CD32;
    }
    .footer-social-icons ul li a{
      color: #272727;
      font-size: 25px;
    }
    .footer-social-icons ul li a i{
      line-height: 50px;
    }
    .footer-menu-one{
      width: 100%
      height: auto;
      margin: auto;
    }
    .footer-menu-one ul{
      margin: 0px;
      padding: 0px;
      text-align: center;
    }
    .footer-menu-one ul li{
      display: inline-block;
      margin: 0px 20px;
    }
    .footer-menu-one ul li a{
      font-family: arial;
      font-size: 15px;
      font-weight: 600;
      color: #fff;
      text-transform: uppercase;
    }
</style>
<h1 align="center">Contact US</h1>
    <div class="container">
        <h3>Request Quote or Submit feedback</h3>
        <form action="form-process.php" method="POST">
            <div class="form-group">
                <label for="firstname">Firstname</label>
                <input type="text" name="firstname" id="firstname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" id="lastname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" id="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <input type="text" name="message" id="message" class="form-control" required>
            </div>
            <div class="form-group">
        <button class="btn btn-success" type="submit">Submit</button>
        <button class="btn btn-danger" type="reset">Reset</button>
    </div>
        </form>
    </div>

</body>
</html>