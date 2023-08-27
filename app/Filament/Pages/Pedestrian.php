<?php

namespace App\Filament\Pages;

use Filament\Actions\Concerns\HasForm;
use Filament\Forms\Components;
use Filament\Forms\Components\Actions;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Form;
use Filament\Pages\Page;

class Pedestrian extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.pedestrian';

    protected static ?string $navigationLabel = 'معلومات المنشأة';

    protected static ?int $navigationSort = 1;

    protected ?string $heading = 'معلومات المنشأة';

    public $name;
    public $band;
    public $phone_number;
    public $address;
    public $location;
    public $social_media;
    public $email;

    public function mounted(): void
    {
        $this->form->fill([
            'name' => $this->name,
            'band' => $this->band,
            'phone_number' => $this->phone_number,
            'address' => $this->address,
            'location' => $this->location,
            'social_media' => $this->social_media,
            'email' => $this->email,
        ]);
    }

    public function form(Form $form): Form
    {
        return $form->schema([
            Components\Grid::make()->schema([
                Components\TextInput::make('name')->label('النشاط')->placeholder('النشاط'),
                Components\TextInput::make('band')->label('البند')->placeholder('البند'),
            ]),
            Components\Grid::make()->schema([
                Components\TextInput::make('phone_number')->label('رقم الهاتف')->placeholder('رقم الهاتف'),
                Components\TextInput::make('address')->label('العنوان')->placeholder('العنوان'),
            ]),
            Components\Grid::make()->schema([
                Components\TextInput::make('location')->label('الموقع')->placeholder('الموقع'),
                Components\TextInput::make('social_media')->label('حسابات التواصل')->placeholder('حسابات التواصل'),
            ]),
            Components\Grid::make()->schema([
                Components\TextInput::make('email')->label('البريد الالكتروني')->placeholder('البريد الالكتروني'),
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

    public function submit()
    {
        dd($this->name);
        dd(get_class_methods($this->form));
    }
}
