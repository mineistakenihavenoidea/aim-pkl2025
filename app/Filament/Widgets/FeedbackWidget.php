<?php

namespace App\Filament\Widgets;

use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables;
use App\Models\Feedback;
use Illuminate\Database\Eloquent\Builder;

class FeedbackWidget extends BaseWidget
{
    // Make the widget span only 2 columns (like 2 StatsOverview cards)

    protected function getTableHeading(): string|\Illuminate\Contracts\Support\Htmlable
    {
        return new \Illuminate\Support\HtmlString(
            '<a href="' . \App\Filament\Resources\FeedbackResource::getUrl('index') . '" class="text-lg font-bold mb-3 underline">
                Feedback
            </a>'
        );
    }

    protected function getTableQuery(): Builder
    {
        return Feedback::query()->latest();
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('nama')
            ->label('Nama'),
            Tables\Columns\TextColumn::make('rating')
            ->label('Rating')
            ->formatStateUsing(fn ($state) => str_repeat('⭐', $state)),
            Tables\Columns\TextColumn::make('feedback')
            ->Label('Feedback')
            ->wrap(),
        ];
    }

    // Show only 5 rows
    protected function getDefaultTablePaginationPageOption(): int
    {
        return 5;
    }
}
