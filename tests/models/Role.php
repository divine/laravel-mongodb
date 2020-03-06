<?php

declare(strict_types=1);

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Jenssegers\Mongodb\Casts\ObjectIDCaster;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Role extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'roles';
    protected $casts = ['user_id' => ObjectIDCaster::class];
    protected static $unguarded = true;

    public function user(): BelongsTo
    {
        return $this->belongsTo('User');
    }

    public function mysqlUser(): BelongsTo
    {
        return $this->belongsTo('MysqlUser');
    }
}
