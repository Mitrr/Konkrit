<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';



$strReturn .= '<div class="breadcrumbs"><ul>';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

	$arrow = ($index > 0? '' : '');

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
        $strReturn .= '
				<li class="item"> '.$arrow.' 
				     <a href="'.$arResult[$index]["LINK"].'" class="breadcrumbs-link" >
					'.$title.'
				    </a></li>
			';
	}
	else
	{
		$strReturn .= '
				<li class="item"> '.$arrow.' 
				     <a class="breadcrumbs-link" href="'.$arResult[$index]["LINK"].'" >
					'.$title.'
				    </a></li>
			';
	}
}

$strReturn .= '</ul></div>';


return $strReturn;
