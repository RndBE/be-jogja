<?php
namespace App\Filament\Resources\CompanyContributionResource\Pages;
use App\Filament\Resources\CompanyContributionResource;
use Filament\Resources\Pages\EditRecord;
class EditCompanyContribution extends EditRecord
{
    protected static string $resource = CompanyContributionResource::class;
    protected function getHeaderActions(): array
    {
        return [\Filament\Actions\DeleteAction::make()];
    }
}
