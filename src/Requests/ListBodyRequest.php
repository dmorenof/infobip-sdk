<?php

declare(strict_types=1);

namespace InfobipSDK\Requests;

/**
 * Items data for update.<br>Can't be less than 1 and more than 128 items.<br>New item IDs are not allowed.<br>Items without existing ids in are not allowed<br>If value of a field explicitly passed as NULL, it will delete a current value of the field.
 */
final class ListBodyRequest extends \Dmorenof\SdkRuntime\DTO
{
}
