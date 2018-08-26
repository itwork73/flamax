<? $bodyState="body-state-projects";  ?>
<? include($_SERVER["DOCUMENT_ROOT"] . '/h/include/header.php'); ?>

<div class="page-default page-projects">



    <div class="is-project-slider" data-is="project-slider">

        <div class="ps-header">
            <div class="wrapper">
                <h1>
                    Проекты
                </h1>
            </div>
        </div>

        <div class="ps-slider-parent">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?foreach(array(1,2,3,4,5,6,8,9) as $key=>$value):?>

                        <div class="swiper-slide">
                            <a class="ps-cell" href="#">
                                <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp1.jpg')"></div>
                                <div class="ps-cell-preview">
                                    <div class="ps-c-title">
                                        Leroy Merlen
                                    </div>
                                    <div class="ps-c-description">
                                        Пожарный запас воды
                                    </div>
                                </div>
                            </a>
                        </div>

                    <?endforeach?>
                </div>
            </div>

            <div class="wrapper">

                <div class="is-arrows">
                    <div class="ss-arrow ss-arrow-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="11" viewBox="0 0 22 11">
                            <path fill="#fff" d="M22 6.6H3.97l3.26 3.2L5.78 11 0 6.2V4.8L5.78 0l1.45 1.2-3.26 3.2H22z"></path>
                        </svg>
                    </div>
                    <div class="ss-arrow ss-arrow-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="11" viewBox="0 0 22 11">
                            <path fill="#fff" d="M0 4.4h18.03l-3.26-3.2L16.22 0 22 4.8v1.4L16.22 11l-1.45-1.2 3.26-3.2H0z"></path>
                        </svg>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<? include($_SERVER["DOCUMENT_ROOT"] . '/h/include/footer.php'); ?>
