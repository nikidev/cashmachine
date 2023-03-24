<?php

namespace App\Contracts;

interface Transaction
{
    public function getInputs(array $validatedData);
}
