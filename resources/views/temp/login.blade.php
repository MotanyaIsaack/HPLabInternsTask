<!DOCTYPE html>
<html>
  <head>
    <title>HPLI_LogIn</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
      .box{
      width:450px;
      margin:0 auto;
      border:1px solid #ccc;
      }
      body, html {
      height: 100%;
      }
      * {
      box-sizing: border-box;
      }
      .bg-img {
      background-image: url("bphp.jpg");
      min-height: 610px;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
      }

      .container {
        position: center;
        background-color: white;
      }

        input[type=text], input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
      }

      input[type=text]:focus, input[type=password]:focus {
        background-color: #ddd;
        outline: none;
      }

      .btn {
        background-color: #4CAF50;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
      }
    </style>
  </head>

  <body>

    <div style="padding-top:10%" class="bg-img">
      <div class="container box">
        <h3 align="center" style="font-family:Courier"><b>HPLabInterns_LogIn Form</b></h3><br />
        <h4 align="center">(Please insert your details below so as to access the system.)</h4>

        <form method="post" actionstatistics') }}"><!--the form should direct to statistics if login successful-->
          {{ csrf_field() }}
          <div class="form-group">
            <label>Enter Email</label>
            <input type="email" name="user_email" class="form-control" placeholder="intern@hp.com" />
          </div>

          <div class="form-group">
            <label>Enter Password</label>
            <input type="password" name="password" class="form-control" placeholder="password" />
          </div>

          <div style="text-align:center">
            <div class="form-group">
              <input type="submit" style="background-color:black" name="login" class="btn btn-primary" value="Login" />
            </div>
          </div>

        </form>
      </div>
    </div>
  </body>
</html>
