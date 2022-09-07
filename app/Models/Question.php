<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


/**
 * @property int        $id
 * @property string     $question
 * @property Carbon     $created_at
 * @property Carbon     $updated_at
 *
 *
 */

 class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
    ];


}
