
<!doctype html>
<html class="h-100" lang="en">

  <head>
      <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta name="description" content="A well made and handcrafted Bootstrap 5 template">
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="96x96" href="img/favicon.png">
  <meta name="author" content="DOOMTOONS">
  <meta name="generator" content="Eleventy v2.0.0">
  <meta name="HandheldFriendly" content="true">
  <title>Verdict Supply - Tracking</title>
  <link rel="stylesheet" href="css/theme.min.css">

   <style>

/* inter-300 - latin */
@font-face {
  font-family: 'Inter';
  font-style: normal;
  font-weight: 300;
  font-display: swap;
  src: local(''),
       url('fonts/inter-v12-latin-300.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
       url('fonts/inter-v12-latin-300.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
}

/* inter-400 - latin */
@font-face {
  font-family: 'Inter';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: local(''),
       url('fonts/inter-v12-latin-regular.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
       url('fonts/inter-v12-latin-regular.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
}

@font-face {
  font-family: 'Inter';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: local(''),
       url('fonts/inter-v12-latin-500.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
       url('fonts/inter-v12-latin-500.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
}
@font-face {
  font-family: 'Inter';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: local(''),
       url('fonts/inter-v12-latin-700.woff2') format('woff2'), /* Chrome 26+, Opera 23+, Firefox 39+ */
       url('fonts/inter-v12-latin-700.woff') format('woff'); /* Chrome 6+, Firefox 3.6+, IE 9+, Safari 5.1+ */
}

</style>


  </head>

  <body class="bg-black text-white mt-0" data-bs-spy="scroll" data-bs-target="#navScroll">

    <nav id="navScroll" class="navbar navbar-dark bg-black fixed-top px-vw-5" tabindex="0">
  <div class="container">
    <a class="navbar-brand pe-md-4 fs-4 col-12 col-md-auto text-center" href="index.php">
    <!--<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-stack" viewBox="0 0 16 16">
    <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
    <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
  </svg>-->
  <!--<span class="ms-md-1 mt-1 fw-bolder me-md-5">Verdict Supply</span>-->
  <img src="img/verdict_logo_b.png" width="200" height="75">
</a>

      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 list-group list-group-horizontal">
      <li class="nav-item">
  <a class="nav-link fs-5" href="index.php" aria-label="Homepage">
    Home
  </a>
</li>
<li class="nav-item">
  <a class="nav-link fs-5" href="shop.php" aria-label="The Verdict Shop">
    Shop
  </a>
</li>
<li class="nav-item">
  <a class="nav-link fs-5" href="mission.php" aria-label="A system message page">
    Our Mission
  </a>
</li>

    </ul>
      <!--<a href="https://templatedeck.com/klar-html-template.html" aria-label="Download this template" class="btn btn-outline-light">
        Connect with Us--->
      </a>
</div>
</nav>

    <main>
      <div class="container">
      
  <div class="row d-flex justify-content-center py-vh-5 pb-0">
    <div class="col-12 col-lg-10 col-xl-8">
      <div class="row">
        <div class="col-12">
           <h1 class="display-1 fw-bold" style="padding-top: 150px;">Tracking</h1>
		   <script>
		   function trackNow() {
		   	var x = document.getElementById("t-num").value;
		   	window.open("https://www.aftership.com/track/"+x);
		   	}
		   
		   </script>
           <form action="" onsubmit="trackNow();">
           	 <br>
             <label for="fname" style="float:left;">Tracking number: &nbsp;</label>
             <input type="text" style="float:left;" id="t-num" name="t-num" value=""><br><br>
             <input type="submit" value="Track" style="float: right;">
           </form> 
          <p class="lead border-top pt-5 mt-5" data-aos="fade-up"><a href="https://my.spreadshirt.com/orders">Don't have a tracking number?</a>
          </p>

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 py-vh-2">
      
      <!--<img src="img/webp/abstract18.webp" width="1446" height="982" alt="abstract image" class="img-fluid position-relative rounded-5 shadow" data-aos="zoom-up">-->
    </main>

<footer class="bg-black border-top border-dark">
  <div class="container py-vh-4 text-secondary fw-lighter">
    <div class="row">
      <div class="col-12 col-lg-5 py-4 text-center text-lg-start">
            <a class="navbar-brand pe-md-4 fs-4 col-12 col-md-auto text-center" href="index.php">
  <!--<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-stack" viewBox="0 0 16 16">
    <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
    <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
  </svg>-->
   <img src="img/verdict_logo_b.png" width="200" height="75">
</a>

      </div>
      <div class="col border-end border-dark">
        <span class="h6">Verdict</span>
<ul class="nav flex-column">
  <li class="nav-item">
    <a href="about.php" class="link-fancy link-fancy-light">About Us</a>
  </li>
  <li class="nav-item">
    <a href="mission.php" class="link-fancy link-fancy-light">Our Mission</a>
  </li>
  <li class="nav-item">
    <a href="contact.php" class="link-fancy link-fancy-light">Contact</a>
  </li>
</ul>
      </div>
      <div class="col border-end border-dark">
                <span class="h6">Corporate</span>
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a href="careers.php" class="link-fancy link-fancy-light">Careers</a>
                  </li>
                  <li class="nav-item">
                    <a href="wholesale.php" class="link-fancy link-fancy-light">Resale</a>
                  </li>
                  <li class="nav-item">
                    <a href="legal.php" class="link-fancy link-fancy-light">Legal</a>
                  </li>
                </ul>
      </div>
      <div class="col">
                <span class="h6">Orders</span>
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a href="track.php" class="link-fancy link-fancy-light">Tracking</a>
                  </li>
                  <li class="nav-item">
                    <a href="refunds.php" class="link-fancy link-fancy-light">Refunds</a>
                  </li>
                  <li class="nav-item">
                    <a href="contact.php" class="link-fancy link-fancy-light">Help</a>
                  </li>
                </ul>
      </div>
    </div>
  </div>
  <div class="container text-center small py-vh-2 border-top border-dark">&copy; <?php echo date("Y"); ?>
    Verdict Supply Co.
  </div>
</footer>



<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/aos.js"></script>
<script>
AOS.init({
 duration: 800, // values from 0 to 3000, with step 50ms
});
</script>
<script>
  let scrollpos = window.scrollY
  const header = document.querySelector(".navbar")
  const header_height = header.offsetHeight

  const add_class_on_scroll = () => header.classList.add("scrolled", "shadow-sm")
  const remove_class_on_scroll = () => header.classList.remove("scrolled", "shadow-sm")

  window.addEventListener('scroll', function() {
    scrollpos = window.scrollY;

    if (scrollpos >= header_height) { add_class_on_scroll() }
    else { remove_class_on_scroll() }

    console.log(scrollpos)
  })
</script>

  </body>
</html>
