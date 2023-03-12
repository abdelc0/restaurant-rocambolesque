<link rel="stylesheet" href="/css/footer.css">
<hr>

<div class="footer">
    <div class="contain">
        <div class="col">
            <h1>product</h1>
            <ul>
                <li>Studiekeuze-events</li>
                <li>Onderwijsboulevard</li>
                <li>Click, onze studiekeuzetool</li> 
                <li>Schoolvakanties</li>
            </ul>
        </div>
        <div class="col">
            <h1>Snel naar</h1>
            <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/overviews/menu">Menu</a></li>
          <li><a href="/homepages/about">About</a></li>
          <li><a href="/homepages/contact">Contact</a></li>
          <li><a href="/homepages/faq">FAQ</a></li>
          <?php
            // Check if the user id is set.
            if (isset($_SESSION['user_id'])) {
                // Require Registration so we can fetch the role.
                require_once APPROOT . '/models/Registration.php';

                // Create new instance of Registration
                $lala = new Registration();

                // Get the role
                $user = $lala->getRole();

                // Create role variable
                $role = $user->role;
            }

            if (isset($role)) {
                echo '<li><a href="' . URLROOT . '/reservation/overview">Reservatie overzicht</a></li>';

                if ($role == 'admin') {
                    // Show the admin links
                   // echo '<a href="' . URLROOT . '/enquetes/index">Manage enquetes</a>';
                    echo '<li><a href="' . URLROOT . '/accounts/index">Manage accounts</a></li>';
                }

                echo '<li><a href="' . URLROOT . '/registrations/logout">Logout</a></li>';
            } else {
                echo '<li><a href="' . URLROOT . '/registrations/login">Login</a></li>';
                echo '<li><a href="' . URLROOT . '/registrations/register">Register</a></li>';
            }
            ?>
            </ul>
        </div>
        <div class="col">
            <h1>Praktisch</h1>
            <ul>
                <li>Ziekmelden</li>
                <li>Veelgestelde vragen coronavirus</li>
                <li>Informatie voor bedrijven</li>
                <li>Maatwerktrajecten zorg</li>
            </ul>
        </div>
        <div class="col">
            <h1>Contactgegevens</h1>
            <ul>
                <li>030 - 28 15 100</li>
                <li>06 - 257 050 51 (WhatsApp)</li>
                <li>info@mboutrecht.nl</li>
            </ul>
        </div>
        <div class="col">
            <h1>Support</h1>
            <ul>
                <li>Contact us</li>
                <li>Web chat</li>
                <li>Open ticket</li>
            </ul>
        </div>
        <div class="col social">
            <h1>Social</h1>
            <ul>
                <a href="https://facebook.com" target="_blank">
                    <div class="fb">

                        <img src="https://rocka.co/images/icons/ic_facebook.svg">
                    </div>
                </a>
                <a href="https://twitter.com" target="_blank">
                    <div class="tw">

                        <img src="https://rocka.co/images/icons/ic_twitter.svg">
                    </div>
                </a>
                <a href="https://linkedin.com" target="_blank">
                    <div class="in">

                        <img src="https://rocka.co/images/icons/ic_linkedin.svg">
                    </div>
                </a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- END OF FOOTER -->
</footer>