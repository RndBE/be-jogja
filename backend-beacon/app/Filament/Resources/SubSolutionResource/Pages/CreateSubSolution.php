<?php

namespace App\Filament\Resources\SubSolutionResource\Pages;

use App\Filament\Resources\SubSolutionResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSubSolution extends CreateRecord
{
    protected static string $resource = SubSolutionResource::class;
    protected function getRedirectUrl(): string { return $this->getResource()::getUrl('index'); }
}
