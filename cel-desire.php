<section id="cel-desire" class="cel-desire">
    <div class="row">
        <h2 class="cel-desire__title">
            latest arrivals in our&nbsp;boutique
        </h2>   
        
        <ul class="cel-desire__grid">
            <?php
                $url = "https://api.instagram.com/v1/users/43094411/media/recent/?access_token=43094411.cd30472.f80c2942615d42bcaaf4511649ac8687&count=-1";
                $curl = curl_init($url);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                $result = curl_exec($curl);
                $obj=(json_decode($result));
                $i = 0; 
                foreach ($obj->data as $data) {
                    $array = $data->tags;
                    if (in_array('celine', $array) && $i < 12) {
                        $i++;

                        echo '<li class="cel-desire__pic">';
                            echo "<a class='img-popup cel-desire__link circle-to-square' title=\"{$data->caption->text}\" href=\"{$data->images->standard_resolution->url}\">";

                                echo "<img data-tag=\"{$data->tags[0]}\" class='cel-desire__img' alt=\"{$data->caption->text}\" src=\"{$data->images->standard_resolution->url}\">";
                            echo "</a>";    
                        echo '</li>';
                    }
                }
            ?>
        </ul>
    </div>
  </section>