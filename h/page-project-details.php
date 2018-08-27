<? $headerState="projectsList"; ?>
<? $bodyState="body-state-projects-list";  ?>

<? include($_SERVER["DOCUMENT_ROOT"] . '/h/include/header.php'); ?>


<div class="is-project-lead-overlay"></div>


<div class="page-default page-projects-list">


    <div class="is-project-lead">
        <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp1.jpg')"></div>
        <div class="project-lead-inner">
            <div class="wrapper">


                <div class="project-lead-back">
                    <a href="/h/page-projects.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="11" viewBox="0 0 22 11">
                            <path d="M22 6.6H3.97l3.26 3.2L5.78 11 0 6.2V4.8L5.78 0l1.45 1.2-3.26 3.2H22z"></path>
                        </svg>
                        Все проекты
                    </a>
                </div>

                <div class="project-lead-content">

                    <div class="ss-title">
                        <div class="ss-title-text">
                            Leroy Merlen
                        </div>
                        <div class="ss-title-volume">
                            2200 м³
                        </div>
                    </div>
                    <div class="ss-description">
                        Пожарный запас воды
                    </div>
                </div>



                <div class="project-lead-nav">
                    <a href="#" data-gclick="navTo" data-value='<?=json_encode(array(
                            "target"=>"description",
                            "shift"=>"-30"
                        )
                    )?>'>
                        Описание проекта
                    </a>
                    <a href="#" data-gclick="navTo" data-value='<?=json_encode(array(
                            "target"=>"counters",
                            "shift"=>"50"
                        )
                    )?>'>
                        Проект в цифрах
                    </a>
                    <a href="#" data-gclick="navTo" data-value='<?=json_encode(array(
                            "target"=>"similar",
                            "shift"=>"-30"
                        )
                    )?>'>
                        Похожие проекты
                    </a>
                </div>

            </div>
         </div>
        <div class="is-mouse-play-icon" data-gclick="navTo" data-value='<?=json_encode(array(
                "target"=>"description",
                "shift"=>"-30"
            )
        )?>'></div>
    </div>


    <div class="wrapper is-style-list" data-nav-target="description">
        <h2>
            Описание проекта
        </h2>

        <h4>
            Заказчик:
        </h4>

        <p>
            ООО "Реконструкция", конечный выгодоприобретатель – завод Pepsi Bottling Group,  один из крупнейших игроков рынка безалкогольных напитков в России и в мире. Компания постоянно модернизирует и наращивает производственные мощности, оснащая производство современными скоростными линиями, расширяя складские помещения и налаживая широкую дистрибуцию.
        </p>

        <div class="is-hr"></div>

        <h4>
            Выполненные работы:
        </h4>

        <p>
            Проектирование, <a href="#">производство</a>, поставку, монтаж и испытания двух резервуаров по 1100 кубометров каждый. Резервуары оснащены <a href="#">системой воздухообмена</a>, обвязкой, системой автоматизации пополнения водой и системой подогрева воды.
        </p>

        <div class="is-hr"></div>
    </div>

    <div class="is-wide-slider" data-is="wide-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <?foreach(array(1,2,3,4,5,6) as $key => $value):?>

                    <div class="swiper-slide">
                        <div class="ws-cell">
                            <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp4.jpg');"></div>
                        </div>
                    </div>

                <?endforeach?>

            </div>
        </div>

        <a class="ws-arrow ws-arrow-prev" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="11" viewBox="0 0 22 11">
                <path fill="#fff" d="M22 6.6H3.97l3.26 3.2L5.78 11 0 6.2V4.8L5.78 0l1.45 1.2-3.26 3.2H22z"></path>
            </svg>
        </a>

        <a class="ws-arrow ws-arrow-next" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="11" viewBox="0 0 22 11">
                <path fill="#fff" d="M0 4.4h18.03l-3.26-3.2L16.22 0 22 4.8v1.4L16.22 11l-1.45-1.2 3.26-3.2H0z"></path>
            </svg>
        </a>
    </div>

    <div class="wrapper">

        <p>
            Особенностью данного проекта явилось требование, чтобы техническое решение соответствовало и нормам пожаробезопасности Российской федерации, и требованиям FM Global, международной компании по промышленно имущественному страхованию.
        </p>

        <p>
            В пересечении двух видов норм имелись расхождения, поэтому специалистам компании FLAMAX приходилось эти моменты нивелировать и приходить к коллегиальному заключению для дальнейшей реализации того или иного технического решения.
        </p>

        <p>
            Большую часть времени в реализации данного объекта занял процесс проектирования, т.к. резервуары, насосная станция и прочие системы в общей концепции имели нестандартные параметры будущей эксплуатации. И, хотя проект в части некоторых подсистем был типовой, в большей степени он был разработан под конкретные требования и нужды заказчика. В связи с этим, нам приходилось вести много согласований, вплоть до детализации. Например, мы подробно обсуждали с генеральным заказчиком, техническим заказчиком и конечным выгодоприобретателем принцип герметизации кровельных швов с предварительным испытанием на водонепроницаемость. Кроме того, запас воды, хранящийся в резервуарах, был совмещенный, поэтому было много разных требований как со стороны контролирующих органов за реализацией противопожарной системы, так и со стороны контроля за реализацией системы подачи чистой воды для производственных нужд предприятия.
        </p>

        <p>
            В ходе реализации проекта был внесен ряд изменений, т.к. смежные с резервуарами подсистемы всегда могут иметь отклонения от проектного решения в ходе монтажа. Все эти измненения согласовывалось дополнительно и, зачастую, «на ходу».
        </p>

        <p>
            Несмотря на технические сложности и длительное согласование проекта, оборудование нами было поставлено день в день, и монтаж сборных стальных резервуаров FLAMAX был завершен досрочно.
        </p>


        <div class="is-hr"></div>

        <div class="is-project-counters" data-nav-target="counters">

            <div class="pc-header">
                <h2>
                    Проект в цифрах
                </h2>
            </div>

            <div class="pc-list">

                <div class="pc-item">
                    <div class="pc-value">
                        2016
                    </div>
                    <div class="pc-key">
                        Год строительства
                    </div>
                </div>

                <div class="pc-item">
                    <div class="pc-value">
                        02
                    </div>
                    <div class="pc-key">
                        Резервуара –<br/>
                        количество емкостей
                    </div>
                </div>

                <div class="pc-item">
                    <div class="pc-value">
                        2200
                    </div>
                    <div class="pc-key">
                        Кубометров –<br/>
                        общий объем
                    </div>
                </div>

                <div class="pc-item">
                    <div class="pc-value">
                        20
                    </div>
                    <div class="pc-key">
                        Дней – сроки<br/>
                        выполнения работ
                    </div>
                </div>

            </div>
        </div>

        <div class="is-project-similar" data-nav-target="similar">

            <h2>
                Похожие проекты
            </h2>

            <div class="pr-similar-list">
                <div class="is-grid">

                    <div class="grid-item">
                        <a class="pr-similar-cell" href="/h/page-project-details.php">
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

                    <div class="grid-item">
                        <a class="pr-similar-cell" href="/h/page-project-details.php">
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

                </div>
            </div>


            <div class="pr-simial-action">
                <a class="is-button-a" href="/h/page-projects.php">
                    Все проекты
                </a>
            </div>

        </div>

    </div>


</div>

<? include($_SERVER["DOCUMENT_ROOT"] . '/h/include/footer.php'); ?>
