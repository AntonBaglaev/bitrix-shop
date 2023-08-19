<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>


    <button type="" class="top_header_content_menu">
        <i class="fa fa-bars"></i>
        <span>
            <img src="<?=SITE_TEMPLATE_PATH?>/img/logo_header_new.svg" alt="Bxstore">
        </span>
    </button>


<?php if (!empty($arResult)):?>
<div class="top_header_aside_menu_panel">
    <button type="" class="top_header_content_menu">
        <i class="fa fa-close"></i>
    </button>
<ul id="horizontal-multilevel-menu">

<?php
$previousLevel = 0;
foreach($arResult as

$arItem):?>

	<?php if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?php endif?>

	<?php if ($arItem["IS_PARENT"]):?>

		<?php if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li><a href="<?=$arItem["LINK"]?>" class="<?php if ($arItem["SELECTED"]):?>root-item-selected<?php else:?>root-item<?php endif?>"><?=$arItem["TEXT"]?></a>
				<ul>
		<?php else:?>
			<li<?php if ($arItem["SELECTED"]):?> class="item-selected"<?php endif?>><a href="<?=$arItem["LINK"]?>" class="parent"><?=$arItem["TEXT"]?></a>
				<ul>
		<?php endif?>

	<?php else:?>

		<?php if ($arItem["PERMISSION"] > "D"):?>

			<?php if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a></li>
			<?php else:?>
				<li<?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?php endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

</ul>
</div>
<?endif?>