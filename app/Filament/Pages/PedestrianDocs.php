<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms\Components;
use Filament\Forms\Components\Actions;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Form;

class PedestrianDocs extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.pedestrian-docs';

    protected static ?string $navigationLabel = 'وثائق المنشئة';
    protected static ?int $navigationSort = 2;


    protected ?string $heading = 'وثائق المنشئة';
    public function form(Form $form): Form
    {
        return $form->schema([
            Components\Grid::make()->schema([
                Components\TextInput::make('history')->label('السجل')->placeholder('السجل'),
                Components\DatePicker::make('band')->label('التاريخ')->placeholder('التاريخ'),
            ]),
            Components\Grid::make()->schema([
                Components\TextInput::make('license')->label('الرخصة التجارية')->placeholder('الرخصة التجارية'),
                Components\DatePicker::make('expire_at')->label('تاريخ الانتهاء')->placeholder('تاريخ الانتهاء'),
            ]),
            Components\Grid::make()->schema([
                Components\TextInput::make('location')->label('الهوية')->placeholder('الهوية'),
                Components\DatePicker::make('profile_expire_at')->label('تاريخ الانتهاء')->placeholder('تاريخ الانتهاء'),
            ]),
            Components\Grid::make()->schema([
                Components\TextInput::make('articles_association')->label('عقد التاسيس')->placeholder('عقد التاسيس'),
                Components\DatePicker::make('profile_expire_at')->label('تاريخ الانتهاء')->placeholder('تاريخ الانتهاء'),
            ]),
            Components\Grid::make()->schema([
                Components\TextInput::make('room')->label('الغرفة')->placeholder('الغرفة'),
                Components\DatePicker::make('profile_expire_at')->label('تاريخ الانتهاء')->placeholder('تاريخ الانتهاء'),
            ]),
            Components\Grid::make()->schema([
                Components\TextInput::make('print_office')->label('برنت مكتب')->placeholder('برنت مكتب'),
                Components\TextInput::make('print_office')->label('شهادة التسجيل في القيمة')->placeholder('شهادة التسجيل في القيمة'),
            ]),
            Components\Grid::make()->schema([
                Components\TextInput::make('job')->label('العمل')->placeholder('العمل'),
                Components\TextInput::make('يش')->label('حجم المضافة')->placeholder('حجم المضافة'),
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
}
