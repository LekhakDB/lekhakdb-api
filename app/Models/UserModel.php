<?php

namespace App\Models;

class UserModel extends BaseModel
{
    const TableName = 'users';

    protected $table = self::TableName;

    protected $allowedFields = [
        'username',
        'email',
        'password',
    ];
}
