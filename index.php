<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- for responsive web design i.e allow mobile to start with the scale -->
<link rel="stylesheet" type="text/css" href="css/grid.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/queries.css">
<link rel="stylesheet" type="text/css" href="css/normalize.css">
<link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,100' rel='stylesheet' type='text/css'>
<title>Responsive Contact Form</title>
</head>
<body>
<section class="section_form">
        <div class="row">
            <h2>We're happy to hear from you</h2>
        </div>
        
        <div class="row">
            <form method="post" action="mailer.php" class="contact-form">

            <div class="row">
                <?php
                error_reporting( error_reporting() & ~E_NOTICE );
                if($_GET['success']==1) {
                        echo "<div class=\"form-messages success\">Thank you! Your message has been sent.</div>";
                    }
                
                if($_GET['success']==-1) {
                         echo "<div class=\"form-messages error\">Opps! something went wrong. please try again!</div>";
                    }
                ?>  
            </div>

            <div class="row">

                <div class="col span-1-of-3">
                        <label for="name">Name</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="text" name="name" id="name" placeholder="Your name" required>
                    </div>
                </div>
            
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="email">Email</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="email" name="email" id="email" placeholder="Your email" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="find-us">How did you find us?</label>
                    </div>
                    <div class="col span-2-of-3">
                        <select name="find-us" id="find-us">
                            <option value="friends" selected>Friends</option>
                            <option value="Search">Search engine</option>
                            <option value="ad">Advertisement</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="news">Newsletter?</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="checkbox" name="news" id="news" checked> Yes, Please
                    </div>
                </div>

                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="message">Drop us a line?</label>
                    </div>
                    <div class="col span-2-of-3">
                        <textarea name="message" placeholder="Your message"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col span-1-of-3">
                        <label>&nbsp;</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="submit" value="Send">
                    </div>
                </div>
            </form>
        </div> 

        <script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
        <script src="//cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script>
        <script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>

</body>

</html>
