<?php

use Mockery\MockInterface;
use function Pest\Laravel\mock;
use Sammyjo20\Saloon\Clients\MockClient;
use Sammyjo20\Saloon\Http\MockResponse;
use Sawirricardo\IcdApi\Connectors\AccessTokenConnector;

use Sawirricardo\IcdApi\Laravel\IcdApi;

it('can test', function () {
    $client = new MockClient([
        MockResponse::make([
            'icdaccessmanagement.who.int/*' => [
                'access_token' => '1234567890',
                'expires_in' => 3600,
                'token_type' => 'Bearer',
            ],
        ]),
    ]);
    mock(AccessTokenConnector::class, function (MockInterface $mock) use ($client) {
        $mock->shouldReceive('send')->with($client);
    });
    expect(icdApiClient())->toBeInstanceOf(IcdApi::class);
});
