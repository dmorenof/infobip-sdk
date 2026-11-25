<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

final class OneOfNoIdSubscriptionRequest extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\AgentOsNoIdSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\AppleMessagesForBusinessNoIdSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\BlocklistNoIdSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\CustomerEngagementNoIdSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\EmailNoIdSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\FacebookNoIdSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\InstagramNoIdSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\KakaoAlimNoIdSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\KakaoBrandMessageNoIdSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\LineNoIdSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\MmsNoIdSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\MobileIdentityNoIdSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\MobilePushNoIdSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\NumberLookupNoIdSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\OpenChannelNoIdSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\RcsNoIdSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\RegistrationNoIdSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SmsNoIdSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\ViberNoIdSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\VoiceVideoNoIdSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\WebPushNoIdSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\WhatsappNoIdSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\ZaloNoIdSubscriptionRequest::class];
    protected const array BRANCH_SCHEMAS = [
    [
        'kind' => 'reference',
        'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.AgentOsNoIdSubscriptionRequest',
    ],
    [
        'kind' => 'reference',
        'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.AppleMessagesForBusinessNoIdSubscriptionRequest',
    ],
    [
        'kind' => 'reference',
        'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.BlocklistNoIdSubscriptionRequest',
    ],
    [
        'kind' => 'reference',
        'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.CustomerEngagementNoIdSubscriptionRequest',
    ],
    [
        'kind' => 'reference',
        'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.EmailNoIdSubscriptionRequest',
    ],
    [
        'kind' => 'reference',
        'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.FacebookNoIdSubscriptionRequest',
    ],
    [
        'kind' => 'reference',
        'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.InstagramNoIdSubscriptionRequest',
    ],
    [
        'kind' => 'reference',
        'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.KakaoAlimNoIdSubscriptionRequest',
    ],
    [
        'kind' => 'reference',
        'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.KakaoBrandMessageNoIdSubscriptionRequest',
    ],
    [
        'kind' => 'reference',
        'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.LineNoIdSubscriptionRequest',
    ],
    [
        'kind' => 'reference',
        'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.MmsNoIdSubscriptionRequest',
    ],
    [
        'kind' => 'reference',
        'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.MobileIdentityNoIdSubscriptionRequest',
    ],
    [
        'kind' => 'reference',
        'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.MobilePushNoIdSubscriptionRequest',
    ],
    [
        'kind' => 'reference',
        'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.NumberLookupNoIdSubscriptionRequest',
    ],
    [
        'kind' => 'reference',
        'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.OpenChannelNoIdSubscriptionRequest',
    ],
    [
        'kind' => 'reference',
        'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.RcsNoIdSubscriptionRequest',
    ],
    [
        'kind' => 'reference',
        'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.RegistrationNoIdSubscriptionRequest',
    ],
    [
        'kind' => 'reference',
        'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SmsNoIdSubscriptionRequest',
    ],
    [
        'kind' => 'reference',
        'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ViberNoIdSubscriptionRequest',
    ],
    [
        'kind' => 'reference',
        'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.VoiceVideoNoIdSubscriptionRequest',
    ],
    [
        'kind' => 'reference',
        'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.WebPushNoIdSubscriptionRequest',
    ],
    [
        'kind' => 'reference',
        'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.WhatsappNoIdSubscriptionRequest',
    ],
    [
        'kind' => 'reference',
        'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ZaloNoIdSubscriptionRequest',
    ],
];
    protected const array SCHEMA_DEFINITIONS = [
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.AgentOsNoIdSubscriptionRequest' => [
        'kind' => 'object',
        'properties' => [
            'criteria' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ApplicationEntityPair',
                ],
            ],
            'events' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleAgentOsEvents',
                ],
            ],
            'keywords' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 50,
                    ],
                ],
            ],
            'name' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                    'maxLength' => 255,
                ],
            ],
            'profile' => [
                'kind' => 'reference',
                'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.IdOnlyProfileRequest',
            ],
            'resources' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'subscriptionGroupId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 255,
                ],
            ],
            'users' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
        ],
        'required' => [
            'events',
            'profile',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.AppleMessagesForBusinessNoIdSubscriptionRequest' => [
        'kind' => 'object',
        'properties' => [
            'criteria' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ApplicationEntityPair',
                ],
            ],
            'events' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'oneOf',
                    'branches' => [
                        [
                            'kind' => 'reference',
                            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleAppleMessagesForBusinessEvents',
                        ],
                        [
                            'kind' => 'reference',
                            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.FormatAwareAppleMessagesForBusinessEvents',
                        ],
                    ],
                ],
            ],
            'keywords' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 50,
                    ],
                ],
            ],
            'name' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                    'maxLength' => 255,
                ],
            ],
            'profile' => [
                'kind' => 'reference',
                'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.IdOnlyProfileRequest',
            ],
            'resources' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'subscriptionGroupId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 255,
                ],
            ],
            'users' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
        ],
        'required' => [
            'events',
            'profile',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ApplicationEntityPair' => [
        'kind' => 'object',
        'properties' => [
            'applicationId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 255,
                ],
            ],
            'callsConfigurationId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 255,
                ],
            ],
            'entityId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 255,
                ],
            ],
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.BlocklistNoIdSubscriptionRequest' => [
        'kind' => 'object',
        'properties' => [
            'criteria' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ApplicationEntityPair',
                ],
            ],
            'events' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'oneOf',
                    'branches' => [
                        [
                            'kind' => 'reference',
                            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleBlocklistEvents',
                        ],
                        [
                            'kind' => 'reference',
                            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.FormatAwareBlocklistEvents',
                        ],
                    ],
                ],
            ],
            'keywords' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 50,
                    ],
                ],
            ],
            'name' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                    'maxLength' => 255,
                ],
            ],
            'profile' => [
                'kind' => 'reference',
                'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.IdOnlyProfileRequest',
            ],
            'resources' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'subscriptionGroupId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 255,
                ],
            ],
            'users' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
        ],
        'required' => [
            'events',
            'profile',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.CustomerEngagementNoIdSubscriptionRequest' => [
        'kind' => 'object',
        'properties' => [
            'criteria' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ApplicationEntityPair',
                ],
            ],
            'events' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleCustomerEngagementEvents',
                ],
            ],
            'keywords' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 50,
                    ],
                ],
            ],
            'name' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                    'maxLength' => 255,
                ],
            ],
            'profile' => [
                'kind' => 'reference',
                'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.IdOnlyProfileRequest',
            ],
            'resources' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'subscriptionGroupId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 255,
                ],
            ],
            'users' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
        ],
        'required' => [
            'events',
            'profile',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.EmailNoIdSubscriptionRequest' => [
        'kind' => 'object',
        'properties' => [
            'criteria' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ApplicationEntityPair',
                ],
            ],
            'events' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleEmailEvents',
                ],
            ],
            'keywords' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 50,
                    ],
                ],
            ],
            'name' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                    'maxLength' => 255,
                ],
            ],
            'profile' => [
                'kind' => 'reference',
                'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.IdOnlyProfileRequest',
            ],
            'resources' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'subscriptionGroupId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 255,
                ],
            ],
            'users' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
        ],
        'required' => [
            'events',
            'profile',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.FacebookNoIdSubscriptionRequest' => [
        'kind' => 'object',
        'properties' => [
            'criteria' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ApplicationEntityPair',
                ],
            ],
            'events' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'oneOf',
                    'branches' => [
                        [
                            'kind' => 'reference',
                            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleFacebookEvents',
                        ],
                        [
                            'kind' => 'reference',
                            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.FormatAwareFacebookEvents',
                        ],
                    ],
                ],
            ],
            'keywords' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 50,
                    ],
                ],
            ],
            'name' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                    'maxLength' => 255,
                ],
            ],
            'profile' => [
                'kind' => 'reference',
                'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.IdOnlyProfileRequest',
            ],
            'resources' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'subscriptionGroupId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 255,
                ],
            ],
            'users' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
        ],
        'required' => [
            'events',
            'profile',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.FormatAwareAppleMessagesForBusinessEvents' => [
        'kind' => 'object',
        'properties' => [
            'event' => [
                'kind' => 'string',
                'enum' => [
                    'DELIVERY',
                    'INBOUND_MESSAGE',
                    'TYPING_INDICATOR',
                ],
            ],
            'format' => [
                'kind' => 'string',
            ],
        ],
        'required' => [
            'event',
            'format',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.FormatAwareBlocklistEvents' => [
        'kind' => 'object',
        'properties' => [
            'event' => [
                'kind' => 'string',
                'enum' => [
                    'BLOCK',
                    'UNBLOCK',
                ],
            ],
            'format' => [
                'kind' => 'string',
            ],
        ],
        'required' => [
            'event',
            'format',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.FormatAwareFacebookEvents' => [
        'kind' => 'object',
        'properties' => [
            'event' => [
                'kind' => 'string',
                'enum' => [
                    'AUDIENCE_UPLOAD_STATUS',
                    'CLICK',
                    'CONSENT_UPDATE',
                    'DELIVERY',
                    'INBOUND_MESSAGE',
                    'SEEN',
                ],
            ],
            'format' => [
                'kind' => 'string',
            ],
        ],
        'required' => [
            'event',
            'format',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.FormatAwareMmsEvents' => [
        'kind' => 'object',
        'properties' => [
            'event' => [
                'kind' => 'string',
                'enum' => [
                    'CLICK',
                    'DELIVERY',
                    'INBOUND_MESSAGE',
                ],
            ],
            'format' => [
                'kind' => 'string',
            ],
        ],
        'required' => [
            'event',
            'format',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.FormatAwareMobileIdentityEvents' => [
        'kind' => 'object',
        'properties' => [
            'event' => [
                'kind' => 'string',
                'enum' => [
                    'SILENT_VERIFICATION',
                ],
            ],
            'format' => [
                'kind' => 'string',
            ],
        ],
        'required' => [
            'event',
            'format',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.FormatAwareOpenChannelEvents' => [
        'kind' => 'object',
        'properties' => [
            'event' => [
                'kind' => 'string',
                'enum' => [
                    'DELIVERY',
                ],
            ],
            'format' => [
                'kind' => 'string',
            ],
        ],
        'required' => [
            'event',
            'format',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.FormatAwareSmsEvents' => [
        'kind' => 'object',
        'properties' => [
            'event' => [
                'kind' => 'string',
                'enum' => [
                    'CLICK',
                    'DELIVERY',
                    'INBOUND_MESSAGE',
                ],
            ],
            'format' => [
                'kind' => 'string',
            ],
        ],
        'required' => [
            'event',
            'format',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.IdOnlyProfileRequest' => [
        'kind' => 'object',
        'properties' => [
            'profileId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                    'maxLength' => 255,
                ],
            ],
        ],
        'required' => [
            'profileId',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.InstagramNoIdSubscriptionRequest' => [
        'kind' => 'object',
        'properties' => [
            'criteria' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ApplicationEntityPair',
                ],
            ],
            'events' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleInstagramEvents',
                ],
            ],
            'keywords' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 50,
                    ],
                ],
            ],
            'name' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                    'maxLength' => 255,
                ],
            ],
            'profile' => [
                'kind' => 'reference',
                'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.IdOnlyProfileRequest',
            ],
            'resources' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'subscriptionGroupId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 255,
                ],
            ],
            'users' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
        ],
        'required' => [
            'events',
            'profile',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.KakaoAlimNoIdSubscriptionRequest' => [
        'kind' => 'object',
        'properties' => [
            'criteria' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ApplicationEntityPair',
                ],
            ],
            'events' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleKakaoAlimEvents',
                ],
            ],
            'keywords' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 50,
                    ],
                ],
            ],
            'name' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                    'maxLength' => 255,
                ],
            ],
            'profile' => [
                'kind' => 'reference',
                'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.IdOnlyProfileRequest',
            ],
            'resources' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'subscriptionGroupId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 255,
                ],
            ],
            'users' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
        ],
        'required' => [
            'events',
            'profile',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.KakaoBrandMessageNoIdSubscriptionRequest' => [
        'kind' => 'object',
        'properties' => [
            'criteria' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ApplicationEntityPair',
                ],
            ],
            'events' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleKakaoBrandMessageEvents',
                ],
            ],
            'keywords' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 50,
                    ],
                ],
            ],
            'name' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                    'maxLength' => 255,
                ],
            ],
            'profile' => [
                'kind' => 'reference',
                'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.IdOnlyProfileRequest',
            ],
            'resources' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'subscriptionGroupId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 255,
                ],
            ],
            'users' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
        ],
        'required' => [
            'events',
            'profile',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.LineNoIdSubscriptionRequest' => [
        'kind' => 'object',
        'properties' => [
            'criteria' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ApplicationEntityPair',
                ],
            ],
            'events' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleLineEvents',
                ],
            ],
            'keywords' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 50,
                    ],
                ],
            ],
            'name' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                    'maxLength' => 255,
                ],
            ],
            'profile' => [
                'kind' => 'reference',
                'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.IdOnlyProfileRequest',
            ],
            'resources' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'subscriptionGroupId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 255,
                ],
            ],
            'users' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
        ],
        'required' => [
            'events',
            'profile',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.MmsNoIdSubscriptionRequest' => [
        'kind' => 'object',
        'properties' => [
            'criteria' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ApplicationEntityPair',
                ],
            ],
            'events' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'oneOf',
                    'branches' => [
                        [
                            'kind' => 'reference',
                            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleMmsEvents',
                        ],
                        [
                            'kind' => 'reference',
                            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.FormatAwareMmsEvents',
                        ],
                    ],
                ],
            ],
            'keywords' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 50,
                    ],
                ],
            ],
            'name' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                    'maxLength' => 255,
                ],
            ],
            'profile' => [
                'kind' => 'reference',
                'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.IdOnlyProfileRequest',
            ],
            'resources' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'subscriptionGroupId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 255,
                ],
            ],
            'users' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
        ],
        'required' => [
            'events',
            'profile',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.MobileIdentityNoIdSubscriptionRequest' => [
        'kind' => 'object',
        'properties' => [
            'criteria' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ApplicationEntityPair',
                ],
            ],
            'events' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'oneOf',
                    'branches' => [
                        [
                            'kind' => 'reference',
                            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleMobileIdentityEvents',
                        ],
                        [
                            'kind' => 'reference',
                            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.FormatAwareMobileIdentityEvents',
                        ],
                    ],
                ],
            ],
            'keywords' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 50,
                    ],
                ],
            ],
            'name' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                    'maxLength' => 255,
                ],
            ],
            'profile' => [
                'kind' => 'reference',
                'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.IdOnlyProfileRequest',
            ],
            'resources' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'subscriptionGroupId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 255,
                ],
            ],
            'users' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
        ],
        'required' => [
            'events',
            'profile',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.MobilePushNoIdSubscriptionRequest' => [
        'kind' => 'object',
        'properties' => [
            'criteria' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ApplicationEntityPair',
                ],
            ],
            'events' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleMobilePushEvents',
                ],
            ],
            'keywords' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 50,
                    ],
                ],
            ],
            'name' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                    'maxLength' => 255,
                ],
            ],
            'profile' => [
                'kind' => 'reference',
                'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.IdOnlyProfileRequest',
            ],
            'resources' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'subscriptionGroupId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 255,
                ],
            ],
            'users' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
        ],
        'required' => [
            'events',
            'profile',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.NumberLookupNoIdSubscriptionRequest' => [
        'kind' => 'object',
        'properties' => [
            'criteria' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ApplicationEntityPair',
                ],
            ],
            'events' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleNumberLookupEvents',
                ],
            ],
            'keywords' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 50,
                    ],
                ],
            ],
            'name' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                    'maxLength' => 255,
                ],
            ],
            'profile' => [
                'kind' => 'reference',
                'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.IdOnlyProfileRequest',
            ],
            'resources' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'subscriptionGroupId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 255,
                ],
            ],
            'users' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
        ],
        'required' => [
            'events',
            'profile',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.OpenChannelNoIdSubscriptionRequest' => [
        'kind' => 'object',
        'properties' => [
            'criteria' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ApplicationEntityPair',
                ],
            ],
            'events' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'oneOf',
                    'branches' => [
                        [
                            'kind' => 'reference',
                            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleOpenChannelEvents',
                        ],
                        [
                            'kind' => 'reference',
                            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.FormatAwareOpenChannelEvents',
                        ],
                    ],
                ],
            ],
            'keywords' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 50,
                    ],
                ],
            ],
            'name' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                    'maxLength' => 255,
                ],
            ],
            'profile' => [
                'kind' => 'reference',
                'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.IdOnlyProfileRequest',
            ],
            'resources' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'subscriptionGroupId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 255,
                ],
            ],
            'users' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
        ],
        'required' => [
            'events',
            'profile',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.RcsNoIdSubscriptionRequest' => [
        'kind' => 'object',
        'properties' => [
            'criteria' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ApplicationEntityPair',
                ],
            ],
            'events' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleRcsEvents',
                ],
            ],
            'keywords' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 50,
                    ],
                ],
            ],
            'name' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                    'maxLength' => 255,
                ],
            ],
            'profile' => [
                'kind' => 'reference',
                'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.IdOnlyProfileRequest',
            ],
            'resources' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'subscriptionGroupId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 255,
                ],
            ],
            'users' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
        ],
        'required' => [
            'events',
            'profile',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.RegistrationNoIdSubscriptionRequest' => [
        'kind' => 'object',
        'properties' => [
            'criteria' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ApplicationEntityPair',
                ],
            ],
            'events' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleRegistrationEvents',
                ],
            ],
            'keywords' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 50,
                    ],
                ],
            ],
            'name' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                    'maxLength' => 255,
                ],
            ],
            'profile' => [
                'kind' => 'reference',
                'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.IdOnlyProfileRequest',
            ],
            'resources' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'subscriptionGroupId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 255,
                ],
            ],
            'users' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
        ],
        'required' => [
            'events',
            'profile',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleAgentOsEvents' => [
        'kind' => 'string',
        'enum' => [
            'CONTEXT_MEMORY_FACTS_UPDATED',
            'CONTEXT_MEMORY_SENTIMENT_UPDATED',
            'CONTEXT_MEMORY_SUMMARY_UPDATED',
            'CONTEXT_MEMORY_TOPIC_UPDATED',
            'CONTEXT_PERSON_SUMMARY_UPDATED',
            'CONVERSATION_AGENT_STATUS_UPDATED',
            'CONVERSATION_ASSIGNMENT_UPDATED',
            'CONVERSATION_CREATED',
            'CONVERSATION_CUSTOMER_UPDATED',
            'CONVERSATION_FORM_FIELD_UPDATED',
            'CONVERSATION_FORM_UPDATED',
            'CONVERSATION_MESSAGE_DELETED',
            'CONVERSATION_MESSAGE_RECEIVED',
            'CONVERSATION_MESSAGE_SENT',
            'CONVERSATION_MESSAGE_UPDATED',
            'CONVERSATION_NOTE_ADDED',
            'CONVERSATION_NOTE_REMOVED',
            'CONVERSATION_NOTE_UPDATED',
            'CONVERSATION_PRIORITY_UPDATED',
            'CONVERSATION_QUEUE_UPDATED',
            'CONVERSATION_SLA_POLICY_UPDATED',
            'CONVERSATION_STATUS_UPDATED',
            'CONVERSATION_SUMMARY_UPDATED',
            'CONVERSATION_TAG_ADDED',
            'CONVERSATION_TAG_REMOVED',
            'CONVERSATION_TOPIC_UPDATED',
            'MOBILE_APP_APP_LAUNCH',
            'MOBILE_APP_DEPERSONALIZE',
            'MOBILE_APP_INSTALL',
            'MOBILE_APP_PERSONALIZE',
            'MOBILE_APP_UNINSTALL',
            'PEOPLE_CUSTOM_AND_TEMPLATE_EVENTS',
            'PERSON_ATTRIBUTE_CHANGED',
            'PERSON_CONTACT_INFORMATION_CREATED',
            'PERSON_CONTACT_INFORMATION_DELETED',
            'PERSON_CONTACT_INFORMATION_UPDATED',
            'PERSON_CREATED',
            'PERSON_DELETED',
            'PERSON_MERGED',
            'PERSON_TAG_ADDED',
            'PERSON_TAG_DELETED',
            'WEB_SDK_PAGE_VIEW',
            'WEB_SDK_SESSION_ENDED',
            'WEB_SDK_SESSION_STARTED',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleAppleMessagesForBusinessEvents' => [
        'kind' => 'string',
        'enum' => [
            'DELIVERY',
            'INBOUND_MESSAGE',
            'TYPING_INDICATOR',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleBlocklistEvents' => [
        'kind' => 'string',
        'enum' => [
            'BLOCK',
            'UNBLOCK',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleCustomerEngagementEvents' => [
        'kind' => 'string',
        'enum' => [
            'CONTEXT_MEMORY_FACTS_UPDATED',
            'CONTEXT_MEMORY_SENTIMENT_UPDATED',
            'CONTEXT_MEMORY_SUMMARY_UPDATED',
            'CONTEXT_MEMORY_TOPIC_UPDATED',
            'CONTEXT_PERSON_SUMMARY_UPDATED',
            'CONVERSATION_AGENT_STATUS_UPDATED',
            'CONVERSATION_ASSIGNMENT_UPDATED',
            'CONVERSATION_CREATED',
            'CONVERSATION_CUSTOMER_UPDATED',
            'CONVERSATION_FORM_FIELD_UPDATED',
            'CONVERSATION_FORM_UPDATED',
            'CONVERSATION_MESSAGE_DELETED',
            'CONVERSATION_MESSAGE_RECEIVED',
            'CONVERSATION_MESSAGE_SENT',
            'CONVERSATION_MESSAGE_UPDATED',
            'CONVERSATION_NOTE_ADDED',
            'CONVERSATION_NOTE_REMOVED',
            'CONVERSATION_NOTE_UPDATED',
            'CONVERSATION_PRIORITY_UPDATED',
            'CONVERSATION_QUEUE_UPDATED',
            'CONVERSATION_SLA_POLICY_UPDATED',
            'CONVERSATION_STATUS_UPDATED',
            'CONVERSATION_SUMMARY_UPDATED',
            'CONVERSATION_TAG_ADDED',
            'CONVERSATION_TAG_REMOVED',
            'CONVERSATION_TOPIC_UPDATED',
            'MOBILE_APP_APP_LAUNCH',
            'MOBILE_APP_DEPERSONALIZE',
            'MOBILE_APP_INSTALL',
            'MOBILE_APP_PERSONALIZE',
            'MOBILE_APP_UNINSTALL',
            'PEOPLE_CUSTOM_AND_TEMPLATE_EVENTS',
            'PERSON_ATTRIBUTE_CHANGED',
            'PERSON_CONTACT_INFORMATION_CREATED',
            'PERSON_CONTACT_INFORMATION_DELETED',
            'PERSON_CONTACT_INFORMATION_UPDATED',
            'PERSON_CREATED',
            'PERSON_DELETED',
            'PERSON_MERGED',
            'PERSON_TAG_ADDED',
            'PERSON_TAG_DELETED',
            'WEB_SDK_PAGE_VIEW',
            'WEB_SDK_SESSION_ENDED',
            'WEB_SDK_SESSION_STARTED',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleEmailEvents' => [
        'kind' => 'string',
        'enum' => [
            'ARTIFICIAL_CLICK',
            'CLICK',
            'COMPLAINT',
            'DELIVERY',
            'HIGH_BOUNCE_RATE_BLOCKED',
            'HIGH_BOUNCE_RATE_WARNING',
            'LATE_BOUNCE',
            'OPEN',
            'UNSUBSCRIBE',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleFacebookEvents' => [
        'kind' => 'string',
        'enum' => [
            'AUDIENCE_UPLOAD_STATUS',
            'CLICK',
            'CONSENT_UPDATE',
            'DELIVERY',
            'INBOUND_MESSAGE',
            'SEEN',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleInstagramEvents' => [
        'kind' => 'string',
        'enum' => [
            'DELIVERY',
            'INBOUND_MESSAGE',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleKakaoAlimEvents' => [
        'kind' => 'string',
        'enum' => [
            'DELIVERY',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleKakaoBrandMessageEvents' => [
        'kind' => 'string',
        'enum' => [
            'CLICK',
            'DELIVERY',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleLineEvents' => [
        'kind' => 'string',
        'enum' => [
            'DELIVERY',
            'INBOUND_MESSAGE',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleMmsEvents' => [
        'kind' => 'string',
        'enum' => [
            'CLICK',
            'DELIVERY',
            'INBOUND_MESSAGE',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleMobileIdentityEvents' => [
        'kind' => 'string',
        'enum' => [
            'SILENT_VERIFICATION',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleMobilePushEvents' => [
        'kind' => 'string',
        'enum' => [
            'DELIVERY',
            'SEEN',
            'SENT',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleNumberLookupEvents' => [
        'kind' => 'string',
        'enum' => [
            'NUMBER_LOOKUP',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleOpenChannelEvents' => [
        'kind' => 'string',
        'enum' => [
            'DELIVERY',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleRcsEvents' => [
        'kind' => 'string',
        'enum' => [
            'CAP_CHECK',
            'CLICK',
            'CONVERSATION_STARTED',
            'DELIVERY',
            'INBOUND_MESSAGE',
            'PROVIDER_UPDATE',
            'SEEN',
            'SENDER_LAUNCH_UPDATE',
            'SENDER_UPDATE',
            'SUGGESTION',
            'TEMPLATE_UPDATE',
            'TEST_NUMBER_UPDATE',
            'TYPING_INDICATOR',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleRegistrationEvents' => [
        'kind' => 'string',
        'enum' => [
            'AI_CAMPAIGN_BUILDER',
            'AI_CAMPAIGN_FEEDBACK',
            'BRAND_AUTH_UPDATE',
            'BRAND_STATUS_UPDATE',
            'BRAND_VET_UPDATE',
            'CAMPAIGN_NETWORK_STATUS_UPDATE',
            'CAMPAIGN_STATUS_UPDATE',
            'RESOURCE_REQUEST_FOC_DATE_CHANGE',
            'RESOURCE_REQUEST_REMINDER',
            'RESOURCE_REQUEST_STATUS_UPDATE',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleSmsEvents' => [
        'kind' => 'string',
        'enum' => [
            'CLICK',
            'DELIVERY',
            'INBOUND_MESSAGE',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleViberEvents' => [
        'kind' => 'string',
        'enum' => [
            'CLICK',
            'CONSENT_UPDATE',
            'DELIVERY',
            'INBOUND_MESSAGE',
            'SEEN',
            'TEMPLATE_UPDATE',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleVoiceVideoEvents' => [
        'kind' => 'string',
        'enum' => [
            'APPLICATION_TRANSFER_FAILED',
            'APPLICATION_TRANSFER_FINISHED',
            'APPLICATION_TRANSFER_REQUESTED',
            'BULK_CALL_STATUS',
            'CALL_DISCONNECTED',
            'CALL_ESTABLISHED',
            'CALL_FAILED',
            'CALL_FINISHED',
            'CALL_MEDIA_CHANGED',
            'CALL_PRE_ESTABLISHED',
            'CALL_RECEIVED',
            'CALL_RECONNECTED',
            'CALL_RECORDING_DELETED',
            'CALL_RECORDING_FAILED',
            'CALL_RECORDING_READY',
            'CALL_RECORDING_STARTED',
            'CALL_RECORDING_STOPPED',
            'CALL_RINGING',
            'CALL_STARTED',
            'CONFERENCE_COMPOSITION_FAILED',
            'CONFERENCE_COMPOSITION_FINISHED',
            'CONFERENCE_CREATED',
            'CONFERENCE_FINISHED',
            'CONFERENCE_RECORDING_DELETED',
            'CONFERENCE_RECORDING_FAILED',
            'CONFERENCE_RECORDING_READY',
            'CONFERENCE_RECORDING_STARTED',
            'CONFERENCE_RECORDING_STOPPED',
            'DELIVERY',
            'DIALOG_COMPOSITION_FAILED',
            'DIALOG_COMPOSITION_FINISHED',
            'DIALOG_CREATED',
            'DIALOG_ESTABLISHED',
            'DIALOG_FAILED',
            'DIALOG_FINISHED',
            'DIALOG_RECORDING_DELETED',
            'DIALOG_RECORDING_FAILED',
            'DIALOG_RECORDING_READY',
            'DIALOG_RECORDING_STARTED',
            'DIALOG_RECORDING_STOPPED',
            'DIALOG_TRANSFER_FAILED',
            'DIALOG_TRANSFER_FINISHED',
            'DIALOG_TRANSFER_REQUESTED',
            'DTMF_CAPTURED',
            'ERROR',
            'MACHINE_DETECTION_FAILED',
            'MACHINE_DETECTION_FINISHED',
            'MACHINE_MESSAGE_DETECTION_FAILED',
            'MACHINE_MESSAGE_DETECTION_FINISHED',
            'MEDIA_STREAM_FAILED',
            'MEDIA_STREAM_FINISHED',
            'MEDIA_STREAM_STARTED',
            'MISSED_CALL',
            'NUMBER_MASKING',
            'PARTICIPANT_JOINED',
            'PARTICIPANT_JOINING',
            'PARTICIPANT_JOIN_FAILED',
            'PARTICIPANT_MEDIA_CHANGED',
            'PARTICIPANT_RECORDING_FAILED',
            'PARTICIPANT_REMOVED',
            'PARTICIPANT_ROLE_CHANGED',
            'PARTICIPANT_ROLE_CHANGE_FAILED',
            'PARTICIPANT_STARTED_TALKING',
            'PARTICIPANT_STOPPED_TALKING',
            'PLAY_FINISHED',
            'SAY_FINISHED',
            'SILENT_VERIFICATION_DELIVERY',
            'SPEECH_CAPTURED',
            'TRANSCRIPTION',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleWebPushEvents' => [
        'kind' => 'string',
        'enum' => [
            'DELIVERY',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleWhatsappEvents' => [
        'kind' => 'string',
        'enum' => [
            'ACCOUNT_REGISTRATION',
            'ACCOUNT_UPDATE_NOTIFICATION',
            'BILLING',
            'BUSINESS_APP_CONTACT_SYNC',
            'BUSINESS_APP_MESSAGE_ECHO',
            'BUSINESS_APP_MESSAGE_HISTORY',
            'CLICK',
            'DELIVERY',
            'IDENTITY_CHANGE',
            'INBOUND_MESSAGE',
            'MARKETING_SUBSCRIPTION_UPDATE',
            'PAYMENT_STATUS',
            'SEEN',
            'TEMPLATE_UPDATE',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleZaloEvents' => [
        'kind' => 'string',
        'enum' => [
            'CLICK',
            'DELIVERY',
            'INBOUND_MESSAGE',
            'TEMPLATE_UPDATE',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SmsNoIdSubscriptionRequest' => [
        'kind' => 'object',
        'properties' => [
            'criteria' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ApplicationEntityPair',
                ],
            ],
            'events' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'oneOf',
                    'branches' => [
                        [
                            'kind' => 'reference',
                            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleSmsEvents',
                        ],
                        [
                            'kind' => 'reference',
                            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.FormatAwareSmsEvents',
                        ],
                    ],
                ],
            ],
            'keywords' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 50,
                    ],
                ],
            ],
            'name' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                    'maxLength' => 255,
                ],
            ],
            'profile' => [
                'kind' => 'reference',
                'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.IdOnlyProfileRequest',
            ],
            'resources' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'subscriptionGroupId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 255,
                ],
            ],
            'users' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
        ],
        'required' => [
            'events',
            'profile',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ViberNoIdSubscriptionRequest' => [
        'kind' => 'object',
        'properties' => [
            'criteria' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ApplicationEntityPair',
                ],
            ],
            'events' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleViberEvents',
                ],
            ],
            'keywords' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 50,
                    ],
                ],
            ],
            'name' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                    'maxLength' => 255,
                ],
            ],
            'profile' => [
                'kind' => 'reference',
                'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.IdOnlyProfileRequest',
            ],
            'resources' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'subscriptionGroupId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 255,
                ],
            ],
            'users' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
        ],
        'required' => [
            'events',
            'profile',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.VoiceVideoNoIdSubscriptionRequest' => [
        'kind' => 'object',
        'properties' => [
            'criteria' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ApplicationEntityPair',
                ],
            ],
            'events' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleVoiceVideoEvents',
                ],
            ],
            'keywords' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 50,
                    ],
                ],
            ],
            'name' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                    'maxLength' => 255,
                ],
            ],
            'profile' => [
                'kind' => 'reference',
                'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.IdOnlyProfileRequest',
            ],
            'resources' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'subscriptionGroupId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 255,
                ],
            ],
            'users' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
        ],
        'required' => [
            'events',
            'profile',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.WebPushNoIdSubscriptionRequest' => [
        'kind' => 'object',
        'properties' => [
            'criteria' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ApplicationEntityPair',
                ],
            ],
            'events' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleWebPushEvents',
                ],
            ],
            'keywords' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 50,
                    ],
                ],
            ],
            'name' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                    'maxLength' => 255,
                ],
            ],
            'profile' => [
                'kind' => 'reference',
                'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.IdOnlyProfileRequest',
            ],
            'resources' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'subscriptionGroupId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 255,
                ],
            ],
            'users' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
        ],
        'required' => [
            'events',
            'profile',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.WhatsappNoIdSubscriptionRequest' => [
        'kind' => 'object',
        'properties' => [
            'criteria' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ApplicationEntityPair',
                ],
            ],
            'events' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleWhatsappEvents',
                ],
            ],
            'keywords' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 50,
                    ],
                ],
            ],
            'name' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                    'maxLength' => 255,
                ],
            ],
            'profile' => [
                'kind' => 'reference',
                'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.IdOnlyProfileRequest',
            ],
            'resources' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'subscriptionGroupId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 255,
                ],
            ],
            'users' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
        ],
        'required' => [
            'events',
            'profile',
        ],
    ],
    '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ZaloNoIdSubscriptionRequest' => [
        'kind' => 'object',
        'properties' => [
            'criteria' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ApplicationEntityPair',
                ],
            ],
            'events' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SimpleZaloEvents',
                ],
            ],
            'keywords' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 50,
                    ],
                ],
            ],
            'name' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 1,
                    'maxLength' => 255,
                ],
            ],
            'profile' => [
                'kind' => 'reference',
                'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.IdOnlyProfileRequest',
            ],
            'resources' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'subscriptionGroupId' => [
                'kind' => 'string',
                'rules' => [
                    'minLength' => 0,
                    'maxLength' => 255,
                ],
            ],
            'users' => [
                'kind' => 'array',
                'rules' => [
                    'minItems' => 0,
                    'maxItems' => 255,
                ],
                'items' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
        ],
        'required' => [
            'events',
            'profile',
        ],
    ],
];
}
