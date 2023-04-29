@extends('frontend')
       

@section('profile')


<style>


.card-img-top{
    height:300px;
}

.card-no-border .card {
    border-color: #d7dfe3;
    border-radius: 4px;
    margin-bottom: 30px;
    -webkit-box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05);
    box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.05)
}

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem
}

.pro-img {
    margin-top: -80px;
    margin-bottom: 20px
}

.little-profile .pro-img img {
    width: 128px;
    height: 128px;
    -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
    border-radius: 100%
}

html body .m-b-0 {
    margin-bottom: 0px
}

h3 {
    line-height: 30px;
    font-size: 21px
}

.btn-rounded.btn-md {
    padding: 12px 35px;
    font-size: 16px
}

html body .m-t-10 {
    margin-top: 10px
}

.btn-primary,
.btn-primary.disabled {
    background: #7460ee;
    border: 1px solid #7460ee;
    -webkit-box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
    box-shadow: 0 2px 2px 0 rgba(116, 96, 238, 0.14), 0 3px 1px -2px rgba(116, 96, 238, 0.2), 0 1px 5px 0 rgba(116, 96, 238, 0.12);
    -webkit-transition: 0.2s ease-in;
    -o-transition: 0.2s ease-in;
    transition: 0.2s ease-in
}



.m-t-20 {
    margin-top: 20px
}

.text-center {
    text-align: center !important
}



h3,
 {
    color: #455a64;
    font-family: "Poppins", sans-serif;
    font-weight: 400
}

p {
    margin-top: 0;
    margin-bottom: 1rem
}

/* 
#privacyHeader{
  margin-left:28vw;
} */

.dropdown, .movieScroolHeader{
    display: inline-block;
  
}

.dropdown{
    margin-top:1%;
}

#dropdown2,#dropdown2,#dropdown2{
    z-index: 1000;
}






</style>


<div>
    <div class="container-fluid">
        <div class="card"> 
            <img class="card-img-top" src="https://i.imgur.com/K7A78We.jpg" alt="Card image cap">
            <div class="card-body little-profile text-center">
                <div class="pro-img"><img src="https://i.imgur.com/8RKXAIV.jpg" alt="user"></div>
                <h3 class="m-b-0">Mehedi Hasan</h3>
                <p>Thanks you </p>  
                <a href="#" class="m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded" data-abc="true">Add Friend</a> 
            </div>
        </div>
    </div>
</div>


  <!-- privacy section  -->


<div id="privacyHeader" class=" row justify-content-center">

<div class="dropdown">
  <a style="cursor: pointer; margin: 1%; padding: 0%;" class="dropbtn " onclick="toggleClock2()">Privacy</a>
  <i style="padding-left: 0%; " class="fas fa-caret-down"></i>
  <div class="dropdown-content bg-dark" id="dropdown2" style="background-color:black">
    <a href="#" >Public</a>
    <hr>
    <a href="#">Friends</a>
    <hr>
    <a href="#">Only Me</a>
  </div>
</div>
<h1 class="movieScroolHeader mt-2">Recommendation</h1>
</div>


<div id="carousel" class="container">
<div class="control-container">
<div id="left-scroll-button" class="left-scroll button scroll">
<i class="fa fa-chevron-left" aria-hidden="true"></i>
</div>
<div id="right-scroll-button" class="right-scroll button scroll">
<i class="fa fa-chevron-right" aria-hidden="true"></i>
</div>
</div>

<div class="items" id="carousel-items">
<div class="item">
<img class="item-image" src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/412e4119fb212e3ca9f1add558e2e7fed42f8fb4/AAAABQCoK53qihwVPLRxPEDX98nyYpGbxgi5cc0ZOM4iHQu7KQvtgNyaNM5PsgI0vy5g3rLPZdjGCFr1EggrCPXpL77p2H08jV0tNEmIfs_e8KUfvBJ6Ay5nM4UM1dl-58xA6t1swmautOM.webp" />
<div class="item-description opacity-none  row justify-content-center"> <button class="cross-button mr-2"><i class="fas fa-times"></i></button> <button class="add-button"><i class="fas fa-plus"></i></button></div>
</div>
</div>
</div>



<div id="privacyHeader" class=" row justify-content-center">

<div class="dropdown">
  <a style="cursor: pointer; margin: 1%; padding: 0%;" class="dropbtn " onclick="toggleClock3()">Privacy</a>
  <i style="padding-left: 0%; " class="fas fa-caret-down"></i>
  <div class="dropdown-content bg-dark" id="dropdown3" style="background-color:black">
    <a href="#" >Public</a>
    <hr>
    <a href="#">Friends</a>
    <hr>
    <a href="#">Only Me</a>
  </div>
</div>
<h1 class="movieScroolHeader mt-2">Want Watch</h1>
</div>


<div id="carousel" class="container">
<div class="control-container">
<div id="left-scroll-button" class="left-scroll button scroll">
<i class="fa fa-chevron-left" aria-hidden="true"></i>
</div>
<div id="right-scroll-button" class="right-scroll button scroll">
<i class="fa fa-chevron-right" aria-hidden="true"></i>
</div>
</div>

<div class="items" id="carousel-items">
<div class="item">
<img class="item-image" src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/412e4119fb212e3ca9f1add558e2e7fed42f8fb4/AAAABQCoK53qihwVPLRxPEDX98nyYpGbxgi5cc0ZOM4iHQu7KQvtgNyaNM5PsgI0vy5g3rLPZdjGCFr1EggrCPXpL77p2H08jV0tNEmIfs_e8KUfvBJ6Ay5nM4UM1dl-58xA6t1swmautOM.webp" />
<div class="item-description opacity-none  row justify-content-center"> <button class="cross-button mr-2"><i class="fas fa-times"></i></button> <button class="add-button"><i class="fas fa-plus"></i></button></div>
</div>
</div>
</div>




<div id="privacyHeader" class=" row justify-content-center">

<div class="dropdown">
  <a style="cursor: pointer; margin: 1%; padding: 0%;" class="dropbtn " onclick="toggleClock4()">Privacy</a>
  <i style="padding-left: 0%; " class="fas fa-caret-down"></i>
  <div class="dropdown-content bg-dark" id="dropdown4" style="background-color:black">
    <a href="#" >Public</a>
    <hr>
    <a href="#">Friends</a>
    <hr>
    <a href="#">Only Me</a>
  </div>
</div>
<h1 class="movieScroolHeader mt-2">Recently Watch</h1>
</div>


<div id="carousel" class="container">
<div class="control-container">
<div id="left-scroll-button" class="left-scroll button scroll">
<i class="fa fa-chevron-left" aria-hidden="true"></i>
</div>
<div id="right-scroll-button" class="right-scroll button scroll">
<i class="fa fa-chevron-right" aria-hidden="true"></i>
</div>
</div>

<div class="items" id="carousel-items">
<div class="item">
<img class="item-image" src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/412e4119fb212e3ca9f1add558e2e7fed42f8fb4/AAAABQCoK53qihwVPLRxPEDX98nyYpGbxgi5cc0ZOM4iHQu7KQvtgNyaNM5PsgI0vy5g3rLPZdjGCFr1EggrCPXpL77p2H08jV0tNEmIfs_e8KUfvBJ6Ay5nM4UM1dl-58xA6t1swmautOM.webp" />
<div class="item-description opacity-none  row justify-content-center"> <button class="cross-button mr-2"><i class="fas fa-times"></i></button> <button class="add-button"><i class="fas fa-plus"></i></button></div>
</div>
</div>
</div>




<!-- privacy section  end  -->
   
    




@endsection