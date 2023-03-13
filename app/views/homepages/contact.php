<link rel="stylesheet" href="/css/contact.css">

<?php

// If $data['error'] is set, show the error message
if (isset($data['error'])) {
    echo "<p class='error'>" . $data['error'] . "</p>";
} else if (isset($data['success'])) {
    echo "<p class='success'>" . $data['success'] . "</p>";
}
?>

<body>
    <section>
        <div class="wrapper">
            <form class="form" action="<?= URLROOT ?>/homepages/contact" method="post">
                <div class="pageTitle title">Contact</div>
                <input type="text" name="name" class="name formEntry" placeholder="Naam" required />
                <input type="text" name="surname" class="surname formEntry" placeholder="Achternaam" required />
                <input type="email" name="email" class="email formEntry" placeholder="Email" required />
                <input type="tel" name="phone" class="phone formEntry" placeholder="Telefoonnummer" />
                <textarea tyep="text" name="message" class="message formEntry" placeholder="Uw bericht" required></textarea>

                <button type="submit" class="submit formEntry">Verzenden</button>
            </form>
        </div>
    </section>
</body>