<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class post extends Model
{
    use AsSource, Attachable, Filterable, Sortable;

    protected $fillable = [
        'name',
        'cost',
        'date_of_issue'
    ];

    protected $allowedSorts = [
        'name'
    ];

    protected $sortable = [
        'name'
    ];
}

