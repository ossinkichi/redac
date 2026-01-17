<?php

namespace App\Repositories;

use App\Models\Secretary;
use Illuminate\Database\Eloquent\Collection;


class SecretaryRepository
{

    public function findAll(): Collection
    {
        return Secretary::all();
    }

    public function find(string $cpf): Secretary
    {
        return Secretary::where('cpf', $cpf)->first();
    }

    public function create(array $data): Secretary
    {
        return Secretary::create($data);
    }

    public function update(array $data): Secretary
    {
        $secretary = $this->find($data['cpf']);
        unset($data['cpf']);
        if ($secretary) {
            $secretary->update($data);
        }
        return $secretary;
    }
}
