<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Ordering System</title>
    
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}
.about{
    width: 100%;
    padding: 78px 0px;
    background-color: rgb(224, 219, 219);
}
.about img{
    height: 300px;
    width: 300px;
}
.about-text{
    width: 550px;
}
.main{
    width: 1120px;
    max-width: 95%;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: space-around;
}

    </style>
</head>
<body>
    <?php
        include('header.php');
    ?>
    <section class="about">
        <div class="main">
            <img src="img/restuarant.jpg">
            <div class="about-text">
                <h2><u>About Us</u></h2>
                <p>Since its inception in 2021, Kepz has rapidly become a household name across Sri Lanka. The first restaurant was opened in Matale.
                With the launch of the island-wide delivery hotline 011-4598158, Kepz distribution rose rapidly to provide 50% of the restaurant's net sales.
                Today kepz employs over 100 staff members from diverse backgrounds. As an equal opportunity employer, Kepz invests 1% of its annual revenue in training and welfare. The company strongly believes in creating a fun work environment that is results oriented.
                We at Kepz believe in pleasing every customer's emotions. We serve you delicious food and drinks.</p>
            </div>
        </div>
    </section>
    </body>
</html>