<?php

if (!CModule::IncludeModule('tasks'))
    return false;

Bitrix\Main\Loader::registerAutoloadClasses(
    'katapios.tagsfiltering',
    array(
        'KatapiosTagsfiltering\\Providers\\TaskTagProvider' => 'lib/providers/tasktagprovider.php',
    )
);