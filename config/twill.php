<?php

return [
    'capsules' => [
        'list' => [
            [
                'name' => 'Appointments',
                'enabled' => true,
            ],
        ],
    ],
    'block_editor' => [
        'use_twill_blocks' => [],
        'crops' => [
            'text_image' => [
                'default' => [
                    [
                        'name' => 'Default',
                        'ratio' => 0,
                    ],
                ],
            ],
            'cover' => [
                'default' => [
                    [
                        'name' => 'default',
                        'ratio' => 16 / 10,
                    ],
                ],
                'mobile' => [
                    [
                        'name' => 'mobile',
                        'ratio' => 10 / 16,
                    ],
                ],
            ],
            'form' => [
                'default' => [
                    [
                        'name' => 'default',
                        'ratio' => 1 / 1,
                    ],
                ],
            ],
            'cover_small' => [
                'default' => [
                    [
                        'name' => 'default',
                        'ratio' => 16 / 12,
                    ],
                ],
            ],
        ],
    ],
];
