<?php

namespace App\Filament\Resources\SubSolutionResource\Pages;

use App\Filament\Resources\SubSolutionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSubSolutions extends ListRecords
{
    protected static string $resource = SubSolutionResource::class;
    protected function getHeaderActions(): array { return [Actions\CreateAction::make()]; }
}
