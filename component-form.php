<div class="row component-form">
    <div class="small-12 columns">
        <h2 class="form__title">interested?</h2>
        <p class="form__text">If you want more information about an item in our site / our social network profiles, please fill following fields. We’ll reply you as soon as possibile with all information you’re searching for.</p>
    </div>

    <form id="contact-form" class="custom" action="<?php bloginfo('template_directory'); ?>/mail.php">

        <div class="row">
            <div class="large-12 columns nascondi-label">
                <label>Your name</label>
                <input id="name" class="form__input" type="text" placeholder="Your name">
            </div>

            <div class="large-12 columns nascondi-label">
                <label>Your email</label>
                <input id="email" type="email" class="form__input" placeholder="Email">
            </div>
        </div>

           
        <div class="row">
            <div class="large-12 columns nascondi-label">
                <label>Your message</label>
                <textarea id="message" class="form__input" placeholder="Your message"></textarea>
            </div>


            <div class="small-12 columns">
                <label for="checkbox1" class="aria-sopra-sotto"><input type="checkbox" id="checkbox1" checked="checked" required><span class="custom checkbox"></span> I Accept the <a target="_blank" href="<?php bloginfo('url'); ?>/privacy-policy/">Privacy Policy</a></label>

                <input id="mfp-title" type="hidden" value="inquire">
                
                <input type="hidden" name="action" value="form_submit">

                <input id="send" type="submit" class="form__input button right" value="Send">
            </div>
        </div>
    </form>
    <div id="response"></div>
</div>    
