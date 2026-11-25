<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Api\RequestErrorDetails;

/** @extends \Dmorenof\SdkRuntime\Map<\InfobipSDK\Collections\StringCollection> */
final class ValidationErrorsMap extends \Dmorenof\SdkRuntime\Map
{
    protected const string VALUE_TYPE = '\\InfobipSDK\\Collections\\StringCollection';
    protected const bool VALUE_NULLABLE = false;
}
