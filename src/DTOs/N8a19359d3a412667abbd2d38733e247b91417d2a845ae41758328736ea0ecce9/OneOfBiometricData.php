<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9;

final class OneOfBiometricData extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\BiometricReference::class, \InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9\BiometricVector::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => '8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9.BiometricReference',
        ],
        [
            'kind' => 'reference',
            'ref' => '8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9.BiometricVector',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        '8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9.BiometricData' => [
            'kind' => 'oneOf',
            'branches' => [
                [
                    'kind' => 'reference',
                    'ref' => '8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9.BiometricReference',
                ],
                [
                    'kind' => 'reference',
                    'ref' => '8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9.BiometricVector',
                ],
            ],
        ],
        '8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9.BiometricReference' => [
            'kind' => 'allOf',
            'branches' => [
                [
                    'kind' => 'reference',
                    'ref' => '8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9.BiometricData',
                ],
                [
                    'kind' => 'object',
                    'properties' => [
                        'reference' => [
                            'kind' => 'string',
                        ],
                    ],
                ],
            ],
        ],
        '8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9.BiometricVector' => [
            'kind' => 'allOf',
            'branches' => [
                [
                    'kind' => 'reference',
                    'ref' => '8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9.BiometricData',
                ],
                [
                    'kind' => 'object',
                    'properties' => [
                        'vector' => [
                            'kind' => 'array',
                            'items' => [
                                'kind' => 'number',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ];
}
