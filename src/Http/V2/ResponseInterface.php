<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Hyperf\Engine\Contract\Http\V2;

interface ResponseInterface
{
    public function getStreamId(): int;

    public function getStatusCode(): int;

    public function getHeaders(): array;

    public function getData(): string;
}
