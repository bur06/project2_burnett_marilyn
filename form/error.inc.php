<style type="text/css">
* {
  margin: 0;
  padding: 0;
  border: 0;
  box-sizing: border-box;
}

.container {
  max-width: 1920px;
  margin: 0 auto;
  min-height: 100vh;
  object-fit: cover;
  z-index: 90;
}

.replytext {
  text-align: center;
  margin-top: 170px;
}

body {
  font-family: 'Open Sans', helvetica, sans-serif;
  min-height: 100vh;
  object-fit: cover;
}

header a:hover {
  opacity: 50%;
  font-weight: bolder;
}

header {
  position: absolute;
  min-width: 100%;
  top: 0;
  z-index: 99;
  margin: 0 auto;
  padding: 25px;
  background-color: rgba(39, 95, 129, 1);
}

.left-side {
  display: inline-block;
  width: 15%;
  opacity: 90%;
  margin-left: 10px;
}

.right-side {
  display: inline-block;
  width: 82%;
  margin-top: 15px;
  vertical-align: top;
  text-align: right;
}

nav ul {
  list-style: none;
  white-space: nowrap;
}

nav ul li {
  display: inline-block;
}

nav ul li a {
  text-decoration: none;
  opacity: 90%;
  padding: 0px 32px;
  font-size: 1.1111em;
  font-weight: bold;
}

.navcolor li a {
  color: white;
}
</style>


<header>
  <div class="left-side">
    <a href="index.html"><img src="images/ltrmark_white.gif" alt="Quarry Logo" width="60"/></a>
  </div>

  <nav class="right-side">
    <ul class="navcolor">
      <li><a href="solutions.html">SOLUTIONS</a></li>
      <li><a href="services.html">SERVICES</a></li>
      <li><a href="company.html">COMPANY</a></li>
      <li><a href="support.html">SUPPORT</a></li>
      <li><a href="tel:+15551234567">555-123-4567</a></li>
    </ul>
  </nav>
</header>

<div class="container">
  <div class="replytext">
  	<h1>Missing fields</h1>
  	<p>Sorry, you have not completed all of the required fields.</p>
  	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

  	<ul>
  	<?php
  		for($i=0; $i<count($this->missing_required_fields); $i++){
  			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
  		}
  	?>
  	</ul>

  	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
  </div>
</div>
