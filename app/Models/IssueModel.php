<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IssueModel extends Model
{
    protected $table = 'issues';

    protected $fillable = [
        'issue', 'lang'
    ];
}
