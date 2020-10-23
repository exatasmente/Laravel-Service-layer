<?php

namespace App\Services\Dto;

/**
 * Class UpdatePropertyDto
 * @package App\Services\Dto
 */
final class UpdatePropertyDto extends AbstractDto implements DtoInterface
{

    public $id;
    public $owner_email;
    public $line_1;
    public $line_2;
    public $number;
    public $state;
    public $city;
    public $borough;

    /* @return array */
    protected function configureValidatorRules(): array
    {
        return [
            'owner_email' => 'required|email',
            'line_1' => 'required',
            'line_2' => 'required',
            'number' => 'sometimes',
            'state' => 'required',
            'city'  => 'required',
            'borough' => 'required'
        ];
    }

    /**
     * @inheritDoc
     */
    protected function map(array $data): bool
    {
        $this->owner_email = $data['owner_email'];
        $this->line_1 = $data['line_1'];
        $this->line_2 = $data['line_2'];
        $this->number = $data['number'];
        $this->state = $data['state'];
        $this->city = $data['city'];
        $this->borough = $data['borough'];
        return true;
    }


}