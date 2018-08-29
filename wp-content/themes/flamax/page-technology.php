<?php
/**
 * Template Name: Технология
 */
?>

<?
// custom state
$bCustomState = array(
    "body"=>"body-state-technology",
    "header"=>"technology"
);

get_header();
?>



<div class="page-default page-technology">

<div class="is-technology-page" data-is="technology-page">

    <div class="swiper-container" data-node="swiperMain">
        <div class="swiper-wrapper sw-wrapper-w">
            <div class="swiper-slide">
                технология
            </div>
            <div class="swiper-slide">
                производство и монтаж
                <div class="swiper-container" data-node="swiperSub">
                    <div class="swiper-wrapper sw-wrapper-h">
                        <div class="swiper-slide">
                            производство и монтаж<br/>
                            01
                        </div>
                        <div class="swiper-slide">
                            производство и монтаж<br/>
                            02
                        </div>
                        <div class="swiper-slide">
                            производство и монтаж<br/>
                            03
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                варианты планировки
            </div>
            <div class="swiper-slide" >
                почему flamax
                <div class="swiper-container" data-node="swiperSub">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            почему flamax<br/>
                            01
                        </div>
                        <div class="swiper-slide">
                            почему flamax<br/>
                            02
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                видеопрезентация
            </div>
            <div class="swiper-slide">
                наши клиенты
            </div>
        </div>
    </div>

</div>

</div>
<?
    get_footer();
?>
