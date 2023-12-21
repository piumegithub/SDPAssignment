<?php 
      include "registernavbar.php";
      include('marquee.php');
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Wild and forestry complaint management system</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap');


*,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "poppins", sans-serif;
    font-weight: 500;
}
body{
    height: 100vh;
    background: linear-gradient();

}
.container{
    background-color: #fff;
    width: 95%;
    min-width: 420px;
    padding: 35px 50px;
    transform: translate(-50%,-50%);
    position: absolute;
    left: 50%;
    top: 50%;
    border-radius: 10px;
    box-shadow: 20px 30px 25px rgba(0,0,0,0.15);
    margin-top: 60px;

}
h1{
    font-size: 30px;
    text-align: center;
    color: #1c093c;
}
form{
    width: 100%;
    position: relative;
    margin: 30px auto 0 auto;
}
.row{
    width: 100%;
    display: inline-block;
    grid-template-columns: repeat(auto-fit,minmax(300px,1fr));
    grid-gap: 20px 30px;
    margin-bottom: 20px;
}
label{
    color: #1c093c;
    font-size: 14px;
    
    
}
textarea,input{
    width:100%;
    font-weight: 400;
    padding: 8px 10px ;
    border-radius: 5px;
    border: 1.2px solid #c4cae0;
    margin-top: 5px;
}
textarea:focus, input:focus{
    outline: none;
    border-color:#6f6df4;

}
button{
    border:none;
    padding: 10px 20px;
    background: linear-gradient(130deg,#6f6df4,#4c46f5);
    color: #fff;
    border-radius: 3px;
}

</style>
<body>
    <div class="container"> 
        <h1>Field officer form</h1>
        <form action="officerdata.php" method="POST">
            <div class="row">
                <div class="column">
                    <label for="Officer ID">Officer ID</label>
                    <input type="text" id="officerid" name="Id"placeholder="Enter Officer ID">
                </div>
            
                <div class="column">
                    <label for="Officer name">Officer Name</label>
                    <input type="text" id="officername" name="name"placeholder="Enter Officer Name">
                </div>
            </div>
                <div class="column">
                    <label for="complaintreview">Complaint review</label>
                    <select id="complaint" name="complaintR">
                        <option>divisional</option>
                        <option>Institutional</option>
                        <option>National</option>
                    </select>
                </div>
                <div class="column">
                    <label for="action">Action</label>
                    <select id="action" name="action">
                        <option>forward</option>
                        <option>reject</option>
                        <option>solve</option>
                    </select>
                </div>
                <div class="column">
                    <label for="Comment">Comment</label>
                    <textarea id="Comment" name="Comment" placeholder="Enter your Comment" rows="3"></textarea>
                </div>
                <input type="submit" id="btn" value="Submit" name = "submit"/> 
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>