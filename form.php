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
            </footer>
        </div>   
        
    </body>
</html>