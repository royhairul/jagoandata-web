<?php

namespace App\Filament\Resources\BlogResource\Pages;

use App\Filament\Resources\BlogResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBlog extends CreateRecord
{
    protected static string $resource = BlogResource::class;

    // Menentukan URL pengalihan setelah sukses create
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}