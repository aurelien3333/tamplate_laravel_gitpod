<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 *
 * @property int        $id
 * @property int        $user_id
 * @property int        $score
 * @property bool       $is_finished
 * @property string     $time
 * @property array      $reponses
 * @property Carbon     $created_at
 * @property Carbon     $updated_at
 * @property User       $user
 *
 */

class Resultat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'score',
        'reponses',
        'time',
        'is_finished',
    ];

    protected $casts = [
        'reponses' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
