<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller;

use App\Job\ExampleJob;
use Hyperf\HttpServer\Annotation\AutoController;

/**
 * @AutoController(prefix="job")
 */
class JobController extends Controller
{
    public function index()
    {
        return $this->response->success(queue_push(new ExampleJob()));
    }
}
