<? $headerState=""; ?>
<? $bodyState="";  ?>

<? include($_SERVER["DOCUMENT_ROOT"] . '/h/include/header.php'); ?>

<div class="page-default">

    <div class="wrapper is-style">

        <h1>
            Новости
        </h1>

        <div class="is-news-list">
            <div class="is-grid">

                <?foreach(array(1,2,3,4,5,6) as $key => $value):?>

                    <div class="grid-item">
                        <a class="news-item" href="#">
                            <div class="ni-image">
                                <div class="full-size img-cover" style="background-image:url('/assets/img/temp/temp1.jpg');"></div>
                            </div>
                            <div class="ni-date">
                                11 августа 2018
                            </div>
                            <div class="ni-header">
                                Компания Flamax выходит на новый уровень взаимодействия с клиентами
                            </div>
                            <div class="ni-preview">
                                В целях повышения качества работы с клиентами мы запускаем бессрочный марафон ответов и вопросов, в ходе которого будем принимать вопросы, связанные с проектированием, установкой, эксплуатацией и обслуживанием резервуаров для хранения воды объемом от 100 до 3000 м³.
                            </div>
                        </a>
                    </div>

                <?endforeach?>

            </div>
        </div>

    </div>

</div>

<? include($_SERVER["DOCUMENT_ROOT"] . '/h/include/footer.php'); ?>


