<?php


use Sawirricardo\IcdApi\IcdApi;
use Sawirricardo\IcdApi\Laravel\Facades\IcdApi as FacadesIcdApi;

it('can test', function () {
    FacadesIcdApi::shouldReceive('client')
        ->once();
    expect(icdApiClient())->toBeInstanceOf(IcdApi::class);
});
