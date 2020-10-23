<?php


namespace App\Services\Dto;

/**
 * Class CreatePropertyDto
 * @package App\Services\Dto
 */
final class DeletePropertyDto extends AbstractDto implements DtoInterface
{

    public $property_id;

    /* @return array */
    protected function configureValidatorRules(): array
    {
        return [
            'property_id' => 'required|integer|exists:properties,id',
        ];
    }

    /**
     * @inheritDoc
     */
    protected function map(array $data): bool
    {
        $this->property_id = $data['property_id'];

        return true;
    }


}