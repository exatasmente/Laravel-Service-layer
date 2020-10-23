<?php

namespace App\Services\Dto;

use App\Models\Contract;
use App\Rules\Cnpj;
use App\Rules\Cpf;

final class UpdatePropertyContractDto extends AbstractDto implements DtoInterface
{

    /* @var string */
    public $property_id;
    public $email;
    public $name;
    public $document_type;
    public $document;

    public function __construct(array $data)
    {
        $this->document_type = data_get($data, 'document_type');
        parent::__construct($data);
    }


    /* @return array */
    protected function configureValidatorRules(): array
    {
        return [
            'email' => 'required|email',
            'name' => 'required',
            'document_type' => 'required|in:cpf,cnpj',
            'document' => $this->getDocumentValidation(),
        ];
    }

    /**
     * @inheritDoc
     */
    protected function map(array $data): bool
    {
        $this->email = $data['email'];
        $this->name = $data['name'];
        $this->type = $data['type'];
        $this->document = $data['document'];
        $this->property_id = $data['property_id'];

        return true;
    }

    private function getDocumentValidation(){
        if ($this->document_type == Contract::DOCUMENT_TYPE_CPF) {
            return ['required',new Cpf];
        }else if ($this->document_type == Contract::DOCUMENT_TYPE_CNPJ) {
            return ['required', new Cnpj];
        }
        return '';
    }

}