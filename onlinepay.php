<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <title>Food Ordering System</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");
    body{
        background-color: rgb(220, 215, 241);
    }
    .container h1
    {
        text-align:center;
        font-size:50px;
        margin-top:50px;  
    }
    .container h4{
        text-align:center;
    }
    .container button{
        width:100px;
    }
    body{
        background-color: rgb(220, 215, 241);
    }
    .container p{
        text-align:center;
        font-family: "Poppins", sans-serif;
    }
    .container .btn{
        margin-left:120px;
        margin-top:40px;
    }
    .container img{
        width:250px;
        height:50px;
        margin-left:400px;
    }
    </style>
</head>
<body>
    <div class="container">
        <form action="#" method="post">
        <div class="jumbotron">
            <h1>Online Payment</h1>
            <h4>Enter Your Payment Details</h4>
        </div>
    <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-3">
            <label>Credit Card Number</label>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3">
                <input type="number" class="form-control" placeholder="0000" required/>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
                <input type="number" class="form-control" placeholder="0000" required/>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
                <input type="number" class="form-control" placeholder="0000" required/>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
                <input type="number" class="form-control" placeholder="0000" required/>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-3">
            <label>Expiry Year</label>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3">
            <label>Expiry Month</label>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3">
            <label>CCV</label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-3">
            <input type="number" class="form-control" placeholder="YY" required/>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3">
            <input type="text" class="form-control" placeholder="MM" required/>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3">
            <input type="text" class="form-control" placeholder="CCV" required/>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-3">
            
        <a href="#">
            <input type="submit" value="Pay Now" name="submit" class="btn btn-success"></a>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-3">
            <button class="btn btn-danger" > Cancel</button>
        </div>
    </div>
    </form>
    </div>
</body>
</html>