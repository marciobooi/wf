<?php


namespace Exception;


use Throwable;

class NotAllowedRoleException extends \RuntimeException
{
    public function __construct(array $roles, string $label, string $message = "", int $code = 0, Throwable $previous = null)
    {
        $tmpMessage = 'the role '.$label.' is not allowed';
        $tmpMessage .= 'Only '.implode(',',$roles).' are allowed';
        $tmpMessage .= $message;
        parent::__construct($tmpMessage, $code, $previous);
    }

}