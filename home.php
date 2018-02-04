<?php
get_header(); ?>

    <section class="about-us">
        <div class="container">
            <div class="order">
                <div class="order-main">
                    <h2><?php echo get_theme_mod('SecondHeader'); ?></h2>
                    <p class="text-order"><?php echo get_theme_mod('TextAbout'); ?></p>
                </div>
                <div class="number">01</div>
            </div>
            <div class="clearfix">
                <div class="history">
                    <h3><?php echo get_theme_mod('HeaderHistory'); ?></h3>
                    <dl class="history-year clearfix">
                        <dt>2016 -</dt>
                        <dd>In hac habitasse platea dictumst Nunc ultricies iaculis luctus Aliquam eget eros eget sapien
                            dictum.
                        </dd>
                        <dt>2015 -</dt>
                        <dd>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor.</dd>
                        <dt>2014 -</dt>
                        <dd>In hac habitasse platea dictumst Nunc ultricies iaculis luctus Aliquam eget eros eget
                            sapien.
                        </dd>
                    </dl>
                </div>
                <div class="expertise">
                    <h3><?php echo get_theme_mod('HeaderExpertise'); ?></h3>
                    <p><?php echo get_theme_mod('TextExpertise'); ?></p>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();

