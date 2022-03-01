<?php

namespace App\Http\Controllers\V1\User;

use \Exception;
use Illuminate\Http\JsonResponse;
use App\Enums\ResponseEnum;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserRequest;
use App\Http\Responses\Facades\Response;
use App\Services\User\UserService;
use App\Models\User\User;

class UserController extends Controller
{
    /**
     * @var UserService
     */
    protected $service;

    /**
     * Constructor.
     */
    public function __construct(UserService $userService)
    {
        $this->service = $userService;
    }

    /**
     * @param UserRequest $request
     *
     * @return JsonResponse
     * @throws Exception
     */
    public function register(UserRequest $request)
    {
        $params = $request->post();
        $request->validate('register');
        $user = User::findByAccount($params['account']);
        if (!empty($user)) {
            Response::fail(ResponseEnum::USER_ACCOUNT_REGISTERED);
        }

        $user = $this->service->createUser($params);

        return Response::success([
            'id' => $user->id,
            'token' => $user->token
        ]);
    }

    public function mock()
    {
        dump(auth()->user());
    }
}
