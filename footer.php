  <!-- Footer  -->
	    <div class="row dgreen footer">
		    <div class="footer_border"></div>
		    <div class="container">

		    <div class="col-md-12">
					<div class="col-md-2 noMobileDisplay">
						<h1>Allgemein</h1>
						<ul >
							<li><a href="index.php#ueberuns">Über uns</a></li>
							<li><a href="index.php#galerie">Bildergalerie</a></li>
							<li><a href="index.php#downloads">Downloads</a></li>
							<li><a href="index.php#anfahrt">Anfahrt</a></li>
							<li><a href="index.php#partner">Unsere Partner</a></li>
							<li><a href="index.php#kontakt">Kontakt</a></li>
							<li><a href="impressum.php">Impressum</a></li>
						</ul>
					</div>
					<div class="col-md-2 ">
						<h1>Leistungen</h1>
						<ul>
							<li><a href="leistungen.php#handel">Rohstoffhandel</a></li>
							<li><a href="leistungen.php#service">Industrieservice</a></li>
							<li><a href="leistungen.php#containerdienst">Containerdienst</a></li>
							<li><a href="leistungen.php#schrottankauf">Schrottankauf</a></li>
							<li><a href="index.php#qualifikation">Qualifizierung</a></li>
						</ul>
					</div>
					<div class="col-md-2 ">
						<h1>Kontakt</h1>
						Adolf Mückenhaupt<br>
						GmbH & Co. KG<br>
						Grubebachstr. 43<br>
						Gewerbegebiet Westenholz<br>
						33129 Delbrück<br>
						Tel.: 02944/97 10-0<br>
						Fax: 02944/97 10-14
					</div>
					<div class="col-md-6">
						<div class="footer_logo"></div>
					</div>
		    </div>
	    </div>
	    </div>




    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/lightbox.js"></script>
      <script src="js/jquery.slides.min.js"></script>
      <script src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
  </body>
</html>

  <script>

	$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

$(function(){
	// Instantiate MixItUp:
	$('#Container').mixItUp({


	});

	$('.gallery_btn').click(function() {
	$('.gallery_btn').removeClass('active');
    $(this).addClass('active');
});
});

$(document).ready(function() {

$('.navLink a').click(function() {
	$('.navLink').removeClass('nav_active');
    $(this).parents().addClass('nav_active');
});
});

// Slider
    $(function() {
      $('#slides').slidesjs({
	   width: 570,
    height: 570,
        play: {
          auto: true,
          interval: 8000,
          swap: true,
          navigation: false
        },
        pagination: {
      active: false
    }

      });
    });


$("#formular").submit(function(e) {

    var ref = $(this).find("[required]");

    $(ref).each(function(){
        if ( $(this).val() == '' )
        {
            alert("Bitte füllen Sie alle Felder aus.");

            $(this).focus();

            e.preventDefault();
            return false;
        }
    });
        return true;
});

  </script>