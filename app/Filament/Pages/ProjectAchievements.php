<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms\Components;
use Filament\Forms\Components\Actions;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Form;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ProjectAchievements extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.project-achievements';
    protected static ?string $navigationLabel = 'المشاريع والإنجازات';

    protected ?string $heading = 'المشاريع والإنجازات';
    protected static ?int $navigationSort = 3;


    public $band;

    public function form(Form $form): Form
    {
        return $form->schema([
            Components\Grid::make(2)->schema([
                Components\TextInput::make('history')->label('اسم المشروع')->placeholder('اسم المشروع'),
                Components\FileUpload::make('band')->label('صورة'),
                Components\TextInput::make('band')->label('قيمة المشروع'),
            ]),
            Components\Grid::make(4)->schema([
                Actions::make([
                    Action::make('edit')
                        ->label('إضافة')
                        ->action(function () {
                            $this->submit();
                        })
                        ->button()
                ])
            ]),
        ]);
    }

    protected function getStats(): array
    {
        return [
            Stat::make('Unique views', '192.1k'),
            Stat::make('Bounce rate', '21%'),
            Stat::make('Average time on page', '3:12'),
        ];
    }
}
