<?php
namespace Prezly\PropTypes\Exceptions;

use InvalidArgumentException;
use Throwable;

class PropTypeException extends InvalidArgumentException
{
    /** @var string */
    private $prop_name;

    public function __construct(string $prop_name, string $message, Throwable $previous = null)
    {
        parent::__construct($message, 0, $previous);
        $this->prop_name = $prop_name;
    }

    public function getPropName(): string
    {
        return $this->prop_name;
    }
}
