<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

final class OneOfSubscriptionRequest extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\AgentOsSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\AppleMessagesForBusinessSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\BlocklistSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\CustomerEngagementSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\EmailSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\FacebookSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\InstagramSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\KakaoAlimSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\KakaoBrandMessageSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\LineSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\MmsSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\MobileIdentitySubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\MobilePushSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\NumberLookupSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\OpenChannelSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\RcsSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\RegistrationSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\SmsSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\ViberSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\VoiceVideoSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\WebPushSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\WhatsappSubscriptionRequest::class, \InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f\ZaloSubscriptionRequest::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.AgentOsSubscriptionRequest',
        ],
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.AppleMessagesForBusinessSubscriptionRequest',
        ],
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.BlocklistSubscriptionRequest',
        ],
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.CustomerEngagementSubscriptionRequest',
        ],
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.EmailSubscriptionRequest',
        ],
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.FacebookSubscriptionRequest',
        ],
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.InstagramSubscriptionRequest',
        ],
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.KakaoAlimSubscriptionRequest',
        ],
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.KakaoBrandMessageSubscriptionRequest',
        ],
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.LineSubscriptionRequest',
        ],
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.MmsSubscriptionRequest',
        ],
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.MobileIdentitySubscriptionRequest',
        ],
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.MobilePushSubscriptionRequest',
        ],
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.NumberLookupSubscriptionRequest',
        ],
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.OpenChannelSubscriptionRequest',
        ],
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.RcsSubscriptionRequest',
        ],
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.RegistrationSubscriptionRequest',
        ],
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SmsSubscriptionRequest',
        ],
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ViberSubscriptionRequest',
        ],
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.VoiceVideoSubscriptionRequest',
        ],
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.WebPushSubscriptionRequest',
        ],
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.WhatsappSubscriptionRequest',
        ],
        [
            'kind' => 'reference',
            'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ZaloSubscriptionRequest',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.AgentOsSubscriptionRequest' => [
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
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ProfileRequest',
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
                'subscriptionId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
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
                'subscriptionId',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.AppleMessagesForBusinessSubscriptionRequest' => [
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
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ProfileRequest',
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
                'subscriptionId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
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
                'subscriptionId',
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
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.BasicCredentialsPayload' => [
            'kind' => 'object',
            'properties' => [
                'password' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                        'maxLength' => 255,
                    ],
                ],
                'username' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'required' => [
                'password',
                'username',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.BlocklistSubscriptionRequest' => [
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
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ProfileRequest',
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
                'subscriptionId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
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
                'subscriptionId',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.CredentialsPayload' => [
            'kind' => 'oneOf',
            'branches' => [
                [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.BasicCredentialsPayload',
                ],
                [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.HmacCredentialsPayload',
                ],
                [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.OauthCredentialsPayload',
                ],
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.CredentialsType' => [
            'kind' => 'string',
            'enum' => [
                'BASIC',
                'HMAC',
                'OAUTH',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.CustomerEngagementSubscriptionRequest' => [
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
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ProfileRequest',
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
                'subscriptionId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
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
                'subscriptionId',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.EmailSubscriptionRequest' => [
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
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ProfileRequest',
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
                'subscriptionId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
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
                'subscriptionId',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.FacebookSubscriptionRequest' => [
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
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ProfileRequest',
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
                'subscriptionId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
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
                'subscriptionId',
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
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.HmacAlgorithm' => [
            'kind' => 'string',
            'enum' => [
                'HMAC_MD5',
                'HMAC_SHA_1',
                'HMAC_SHA_224',
                'HMAC_SHA_256',
                'HMAC_SHA_384',
                'HMAC_SHA_512',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.HmacCredentialsPayload' => [
            'kind' => 'object',
            'properties' => [
                'algorithm' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.HmacAlgorithm',
                ],
                'secretKey' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'required' => [
                'algorithm',
                'secretKey',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.InstagramSubscriptionRequest' => [
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
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ProfileRequest',
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
                'subscriptionId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
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
                'subscriptionId',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.KakaoAlimSubscriptionRequest' => [
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
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ProfileRequest',
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
                'subscriptionId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
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
                'subscriptionId',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.KakaoBrandMessageSubscriptionRequest' => [
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
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ProfileRequest',
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
                'subscriptionId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
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
                'subscriptionId',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.LineSubscriptionRequest' => [
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
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ProfileRequest',
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
                'subscriptionId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
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
                'subscriptionId',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.MmsSubscriptionRequest' => [
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
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ProfileRequest',
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
                'subscriptionId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
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
                'subscriptionId',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.MobileIdentitySubscriptionRequest' => [
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
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ProfileRequest',
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
                'subscriptionId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
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
                'subscriptionId',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.MobilePushSubscriptionRequest' => [
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
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ProfileRequest',
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
                'subscriptionId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
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
                'subscriptionId',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.NumberLookupSubscriptionRequest' => [
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
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ProfileRequest',
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
                'subscriptionId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
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
                'subscriptionId',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.OauthCredentialsPayload' => [
            'kind' => 'object',
            'properties' => [
                'clientId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
                'clientSecret' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
                'grantType' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                        'maxLength' => 255,
                    ],
                ],
                'headers' => [
                    'kind' => 'object',
                    'additional' => [
                        'kind' => 'string',
                    ],
                ],
                'password' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
                'refreshToken' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
                'resource' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
                'scope' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
                'tokenUrl' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                        'maxLength' => 255,
                    ],
                ],
                'username' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
            ],
            'required' => [
                'grantType',
                'tokenUrl',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.OpenChannelSubscriptionRequest' => [
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
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ProfileRequest',
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
                'subscriptionId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
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
                'subscriptionId',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ProfileRequest' => [
            'kind' => 'object',
            'properties' => [
                'clientCertificateId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                        'pattern' => '^[a-zA-Z0-9._-]+$',
                    ],
                ],
                'connectTimeout' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 300,
                        'maximum' => 30000,
                        'format' => 'int32',
                    ],
                ],
                'enabledSSLProtocols' => [
                    'kind' => 'array',
                    'rules' => [
                        'uniqueItems' => true,
                        'jsonSchema' => '{"enum":["TLSv1.2","TLSv1.3"]}',
                    ],
                    'items' => [
                        'kind' => 'string',
                        'enum' => [
                            'TLSv1.2',
                            'TLSv1.3',
                        ],
                    ],
                ],
                'headers' => [
                    'kind' => 'object',
                    'additional' => [
                        'kind' => 'string',
                    ],
                ],
                'maxBucketSize' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 1,
                        'maximum' => 2000,
                        'format' => 'int32',
                    ],
                ],
                'profileId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                        'maxLength' => 255,
                    ],
                ],
                'rateLimit' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 1,
                        'maximum' => 5000,
                        'format' => 'int32',
                    ],
                ],
                'readTimeout' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 1000,
                        'maximum' => 90000,
                        'format' => 'int32',
                    ],
                ],
                'responseBodyRegex' => [
                    'kind' => 'string',
                ],
                'responseRegex' => [
                    'kind' => 'string',
                ],
                'security' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SecurityRequest',
                ],
                'webhook' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.Webhook',
                ],
                'windowSize' => [
                    'kind' => 'integer',
                    'rules' => [
                        'minimum' => 20,
                        'maximum' => 10000,
                        'format' => 'int32',
                    ],
                ],
            ],
            'required' => [
                'profileId',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.RcsSubscriptionRequest' => [
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
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ProfileRequest',
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
                'subscriptionId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
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
                'subscriptionId',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.RegistrationSubscriptionRequest' => [
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
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ProfileRequest',
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
                'subscriptionId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
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
                'subscriptionId',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SecurityRequest' => [
            'kind' => 'object',
            'properties' => [
                'authId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
                        'maxLength' => 255,
                    ],
                ],
                'credentials' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.CredentialsPayload',
                ],
                'type' => [
                    'kind' => 'reference',
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.CredentialsType',
                ],
            ],
            'required' => [
                'authId',
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
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.SmsSubscriptionRequest' => [
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
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ProfileRequest',
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
                'subscriptionId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
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
                'subscriptionId',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ViberSubscriptionRequest' => [
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
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ProfileRequest',
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
                'subscriptionId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
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
                'subscriptionId',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.VoiceVideoSubscriptionRequest' => [
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
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ProfileRequest',
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
                'subscriptionId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
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
                'subscriptionId',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.WebPushSubscriptionRequest' => [
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
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ProfileRequest',
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
                'subscriptionId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
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
                'subscriptionId',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.Webhook' => [
            'kind' => 'object',
            'properties' => [
                'contentType' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 255,
                    ],
                ],
                'notifyUrl' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 0,
                        'maxLength' => 512,
                    ],
                ],
            ],
            'required' => [
                'notifyUrl',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.WhatsappSubscriptionRequest' => [
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
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ProfileRequest',
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
                'subscriptionId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
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
                'subscriptionId',
            ],
        ],
        '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ZaloSubscriptionRequest' => [
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
                    'ref' => '6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f.ProfileRequest',
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
                'subscriptionId' => [
                    'kind' => 'string',
                    'rules' => [
                        'minLength' => 1,
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
                'subscriptionId',
            ],
        ],
    ];
}
