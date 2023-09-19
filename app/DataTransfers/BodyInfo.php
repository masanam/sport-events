<?php

namespace App\DataTransfers;

class BodyInfo
{
        public bool $success;
        public ?string $id = null;
        public ?string $name = null;
        public ?bool $isPlanet = null;
        public ?int $density = null;
        public ?int $gravity = null;
        public ?string $bodyType = null;
        public ?string $message = null;

}