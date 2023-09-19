<?php

namespace App\Services\Clients;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;
use App\DataTransfers\BodyInfo;
use App\DataTransfers\IdsList;

function makeRequest(): PendingRequest
{
    return Http::baseUrl("https://api-sport-events.php9-01.test.voxteneo.com/api/v1/");
}




