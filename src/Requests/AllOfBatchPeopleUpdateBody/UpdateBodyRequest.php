<?php

declare(strict_types=1);

namespace InfobipSDK\Requests\AllOfBatchPeopleUpdateBody;

final class UpdateBodyRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * List of people.
     */
    public \InfobipSDK\Collections\AllOfBatchPeopleUpdateBody\UpdateBodyPeopleCollection $people;

}
