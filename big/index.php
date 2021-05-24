<?php include './includes/header.php'; ?>
<div class="container">

    <section>
        <h2 class="pageID"><?= $PageID ?></h2>
        <main>
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

            // echo loadContact('simple.php'); #demonstrates a simple contact form
            echo loadContact('multiple.php'); #demonstrates multiple form elements

            ?>

        </main>
    </section>
    <!-- END LEFT COL -->

    <!-- START RIGHT COL -->
    <aside>
        <h3>Basic Website Design Cycle</h3>
        <a href="https://www.signitysolutions.com/blog/web-development-life-cycle/" target="_blank">Web Development Life Cycle: A New Methodology for Web Development</a>
        <a href="https://www.perceptionsystem.com/blog/website-building-tips/" target="_blank">Website Development Requirements Checklist 2021</a>
        <a href="https://www.monocubed.com/web-development-life-cycle/" target="_blank">A Comprehensive Guide To The 7 Phases of Web Development Life Cycle</a>
    </aside>
</div>

<?php include "./includes/footer.php"; ?>