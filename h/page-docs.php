<? $headerState=""; ?>
<? $bodyState="";  ?>

<? include($_SERVER["DOCUMENT_ROOT"] . '/h/include/header.php'); ?>

<div class="page-default">

    <div class="wrapper">


        <h1>
            Документы
        </h1>

        <div class="is-document-list">

            <?foreach(array(1,2,3,4,5) as $key => $value):?>

                <div class="dl-item">
                    <div class="dl-item-icon">
                        <span>
                            PDF
                        </span>
                    </div>
                    <div class="dl-item-preview">
                        <div class="dl-ip-header">
                            Пожарные резервуары Flamax для бизнеса
                        </div>
                        <div class="dl-ip-meta">
                            10.05.2018 (PDF, 14 МБ)
                        </div>
                    </div>
                </div>

            <?endforeach?>


        </div>

    </div>

</div>

<? include($_SERVER["DOCUMENT_ROOT"] . '/h/include/footer.php'); ?>


