<<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ASC Response</title>

        <!-- link to favicon -->
        <link rel="icon" href="images/favicon.ico">

        <!-- link to sytle.css -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Qwitcher+Grypen:wght@700&display=swap" rel="stylesheet">
    </head>

    <!-- Main Content -->
    <body>
        <div class="container">
            <header>
                <figure class="navleft">
                <a href="index.html"><img src="images/sunlogo.svg" alt="ASC Logo" title="Sun Logo" width="140"/></a>
                </figure>
                <nav id="navright">
                    <label for="hamburger">&#9776;</label>
                    <input type="checkbox" id="hamburger"/>
                    <div id="hamitems">
                        <a href="index.html">HOME</a>
                        <a href="events.html">EVENTS</a>
                        <a href="about.html">ABOUT</a>
                        <a href="contact.html">CONTACT</a>
                    </div>
                </nav>

                <h1>Arlington Senior Center</h1>
            </header>

			<main>
					<?

					// From processing takes place here. message displayed here too
					require('form/form.class.php');
					$form = new Form();
					$form->processForm(

						'mgburnett.com' // Put you mail domain here
						,
						'ASC Contact Form' // Put your site name / form name here
						,
						'burnett.marilyn@ufl.edu' // Where will the form notification be sent?
						,
						'noreply@mgburnett.com' // This what the form FROM: address wil be, if the form submissions doesn't contain an email field

					);


					?>
			</main>

			<footer>
                <nav class="ftrnav">
                    <ul>
                        <li><a href="calendar.html">Calendar</a></li>
                        <li><a href="fitness.html">Fitness</a></li>
                        <li><a href="learning.html">Learning</a></li>
                        <li><a href="policies.html">Policies</a></li>
                        <li><a href="social.html">Social</a></li>
                    </ul>            
                </nav>
                <p>&copy; 2022 ASC</p>
                <ul class="byline">
                    <li>&nbsp;&nbsp;Arlington Senior Center&nbsp;&nbsp;</li>
                    <li>&nbsp;&nbsp;6265 Chester Street&nbsp;&nbsp;</li>
                    <li>&nbsp;&nbsp;Arlington, Tennessee 38002&nbsp;&nbsp;</li>
                    <li>&nbsp;&nbsp;<a href="tel:9018677698">(901) 867&#8209;7698</a>&nbsp;&nbsp;</li>
                </ul>
            </footer>
        </div>   
        
    </body>
</html>