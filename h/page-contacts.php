<? $bodyState="";  ?>
<? include($_SERVER["DOCUMENT_ROOT"] . '/h/include/header.php'); ?>

<div class="page-default">

    <div class="wrapper is-style">


        <div class="is-page-contacts" data-is="page-contacts">


            <div class="is-header-layout">
                <div class="hl-left">
                    <h1>
                        Контакты
                    </h1>
                </div>
                <div class="hl-right">
                    <div class="is-tabs-nav" data-node="contactsTabs" data-tab-body="tabs-body-a">
                        <a class="is-tabs-link" href="#">
                            Сотрудники
                        </a>
                        <a class="is-tabs-link" href="#">
                            Центральный офис
                        </a>
                        <a class="is-tabs-link" href="#">
                            Казанский офис
                        </a>
                        <a class="is-tabs-link" href="#">
                            Склад
                        </a>
                    </div>
                </div>
            </div>


            <div class="is-tabs-container tabs-body-a">
                <div class="is-tabs-wrapper">
                    <div class="is-tabs-tab">
                        <div class="is-personal-list">
                            <div class="is-grid">
                                <?foreach(array(1,2,3,4,5) as $key => $value):?>

                                    <div class="grid-item">
                                        <div class="personal-item">
                                            <div class="pi-image">
                                                <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp2.jpg')"></div>
                                            </div>
                                            <div class="pi-preview">
                                                <div class="pi-name">
                                                    Николаева Мария
                                                </div>
                                                <div class="pi-role">
                                                    Менеджер по работе с клиентами
                                                </div>
                                                <div class="pi-details">
                                                    Cпециалист по обработке есплатный звонок из любого региона РФ, а также с мобильного телефона.
                                                </div>
                                                <div class="pi-links">
                                                    <a href="#">
                                                        +7 999 120-00-11
                                                    </a>
                                                    <a href="#">
                                                        nikolaeva.m@flamax.ru
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                <?endforeach?>
                            </div>
                        </div>
                    </div>
                    <div class="is-tabs-tab">
                        <p>
                            Филогенез, на первый взгляд, прочно начинает онтогенез речи в силу которого смешивает субъективное и объективное, переносит свои внутренние побуждения на реальные связи вещей. Эскапизм сложен. Анима наблюдаема. Самонаблюдение интегрирует филогенез.
                        </p>

                        <p>
                            Интеракционизм, например, отражает возрастной интеракционизм, в полном соответствии с основными законами развития человека. Акцентуированная личность представляет собой конфликтный гештальт. Автоматизм представляет собой автоматизм.
                        </p>
                        <p>
                            Филогенез, на первый взгляд, прочно начинает онтогенез речи в силу которого смешивает субъективное и объективное, переносит свои внутренние побуждения на реальные связи вещей. Эскапизм сложен. Анима наблюдаема. Самонаблюдение интегрирует филогенез.
                        </p>
                    </div>
                    <div class="is-tabs-tab">

                        <p>
                            Интеракционизм, например, отражает возрастной интеракционизм, в полном соответствии с основными законами развития человека. Акцентуированная личность представляет собой конфликтный гештальт. Автоматизм представляет собой автоматизм.
                        </p>
                    </div>
                </div>
            </div>

        </div>


    </div>

</div>

<? include($_SERVER["DOCUMENT_ROOT"] . '/h/include/footer.php'); ?>


