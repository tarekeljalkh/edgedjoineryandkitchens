<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingResource\Pages;
use App\Filament\Resources\SettingResource\RelationManagers;
use App\Models\Setting;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SettingResource extends Resource
{
    protected static ?string $model = Setting::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('site_name')->label('Site Name')->required(),
                FileUpload::make('logo')
                    ->label('Site Logo')
                    ->image()
                    ->required(),
                TextInput::make('whatsapp_number')->label('WhatsApp Number')->required(),
                TextInput::make('phone')->label('Phone Number')->required(),
                TextInput::make('email')->label('Email Address')->required(),
                TextInput::make('facebook_link')->label('Facebook URL')->url(),
                TextInput::make('instagram_link')->label('Instagram URL')->url(),
                TextInput::make('seo_title')->label('SEO Title')->required(),
                Textarea::make('seo_description')->label('SEO Description')->required(),
                TextInput::make('seo_keywords')->label('SEO Keywords')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('site_name')->label('Site Name'),
                TextColumn::make('whatsapp_number')->label('WhatsApp Number'),
                TextColumn::make('email')->label('Email'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSetting::route('/create'),
            'edit' => Pages\EditSetting::route('/{record}/edit'),
        ];
    }
}
