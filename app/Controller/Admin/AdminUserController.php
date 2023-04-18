<?php

namespace App\Controller\Admin;

use App\Controller\AbstractController;
use App\Middleware\Auth\RefreshTokenMiddleware;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\Middleware;
use Hyperf\HttpServer\Annotation\RequestMapping;
use Hyperf\HttpServer\Contract\RequestInterface;

#[Controller]
class AdminUserController extends AbstractController
{

    #[RequestMapping(path: '/admin/v1/me', methods: 'get')]
    #[Middleware(RefreshTokenMiddleware::class)]
    public function me(RequestInterface $request)
    {
        $user = auth('admin')->user();
        return $this->data($user);
    }

}