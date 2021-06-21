<?php

namespace App\Traits;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

trait ErrorHandler
{
    /**
     * @param array|Collection $data
     * @param integer $status
     * @param array $headers
     * @param integer $options
     * @return JsonResponse
     */
    public function response($data = [], int $status = 200, array $headers = [], int $options = 0): JsonResponse
    {
        return response()->json($data, $status, $headers, $options);
    }

    /**
     * @param LengthAwarePaginator $paginator
     * @param int $status
     * @param array $headers
     * @param integer $options
     * @return JsonResponse
     */
    public function paginate(LengthAwarePaginator $paginator, int $status = 200, array $headers = [], int $options = 0): JsonResponse
    {
        $data = [
            'data' => $paginator->getCollection(),
            'pagination' => [
                'total' => $paginator->total(),
                'per_page' => $paginator->perPage(),
                'current_page' => $paginator->currentPage(),
                'last_page' => $paginator->lastPage(),
                'previous_url' => $paginator->previousPageUrl(),
                'next_url' => $paginator->nextPageUrl()
            ]
        ];

        return response()->json($data, $status, $headers, $options);
    }

    /**
     * @param array $data
     * @param array $headers
     * @param integer $options
     * @return JsonResponse
     */
    public function responseOk($data = [], array $headers = [], int $options = 0): JsonResponse
    {
        return $this->response($data, JsonResponse::HTTP_OK, $headers, $options);
    }

    /**
     * @param array $data
     * @param array $headers
     * @param integer $options
     * @return JsonResponse
     */
    public function responseCreated($data = [], array $headers = [], int $options = 0): JsonResponse
    {
        return $this->response($data, JsonResponse::HTTP_CREATED, $headers, $options);
    }

    /**
     * @param array $headers
     * @param integer $options
     * @return JsonResponse
     */
    public function responseNoContent(array $headers = [], int $options = 0): JsonResponse
    {
        return $this->response([], JsonResponse::HTTP_NO_CONTENT, $headers, $options);
    }

    /**
     * @param array $data
     * @param array $headers
     * @param integer $options
     * @return JsonResponse
     */
    public function responseBadRequest($data = [], array $headers = [], int $options = 0): JsonResponse
    {
        return $this->response($data, JsonResponse::HTTP_BAD_REQUEST, $headers, $options);
    }

    /**
     * @param array $data
     * @param array $headers
     * @param integer $options
     * @return JsonResponse
     */
    public function responseMovedPermanently($data = [], array $headers = [], int $options = 0): JsonResponse
    {
        return $this->response($data, JsonResponse::HTTP_MOVED_PERMANENTLY, $headers, $options);
    }

    /**
     * @param array $data
     * @param array $headers
     * @param integer $options
     * @return JsonResponse
     */
    public function responseFound($data = [], array $headers = [], int $options = 0): JsonResponse
    {
        return $this->response($data, JsonResponse::HTTP_FOUND, $headers, $options);
    }

    /**
     * @param array $data
     * @param array $headers
     * @param integer $options
     * @return JsonResponse
     */
    public function responseUnauthorized($data = [], array $headers = [], int $options = 0): JsonResponse
    {
        return $this->response($data, JsonResponse::HTTP_UNAUTHORIZED, $headers, $options);
    }

    /**
     * @param array $data
     * @param array $headers
     * @param integer $options
     * @return JsonResponse
     */
    public function responseForbidden($data = [], array $headers = [], int $options = 0): JsonResponse
    {
        return $this->response($data, JsonResponse::HTTP_FORBIDDEN, $headers, $options);
    }

    /**
     * @param array $data
     * @param array $headers
     * @param integer $options
     * @return JsonResponse
     */
    public function responseNotFound($data = [], array $headers = [], int $options = 0): JsonResponse
    {
        return $this->response($data, JsonResponse::HTTP_NOT_FOUND, $headers, $options);
    }

    /**
     * @param array $data
     * @param array $headers
     * @param integer $options
     * @return JsonResponse
     */
    public function responseInternalServerError($data = [], array $headers = [], int $options = 0): JsonResponse
    {
        return $this->response($data, JsonResponse::HTTP_INTERNAL_SERVER_ERROR, $headers, $options);
    }

    /**
     * @param UnauthorizedHttpException $exception
     * @return JsonResponse
     */
    public function setUnauthorizeResponse(UnauthorizedHttpException $exception): JsonResponse
    {
        return response()->json(['message' => $exception->getMessage()], Response::HTTP_UNAUTHORIZED);
    }

    /**
     * @param ValidationException $exception
     * @return JsonResponse
     */
    public function setValidationResponse(ValidationException $exception): JsonResponse
    {
        return response()->json($exception->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    /**
     * @param BadRequestHttpException $exception
     * @return JsonResponse
     */
    public function setBadRequestResponse(BadRequestHttpException $exception): JsonResponse
    {
        return response()->json(['message' => $exception->getMessage()], Response::HTTP_BAD_REQUEST);
    }

    /**
     * @param NotFoundHttpException $exception
     * @return JsonResponse
     */
    public function setNotFoundResponse(NotFoundHttpException $exception): JsonResponse
    {
        return response()->json(['message' => $exception->getMessage()], Response::HTTP_NOT_FOUND);
    }

    /**
     * @param ModelNotFoundException $exception
     * @return JsonResponse
     */
    public function setModelNotFoundResponse(ModelNotFoundException $exception): JsonResponse
    {
        return response()->json(['message' => $exception->getMessage()], Response::HTTP_NOT_FOUND);
    }

    /**
     * @param AccessDeniedHttpException $exception
     * @return JsonResponse
     */
    public function setAccessDeniedResponse(AccessDeniedHttpException $exception): JsonResponse
    {
        return response()->json(['message' => $exception->getMessage()], Response::HTTP_FORBIDDEN);
    }

    /**
     * @param Exception $exception
     * @return JsonResponse|null
     */
    public function handle(Exception $exception): ?JsonResponse
    {
        if ($exception instanceof UnauthorizedHttpException) {
            return $this->setUnauthorizeResponse($exception);
        }

        if ($exception instanceof ValidationException) {
            return $this->setValidationResponse($exception);
        }

        if ($exception instanceof BadRequestHttpException) {
            return $this->setBadRequestResponse($exception);
        }

        if ($exception instanceof NotFoundHttpException) {
            return $this->setNotFoundResponse($exception);
        }

        if ($exception instanceof ModelNotFoundException) {
            return $this->setModelNotFoundResponse($exception);
        }

        if ($exception instanceof AccessDeniedHttpException) {
            return $this->setAccessDeniedResponse($exception);
        }

        return null;
    }
}



