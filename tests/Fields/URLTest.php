<?php

declare(strict_types=1);

namespace WordPlate\Tests\Acf\Fields;

use PHPUnit\Framework\TestCase;
use WordPlate\Acf\Fields\Url;

class URLTest extends TestCase
{
    public function testType()
    {
        $field = URL::make('URL')->toArray();
        $this->assertSame('url', $field['type']);
    }
}
