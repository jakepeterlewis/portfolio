<?php
if (substr($_SERVER['HTTP_HOST'],0,3) != 'www') {
header('HTTP/1.1 301 Moved Permanently');
header('Location: http://www.'.$_SERVER['HTTP_HOST']
.$_SERVER['REQUEST_URI']);
}
?>

<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <title>Jacob Peter Lewis - Web Designer</title>
  <meta name="description" content="Hi im Jacob Lewis a passionate Web Designer based in Sydney, Australia. I create sites in HTML5, CSS3 and jQuery.">
  <meta name="viewport" content="width=device-width">
  <meta name="nibbler-site-verification" content="b3ec7ee022a93772f2b998e7d6ac5c0e1b189dc4" />

  <link rel="stylesheet" href="css/style.css">
  <link href='http://fonts.googleapis.com/css?family=Bevan' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>

  <!--[if !IE 7]>
	<style type="text/css">
		#wrap {display:table;height:100%}
	</style>
<![endif]-->

  <script src="js/libs/modernizr-2.5.0.min.js"></script>
</head>
<body>
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  
  <div id="wrap">
  
  <header>
    <nav id="nav">
    <img src="images/logo.png" alt="Jacob Lewis - Web Designer and Developer Logo" />
  		
  				<ul id="navleft">
			<li><a href="#about">About</a></li>
			<li><a href="#portfolio">Portfolio</a></li>
				</ul>
					
				<ul id="navright">
			<li><a href="#process">Process</a></li>
			<li><a href="#contact">Contact</a></li>
				</ul>
		
  	</nav>
  	
  <div id="navband"></div>
  </header>
	
  <div id="main">

	<section id="about">
		<h1>About Me</h1>
<p>Hi I'm Jacob Lewis a <span>Web Designer</span> currently based in Sydney, Australia. I have been in the industry for 4 years and have a passion for Web Design.</p>
<p>I design and create clean, professional, <span>Cross-Browser Optimised</span> sites using <span>Photoshop</span>, <span>HTML5</span>, <span>CSS3</span> and <span>jQuery</span>. I integrate websites into various CMS clients like <span>Wordpress</span> and <span>CMS Made Simple</span>. I have recently been learning <span>Mobile Development</span> using <span>jQuery Mobile</span>.</p>
<p>I am now <span>available</span> to work in the Sydney area. Please take a look at my Portfolio and drop me an email if you are interested in working with me.</p>
	</section>
	
	<section id="skills">
		<h1 class="h1right">My Skills</h1>
		<div class="clearright"></div>
<h2><a>jQuery</a></h2>
<h2><a>CSS3</a></h2>
<h2><a>HTML5</a></h2>
<h2><a>Photoshop</a></h2>
<h2><a>Mobile Dev</a></h2>
<h2><a>CMS</a></h2>
<h2><a>jQuery Mobile</a></h2>
<h2><a>Cross-Browser Optimisation</a></h2>
	</section>
	
	<div class="clear"></div>

	<section id="portfolio">
		<h1>Portfolio</h1>
		<div class="clear"></div>
		
		<a target="_blank" href="http://naturalcordialco.com.au/"><span>The Natural Cordial Company</span><span class="portfoliohide">The Natural Cordial Company are one of the leading cordial brands in Australia. They wanted a fun, creative and exciting re-design of their website.<br /><br />
I built the site using HTML5, CSS3 and jQuery. I integrated the site in a CMS called CMS Made Simple so the client can easily update and add in new products. <strong>Click here</strong> to see this site.</span><img src="images/tncc.jpg" alt="The Natural Cordial Company - Example" /></a>

		<a target="_blank" href="http://jakepeterlewis.com/big/"><span>Brand Influence Group</span><span class="portfoliohide">Brand Influence Group are one of the fastest growing companies in Australia. They wanted an innovative, fresh and inspiring re-design of their website including a new blog.<br /><br />
I built the site using HTML5, CSS3, jQuery and PHP. I integrated the site in to Wordpress so the client can easily update photos, text and the blog. <strong>Click here</strong> to see this site.</span><img src="images/big.jpg" alt="Brand Influence Group - Example" /></a>

<a href="mailto:jake@jakepeterlewis.com"><span>BIG - People Profiles</span><span class="portfoliohide">Brand Influence Group wanted a unique website so their staff could socialise and spark competition amongst each other.<br /><br />
I built this site using Buddypress powered by Wordpress. I styled the site to match BIG's branding and added/customised many plugins to enhance the websites capabilities. <strong>Email me</strong> for login details to access this private social network.</span><img src="images/big_staff.jpg" alt="BIG - People Profiles" /></a>

		<a style="margin-right: 0px;" target="_blank" href="http://stephenleather.com/"><span>Stephen Leather</span><span class="portfoliohide">
Stephen Leather is an English Author with over 30 books published by Hodder and Stoughton. With over 150 views per day he wanted a full re-design that was fresher, cleaner and easier to navigate.<br /><br />
I built the site using XHTML, CSS3 and jQuery. I integrated the site in a CMS called CMS Made Simple so the client can easily update it.
<strong>Click here</strong> to see this site.</span><img src="images/stephenleather.jpg" alt="Stephen Leather - Example" /></a>

		<a target="_blank" href="http://bodysound.co.uk/"><span>Bodysound Gym</span><span class="portfoliohide">Bodysound is a friendly, private Health and Fitness Gym in Chandlers Ford, they wanted a clean and easy to navigate site that was easy to update.<br /><br />
I built the site using XHTML, CSS3 and jQuery. I integrated the site in a CMS called CMS Made Simple so the client can easily update the news and special offers. <strong>Click here</strong> to see this site.</span><img src="images/bodysound.jpg" alt="Bodysound Gym - Example" /></a>

		<a target="_blank" href="http://hillcroftbuilders.com/"><span>Hillcroft Builders</span><span class="portfoliohide">Hillcroft Builders have grown quickly over the years and are now in need for a simple and professional website to promote the business further.<br /><br />
I built the site using XHTML, CSS3 and jQuery. I integrated the site in a CMS called CMS Made Simple so the client can easily update the news page updates. <strong>Click here</strong> to see the progress of this site.</span><img src="images/hillcroft.jpg" alt="Hillcroft Builders" /></a>

		<a target="_blank" href="http://jakepeterlewis.com/designs/sweets.jpg"><span>Design: The Sweet Shop</span><span class="portfoliohide">The client wanted a collection of designs to explore their options. This was my design for the website.<br /><br />
The website will be created into an e-commerce system so the client can add their own products whenever they want. It will also be created by using HTML5, CSS3 and jQuery. <strong>Click here</strong> to see the design for this site.</span><img src="images/sweet.jpg" alt="The Sweet Shop - Design" /></a>

		<a style="margin-right: 0px;" target="_blank" href="http://jakepeterlewis.com/designs/events.jpg"><span>Design: Events</span><span class="portfoliohide">Again the client wanted a choice of designs and this was my design for the website.<br /><br />
The website will be created into a CMS system so the client can manage the website by themselves. It will also be created by using HTML5, CSS3 and jQuery. <strong>Click here</strong> to see the design for this site.</span><img src="images/events.jpg" alt="Events - Design" /></a>
		
		
		<div class="clear"></div>
	</section>
	
	
	<section id="process">
		<h1>Process</h1>
		<div class="clear"></div>
		<div class="process">
		<h2>Design</h2>
		<p>The design stage shows the client exactly how their website will look and feel. I use Photoshop to create the design, allowing the client to see the colours, structure, layout, look and functionality of their website. I tweak the design until the client is 100% happy with it.</p>
		</div>
		<div class="process">
		<h2>Development</h2>
		<p>The development stage is the bulk of the programming work, as well as inputting all the content. I code websites using HTML5, CSS3, jQuery and PHP. I also implement websites into Wordpress or CMS Made Simple, which allows the client to easily update their website.</p>
		</div>
		<div class="process">
		<h2>Testing</h2>
		<p>The testing stage makes sure the websites features and functions are working correctly. I thoroughly test my websites so that the client and the users have an optimal browsing experience, I test my websites in all the latest web browsers, including IE (7+), Firefox and Chrome.</p>
		</div>
		<div style="margin-right: 0px;" class="process">
		<h2>Maintenance</h2>
		<p>The maintenance stage allows the client to pass all future updates and changes on to the developer. Even though I put all my sites into CMS Systems so that clients can easily update their website, I still like to ask if they would like future updates and changes.</p>
		</div>
	</section>
	
	
	<section id="contact">
		<h1>Contact</h1>
		
<form action="form.php" method="post" id="form">
    <fieldset>
        <div id="formleft">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" title="Name" maxlength="60" placeholder="Name" autocomplete="off" required/>
        
        <label for="email">Email address</label>
        <input type="email" name="email" id="email" title="Email address" maxlength="40" placeholder="Email address" required/>
        
        <label for="company">Company</label>
        <input type="text" name="company" id="company" title="Company" maxlength="40" placeholder="Company"  autocomplete="off"/>
        </div>
        <div id="formright">
        <label for="comment">Message</label>
        <textarea name="comment" id="comment" title="Comment" cols="30" rows="5" maxlength="100" placeholder="Message...">
        </textarea>
        
        <input type="submit" value="Send" name="submit" class="submit"/>
        </div>
    <div id="response"></div>
    </fieldset>
</form>
		
	</section>
	
	<section id="social">
		<h1 class="h1right">Social</h1>
		<div class="clearright"></div>

<a title="Linked In - Jacob Lewis" target="_blank" href="http://www.linkedin.com/profile/view?id=169174218&amp;locale=en_US&amp;trk=tab_pro"><img src="images/social_in.png" alt="" /></a>
<a title="Twitter - Jacob Lewis" target="_blank" href="https://twitter.com/#!/jakelewis1988"><img src="images/social_twitter.png" alt="" /></a>
<a title="Forrst - Jacob Lewis" target="_blank" href="http://forrst.com/people/jakepeterlewis"><img src="images/social_forrst.png" alt="" /></a>
<a title="Google - Jacob Lewis" target="_blank" href="https://plus.google.com/u/1/118395795538426682142/posts"><img src="images/social_google.png" alt="" /></a>

	</section>
		
  </div>
  
  </div>
  
  <footer>
  </footer>
  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script src="js/plugins.js"></script>
  <script src="http://cdn.jquerytools.org/1.2.6/all/jquery.tools.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery.tools.min.js"><\/script>')</script>
  <script src="js/libs/form.min.js"></script>
  
 <!-- <script type="text/javascript">
 $(function(){
  $("nav a").click(function(){
    $(this).parent().addClass('active'). // <li>
      siblings().removeClass('active');
  });
});
  </script> -->

<script type="text/javascript">
    $(document).ready(function() {
        
        //Get Sections top position
        function getTargetTop(elem){
            
            //gets the id of the section header
            //from the navigation's href e.g. ("#html")
            var id = elem.attr("href");

            //Height of the navigation
            var offset = 222;

            //Gets the distance from the top and 
            //subtracts the height of the nav.
            return $(id).offset().top - offset;
        }

        //Smooth scroll when user click link that starts with #
        $('a[href^="#"]').click(function(event) {
            
            //gets the distance from the top of the 
            //section refenced in the href.
            var target = getTargetTop($(this));


            //scrolls to that section.
            $('html, body').animate({scrollTop:target}, 1000);

            //prevent the browser from jumping down to section.
            event.preventDefault();

        });

        //Pulling sections from main nav.
        var sections = $('nav ul li a[href^="#"]');

        // Go through each section to see if it's at the top.
        // if it is add an active class
        function checkSectionSelected(scrolledTo){
            
            //How close the top has to be to the section.
            var threshold = 10;

            var i;

            for (i = 0; i < sections.length; i++) {
                
                //get next nav item
                var section = $(sections[i]);

                //get the distance from top
                var target = getTargetTop(section);
                
                //Check if section is at the top of the page.
                if (scrolledTo > target - threshold && scrolledTo < target + threshold) {

                    //remove all selected elements
                    sections.removeClass("active");

                    //add current selected element.
                    section.addClass("active");
                }

            };
        }


        //Check if page is already scrolled to a section.
        checkSectionSelected($(window).scrollTop());

        $(window).scroll(function(e){
            checkSectionSelected($(window).scrollTop())
        });

 $('#form').html5form({
            allBrowsers : true,
            responseDiv : '#response',
            messages: 'en',
            method : 'POST',
            colorOn :'#efefef',
            colorOff :'#0b3243'
        });


    });
    
    
</script>

<script type="text/javascript">
$(document).ready(function(){
   // Change the image of hoverable images
   $(".imgHoverable").hover( function() {
       var hoverImg = HoverImgOf($(this).attr("src"));
       $(this).attr("src", hoverImg);
     }, function() {
       var normalImg = NormalImgOf($(this).attr("src"));
       $(this).attr("src", normalImg);
     }
   );
});

function HoverImgOf(filename)
{
   var re = new RegExp("(.+)\\.(gif|png|jpg)", "g");
   return filename.replace(re, "$1_hover.$2");
}
function NormalImgOf(filename)
{
   var re = new RegExp("(.+)_hover\\.(gif|png|jpg)", "g");
   return filename.replace(re, "$1.$2");
}
</script>

  <!-- end scripts -->

  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
		<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-22829961-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>