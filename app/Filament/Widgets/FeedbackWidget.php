<?php

namespace App\Filament\Widgets;

use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables;
use App\Models\Feedback;
use Illuminate\Database\Eloquent\Builder;

class FeedbackWidget extends BaseWidget
{
    
    protected static string $view = 'filament.widgets.agenda-widget'; // point to your custom blade view

    protected function getTableQuery(): Builder
    {
        return Feedback::query()->latest()->take(5);
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('nama')
                ->sortable()
                ->label('Nama'),
            Tables\Columns\TextColumn::make('rating')
                ->sortable()
                ->label('Rating')
                ->formatStateUsing(fn ($state) => str_repeat('⭐', $state)),
            Tables\Columns\TextColumn::make('feedback')
                ->sortable()
                ->label('Feedback')
                ->wrap(),
        ];
    }

    // 🚀 Disable pagination
    protected function isTablePaginationEnabled(): bool
    {
        return false;
    }
}
