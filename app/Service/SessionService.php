<?php

namespace App\Service;


class SessionService
{
    function getSessionData()
    {
        return [
            'ip' => request()->ip(),
            'user_agent' => request()->userAgent(),
            'user_id' => auth()->id() ?? null,
        ];
    }
}
