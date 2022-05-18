<?php

return [
    'ui.entity-selector' => [
        'value' => [
            'entities' => [
                [
                    'entityId' => 'search_tags',
                    'provider' => [
                        'moduleId' => 'katapios.tagsfiltering',
                        'className' => '\\KatapiosTagsfiltering\\Providers\\TaskTagProvider'
                    ],
                ],
            ],
        ],
        'readonly' => true,
    ]
];