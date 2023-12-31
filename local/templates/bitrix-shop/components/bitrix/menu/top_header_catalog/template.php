<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<nav class="top_header_catalog">
    <div class="container">
        <?php if (!empty($arResult)):?>
        <ul>
            <?php
                $previousLevel = 0;
                foreach($arResult as $arItem):?>

	            <?php if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		            <?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	            <?php endif?>

	            <?php if ($arItem["IS_PARENT"]):?>

		        <?php if ($arItem["DEPTH_LEVEL"] == 1):?>
			    <li  class="top_header_catalog_level_1 <?php if ($arItem["SELECTED"]):?> item-selected <?php endif?>">
                    <a href="<?=$arItem["LINK"]?>">
                        <?=$arItem["TEXT"]?>
                    </a>
				    <ul>
		                <?php else: ?>
                        <li class="<?php if ($arItem["SELECTED"]):?> item-selected <?php endif?>"><a href="<?=$arItem["LINK"]?>" class="parent"><?=$arItem["TEXT"]?></a>
                            <ul>
		                        <?php endif?>
	                            <?php else:?>

		                            <?php if ($arItem["PERMISSION"] > "D"):?>

			            <?php if ($arItem["DEPTH_LEVEL"] == 1):?>
				            <li class="top_header_catalog_level_1<?php if ($arItem["SELECTED"]){?> root-item-selected<?php }?>">
                                <a href="<?=$arItem["LINK"] ?>">
                                    <?=$arItem["TEXT"] ?>
                                </a>
                            </li>
			            <?php else: ?>
				            <li<?php if ($arItem["SELECTED"]):?> class="item-selected"<?php endif?>>
                                <a href="<?=$arItem["LINK"]?>">
                                    <?=$arItem["TEXT"]?>
                                </a>
                            </li>
			            <?php endif ?>

		            <?php else: ?>

			            <?php if ($arItem["DEPTH_LEVEL"] == 1):?>
				            <li><a href=""
                                class="<?php if ($arItem["SELECTED"]):?>root-item-selected<?php else:?>root-item<?php endif?>"
                                title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a>
                            </li>
			            <?php else:?>
				            <li><a href="" class="denied"
                                title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a>
                            </li>
			            <?php endif?>

		            <?php endif?>

	            <?php endif?>

	            <?php $previousLevel = $arItem["DEPTH_LEVEL"];?>

                <?php endforeach?>

                <?php if ($previousLevel > 1)://close last item tags?>
	                <?=str_repeat("</ul></li>", ($previousLevel-1) );?>
                <?php endif?>

            </ul>

            <?php endif ?>
    </div>
</nav>
