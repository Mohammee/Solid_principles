<?php
namespace SOLID\LSP;

use http\Encoding\Stream\Inflate;

class Encrypt
{

    /**
     * @var string
     */
    private $string;

    /**
     * @return string
     */
    public function getString(): string
    {
        return $this->string;
    }

    /**
     * @param string $string
     */
    public function setString(string $string): void
    {
        $this->string = $string;
    }

    /**
     * @return string
     */
    public function ecrypt() : string
    {
        return md5($this->getString());
    }
}