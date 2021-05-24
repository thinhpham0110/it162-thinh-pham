<!DOCTYPE html>
<html lang="en">

<?php include "./includes/head.php"; ?>

<body>

    <main class="wrapper">
        <?php include './includes/navbar.php'; ?>

        <div class="bg-an">

            <video playsInline autoPlay muted loop poster="https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/items/1263950/d7d28a52bd829aeee6989e58c3214e6c1cdbc5e3.jpg">
                <source src="https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/items/925570/cb6636b34192467ae8890cc75ca3bf077d81b7f6.webm" type="video/webm" />
                <source src="https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/items/925570/521322a5a1692371c20475b3efba74400038d44c.mp4" type="video/mp4">
            </video>
        </div>
        <div class="container">
            <section>
                <h2 class="pageID">Contact Us?</h2>


                <main role="main">
                    <?php
                    /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

                    include 'includes/contact_include.php'; #site keys & code here

                    $toAddress = "heaty566@gmail.com";  //place your/your client's email address here
                    $toName = "Pham Thinh"; //place your client's name here
                    $website = "kainesv.site";  //place NAME of your client's website

                    echo loadContact('simple.php'); #demonstrates a simple contact form
                    //echo loadContact('multiple.php');#demonstrates multiple form elements

                    ?>

                </main>

            </section>


        </div>

        <?php include "./includes/footer.php"; ?>

    </main>
    <?php include "./includes/script.php"; ?>
</body>

</html>