<?php

namespace App\Models\Enums;

enum SiteStatus: int{
    case ACTIVE = 1;
    case ARCHIVE = 2;

    public static function keys(): array{
        return array_map(
            fn (self $status) => $status->value,
            static::cases()
        );
    }

    public function name(): string{
        return match($this) {
            static::ACTIVE => 'Активный',
            static::ARCHIVE => 'Архивный'
        };
    }
}
