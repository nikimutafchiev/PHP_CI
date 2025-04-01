<?php

require 'app.php';

test('example', function () {
    expect(true)->toBeTrue();
});

test('first test', function () {
    expect(checkValueInArray([1, 2, 3, 4, 5], null))->toBe('maybe');
});

test('second test', function () {
    expect(checkValueInArray([1, 2, 3, 4, 5], 5))->toBe(true);
});

test('third test', function () {
    expect(checkValueInArray([1, 2, 3, 4, 5], 1))->toBe(true);
});

test('forth test', function () {
    expect(checkValueInArray([1, 2, 3, 4, 5], 3))->toBe(true);
});

test('fifth test', function () {
    expect(checkValueInArray([1, 2, 3, 4, 5], -1))->toBe(false);
});

test('sixth test', function () {
    expect(checkValueInArray([1, 2, 3, 4, 5], -24))->toBe(false);
});
