<!DOCTYPE html>
<html>
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
                <h2 class="pageID"><?= $PageID ?></h2>
                <img class="image image-desktop" src="images/desktop.jpg" alt="one of the stop in my vacation in California" />
                <img class="image image-tablet" src="images/tablet.jpg" alt="one of the stop in my vacation in California" />
                <img class="image image-mobile" src="images/phone.jpg" alt="one of the stop in my vacation in California" />

            </section>

            <aside>
                <h2 class="subheader">A little about me!</h2>

                <p>
                    Hello, I'm Thinh and I'm from Viet Nam. You can call me Amy if you think "Thinh" is hard to pronounce. My hobbies are
                    listening to music, watching movies, traveling, cooking and making tea. I also love cats and dogs.
                </p>

                <p>
                    I always have interests in web design, especially fashion web pages; so my dream is becoming a web developer. I have 2
                    years experience with ReactJS, NodeJs with many projects.
                </p>

            </aside>
        </div>

        <?php include "./includes/footer.php"; ?>

    </main>
    <?php include "./includes/script.php"; ?>
</body>

</html>