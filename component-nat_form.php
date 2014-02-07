<form id="nl-form" class="nl-form" action="<?php bloginfo('template_directory'); ?>/nl-mail.php">
    <!-- <h4 class="nl-title">SEND A MESSAGE</h4> -->
    Dear Degli Effetti, <br>
    I would like to have some information<br>
    about <?php single_post_title(); ?> from you. <br>
    Please, contact me at <input type="email" id="email" name="email" value="" placeholder="youremail@domain.com" data-subline="Write here your email,<br> so we can contact you."/>
    <br><br>
    Sincerely,<br>
    <input type="text" id="username" name="username" value="" placeholder="your name" data-subline="Write here your name,<br> so we can take care of you."/>
    
    <br><br>

    <div class="nl-submit-wrap">
        <button id="send" class="button small nat-form__button" type="submit">Send the message</button>
    </div>
    <div class="nl-overlay"></div>
    <input type="hidden" name="nl-designer" id="nl-designer" value="<?php single_post_title(); ?>">
</form>

<div id="response"></div>