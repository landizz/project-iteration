<?php include_once "header.php";?>


<div name="main_body_content" id="main_body_content">


</div>

<?php include_once "footer.php";?>

<body>
    <div class="main_nav_content">

    <div id="main_nav_content_opening">
      <p>Mon - Fri<br>11am - 21pm</p>
           
        <p>Sat - Sun<br>11am - 22pm</p>
    </div>

        <nav>
            <ul>
                <li >
                    <a href="index.php">Homepage</a>
                </li>
                <li>
                    <a href="about.php">About Us</a>
                </li>
                <li>
                    <a id="active" href="contact.php">Contact Us</a>
                </li>

            </ul>
        </nav>
    </div>

    <div id="contact_form_body">
        <form method="POST">
            <label>Firstname</label><br>
            <input type="text">
            <br>

            <label>Lastname</label><br>
            <input type="text">
            <br>

            <label>Email</label><br>
            <input type="email">
            <br>

            <label>Message</label><br>
            <textarea></textarea>
            <br>

            <input type="submit" value="Send">
        </form>

    </div>

    <div id="reviews">

    </div>

    <div id="google_map">


    </div>