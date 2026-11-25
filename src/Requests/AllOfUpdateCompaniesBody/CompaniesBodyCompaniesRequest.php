<?php

declare(strict_types=1);

namespace InfobipSDK\Requests\AllOfUpdateCompaniesBody;

final class CompaniesBodyCompaniesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Requests\AllOfUpdateCompaniesBody\CompaniesItem\CompaniesItemQueryRequest $query;
    public \InfobipSDK\Requests\AllOfUpdateCompaniesBody\CompaniesItem\CompaniesItemUpdateRequest $update;
}
