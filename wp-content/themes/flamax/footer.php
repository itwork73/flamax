



</div><? /* header <div class="main-layout-content"> close */ ?>


<div class="main-layout-footer">

    <div class="is-global-footer">
        <div class="wrapper">

            <div class="gf-inner">

                <div class="gf-copyright">
                    <a class="gf-meta-a state-link" href="http://renovartio.com/" rel="nofollow" target="_blank">
                        Разработано в Renovartio
                    </a>
                    <div class="gf-meta-a">
                        © Все права защищены
                    </div>
                </div>

                <div class="gf-nav">
                    <?foreach(B_DATA_ARRAY["NAV_ARRAY"] as $key=>$value):?>
                        <?
                        $activeClass = "";
                        if(str_replace('/', '', $value["href"]) == B_DATA_ARRAY["URI_ARRAY"][0]) {
                            $activeClass = " state-active";
                        }
                        ?>
                        <a class="gf-meta-c <?=$activeClass?>" href="<?=$value["href"]?>">
                            <?=$value["title"]?>
                        </a>
                    <?endforeach?>
                </div>

                <div class="gf-social">

                    <div class="is-social-list">
                        <a href="#" class="social-item" rel="nofollow" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6">
                                <path fill="#fff" d="M9.95 5.42a5.39 5.39 0 0 0-1.03-1.28l-.01-.01-.01-.01a6.19 6.19 0 0 1-.43-.45c-.1-.15-.13-.3-.07-.44.04-.12.2-.36.47-.72l.33-.47c.6-.84.87-1.37.79-1.6L9.95.38c-.02-.03-.07-.06-.16-.1a.78.78 0 0 0-.33 0h-1.6L7.79.3l-.03.02-.02.01a.24.24 0 0 0-.06.06 9.15 9.15 0 0 1-1.23 2.28l-.2.2c-.06.04-.1.06-.13.05l-.1-.02a.36.36 0 0 1-.1-.13.62.62 0 0 1-.07-.21 2.47 2.47 0 0 1-.01-.49 8.54 8.54 0 0 0 .01-.68A81.73 81.73 0 0 1 5.87.7c0-.1 0-.19-.02-.25A.88.88 0 0 0 5.8.28a.3.3 0 0 0-.11-.13.59.59 0 0 0-.18-.08 3.3 3.3 0 0 0-.7-.07c-.64 0-1.06.04-1.24.13a.7.7 0 0 0-.2.17c-.06.08-.07.12-.03.13.21.03.36.1.45.23l.03.07a2.67 2.67 0 0 1 .12.65 4.48 4.48 0 0 1-.12 1.39l-.07.12a.1.1 0 0 1-.02.02.37.37 0 0 1-.14.03c-.05 0-.11-.02-.18-.08a1.28 1.28 0 0 1-.22-.2 6.66 6.66 0 0 1-.54-.94l-.08-.17A13.93 13.93 0 0 1 2.11.54a.36.36 0 0 0-.12-.18L1.96.35a.53.53 0 0 0-.2-.08H.33c-.14 0-.24.04-.3.1L.02.41A.18.18 0 0 0 0 .5l.03.15A18.5 18.5 0 0 0 1.9 4.12a12.05 12.05 0 0 0 .52.66l.13.13a6.23 6.23 0 0 0 .9.68 2.83 2.83 0 0 0 1.44.38h.6a.4.4 0 0 0 .28-.12l.02-.03a.58.58 0 0 0 .06-.25 1.9 1.9 0 0 1 .12-.71.7.7 0 0 1 .2-.24l.04-.02c.08-.03.18 0 .3.09.1.08.21.19.31.31l.36.43c.14.15.26.27.36.35l.1.06c.08.05.17.09.28.12.11.04.2.05.3.03l1.32-.02c.14 0 .24-.02.31-.07s.12-.1.13-.15a.45.45 0 0 0 0-.19.72.72 0 0 0-.03-.14z"></path>
                            </svg>
                        </a>
                        <a href="#" class="social-item" rel="nofollow" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="5" height="9" viewBox="0 0 5 9">
                                <path fill="#fff" d="M4.81 0h-1.2C2.27 0 1.39.87 1.39 2.21v1.03H.19c-.1 0-.19.08-.19.18V4.9c0 .1.08.18.19.18h1.2v3.74c0 .1.09.18.2.18h1.57c.1 0 .18-.08.18-.18V5.08h1.41c.1 0 .2-.08.2-.18V3.42c0-.05-.03-.1-.06-.13a.2.2 0 0 0-.13-.05H3.34v-.87c0-.42.1-.63.66-.63h.81c.1 0 .19-.08.19-.18V.19C5 .09 4.92 0 4.81 0z"></path>
                            </svg>
                        </a>
                        <a href="#" class="social-item" rel="nofollow" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 10 7">
                                <path fill="#fff" d="M3.71 5.06V1.74L6.89 3.4 3.71 5.06zm6.12-3.93a1.27 1.27 0 0 0-1.08-1C7.51 0 6.25 0 5 0S2.5 0 1.26.14C.73.2.3.59.18 1.13 0 1.89 0 2.72 0 3.5s0 1.61.17 2.37c.13.54.56.93 1.08 1C2.49 7 3.75 7 5 7s2.5 0 3.74-.14c.53-.06.96-.45 1.09-.99.17-.76.17-1.59.17-2.37s0-1.61-.17-2.37z"></path>
                            </svg>
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


</div><? /* header <div class="main-layout"> close */ ?>


<div class="hidden-content">

    <div id="fb-contacts-form">
        <div class="fb-modal-default fb-modal-contact-form">

            <div class="mf-header">
                Заказать расчет
            </div>

            <div class="is-form-validation form-state-invalid" data-is="form-validation">


                <?if($_REQUEST["wp_sent_status"] == "contacts"):?>
                    <script>
                        appConfig.startupMessage.title = "Спасибо";
                        appConfig.startupMessage.message = "Мы свяжемся с Вами вближайшее время."
                    </script>
                <?endif?>

                <form method="post" action="">

                    <input type="hidden" name="wp_sent_status" value="contacts" />

                    <div class="is-columns">
                        <div class="col column-product">

                            <div class="is-form-field field-select">
                                <label>
                                  	<div class="ff-label">
        								Продукт для хранения
    								</div>
                                    <select>
                                        <option value="0" selected>Выберите</option>
                                        <option value="Пожарный запас воды">Пожарный запас воды</option>
                                        <option value="Совмещенный с питьевым запас воды">Совмещенный с питьевым запас воды</option>
                                    </select>
                                    <span class="is-select-arrow"></span>
                                </label>
                            </div>
                            <div class="is-form-field field-select">
                                <label>
                                  	<div class="ff-label">
        								Количество резервузаров
    								</div>
                                    <select>
                                        <option value="0" selected>Выберите</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="Другое">Другое</option>
                                    </select>
                                    <span class="is-select-arrow"></span>
                                </label>
                            </div>
                            <div class="is-form-field field-select">
                                <label>
                                  	<div class="ff-label">
        								Требуемый полезный объем, м³
    								</div>
                                    <select>
                                        <option value="0">Выбрать</option>
                                        <option value="100">100</option>
                                        <option value="150">150</option>
                                        <option value="200">200</option>
                                        <option value="250">250</option>
                                        <option value="300">300</option>
                                        <option value="350">350</option>
                                        <option value="400">400</option>
                                        <option value="450">450</option>
                                        <option value="500">500</option>
                                        <option value="550">550</option>
                                        <option value="600">600</option>
                                        <option value="650">650</option>
                                        <option value="700">700</option>
                                        <option value="750">750</option>
                                        <option value="800">800</option>
                                        <option value="850">850</option>
                                        <option value="900">900</option>
                                        <option value="950">950</option>
                                        <option value="1000">1000</option>
                                        <option value="1050">1050</option>
                                        <option value="1100">1100</option>
                                        <option value="1150">1150</option>
                                        <option value="1200">1200</option>
                                        <option value="1250">1250</option>
                                        <option value="1300">1300</option>
                                        <option value="1350">1350</option>
                                        <option value="1400">1400</option>
                                        <option value="1450">1450</option>
                                        <option value="1500">1500</option>
                                        <option value="Другое">Другое</option>
                                    </select>
                                    <span class="is-select-arrow"></span>
                                </label>
                            </div>
                            <div class="is-form-field field-text">
                                <label>
                                  	<div class="ff-label">
        								Регион установки резервуара
    								</div>
                                    <input name="field[region]" type="text" />
                                </label>
                            </div>


                          	<div class="is-form-label">
								Площадь под застройку
							</div>

                            <div class="is-columns gap-10">
                                <div class="col">
                                    <div class="is-form-field field-text">
                                        <label>
                                            <input name="field[name]" placeholder="Длина, м" type="text" />
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="is-form-field field-text">
                                        <label>
                                            <input name="field[name]" placeholder="Ширина, м" type="text" />
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="is-form-field field-text">
                                        <label>
                                            <input name="field[name]" placeholder="Высота, м" type="text" />
                                        </label>
                                    </div>
                                </div>
                            </div>



                          	<div class="is-form-label">
								Срок сдачи объекта
							</div>

                            <div class="is-columns gap-10">
                                <div class="col">

                                    <div class="is-form-field field-select">
                                        <label>
                                            <select>
                                                <option value="0" selected>Месяц</option>
                                                <option value="Январь">Январь</option>
                                                <option value="Февраль">Февраль</option>
                                                <option value="Март">Март</option>
                                                <option value="Апрель">Апрель</option>
                                                <option value="Май">Май</option>
                                                <option value="Июнь">Июнь</option>
                                                <option value="Июль">Июль</option>
                                                <option value="Август">Август</option>
                                                <option value="Сентябрь">Сентябрь</option>
                                                <option value="Октябрь">Октябрь</option>
                                                <option value="Ноябрь">Ноябрь</option>
                                                <option value="Декабрь">Декабрь</option>
                                            </select>
                                            <span class="is-select-arrow" style="margin-top:-20px;"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col">

                                    <div class="is-form-field field-select">
                                        <label>
                                            <select>
                                                <option value="0" selected>Год</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                            </select>
                                            <span class="is-select-arrow" style="margin-top:-20px;"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col column-person">

                            <div class="is-form-field field-text">
                                <label>
                                  	<div class="ff-label">
        								Имя *
    								</div>
                                    <input name="field[name]" type="text" data-validation='<?=json_encode([
                                        "mask"=>"text",
                                        "require"=>true,
                                        "visible"=>true,
                                        "error"=>"Обязательное поле"
                                    ])?>' />
                                </label>
                            </div>
                            <div class="is-form-field field-text">
                                <label>
                                  	<div class="ff-label">
        								Телефон *
    								</div>
                                    <input name="field[phone]" type="text" data-validation='<?=json_encode([
                                        "mask"=>"text",
                                        "require"=>true,
                                        "visible"=>true,
                                        "error"=>"Введите телефон",
                                        "cleaveMask"=>[ "phone"=>true ]
                                    ])?>' />
                                </label>
                            </div>
                            <div class="is-form-field field-text">
                                <label>
                                  	<div class="ff-label">
        								Название компании
    								</div>
                                    <input name="field[company]" placeholder="Название компании" type="text" />
                                </label>
                            </div>
                            <div class="is-form-field field-text">
                                <label>
                                  	<div class="ff-label">
        								E-mail *
    								</div>
                                    <input name="field[email]" type="text" data-validation='<?=json_encode([
                                        "mask"=>"email",
                                        "require"=>true,
                                        "visible"=>true,
                                        "error"=>"Введите корректный Email"
                                    ])?>' />
                                </label>
                            </div>

                            <div class="is-form-field field-text">
                                <label>
                                  	<div class="ff-label">
        								Комментарии
    								</div>
                                    <textarea></textarea>
                                </label>
                            </div>
                        </div>
                    </div>


                    <div class="mf-action">
                        <div class="is-form-field field-group" data-validation='<?=json_encode(["mask"=>"checkedGroup"])?>'>
                            <div class="is-form-field field-checkbox">
                                <label>
                                    <input name="field[rules]" type="checkbox" /><i></i>
                                    <span class="checkbox-label">
                                            Вы согласны с <a class="is-link" href="#">правилами обработки данных.</a>
                                        </span>
                                </label>
                            </div>
                        </div>
                        <a class="is-button-a js-form-submit" href="#">
                            Отправить
                        </a>
                    </div>




                </form>
            </div>



        </div>
    </div>
</div>



<script type="text/javascript" src="/assets/main.js?nocache=<?=rand()?>"></script>



</body>
</html>

