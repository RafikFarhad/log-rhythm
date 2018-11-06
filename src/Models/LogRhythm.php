<?php

namespace Farhad\LogRhythm\Models;

use Illuminate\Database\Eloquent\Model;

class LogRhythm extends Model
{
    protected $table = 'laravel_logs';

    protected $guarded = ['id'];
}
