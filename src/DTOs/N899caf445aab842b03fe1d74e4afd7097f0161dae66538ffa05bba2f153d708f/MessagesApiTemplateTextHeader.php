<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiTemplateTextHeader
 *
 * Key value pairs that will be replaced during message sending in a header. For channel WHATSAPP, all keys must be either only numerical or only lowercase letters and underscores. Valid examples `{"1": "John", "type": "TEXT"}` and `{"first_name": "John", "type": "TEXT"}`.
 */
final class MessagesApiTemplateTextHeader extends \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\MessagesApiTemplateHeader
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

}
