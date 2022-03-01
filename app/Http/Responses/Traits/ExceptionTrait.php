<?php
/*
 * @Author: Jadedever
 * @Date: 2022-03-01 18:06:43
 * @LastEditors: Jadedever
 * @LastEditTime: 2022-03-01 18:09:47
 * @FilePath: /laravel9init/app/Http/Responses/Traits/ExceptionTrait.php
 * @Description:
 *
 * Copyright (c) 2022 by Jadedever, All Rights Reserved.
 */

namespace App\Http\Responses\Traits;

use App\Http\Responses\Facades\Response;
use Throwable;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;
use Illuminate\Http\{Request, JsonResponse};
use Illuminate\Auth\AuthenticationException;
use Illuminate\Validation\ValidationException;

trait ExceptionTrait
{
    /**
     * Convert an authentication exception into a response.
     *
     * @param Request                 $request
     * @param AuthenticationException $exception
     *
     * @return SymfonyResponse
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        return $request->expectsJson()
            ? Response::errorUnauthorized(\config('response.code.unauthorized', $exception->getMessage()))
            : redirect()->guest($exception->redirectTo() ?? route('login'));
    }

    /**
     * Prepare a JSON response for the given exception.
     *
     * @param Request   $request
     * @param Throwable $e
     *
     * @return JsonResponse
     */
    protected function prepareJsonResponse($request, Throwable $e)
    {
        return Response::error(
            '',
            $this->isHttpException($e) ? $e->getStatusCode() : 500,
            $this->convertExceptionToArray($e),
            $this->isHttpException($e) ? $e->getHeaders() : [],
            JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
        );
    }

    /**
     * Prepare a response for the given exception.
     *
     * @param Request   $request
     * @param Throwable $e
     *
     * @return SymfonyResponse|JsonResponse
     */
    protected function prepareResponse($request, Throwable $e)
    {
        if (\config('response.is_unified_return_json')) {
            return $this->prepareJsonResponse($request, $e);
        }

        return parent::prepareResponse($request, $e);
    }

    /**
     * Convert a validation exception into a JSON response.
     *
     * @param Request             $request
     * @param ValidationException $exception
     *
     * @return JsonResponse
     */
    protected function invalidJson($request, ValidationException $exception)
    {
        return Response::fail(\config('response.code.validation', $exception->getMessage()), $exception->status, $exception->errors());
    }
}
