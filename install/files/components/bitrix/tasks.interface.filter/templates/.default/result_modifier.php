<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if (!isset($arParams['MENU_GROUP_ID']))
{
	$arParams['MENU_GROUP_ID'] = $arParams['GROUP_ID'];
}

$arParams['FILTER']['TAG']['type'] = 'entity_selector';
$arParams['FILTER']['TAG']['params'] = [
    'multiple' => 'Y',
    'dialogOptions' => [

        'entities' => [
            [
                'id' => 'search_tags',
                'dynamicLoad' => true,
                'dynamicSearch' => true,
            ]
        ],
        'showAvatars' => false,
    ]

];