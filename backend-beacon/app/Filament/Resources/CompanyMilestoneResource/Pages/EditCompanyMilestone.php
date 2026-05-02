<?php
namespace App\Filament\Resources\CompanyMilestoneResource\Pages;
use App\Filament\Resources\CompanyMilestoneResource;
use Filament\Resources\Pages\EditRecord;
class EditCompanyMilestone extends EditRecord
{
    protected static string $resource = CompanyMilestoneResource::class;
    protected function getHeaderActions(): array
    {
        return [\Filament\Actions\DeleteAction::make()];
    }
}
