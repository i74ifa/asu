<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class FinancingRequest extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.financing-request';

    protected static ?string $navigationLabel = 'رفع طلب تمويل ';
    protected static ?int $navigationSort = 5;

    protected ?string $heading = 'رفع طلب تمويل ';
}
