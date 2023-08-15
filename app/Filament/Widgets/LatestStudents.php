<?php

namespace App\Filament\Widgets;

use App\Models\Student;
use Closure;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class LatestStudents extends BaseWidget
{
    protected static ?int $sort = 2;
    protected int | string | array $columnSpan = 'full';
    protected function getTableQuery(): Builder
    {
        return Student::query()->latest()->take(5);
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('name')
                ->searchable()
                ->sortable()
                ->toggleable(),
            TextColumn::make('email')
                ->searchable()
                ->sortable()
                ->toggleable(),
            TextColumn::make('phone_number')
                ->searchable()
                ->sortable()
                ->toggleable(),
            TextColumn::make('address')
                ->searchable()
                ->sortable()
                ->wrap()
                ->toggleable(),
            TextColumn::make('class.name')
                ->searchable()
                ->sortable(),
            TextColumn::make('section.name')
                ->searchable()
                ->sortable()
        ];
    }
    protected function isTablePaginationEnabled(): bool
    {
        return false;
    }
}
