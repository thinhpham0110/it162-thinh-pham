<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './includes/header.php' ?>
    <link rel="stylesheet" href="./style/contact.min.css">
</head>

<body>
    <?php include './includes/navbar.php' ?>
    <div class="">

        <?php
        include 'includes/contact/contact_include.php'; #site keys & code here
        $toAddress = "heaty566@gmail.com";  //place your/your client's email address here
        $toName = "Pham Thinh"; //place your client's name here
        $website = "kainesv.site";  //place NAME of your client's website
        echo loadContact('multiple.php'); #demonstrates multiple form elements
        ?>
    </div>
    <?php include './includes/footer.php' ?>
</body>

</html>