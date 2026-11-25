<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\Messenger\Resource1\Pages\ByPageId\Subscriptions\Get;

final class ByPageIdSubscriptionsResponse extends \Dmorenof\SdkRuntime\OneOf
{
    protected const array TYPES = [\InfobipSDK\Collections\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\PagedMarketingSubscriptionsResponse\ResultsCollection::class, \InfobipSDK\DTOs\Cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77\PagedMarketingSubscriptionsResponse::class];
    protected const array BRANCH_SCHEMAS = [
        [
            'kind' => 'array',
            'items' => [
                'kind' => 'reference',
                'ref' => 'cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77.PageMarketingSubscriptionResponse',
            ],
        ],
        [
            'kind' => 'reference',
            'ref' => 'cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77.PagedMarketingSubscriptionsResponse',
        ],
    ];
    protected const array SCHEMA_DEFINITIONS = [
        'cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77.CursorPageInfo' => [
            'kind' => 'object',
            'properties' => [
                'limit' => [
                    'kind' => 'integer',
                    'rules' => [
                        'format' => 'int32',
                    ],
                ],
                'nextCursor' => [
                    'kind' => 'string',
                ],
            ],
        ],
        'cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77.NotificationMessageReoptin' => [
            'kind' => 'string',
            'enum' => [
                'DISABLED',
                'ENABLED',
                'UNKNOWN',
            ],
        ],
        'cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77.PageMarketingSubscriptionResponse' => [
            'kind' => 'object',
            'properties' => [
                'creationDatetime' => [
                    'kind' => 'string',
                ],
                'customAudienceIds' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'string',
                    ],
                ],
                'nextEligibleDatetime' => [
                    'kind' => 'string',
                ],
                'notificationMessagesReoptin' => [
                    'kind' => 'reference',
                    'ref' => 'cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77.NotificationMessageReoptin',
                ],
                'notificationMessagesTimezone' => [
                    'kind' => 'string',
                ],
                'notificationMessagesToken' => [
                    'kind' => 'string',
                ],
                'recipientId' => [
                    'kind' => 'string',
                ],
                'title' => [
                    'kind' => 'string',
                ],
                'tokenExpiry' => [
                    'kind' => 'string',
                ],
                'userTokenStatus' => [
                    'kind' => 'reference',
                    'ref' => 'cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77.UserTokenRefreshStatus',
                ],
            ],
            'required' => [
                'notificationMessagesToken',
            ],
        ],
        'cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77.PagedMarketingSubscriptionsResponse' => [
            'kind' => 'object',
            'properties' => [
                'cursor' => [
                    'kind' => 'reference',
                    'ref' => 'cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77.CursorPageInfo',
                ],
                'results' => [
                    'kind' => 'array',
                    'items' => [
                        'kind' => 'reference',
                        'ref' => 'cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77.PageMarketingSubscriptionResponse',
                    ],
                ],
            ],
            'required' => [
                'cursor',
                'results',
            ],
        ],
        'cc99cb7b0e48638be90df2dee94fb1aaadb95bcd09a6944a79bd00ca6a59df77.UserTokenRefreshStatus' => [
            'kind' => 'string',
            'enum' => [
                'NOT_REFRESHED',
                'REFRESHED',
                'UNKNOWN',
            ],
        ],
    ];
}
