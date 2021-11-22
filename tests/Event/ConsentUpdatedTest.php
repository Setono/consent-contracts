<?php

declare(strict_types=1);

namespace Setono\Consent\Event;

use PHPUnit\Framework\TestCase;
use Setono\ClientId\ClientId;
use Setono\Consent\Consent;

/**
 * @covers \Setono\Consent\Event\ConsentUpdated
 */
final class ConsentUpdatedTest extends TestCase
{
    /**
     * @test
     */
    public function it_is_initializable(): void
    {
        new ConsentUpdated(new Consent(new ClientId('client_id'), true, true, true));
        new ConsentUpdated(
            new Consent(new ClientId('client_id'), true, true, true),
            new Consent(new ClientId('client_id'), false, false, false)
        );

        self::assertTrue(true);
    }
}
