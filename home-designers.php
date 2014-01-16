<section id="designers" class="designers section-padding">
    <div class="row">
    <h2 class="designers__title">find out our designers</h2>

        <div class="designers__inner">
            
            <dl class="tabs tabs--designers" data-tab> 
                <dd class="active">
                    <a class="tab--designers__button" href="#panel2-1">for man</a>
                </dd> 
                <dd>
                    <a class="tab--designers__button" href="#panel2-2">for woman</a>
                </dd> 
            </dl> 

            <div class="tabs-content tabs-content--designers"> 
                <div class="content content--designers active" id="panel2-1"> 
                    <?php 
                        $args = array(
                        'orderby'          => 'name',
                        'order'            => 'ASC',
                        'limit'            => -1,
                        'category'         => ' ',
                        'exclude_category' => ' ',
                        'category_name'    => 'Designer Man',
                        'hide_invisible'   => 1,
                        'show_updated'     => 0,
                        'echo'             => 1,
                        'categorize'       => 0,
                        'title_li'         => ' ',
                        'title_before'     => '',
                        'title_after'      => '',
                        'category_orderby' => 'name',
                        'category_order'   => 'ASC',
                        'class'            => 'linkcat',
                        'category_before'  => '',
                        'category_after'   => '' );

                         wp_list_bookmarks( $args ); 
                    ?> 
                </div> 
                <div class="content content--designers" id="panel2-2"> 
                    <?php 
                        $args = array(
                        'orderby'          => 'name',
                        'order'            => 'ASC',
                        'limit'            => -1,
                        'category'         => ' ',
                        'exclude_category' => ' ',
                        'category_name'    => 'Designer Woman',
                        'hide_invisible'   => 1,
                        'show_updated'     => 0,
                        'echo'             => 1,
                        'categorize'       => 0,
                        'title_li'         => ' ',
                        'title_before'     => '',
                        'title_after'      => '',
                        'category_orderby' => 'name',
                        'category_order'   => 'ASC',
                        'class'            => 'designers__link',
                        'category_before'  => '',
                        'category_after'   => '' );

                         wp_list_bookmarks( $args ); 
                    ?> 
                </div> 
            </div>
        </div>
    </div>
</section>