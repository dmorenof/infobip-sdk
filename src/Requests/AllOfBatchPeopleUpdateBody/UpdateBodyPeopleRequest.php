<?php

declare(strict_types=1);

namespace InfobipSDK\Requests\AllOfBatchPeopleUpdateBody;

final class UpdateBodyPeopleRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Requests\AllOfBatchPeopleUpdateBody\PeopleItem\PeopleItemQueryRequest $query;
    public \InfobipSDK\Requests\AllOfBatchPeopleUpdateBody\PeopleItem\PeopleItemUpdateRequest $update;

}
