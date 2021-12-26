<?php
namespace SOLID\LSP;

use http\Encoding\Stream\Inflate;

class SubEncrypt extends Encrypt
{

    /**
     * @return string
     */
    public function ecrypt() : string
    {
        return sha1($this->getString());
    }
}