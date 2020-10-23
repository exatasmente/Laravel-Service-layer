<?php


namespace App\Services\Dto;

final class DeletePropertyContractDto extends AbstractDto implements DtoInterface
{

    public $property_id;
    public $contract_id;
    /* @return array */
    protected function configureValidatorRules(): array
    {
        return [
            'property_id' => 'required|integer|exists:properties,id',
            'contract_id' => 'required|integer|exists:contract,id'
        ];
    }

    /**
     * @inheritDoc
     */
    protected function map(array $data): bool
    {
        $this->property_id = $data['property_id'];
        $this->contract_id = $data['contract_id'];
        return true;
    }


}