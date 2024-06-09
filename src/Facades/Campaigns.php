<?php

namespace Keepsuit\Campaigns\Facades;

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\LazyCollection;

/**
 * @method static string subscribe(string $email, array $contactInfo = [], string $listName = null)
 * @method static string resubscribe(string $email, array $contactInfo = [], string $listName = null)
 * @method static string unsubscribe(string $email, ?string $listName = null, bool $do_not_mail = false)
 * @method static LazyCollection subscribers(string $status = 'active', string $sort = 'asc', int $chunkSize = 500, ?string $listName = null)
 * @method static int subscribersCount(string $status = 'active', ?string $listName = null)
 *
 * @see \Keepsuit\Campaigns\Campaigns
 */
class Campaigns extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Keepsuit\Campaigns\Campaigns::class;
    }
}
