<? $headerState=""; ?>
<? $bodyState="";  ?>

<? include($_SERVER["DOCUMENT_ROOT"] . '/h/include/header.php'); ?>

<div class="page-default">

    <div class="wrapper">

        <script type="text/javascript" src="//api-maps.yandex.ru/2.1/?lang=ru_RU"></script>

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
                        <? include($_SERVER["DOCUMENT_ROOT"] . '/h/include/contacts.personal.php'); ?>
                    </div>
                    <div class="is-tabs-tab">
                        <? include($_SERVER["DOCUMENT_ROOT"] . '/h/include/contacts.map.php'); ?>
                    </div>
                    <div class="is-tabs-tab">
                        <? include($_SERVER["DOCUMENT_ROOT"] . '/h/include/contacts.map.php'); ?>
                    </div>
                    <div class="is-tabs-tab">
                        <? include($_SERVER["DOCUMENT_ROOT"] . '/h/include/contacts.map.php'); ?>
                    </div>
                </div>
            </div>

        </div>


    </div>

</div>

<? include($_SERVER["DOCUMENT_ROOT"] . '/h/include/footer.php'); ?>


