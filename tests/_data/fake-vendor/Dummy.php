<?php

namespace Dummy\File;

use AnotherDummy\{
    SubAnotherDummy, SubOtherDummy
};
use Composer;
use Composer\Plugin\PluginInterface;
use Dummy\SubOtherDummy;
use OtherDummy\SubOtherDummy;
use TypistTech\Imposter\Plugin;
use RuntimeException;
use \UnexpectedValueException;
use function OtherVendor\myFunc;
use const OtherVendor\MY_MAGIC_NUMBER;

class DummyClass
{
}
