<?php
namespace App\Filament\Resources\CompanyMilestoneResource\Pages;
use App\Filament\Resources\CompanyMilestoneResource;
use Filament\Resources\Pages\ListRecords;
class ListCompanyMilestones extends ListRecords
{
    protected static string $resource = CompanyMilestoneResource::class;
    protected function getHeaderActions(): array
    {
        return [\Filament\Actions\CreateAction::make()];
    }
}
