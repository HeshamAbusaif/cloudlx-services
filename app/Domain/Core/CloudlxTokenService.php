<?php

namespace App\Domain\Core;

interface CloudlxTokenService
{
    /**
     * @return string
     */
    public function getToken();

    /**
     */
    public function refreshToken();

}
