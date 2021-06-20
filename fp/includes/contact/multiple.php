<?php

/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>

<!-- START HTML FORM -->
<div class="form__container">

    <form class="form__wrapper" action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="form__group">
            <label class="form__label">Name</label>
            <input class="form__input" type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" autofocus />
        </div>
        <div class="form__group">
            <label class="form__label">Email</label>
            <input class="form__input" type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
        </div>
        <!-- below change the HTML to your form elements - only 'Name' & 'Email' (above) are significant -->
        <div class="form__group">
            <label class="form__label">
                How Did You Hear About Us?
            </label>
            <select class="form__input" name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required" tabindex="30">
                <option value="">Choose How You Heard</option>
                <option value="Phone">Phone</option>
                <option value="Web">Web</option>
                <option value="Magazine">Magazine</option>
                <option value="A Friend">A Friend</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div class="form__group">
            <fieldset>
                <legend>What is your favorite?</legend>
                <input type="checkbox" name="Interested_In[]" value="ORIGINAL FLAVOR FRESH TEA" tabindex="40" />ORIGINAL FLAVOR FRESH TEA<br />
                <input type="checkbox" name="Interested_In[]" value="MILK TEA SERIES" />MILK TEA SERIES<br />
                <input type="checkbox" name="Interested_In[]" value="MELLOW LATTE" />MELLOW LATTE<br />
                <input type="checkbox" name="Interested_In[]" value="OVER SPECIALTIES" />OVER SPECIALTIES<br />
                <input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />
            </fieldset>
        </div>

        <div class="form__group">
            <label>Would you like to create new website?</label>
            <fieldset>
                <input type="radio" name="Join_Mailing_List?" value="Yes" required="required" title="Mailing list is required" tabindex="50" /> Yes <br />
                <input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
            </fieldset>
        </div>
        <div class="form__group">
            <label class="form__label">Comments</label>
            <textarea class="form__input" name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="60"></textarea>
        </div>
        <div class="g-recaptcha form__group" data-sitekey="<?= $siteKey; ?>"></div>
        <div>
            <input class="form__btn" type="submit" value="Submit" />
        </div>
    </form>
</div>
<!-- END HTML FORM -->