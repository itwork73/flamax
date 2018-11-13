<div class="gh-dock-nav">
    <?foreach(B_DATA_ARRAY["NAV_ARRAY"] as $key=>$value):?>
        <?
        $activeClass = "";
        if(str_replace('/', '', $value["href"]) == B_DATA_ARRAY["URI_ARRAY"][0]) {
            $activeClass = " state-active";
        }
        ?>
        <a class="dn-link <?=$activeClass?>" href="<?=$value["href"]?>">
            <?=$value["title"]?>
        </a>
    <?endforeach?>
</div>

<div class="gn-dock-order">
    <a class="is-button-c" data-gclick="showOrderModal" href="#">
        Оставить заявку
    </a>
</div>

<div class="gn-dock-search">
    <div class="is-search-tools" data-is="search-tools">
        <form data-node="searchToolsForm" action="/" method="get">
            <div class="st-search-inner">
                <a class="st-search-submit" href="#" data-gclick="submitClosestForm">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
                        <path d="M1 10a9 9 0 0 1 18 0 9 9 0 0 1-18 0zm25 14l-8-8a10 10 0 1 0-18-6 10 10 0 0 0 16 8l8 8z"></path>
                    </svg>
                </a>
                <div class="st-search-input">
                    <input data-node="searchToolsInput" autocomplete="off" type="text" name="s" placeholder="Поиск по сайту">
                </div>
            </div>
        </form>
    </div>
</div>

<div class="gn-dock-lang">
    <div class="l-item state-active">
        Ru
    </div>
    <a class="l-item state-link" href="/">
        En
    </a>
</div>