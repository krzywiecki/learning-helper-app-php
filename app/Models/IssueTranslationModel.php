<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IssueTranslationModel extends Model
{
    protected $table = 'issues_translations';

    protected $fillable = [
        'issue_id', 'lang', 'translation'
    ];
}
