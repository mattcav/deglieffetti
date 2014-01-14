<section id="social" class="social bg-black section-padding">

    <header class="row">
        <h2 class="social__title">follow us on instagram</h2>
    </header>

    <div class="row">
        <ul class="grid-1-3-5">
        
            <?php
            $url = "https://api.instagram.com/v1/users/43094411/media/recent/?access_token=43094411.cd30472.f80c2942615d42bcaaf4511649ac8687&count=15";
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            $result = curl_exec($curl);
            
            $obj=(json_decode($result));
            if($obj->data) {
                foreach ($obj->data as $data) {
                    echo '<li class="insta-pic">';
                            echo "<a class='img-popup' title=\"{$data->caption->text}\" href=\"{$data->images->standard_resolution->url}\">";

                                echo "<img class='insta-pic__img' alt=\"{$data->caption->text}\" src=\"{$data->images->low_resolution->url}\">";
                            echo "</a>";    
                  
                                echo '<p class="balance-text insta-pic__caption">';
                                    echo $caption = $data->caption->text;
                                echo '</p>';
                    echo '</li>';
                }
            }

            ?>
        </ul>
    </div>

    <section class="socials row">
        <ul class="social__buttons small-block-grid-1 large-block-grid-3">
            <li class="social-button">
                <a class="social-button__link" href="https://www.facebook.com/pages/Degli-Effetti/137203429674323">
                    facebook
                </a>
            </li>
            <li class="social-button">
                <a class="social-button__link" href="http://instagram.com/deglieffetti#">
                    instagram
                </a>
            </li>
            <li class="social-button">
                <a class="social-button__link" href="http://deglieffetti.tumblr.com/">
                    tumblr
                </a>
            </li>
        </ul>
    </section>
</section>