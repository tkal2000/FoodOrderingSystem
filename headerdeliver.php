<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Ordering System</title>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' rel='stylesheet'>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");
    body{
        background-color: #dedede;
        font-family: 'Poppins',sans-serif;
        margin: 0;
        padding: 0;
    }
    .dropdown{
    margin: 0 auto;
    }
    nav{
        height: 60px;
        background-color: rgb(58, 54, 56);
        box-shadow: 0 10px 15px rgba(0,0,0,0.1);
    }
    .logo{
        width: 50px;
        height: 50px;
        border-radius: 100%;
        margin-left: 80px;
        margin-top: 5px;
    }
    nav ul{
        padding: 0;
        margin: 0;
        float: right;
        margin-right: 30px;
    }
    nav ul li{
        background-color: rgb(58, 54, 56);
        position: relative;
        list-style: none;
        display: inline-block;
    }
    nav ul li a{
        display: block;
        padding: 0 15px;
        color: white;
        text-decoration: none;
        line-height: 60px;
        font-size: 15px;
        width: 200px;
    }
    nav ul li a:hover{
        background-color: rgb(43, 44, 44);
        color:white;
    }
    nav ul ul{
        position: absolute;
        top: 60px;
        display: none;
    }
    nav ul li:hover > ul{
        display: block;
    }
    .profile-pic-div{
        height: 50px;
        width: 50px;
        position: absolute;
        top: 50%;
        left: 95%;
        transform: translate(-50%,-50%);
        border-radius: 50%;
        overflow: hidden;
        border: 1px solid grey;
    }
    #photo{
        height: 100%;
        width: 100%;
        
    }
    #file{
        display: none;
    }
    #uploadBtn{
        height: 10px;
        width: 100%;
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        text-align: center;
        background: rgba(0, 0, 0, 0.7);
        color: wheat;
        line-height: 30px;
        font-family: sans-serif;
        font-size: 0px;
        cursor: pointer;
        display: none;
    }
</style>
</head>
<body>
<div class="dropdown">
        <nav>
            <img src="img/Food Logo Design.jpg" class="logo">
            <ul>
                <li>
                    <div class="profile-pic-div">
                        <img src="img/image.jpg" id="photo">
                        <input type="file" id="file">
                        <label for="file" id="uploadBtn">Choose Photo</label>
                    </div>
                    <a href="#">Profile <i class="fa-sharp fa-solid fa-caret-down"></i></a>
                    <ul>
                        <li><a href="viewonedeliver.php">
                            <i class="fa-solid fa-user"></i>
                                View Profile 
                            </a>
                        </li>
                        <li><a href="editonedeliver.php">
                            <i class="fa-solid fa-user-pen"></i>
                                Edit Profile 
                            </a>
                        </li>
                        <li><a href="deliversignout.php">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <script>
    //declearing html elements

    const imgDiv = document.querySelector('.profile-pic-div');
    const img = document.querySelector('#photo');
    const file = document.querySelector('#file');
    const uploadBtn = document.querySelector('#uploadBtn');
    
    //if user hover on img div 
    
    imgDiv.addEventListener('mouseenter', function(){
        uploadBtn.style.display = "block";
    });
    
    //if we hover out from img div
    
    imgDiv.addEventListener('mouseleave', function(){
        uploadBtn.style.display = "none";
    });
    
    //lets work for image showing functionality when we choose an image to upload
    
    //when we choose a foto to upload
    
    file.addEventListener('change', function(){
        //this refers to file
        const choosedFile = this.files[0];
    
        if (choosedFile) {
    
            const reader = new FileReader(); //FileReader is a predefined function of JS
    
            reader.addEventListener('load', function(){
                img.setAttribute('src', reader.result);
            });
    
            reader.readAsDataURL(choosedFile);
    
            //Allright is done
    
            //please like the video
            //comment if have any issue related to vide & also rate my work in comment section
    
            //And aslo please subscribe for more tutorial like this
    
            //thanks for watching
        }
    });
</script>
</body>
</html>