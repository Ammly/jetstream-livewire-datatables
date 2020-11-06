<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class PostDatatable extends LivewireDatatable
{
    public $model = Post::class;
    public $hideable = 'select';
    public $exportable = true;
    protected $listeners = ['saved'];

    public function builder()
    {
        return Post::query();
    }


    public function columns()
    {
        return [
            Column::checkbox(),

            NumberColumn::name('id')
                ->label('ID')
                ->sortBy('id')
                ->defaultSort('desc')
                ->filterable(),

            Column::name('name')
                ->label('Name')
                ->searchable()
                ->filterable(),

            DateColumn::name('created_at')
                ->label('Created At')
                ->filterable(),
        ];
    }

    public function saved()
    {
        $this->builder();
    }
}
