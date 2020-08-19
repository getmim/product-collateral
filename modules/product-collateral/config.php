<?php

return [
    '__name' => 'product-collateral',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/product-collateral.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'https://iqbalfn.com/'
    ],
    '__files' => [
        'modules/product-collateral' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'product' => NULL
            ],
            [
                'lib-model' => NULL
            ],
            [
                'lib-formatter' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'ProductCollateral\\Model' => [
                'type' => 'file',
                'base' => 'modules/product-collateral/model'
            ]
        ],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'product' => [
                'collateral' => [
                    'type' => 'chain',
                    'chain' => [
                        'model' => [
                            'name' => 'ProductCollateral\\Model\\ProductCollateralChain',
                            'field' => 'product'
                        ],
                        'identity' => 'product_collateral'
                    ],
                    'model' => [
                        'name' => 'ProductCollateral\\Model\\ProductCollateral',
                        'field' => 'id'
                    ],
                    'format' => 'product-collateral'
                ]
            ],
            'product-collateral' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'user'
                ],
                'name' => [
                    'type' => 'text'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ],
            'product-collateral-chain' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'user'
                ],
                'product' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'Product\\Model\\Product',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'product'
                ],
                'product_collateral' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'ProductCollateral\\Model\\ProductCollateral',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'product-collateral'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ]
        ]
    ]
];