<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->createFrame();
$ClientID = 'navigation_'.$arResult['NavNum'];

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}
?>
<div class="pagination-left">

<ul>
<?

if($arResult["bDescPageNumbering"] === true)
{
	// to show always first and last pages
	$arResult["nStartPage"] = $arResult["NavPageCount"];
	$arResult["nEndPage"] = 1;

	$sPrevHref = '';
	if ($arResult["NavPageNomer"] < $arResult["NavPageCount"])
	{
		$bPrevDisabled = false;
		if ($arResult["bSavePage"])
		{
			$sPrevHref = $arResult["sUrlPath"].'?'.$strNavQueryString.'PAGEN_'.$arResult["NavNum"].'='.($arResult["NavPageNomer"]+1);
		}
		else
		{
			if ($arResult["NavPageCount"] == ($arResult["NavPageNomer"]+1))
			{
				$sPrevHref = $arResult["sUrlPath"].$strNavQueryStringFull;
			}
			else
			{
				$sPrevHref = $arResult["sUrlPath"].'?'.$strNavQueryString.'PAGEN_'.$arResult["NavNum"].'='.($arResult["NavPageNomer"]+1);
			}
		}
	}
	else
	{
		$bPrevDisabled = true;
	}
	
	$sNextHref = '';
	if ($arResult["NavPageNomer"] > 1)
	{
		$bNextDisabled = false;
		$sNextHref = $arResult["sUrlPath"].'?'.$strNavQueryString.'PAGEN_'.$arResult["NavNum"].'='.($arResult["NavPageNomer"]-1);
	}
	else
	{
		$bNextDisabled = true;
	}
	?>
		

		
			
	<?
	$bFirst = true;
	$bPoints = false;
	do
	{
		$NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;
		if ($arResult["nStartPage"] <= 2 || $arResult["NavPageCount"]-$arResult["nStartPage"] <= 1 || abs($arResult['nStartPage']-$arResult["NavPageNomer"])<=2)
		{

			if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):
	?>
			<a class="num_activ" href="#">
						<?=$NavRecordGroupPrint?>
					  </a>
			
	<?
			elseif($arResult["nStartPage"] == $arResult["NavPageCount"] && $arResult["bSavePage"] == false):
	?>
			<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$NavRecordGroupPrint?></a>
	<?
			else:
	?>
			<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$NavRecordGroupPrint?></a>
	<?
			endif;
			$bFirst = false;
			$bPoints = true;
		}
		else
		{
			if ($bPoints)
			{
	?><a>...</a><?
				$bPoints = false;
			}
		}
		$arResult["nStartPage"]--;
	} while($arResult["nStartPage"] >= $arResult["nEndPage"]);
}
else
{
	// to show always first and last pages
	$arResult["nStartPage"] = 1;
	$arResult["nEndPage"] = $arResult["NavPageCount"];

	$sPrevHref = '';
	if ($arResult["NavPageNomer"] > 1)
	{
		$bPrevDisabled = false;
		
		if ($arResult["bSavePage"] || $arResult["NavPageNomer"] > 2)
		{
			$sPrevHref = $arResult["sUrlPath"].'?'.$strNavQueryString.'PAGEN_'.$arResult["NavNum"].'='.($arResult["NavPageNomer"]-1);
		}
		else
		{
			$sPrevHref = $arResult["sUrlPath"].$strNavQueryStringFull;
		}
	}
	else
	{
		$bPrevDisabled = true;
	}

	$sNextHref = '';
	if ($arResult["NavPageNomer"] < $arResult["NavPageCount"])
	{
		$bNextDisabled = false;
		$sNextHref = $arResult["sUrlPath"].'?'.$strNavQueryString.'PAGEN_'.$arResult["NavNum"].'='.($arResult["NavPageNomer"]+1);
	}
	else
	{
		$bNextDisabled = true;
	}
	?>

        <?if ($bPrevDisabled):?>

<?else:?>
    <li><a href="<?=$sPrevHref;?>"><span class="icon-right-open-big" style="transform:rotate(180deg);margin-right: 10px"></span></a></li>

<?endif;?>



	<?
	$bFirst = true;
	$bPoints = false;
	do
	{
		if ($arResult["nStartPage"] <= 2 || $arResult["nEndPage"]-$arResult["nStartPage"] <= 1 || abs($arResult['nStartPage']-$arResult["NavPageNomer"])<=2)
		{

			if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):
			
	?>
    <li><a href="javascript:;">
						<?=$arResult["nStartPage"]?>
        </a></li>
	<?
			elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):
	?>
                <li><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$arResult["nStartPage"]?></a></li>
	<?
			else:
	?>
                <li><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a></li>
	<?
			endif;
			$bFirst = false;
			$bPoints = true;
		}
		else
		{
			if ($bPoints)
			{
                ?> <li><a href="javascript:;">...</a></li><?
				$bPoints = false;
			}
		}
		$arResult["nStartPage"]++;
	} while($arResult["nStartPage"] <= $arResult["nEndPage"]);
}?>
    <?if ($bNextDisabled):?><?else:?>
        <li><a href="<?=$sNextHref;?>"><span class="icon-right-open-big"></span></a></li>

    <?endif;?>
    <?

if ($arResult["bShowAll"]):
	if ($arResult["NavShowAll"]):
?>
		<a  href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=0"><?=GetMessage("nav_paged")?></a>
<?
	else:
?>
		
<?
	endif;
endif;
?>
	

</ul>

</div>
<div class="pagination-right">
    <p>Всего страниц - <?=$arResult["NavPageCount"]?></p>
</div>