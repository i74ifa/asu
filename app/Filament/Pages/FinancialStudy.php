<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class FinancialStudy extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.financial-study';


    protected static ?string $navigationLabel = 'الدراسة المالية والفنية';

    protected ?string $heading = 'الدراسة المالية والفنية';

    protected static ?int $navigationSort = 4;

}
