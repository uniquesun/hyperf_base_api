<?php

namespace App\Model;

use Hyperf\DbConnection\Model\Model;
use HyperfExt\Auth\Contracts\AuthenticatableInterface;
use HyperfExt\Jwt\Contracts\JwtSubjectInterface;
use HyperfExt\Auth\Authenticatable;
use JetBrains\PhpStorm\ArrayShape;

class User extends Model implements AuthenticatableInterface, JwtSubjectInterface
{
    use Authenticatable;

    protected $table = 'users';

    protected $guarded = [];

    protected $hidden = ['password'];

    public function getJwtIdentifier()
    {
        return $this->getKey();
    }

    public function getJwtCustomClaims(): array
    {
        return [
            'guard' => 'api'    // 添加一个自定义载荷保存守护名称，方便后续判断
        ];
    }

}