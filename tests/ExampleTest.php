<?php

use Sawirricardo\IcdApi\Laravel\IcdApi;

it('can test', function () {
    expect(icdApiClient())->toBeInstanceOf(IcdApi::class);
});
