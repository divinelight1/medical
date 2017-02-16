<?php

//widget's
function arphabet_widgets_init() {
    register_sidebar( array(
        'name'          => 'Logo',
        'id'            => 'logo',
        'before_widget' => '<div class="col-md-4 logo-block pull-left">',
        'after_widget'  => '</div>',

    ) );

    register_sidebar( array(
        'name'          => 'Middle Text',
        'id'            => 'middletext',
        'before_widget' => '<div class="location">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',

    ) );

    register_sidebar( array(
        'name'          => 'Right Text',
        'id'            => 'righttext',
        'before_widget' => '<div class="phone">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="head-h3" style="font-size: 28px !important;">',
        'after_title'   => '</h3>',

    ) );
}

add_action( 'widgets_init', 'arphabet_widgets_init' );


?>
