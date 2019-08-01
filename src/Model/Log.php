<?php
/**
 * Created by PhpStorm.
 * User: long.nguyenviet
 * Date: 7/23/19
 * Time: 2:37 PM
 */

namespace Elastic\Apm\PhpAgent\Model;


use Elastic\Apm\PhpAgent\Util\BaseObject;

class Log extends BaseObject
{
    /** @var  string */
    private $level;

    /** @var  string */
    private $logger_name;

    /** @var  string */
    private $message;

    /** @var   */
    private $param_message;

    /** @var  Stacktrace[] */
    private $stacktrace;

    /**
     * @param string $level
     */
    public function setLevel(string $level)
    {
        $this->level = $level;
    }

    /**
     * @param string $logger_name
     */
    public function setLoggerName(string $logger_name)
    {
        $this->logger_name = $logger_name;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message)
    {
        $this->message = $message;
    }

    /**
     * @param mixed $param_message
     */
    public function setParamMessage($param_message)
    {
        $this->param_message = $param_message;
    }

    /**
     * @param Stacktrace[] $stacktrace
     */
    public function setStacktrace(array $stacktrace)
    {
        $this->stacktrace = $stacktrace;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'level' => $this->level,
            'logger_name' => $this->logger_name,
            'message' => $this->message,
            'param_message' => $this->param_message,
            'stacktrace' => $this->stacktrace
        ];
    }

    /**
     * Define object validation rules
     *
     * @return array
     */
    public function validationRules(): array
    {
        return [
            'required' => ['message']
        ];
    }
}