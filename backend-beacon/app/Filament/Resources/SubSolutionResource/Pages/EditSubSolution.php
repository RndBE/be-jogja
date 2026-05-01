<?php

namespace App\Filament\Resources\SubSolutionResource\Pages;

use App\Filament\Resources\SubSolutionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubSolution extends EditRecord
{
    protected static string $resource = SubSolutionResource::class;
    protected function getHeaderActions(): array { return [Actions\DeleteAction::make()]; }
    protected function getRedirectUrl(): string { return $this->getResource()::getUrl('index'); }
}
