<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>C.L.I.K.I.T.</title>

    
    <style type="text/css">
    *{
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
        box-sizing: border-box;
    }
    body{
        background: url('assets/img/bg10.jpg');	
        background-repeat: no-repeat;
		background-size: cover;
    }
    ion-icon{
        font-size: 1.5rem;
        margin-right: 8px;
    }
    nav{
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #1E0E0E;
        padding: 13px 7%;
        position: sticky;
        top: 0;
        z-index: 100;
        margin-bottom: 10px;
    }
    .nav-left p{
        width: 160px;
        margin-right: 45px;
        color: #efefef;
        font-size: 20px;
    }
    .nav-left, .nav-right{
        display: flex;
        align-items: center;
    }
    .nav-user-icon img{
        width: 30px;
        height: 30px;
        border-radius: 50%;
        cursor: pointer;
    }
    .nav-user-icon{
        margin-left: 30px;
    }
    .search-box{
        background: #efefef;
        width: 200px;
        border-radius: 20px;
        display: flex;
        align-items: center;
        padding: 0 15px;
        margin-bottom: 10px;
        height: 30px;
    }
    .search-box p{
        width: 18px;
        color: #626262;
    }
    .search-box input{
        font-size: small;
        width: 100%;
        background: transparent;
        padding: 10px;
        outline: none;
        border: 0;
    }
    .container{
        display: flex;
        justify-content: space-between;
        padding-top: 15px;
    }
    .left-sidebar{
        flex-basis: 25%;
        position: sticky;
        top: 70px;
        align-self: flex-start;
        color: #800;
        padding-bottom: 40px;
    }
    .imp-links a{
        text-decoration: none;
        display: flex;
        align-items: center;
        margin-bottom: 30px;
        color: #efefef;
        width: fit-content;
    }
    .imp-links a img{
        width: 25px;
        height: 25px;
        margin-right: 15px;
        border-radius: 50%;
    }





    .user-profile{
        display: flex;
        align-items: center;
    }
    .user-profile img{
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin-right: 15px;
    }
    .post-container{
        width: 100%;
        background: #F5F5F5;
        border-radius: 6px;
        padding: 10px 18px;
        color: #626262;
        margin: 20px 0;
    }
    .user-profile p{
        font-size: 15px;
        color: #626262;
        margin-top: 15px;
        transform: translateX(-120%);
    }
    .user-profile .date{
        font-size: 12px;
        color: #626262;
        transform: translate(-50%,42%);
    }
    .user-profile .lock{
        display: flex;
        transform: translate(1330%,-60%);
    }
    .alert{
        font-size: 17px;
    }
    .setting{
        font-size: 20px;
        margin-top: 30px;
        color: white;
    }
    .setting1{
        font-size: 20px;
        color: white;
        transform: translateY(-10%);
    }
    #logo {
        width:200px;
        font-family:'Lily Script One', cursive;
        font-size: 20px;
        font-weight:bold;
        color:lightgray;
        -webkit-transition:0.2s ease all;
        -moz-transition:0.2s ease all;
            -ms-transition:0.2s ease all;
            -o-transition:0.2s ease all;
                transition:0.2s ease all;
    }
    #logo:hover {
        color: #C1A6A7;
    }

    .setting1 label {
        font-size: 18px;
        color: darkgray;
        margin-left: 15px;
    }

    .setting1 label,
    .setting1 input {
        float:left;
        clear:both;
    }

    .setting1 input {
        margin:10px 0;
        padding: 10px 10px;
        width: 90%;
        outline:none;
        border: 2px solid black;
        border-radius: 10px;
        background: rgba(32,32,32,.4);
        color: white;
        display:inline-block;
        -webkit-box-sizing:border-box;
        -moz-box-sizing:border-box;
                box-sizing:border-box;
        -webkit-transition:0.2s ease all;
        -moz-transition:0.2s ease all;
            -ms-transition:0.2s ease all;
            -o-transition:0.2s ease all;
                transition:0.2s ease all;
    }

    .setting1 input::placeholder { 
        font-size: 15px;
        font-weight:thin;
        color: white;
        opacity: .6; 
    }

    .setting1 input[type="password"]:focus {
        border-color: #A1797C;
    }

    .button2{
        background-color: rgba(204,153,153,.5);
        color: white;
        padding: 4px 180px;
        text-align: center;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 50px;
        letter-spacing: 2px;
        transform: translate(-5%, 50%);
    }

    .form-label{
        font-size: 15px;
    }
    .input {
        position: relative;
        z-index: 1;
        display: inline-block;
        margin: 1em;
        max-width: 400px;
        width: calc(100% - 2em);
        vertical-align: top;
    }

    .input__field {
        position: relative;
        display: block;
        float: right;
        padding: 0.8em;
        width: 60%;
        border: none;
        border-radius: 0;
        background: #f0f0f0;
        color: #aaa;
        font-weight: bold;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        -webkit-appearance: none; /* for box shadows to show on iOS */
    }

    .input__field:focus {
        outline: none;
    }

    .input__label {
        display: inline-block;
        float: right;
        padding: 0 1em;
        width: 40%;
        color: #6a7989;
        font-weight: bold;
        font-size: 70.25%;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .input__label-content {
        position: relative;
        display: block;
        padding: 1.6em 0;
        width: 100%;
    }
    .input--kuro {
        max-width: 320px;
       
    }   

    .input__field--kuro {
        width: 100%;
        background: transparent;
        color: #9196A1;
        opacity: 0;
        text-align: center;
        -webkit-transition: opacity 0.3s;
        transition: opacity 0.3s;
        font-size: 15px;
        margin-top: 7px;
    }

    .input__label--kuro {
        position: absolute;
        left: 0;
        width: 100%;
        color: #CC9999;
        pointer-events: none;
        margin-left: 10px;
        padding-left: 20px;
    }

    .input__label--kuro::before,
    .input__label--kuro::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 50%;
        height: 90%;
        border: 4px solid rgba(0,0,0,.7);
        -webkit-transition: -webkit-transform 0.3s;
        transition: transform 0.3s;
    }

    .input__label--kuro::before {
        border-right: none;
    }

    .input__label--kuro::after {
        left: 50%;
        border-left: none;
    }

    .input__field--kuro:focus,
    .input--filled .input__field--kuro {
        opacity: 1;
        -webkit-transition-delay: 0.3s;
        transition-delay: 0.3s;
    }

    .input__field--kuro:focus + .input__label--kuro::before,
    .input--filled .input__label--kuro::before {
        -webkit-transform: translate3d(-10%, 0, 0);
        transform: translate3d(-10%, 0, 0);
    }

    .input__field--kuro:focus + .input__label--kuro::after,
    .input--filled .input__label--kuro::after {
        -webkit-transform: translate3d(10%, 0, 0);
        transform: translate3d(10%, 0, 0);
    }

    .input__field--kuro:focus + .input__label--kuro .input__label-content--kuro,
    .input--filled .input__label-content--kuro {
        -webkit-animation: anim-2 0.3s forwards;
        animation: anim-2 0.3s forwards;
    }

    @-webkit-keyframes anim-2 {
        50% {
            opacity: 0;
            -webkit-transform: scale3d(0.3, 0.3, 1);
            transform: scale3d(0.3, 0.3, 1);
        }
        51% {
            opacity: 0;
            -webkit-transform: translate3d(0, 3.7em, 0) scale3d(0.3, 0.3, 1);
            transform: translate3d(0, 3.7em, 0) scale3d(0.3, 0.3, 1);
        }
        100% {
            opacity: 1;
            -webkit-transform: translate3d(0, 3.7em, 0);
            transform: translate3d(0, 3.7em, 0);
        }
    }

    @keyframes anim-2 {
        50% {
            opacity: 0;
            -webkit-transform: scale3d(0.3, 0.3, 1);
            transform: scale3d(0.3, 0.3, 1);
        }
        51% {
            opacity: 0;
            -webkit-transform: translate3d(0, 3.7em, 0) scale3d(0.3, 0.3, 1);
            transform: translate3d(0, 3.7em, 0) scale3d(0.3, 0.3, 1);
        }
        100% {
            opacity: 1;
            -webkit-transform: translate3d(0, 3.7em, 0);
            transform: translate3d(0, 3.7em, 0);
        }
    }
    .button1{
        background-color: rgba(204,153,153,.5);
        color: white;
        padding: 4px 32px;
        text-align: center;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 50px;
        transform: translate(155%, -180%);
    }

    .post-text{
        color: #9a9a9a;
        margin: 10px 0;
        font-size: 15px;
    }
    .post-text span{
        color: #626262;
        font-weight: 500;
    }
    .post-text a{
        color: #1876f2;
        text-decoration: none;
    }
    .post-img{
        width: 100%;
        border-radius: 4px;
        margin-bottom: 5px;
    }
    .post-row{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .activity-icons div img{
        width: 18px;
        margin-right: 10px;
    }
    .activity-icons div{
        display: inline;
        align-items: center;
        margin-right: 30px;
    }
    .post-profile-icon{
        display: flex;
        align-items: center;
    }
    .post-profile-icon img{
        width: 20px;
        border-radius: 50%;
        margin-right: 5px;
    }
    .post-row a{
        color: #9a9a9a;
    }

    .profile-img .file {
        position: absolute;
        overflow: hidden;
        width: 28%;
        height: 60%;
        border: none;
        border-radius: 50%;
        font-size: 30px;
        background-color: rgba(0,0,0,.5); 
        transform: translate(790%, -190%);
    }
    .profile-img .file:hover{
        background-color: rgba(56,56,56,.5); 
    }
    .profile-img .file input {
        position: absolute;
        opacity: 5;
        right: 0;
        top: 0;
        cursor: pointer;
    }
    .profile-img .file .icon{
        font-size: 30px;
        transform: translate(8%, 8%);
    }
    .button-upload1{
        background-color: rgba(105,105,105,.5); 
        border: none;
        color: white;
        padding: 10px 70px;
        border-radius: 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        transform: translate(151%, -75%);
    }
    .button-upload1:hover{
        background-color: rgba(64,64,64,.5); 
    }
    .row p{
        display: absolute;
        margin-left: 1000px;
        margin-top: -22px;
    }



    .tab_triger ul{
        margin: 0;
        padding: 0;
        list-style: none;
        display: flex;
    }
    .tab_triger ul li label{
        position: relative;
        display: block;
        padding: 8px 15px;
        cursor: pointer;
        min-width: 100px;
        background: rgba(0,0,0,.8);
        text-align: center;
        font-weight: 700;
        border-radius: 8px 8px 0 0;
        color: white;
    }
    .tab_triger ul li:nth-child(1) label{
        background: rgba(0,0,0,.6);
    }
    .tab_triger ul li:nth-child(2) label{
        background: rgba(0,0,0,.4);
    }
    .tab_container_wrap input{
        position: absolute;
        width: 0;
        height: 0;
        margin: 0;
        z-index: -100;
        top: -10000px;
    }
    .tab_container_wrap input:checked + .tab_content_box{
        display: block;
    }
    .tab_content_box{
        background:  rgba(0,0,0,.6);
        padding: 20px;
        display: none;
        color: white;
        border-radius: 0 10px 10px 10px;
    }
    .tab_content_box:nth-of-type(1){
        background: rgba(0,0,0,.6);
    }
    .tab_content_box:nth-of-type(2){
        background:  rgba(0,0,0,.4);
    }
    .profile{
        transform: translateX(-8px);
    }
    .btn1{
        color: white;
        background:none;
        border-radius:5px 0px 0px 5px;
        width: auto;
        padding: 3px 10px 3px 10px;
        border: none;
    }
    .btn1:hover{
        color: white;
    }
    .btn2{
        color: white;
        background:none;
        border-radius:0px 5px 5px 0px;
        width: auto;
        padding: 3px 8px 3px 8px;
        border: none;
    }
    .btn1:hover{
        color: white;
    }
    .dropdown-item:hover{
        color:white;
        background:#905152;
        opacity: 1px;
    }
    .logo{
        text-decoration: none;
    }
    .logo img{
        width: 20%;
    }
    .btn{
		color: #fff;
		text-align: center;
		background:  #800000;
		width: 450px;
		height: 35px;
		transform: translateX(-5.5%);
	}

	.btn:hover{
        color: #fff;
		background-color: #522020;
	}
    .img-display {
        padding-top:5px;
        transform: translateX(35%);
    }
    .img-display img{
        border-radius: 50%; 
        width: 280px;
        height: 280px;
    }
    .update-form{
        position: absolute;
        transform: translateX(-120%);
    }
    .mcontainer{
        transform: translateX(5%);
    }
    .approved1 a{
        border: 1px solid #AED67A; 
        background-color: #092509; 
        color: #fff; 
        text-decoration: none; 
        font-size: 14px; 
        padding: 10px 15px; 
        border-radius: 10px; 
    }
    .approved a{
        border: 1px solid #AED67A; 
        background-color: #576B3D; 
        color: #fff; 
        text-decoration: none; 
        font-size: 14px;
        padding: 10px 15px; 
        border-radius: 10px; 
    }
    .approved a:hover{
        background-color: #263D2E;
        border: 1px solid #AED67A; 
    }
    .pending a{
        border: 1px solid  #360000; 
        background-color:#610500;
        color: #fff; 
        text-decoration: none; 
        font-size: 14px; 
        padding: 10px 15px; 
        border-radius: 10px; margin-top: 100px;
    }
    .pending a:hover{
        background-color: #893333; 
        border: 1px solid #360000;  
    }
    .report ion-icon{
        color: #ffa07a; 
        text-decoration: none; 
        font-size: 40px; 
        font-weight:bold;
    }
    .delete ion-icon{
        font-size: 30px;
        color: #DFC7C8;
      
    }
    .delete ion-icon:hover{
        color: #CAA2A3;
    }
    .row-center td{
        text-align: center;
    }
    .panel-body{
        color: #F4ECED;
    }
    .panel-body h3 ion-icon{
        font-size: 50px;
        transform: translateY(23%);
    }

    .table{
        background-image: url( <?= base_url() ?>assets/img/bg2.jpg );
        background-repeat: no-repeat;
		background-size: cover;
        border-radius: 10px;
        border: none;
        margin: 20px 40px 20px 0;
        color: #DFC7C8;
    }
    .table tbody td{
        font-size: 14px;
    }.red{
        color: #ffa07a;
    }
 
 
    
    </style>
    
</head>
<body>

     <!-- <?php 
    // if($this->session->userdata('UserLoginSession')){
    //     // TRANSFER THE DATA IN UserLoginSession TO $udata
    //     $udata = $this->session->userdata('UserLoginSession');
    // ?>
        // PRINT WELCOME WITH USER username
        echo 'Welcome'.' '.$udata['username']; -->

        <nav>
        <div class="nav-left">
             <a class="logo" href="<?=base_url('index.php/user')?>">
                <img src=<?= base_url('assets/img/DEN-LOGO.png')?>> 
            </a>
        </div>
        <div class="nav-right">
            
            <!-- <div class="nav-user-icon">
                <img src="images/profile-pic.png">
            </div> -->

            <div id="bs-example-navbar-collapse-2">
                <div class="btn-group" style="float:right;">

                    <div class="profile">
                        <a href=<?php echo base_url('/user');?>>
                            <?php if($this->session->userdata('image') == ""){
                            ?>
                                <img src=<?= base_url('assets/img/default_dp.png')?>          
                                    style="height: 35px;
                                    width: 35px;
                                    border-radius: 50%; I
                                    display: table-cell;margin: e auto;" alt="Profile image">
                            <?php
                            }else{
                            ?>
                                <img src=<?= base_url('upload/'.($this->session->userdata('image')))?>          
                                    style="height: 35px;
                                    width: 35px;
                                    border-radius: 50%; I
                                    display: table-cell;margin: e auto;" alt="Profile image">
                            <?php
                            }
                            ?>
                            
                        </a>
                    </div>
                    
                    <div class="btn-group">
                    <button type="button" class="btn1"><?php echo $this->session->userdata('username');?></button>
                    <button type="button" class="btn2  dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?=base_url('admin')?>">Post Controller</a></li>
                        <li><a class="dropdown-item" href="<?=base_url('admin/organization')?>">Organization Controller</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?=base_url('admin/editprofileadmin')?>">View Profile</a></li>
                        <li><a class="dropdown-item" href="<?=base_url('admin/editprofileadmin#changepass')?>">Change Password</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="<?=base_url('welcome/logout')?>">Logout</a></li>
                    </ul>
                    </div>

                </div>
            </div>
        </div>
    </nav>

    <div class="container">

         
        <div class="panel-body">
             <h3><ion-icon name="construct-outline"></ion-icon> Admin Controller - User Post</h3>

            <table class="table">
                <thread>
                    <tr>
                        <th style="text-align: center;">Profile Picture</th>
                        <th style="text-align: center;">Username</th>
                        <th style="text-align: center;">Post</th>
                        <th style="text-align: center;">Post Status</th>
                        <th style="text-align: center;">Approved / Reject</th>
                        <th class="red" style="text-align: center;">Report</th>
                        <th class="red" style="text-align: center;">Bugs / Feedback</th>
                        <th style="text-align: center;">Actions</th>  
                    </tr>
                </thread>
                <tbody>
                <?php  
                 if(count($data) > 0){  
                        foreach($data as $row){
                ?>
                            <tr>
                                <td style="width: 15%;">
                                    <?php if($row->image == "")
                                        {
                                    ?>
                                            <div class="img-display">
                                                <img src=<?= base_url('assets/img/default_dp.png')?> class="profileImg" style="width: 50px; height: 50px;" alt="Profile Picture">
                                            </div>
                                    <?php
                                        }else{
                                    ?>
                                            <div class="img-display">
                                                <img src=<?= base_url('upload/'.($row->image))?> class="profileImg" style="width: 50px; height: 50px;" alt="Profile Picture">
                                            </div>
                                    <?php
                                        }
                                    ?>
                                </td>
                                
                                <td style="text-align: center; padding: 22px 10px;">
                                    <?php echo $row->username;?>  
                                </td>

                                <td style="text-align: center; padding: 22px 10px;">
                                    <?php echo $row->post;?>  
                                </td>

                                <td style="text-align: center; padding: 22px 10px; ">
                                    <?php echo $row->status1;?>  
                                </td>

                                <td style="text-align: center; padding: 22px 30px; ">
                                    <?php if($row->status_post == "1")
                                        {   
                                    ?>
											<div class="row approved1">
                                                <a class="4"href='#'>
                                                    Approved
                                                </a>
                                            </div>
                                   <?php 
                                        }
                                    ?>
                            
                                    <?php if($row->status_post == "0")
                                        {   
                                    ?>      
                                            <div class="row">
                                            <div class="approved col-6" style="padding-right: 80px">
                                                <a href='<?=base_url('admin/pending/'.$row->id.'/'.$row->post_id) ?>'>
                                                    Approve
                                                </a>
                                            </div>
											<div class="pending col-6" >
                                                <a href="<?=base_url('admin/report/'.$row->id.'/'.$row->post_id) ?>">
                                                    Reject
                                                </a>
                                            </div>
                                            </div>
                                   <?php 
                                        }
                                    ?>
                                </td>

                                <td class="red">

                                    <?php if($row->report == "1")
                                        {   
                                    ?>
											<div class="report" style="padding: 16px 20px">
                                                <a href='#'>
                                                    <ion-icon name="warning-outline"></ion-icon>
                                                </a>
                                            </div>
                                   <?php 
                                        }
                                    ?>                           

                            
                                </td>

                                <td class="red" style="text-align: center; padding: 22px 10px;"> 
                                    <?php if($row->feedback != "")
                                        {   
                                    ?>
										 <?php echo $row->feedback;?>  
                                   <?php 
                                        }
                                    ?>          
                            
                                </td>

                                <td style="padding: 0px 10px;">

                                    <div class="delete" style="padding: 30px 32px;">
                                        <a href="<?=base_url('admin/report/'.$row->id.'/'.$row->post_id) ?>">
                                             <ion-icon name="trash"></ion-icon>
                                        </a>
                                    </div>
                            
                                </td>
                           
                            </tr>
                            
                    <?php 
                        }
                    }
                    ?>
                </tbody>                
            </table>
        </div>
    </div>
 
    <?php $this->load->view('endline');?>  
</body>
</html>