@extends('frontend')
       

@section('profile')
<section style="margin-top: 200px;">
<h1 class="movieScroolHeader mt-2">Movies</h1>

<div id="carousel" class="container">

<div class="control-container">
<div id="left-scroll-button" class="left-scroll button scroll">
<i class="fa fa-chevron-left" aria-hidden="true"></i>
</div>
<div id="right-scroll-button" class="right-scroll button scroll">
<i class="fa fa-chevron-right" aria-hidden="true"></i>
</div>
</div>

<div class="items" id="carousel-items ">
<div class="item">
<img class="item-image" src="https://occ-0-243-299.1.nflxso.net/dnm/api/v5/rendition/412e4119fb212e3ca9f1add558e2e7fed42f8fb4/AAAABQCoK53qihwVPLRxPEDX98nyYpGbxgi5cc0ZOM4iHQu7KQvtgNyaNM5PsgI0vy5g3rLPZdjGCFr1EggrCPXpL77p2H08jV0tNEmIfs_e8KUfvBJ6Ay5nM4UM1dl-58xA6t1swmautOM.webp" />
<span class="item-title">Going In Style</span>
<a href="streaming"><span  class="item-load-icon button opacity-none"><i class="fa fa-play"></i></span></a>
<div class="item-description opacity-none">Lorem ipsum dolor sit amet, lorem ipsum dolor sit amet.</div>
</div>
<div class="item">
<img class="item-image" src="https://t1.gstatic.com/images?q=tbn:ANd9GcR-dYeeUv4ZstPOToXNhAYR3r1h57lJgzqMPDYHPskCGkbhbzfp" />
<span class="item-title">Boss Baby</span>
<span class="item-load-icon button opacity-none"><i class="fa fa-play"></i></span>
<div class="item-description opacity-none">Lorem ipsum dolor sit amet, lorem ipsum dolor sit amet.</div>
</div>
</div>
</div>




</section>




<section>
<h1 class="movieScroolHeader mt-2">Peoples</h1>
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
<span class="item-title">people Name</span>
<div class="item-description opacity-none  row justify-content-center"> <button class="cross-button mr-2"><i class="fas fa-times"></i></button> <button class="add-button"><i class="fas fa-plus"></i></button></div>
</div>
</div>
</div>


</section>



@endsection