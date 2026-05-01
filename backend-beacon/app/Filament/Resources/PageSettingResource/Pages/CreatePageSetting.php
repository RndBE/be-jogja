<?php

namespace App\Filament\Resources\PageSettingResource\Pages;

use App\Filament\Resources\PageSettingResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePageSetting extends CreateRecord
{
    protected static string $resource = PageSettingResource::class;
    protected function getRedirectUrl(): string { return $this->getResource()::getUrl('index'); }
}
