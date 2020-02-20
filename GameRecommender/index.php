<!DOCTYPE html>
<html>
<head>
<title> A Game Recommender</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Games Center Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="js/modernizr.custom.js"></script>
	<link rel="stylesheet" type="text/css" href="css/component.css" />
</head>
<body> 
<!--header-->	
<div class="header" >
	<div class="top-header" >		
		<div class="container">
		<div class="top-head" >	
				<div class="search">
					<form>
						<input type="text" value="search about something ?" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'search about something ?';}" >
						<input type="submit" value="" >
					</form>
				</div>
			
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
		<!---->
	
		<div class="header-top">
		<div class="container">
		<div class="head-top">
			<div class="logo">
			
				<h1><a href="index.html"><span> G</span>ame <span>R</span>ecommender</a></h1>
				
			</div>
		<div class="top-nav">		
			  <span class="menu"><img src="images/menu.png" alt=""> </span>
				
					<ul>
						<li class="active"><a class="color1" href="index.html"  >HOME</a></li>
						<li><a class="color2" href="games.html"  >RECOMMENDATION</a></li>
						<li><a class="color4" href="blog.html" >BLOG</a></li>
						<li><a class="color5" href="contact.html"  >CONTACT</a></li>
						<div class="clearfix"> </div>
					</ul>


					<!--script-->
				<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
			</script>

				</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
</div>
<!--banner-->

	<div class="banner">
<div class="container">	
		  <div class="wmuSlider example1">
			   <div class="wmuSliderWrapper">
			 <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	<div class="banner-wrap">
						<div class="banner-top">
							<img src="images/12.jpg" class="img-responsive" alt="">
						</div>
						  <div class="banner-top banner-bottom">
							<img src="images/11.jpg" class="img-responsive" alt="">
						</div>
				   		 <div class="clearfix"> </div>
				   	 </div>
				   
			</article>
			 <article style="position: absolute; width: 100%; opacity: 0;"> 
				   		<div class="banner-wrap">
						
						<div class="banner-top">
							<img src="images/14.jpg" class="img-responsive" alt="">
						</div>
						  <div class="banner-top banner-bottom">
							<img src="images/13.jpg" class="img-responsive" alt="">
						</div>
				   		 <div class="clearfix"> </div>
						
				   	 </div>
			</article>
			 <article style="position: absolute; width: 100%; opacity: 0;"> 
				   		<div class="banner-wrap">
							<div class="banner-top">
							<img src="images/16.jpg" class="img-responsive" alt="">
						</div>
						  <div class="banner-top banner-bottom">
							<img src="images/15.jpg" class="img-responsive" alt="">
						</div>
				   		 <div class="clearfix"> </div>
				   	 </div>
			</article>
			</div>
			 <ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="">1</a></li>
                	<li><a href="#" class="wmuActive">2</a></li>
                </ul>
		</div>
		<!---->
		  <script src="js/jquery.wmuSlider.js"></script> 
			  <script>
       			$('.example1').wmuSlider({
					 pagination : true,
					 nav : false,
				});         
   		     </script> 	
		
		</div>   
	</div>
<!--content-->
<div class="content">
	<div class="container">
			<div class="content-top">
				<h2 class="new">Reccomended For You</h2>
			
			<div class="wrap">	
			<div class="main">
				<ul id="og-grid" class="og-grid">
					<?php 
						for($i=0;$i<4;$i++){?>

					<li>
						<a href="#" data-largesrc="images/2.jpg" data-title="Angry Birds" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec dev c muji et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.">
							<img class="img-responsive" src="images/thumbs/2.jpg" alt="img02"/>
						</a>
						<div class="stars" data-rating="1">
							<span class="star">&nbsp;</span>
							<span class="star">&nbsp;</span>
							<span class="star">&nbsp;</span>
							<span class="star">&nbsp;</span>
							<span class="star">&nbsp;</span>
							</div>
					</li>
					<?php } ?>
					</ul>
                </div>
                </div>
                <div class="content-top">
				<h2 class="new">Similar Users Play</h2>
			
			<div class="wrap">	
			<div class="main">
				<ul id="og-grid" class="og-grid">
					<li>
						<a href="#" data-largesrc="images/1.jpg" data-title="Subway Surfers" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.">
							<img class="img-responsive" src="images/thumbs/1.jpg" alt="img01"/>
						</a>
					</li>
					<li>
						<a href="#" data-largesrc="images/2.jpg" data-title="Angry Birds" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisqueasd dev c elis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.">
							<img class="img-responsive" src="images/thumbs/2.jpg" alt="img02"/>
						</a>
					</li>
					<li>
						<a href="#" data-largesrc="images/3.jpg" data-title="Bike Games"  data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.">
							<img class="img-responsive" src="images/thumbs/3.jpg" alt="img03"/>
						</a>
					</li>
					<li>
						<a href="#" data-largesrc="images/4.jpg" data-title="Temple Run"  data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.">
							<img class="img-responsive" src="images/thumbs/4.jpg" alt="img01"/>
						</a>
                    </li></ul>
                </div>
                </div>

                     <div class="content-top">
				<h2 class="new">Games You May Like</h2>
			
			<div class="wrap">	
			<div class="main">
				<ul id="og-grid" class="og-grid">
					<li>
						<a href="#" data-largesrc="images/1.jpg" data-title="Subway Surfers" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.">
							<img class="img-responsive" src="images/thumbs/1.jpg" alt="img01"/>
						</a>
					</li>
					<li>
						<a href="#" data-largesrc="images/2.jpg" data-title="Angry Birds" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.">
							<img class="img-responsive" src="images/thumbs/2.jpg" alt="img02"/>
						</a>
					</li>
					<li>
						<a href="#" data-largesrc="images/3.jpg" data-title="Bike Games"  data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.">
							<img class="img-responsive" src="images/thumbs/3.jpg" alt="img03"/>
						</a>
					</li>
					<li>
						<a href="#" data-largesrc="images/4.jpg" data-title="Temple Run"  data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.">
							<img class="img-responsive" src="images/thumbs/4.jpg" alt="img01"/>
						</a>
                    </li></ul>
                </div>
                </div>
		</div>
<script src="js/grid.js"></script>
		<script>
			$(function() {
				Grid.init();
			});
		</script>
	</div>
		<!----->
		<div class="col-mn">
			<div class="container">
					<div class="col-mn2">
						<h3>Players Unknown BattleGround</h3>
						<p>Contrary to popular belief
							, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
						<a class=" more-in" href="single.html">Read More</a>
                
				</div>
			</div>
		</div>
		<!---->
		<div class="featured">
			<div class="container">
				<div class="col-md-4 latest">
					<h4>Top Rated</h4>
					<div class="late">
						<a href="single.html" class="fashion"><img class="img-responsive " src="images/la.jpg" alt=""></a>
						<div class="grid-product">
							<span>Half Life</span>
							<p><a href="single.html"> Ipsum dolor sit amet, consectetuer adipiscing elit,it has roots </a></p>
						</div>
					<div class="clearfix"> </div>
					</div>
					<div class="late">
						<a href="single.html" class="fashion"><img class="img-responsive " src="images/la1.jpg" alt=""></a>
						<div class="grid-product">
							<span>Half Life 2</span>
							<p><a href="single.html"> Ipsum dolor sit amet, consectetuer adipiscing elit,it has roots </a></p>
						</div>
					<div class="clearfix"> </div>
					</div>
					<div class="late">
						<a href="single.html" class="fashion"><img class="img-responsive " src="images/la2.jpg" alt=""></a>
						<div class="grid-product">
							<span>Bio Shock</span>
							<p><a href="single.html"> Ipsum dolor sit amet, consectetuer adipiscing elit,it has roots </a></p>
						</div>
					<div class="clearfix"> </div>
                    </div>
				</div>
				<div class="col-md-4 latest">
					<h4>Trending</h4>
					<div class="late">
						<a href="single.html" class="fashion"><img class="img-responsive " src="images/la3.jpg" alt=""></a>
						<div class="grid-product">
						<span>Cs-Go</span>
							<p><a href="single.html"> Ipsum dolor sit amet, consectetuer adipiscing elit,it has roots </a></p>
						</div>
					<div class="clearfix"> </div>
					</div>
					<div class="late">
						<a href="single.html" class="fashion"><img class="img-responsive " src="images/la2.jpg" alt=""></a>
						<div class="grid-product">
						<span>Dota2</span>
							<p><a href="single.html"> Ipsum dolor sit amet, consectetuer adipiscing elit,it has roots </a></p>
						</div>
					<div class="clearfix"> </div>
                    </div>
					<div class="late">
						<a href="single.html" class="fashion"><img class="img-responsive " src="images/la1.jpg" alt=""></a>
						<div class="grid-product">
                            <span>Team Fortress 2</span>
							<p><a href="single.html"> Ipsum dolor sit amet, consectetuer adipiscing elit,it has roots </a></p>
						</div>
					<div class="clearfix"> </div>
					</div>
                </div>
				<div class="col-md-4 latest">
					<h4>Top Grossing</h4>
					<div class="late">
						<a href="single.html" class="fashion"><img class="img-responsive " src="images/la1.jpg" alt=""></a>
						<div class="grid-product">
							<span>Dota2</span>
							<p><a href="single.html"> Ipsum dolor sit amet, consectetuer adipiscing elit,it has roots </a></p>
						</div>
					<div class="clearfix"> </div>
					</div>
					<div class="late">
						<a href="single.html" class="fashion"><img class="img-responsive " src="images/la.jpg" alt=""></a>
						<div class="grid-product">
							<span>Team Fortress 2</span>
							<p><a href="single.html"> Ipsum dolor sit amet, consectetuer adipiscing elit,it has roots </a></p>
						</div>
					<div class="clearfix"> </div>
					</div>
					<div class="late">
						<a href="single.html" class="fashion"><img class="img-responsive " src="images/la3.jpg" alt=""></a>
						<div class="grid-product">
							<span>UnTurned</span>
							<p><a href="single.html"> Ipsum dolor sit amet, consectetuer adipiscing elit,it has roots </a></p>
                        </div></div>
					<div class="clearfix"> </div>
					</div>
                </div>
				<div class="clearfix"> </div>
			</div>
		</div>
        </div>
    </div>
	<div class="footer">
			<p class="footer-class">  Design by  <a href="index.html">Us</a> </p>
		</div>
		 <script>
        
        document.addEventListener('DOMContentLoaded', function(){
            let stars = document.querySelectorAll('.star');
            stars.forEach(function(star){
                star.addEventListener('click', setRating); 
            });
            
            let rating = parseInt(document.querySelector('.stars').getAttribute('data-rating'));
            let target = stars[rating - 1];
            target.dispatchEvent(new MouseEvent('click'));
        });
        function setRating(ev){
            let span = ev.currentTarget;
            let stars = document.querySelectorAll('.star');
            let match = false;
            let num = 0;
            stars.forEach(function(star, index){
                if(match){
                    star.classList.remove('rated');
                }else{
                    star.classList.add('rated');
                }
                        if(star === span){
                    match = true;
                    num = index + 1;
                }
            });

            document.querySelector('.stars').setAttribute('data-rating', num);
        }
        
    </script>
</body>
</html>