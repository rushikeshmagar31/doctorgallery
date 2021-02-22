<!DOCTYPE html>
<html>
<head>
	<title>Doctor</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="single.css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<style>
body{
    background: -webkit-linear-gradient(left, #050100, #757373);
}
.emp-profile{
    padding: 3%;
    margin-top: 4%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.col-md-6{
    margin-top:1px;
    
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{

    color: #333;
}
.profile-head h6{
     
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
.bookings{
    position: relative;
  background-color: #000;
  color:#fff;
  border: none;
  padding: 20px;
  width:100px;
  height:75px;
  font-size:14px;
  border-radius:12px;
   text-align: center;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
}
.bookings:hover{
   background:#d3d3d3;
   box-shadow:0px 2px 10px 5px #97B1BF;
   color:#000;
}

.bookings:after {
    content: "";
    background: #f1c40f;
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -20px !important;
    margin-top: -120%;
    opacity: 0;
    transition: all 0.8s
}

.bookings:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s
}
    
}
</style>
<body>







<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4"style="margin-top:10px;">
                        <div class="profile-img">
                            <img src="<?php echo $dbprofile_pic; ?>"style="width:150px; height:120px; margin-right:30px; border-radius: 50%;" alt=""/>
                        
                        </div>
                        <br>
                        <br>
                        <hr>
                        <a href="login_client.php">
                            <button class="bookings"name="submit"style="margin-left: 30%;">Book here</button>
                            </a>
                        
                    </div>

                    <div class="col-md-6">
                        <div class="profile-head" style="margin-top: 62px;">

                                    <h5>
                                        <?php echo $dbname; ?>
                                    </h5>
                                    <h6>
                                        Degree:<?php echo $dbdegree; ?>
                                    </h6>
                                    
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $dbid; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $dbname; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $dbemail; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label> Hospital Phone Number</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $dbhos_phone; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Specialisation</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $dbfield; ?></p>
                                            </div>
                                        </div>
                            </div>
                       
                        </div>
                    </div>
                </div>
            </form>           
        </div>
        </body>
</html>