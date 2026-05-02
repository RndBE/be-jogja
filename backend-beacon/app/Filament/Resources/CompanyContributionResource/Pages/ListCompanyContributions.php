<?php
namespace App\Filament\Resources\CompanyContributionResource\Pages;
use App\Filament\Resources\CompanyContributionResource;
use Filament\Resources\Pages\ListRecords;
class ListCompanyContributions extends ListRecords
{
    protected static string $resource = CompanyContributionResource::class;
    protected function getHeaderActions(): array
    {
        return [\Filament\Actions\CreateAction::make()];
    }
}
