<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'pbrilius/getloan.localhost';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => 'dev-master@c6522afe5540d5fc46675043d3ed5a45a740b27c',
  'dflydev/dot-access-data' => 'dev-main@e04ff030d24a33edc2421bef305e32919dd78fc3',
  'doctrine/cache' => '2.1.x-dev@331b4d5dbaeab3827976273e9356b3b453c300ce',
  'doctrine/collections' => '1.7.x-dev@436a4eb4535f141c6c52a3099016cb22ceca05b5',
  'doctrine/common' => '3.2.x-dev@0e0138bbfa43fab7484af3784b88f840a73b6841',
  'doctrine/dbal' => '2.13.x-dev@a55eb4849b03c0c760535446cc126534e8c8c964',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/event-manager' => '1.2.x-dev@eb044d4b27d552d4065fbc0548183e24815240a8',
  'doctrine/inflector' => '2.1.x-dev@c6a0da4f0e06aa5cd83a2c1a4e449fae98c8bad7',
  'doctrine/instantiator' => '1.5.x-dev@6410c4b8352cb64218641457cef64997e6b784fb',
  'doctrine/lexer' => '1.3.x-dev@59bfb3b9be04237be4cd1afea9bbb58794c25ce8',
  'doctrine/orm' => '3.0.x-dev@d7a5eab7d56295af637f1c46acf0d47be076df22',
  'doctrine/persistence' => '2.3.x-dev@97b724327cbb4339104445cd52ba3867e02d8697',
  'graham-campbell/result-type' => '1.0.x-dev@cce288e91826d6d33d76b57f1ad4bdc3f3a8c1d6',
  'laminas/laminas-diactoros' => '2.7.x-dev@7d2034110ae18afe05050b796a3ee4b3fe177876',
  'laminas/laminas-httphandlerrunner' => '2.1.x-dev@38e79730ac3e510a1c908691fb0d9001bb730101',
  'laminas/laminas-zendframework-bridge' => '1.4.x-dev@13af2502d9bb6f7d33be2de4b51fb68c6cdb476e',
  'league/booboo' => 'dev-master@5f2d93a329df9ccb9edf77dac83c483829893d2e',
  'league/config' => 'dev-main@20d42d88f12a76ff862e17af4f14a5a4bbfd0925',
  'league/container' => '4.x-dev@82a57588c630663d2600f046753b23ab6dcda9b5',
  'league/plates' => 'v3.x-dev@9a55e710574e38106bde23fa16489a2ef6eabf16',
  'league/route' => '6.x-dev@b66c107cd2bc0705e5ecf86028772c6504d2df34',
  'league/uri' => 'dev-master@161bda7db13446f12e0cb3aa88c06a3d20027446',
  'league/uri-components' => 'dev-master@c97c83e7d915cdb0163f0322a87a07df1d0d9fe1',
  'league/uri-interfaces' => 'dev-master@00e7e2943f76d8cb50c7dfdc2f6dee356e15e383',
  'monolog/monolog' => 'dev-main@71312564759a7db5b789296369c1a264efc43aad',
  'nette/schema' => 'v1.2.1@f5ed39fc96358f922cedfd1e516f0dadf5d2be0d',
  'nette/utils' => 'v3.2.x-dev@e2377c02d9469379395a3529e3b5c62863548734',
  'nikic/fast-route' => 'v1.x-dev@4012884e0b916e1bd895a5061d4abc3c99e283a4',
  'opis/closure' => 'dev-master@06e2ebd25f2869e54a306dda991f7db58066f7f6',
  'pbrilius/c2c-mvc.pbgroupeu' => 'dev-master@afc3e07d2787d76af66635ccd65db8df458090c7',
  'phpoption/phpoption' => 'dev-master@994ecccd8f3283ecf5ac33254543eb0ac946d525',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => 'dev-master@2ae37329ee82f91efadc282cc2d527fd6065a5ef',
  'psr/http-factory' => 'dev-master@36fa03d50ff82abcae81860bdaf4ed9a1510c7cd',
  'psr/http-message' => 'dev-master@efd67d1dc14a7ef4fc4e518e7dee91c271d524e4',
  'psr/http-server-handler' => 'dev-master@cada5cd1c6a9871031e07f26d0f7b08c9de19039',
  'psr/http-server-middleware' => 'dev-master@adcb26d2fb28018fea3319d0035e46e8d08eb8c8',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'psr/simple-cache' => 'dev-master@5a7b96b1dda5d957e01bc1bfe77dcca09c5a7474',
  'symfony/cache' => '5.4.x-dev@a304d830194fe15f311a3cfd5e8367e749459f98',
  'symfony/cache-contracts' => '2.5.x-dev@c385af13d628eb4fc25b017f332c8bcc55bd0d95',
  'symfony/console' => '5.4.x-dev@25e16fd41a9a3836c6619bd9ed6a6180a83b26d5',
  'symfony/deprecation-contracts' => 'dev-main@6f981ee24cf69ee7ce9736146d1c57c2780598a8',
  'symfony/polyfill-ctype' => 'dev-main@46cd95797e9df938fdd2b03693b5fca5e64b01ce',
  'symfony/polyfill-intl-grapheme' => 'dev-main@16880ba9c5ebe3642d1995ab866db29270b36535',
  'symfony/polyfill-intl-normalizer' => 'dev-main@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'dev-main@9174a3d80210dca8daa7f31fec659150bbeabfc6',
  'symfony/polyfill-php72' => 'dev-main@9a142215a36a3888e30d0a9eeea9766764e96976',
  'symfony/polyfill-php73' => 'dev-main@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'dev-main@1100343ed1a92e3a38f9ae122fc0eb21602547be',
  'symfony/service-contracts' => 'v1.1.2@191afdcb5804db960d26d8566b7e9a2843cab3a0',
  'symfony/string' => '5.4.x-dev@c29a3e649843f4a34eaa4be2683f4914e8b7f023',
  'symfony/var-exporter' => '5.4.x-dev@e08784dfd47408d3fdd24625e350f583f61854e5',
  'vlucas/phpdotenv' => 'dev-master@b83be80cedb862eeb030370cd7939f8333b1c496',
  'myclabs/deep-copy' => '1.x-dev@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'nikic/php-parser' => 'v4.12.0@6608f01670c3cc5079e18c1dab1104e002579143',
  'phar-io/manifest' => 'dev-master@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.1.0@bae7c545bef187884426f042434e561ab1ddb182',
  'phpdocumentor/reflection-common' => 'dev-master@a0eeab580cbdf4414fef6978732510a36ed0a9d6',
  'phpdocumentor/reflection-docblock' => 'dev-master@78dca372660e5919c3e39e79399d1c76180ab90e',
  'phpdocumentor/type-resolver' => '1.x-dev@550e0fb7efa2f7a361d47ea1e30921989a43e41d',
  'phpspec/prophecy' => '1.13.0@be1996ed8adc35c3fd795488a653f4b518be70ea',
  'phpunit/php-code-coverage' => '9.2.x-dev@1b6c5174be595c5499a6e480b9aa49ab4a9db92d',
  'phpunit/php-file-iterator' => '3.0.x-dev@d7e633e95043246c5370e96d4cd17aa2cc79ab78',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.x-dev@83a4a616296719986751ef07e05e814212348f92',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.3@388b6ced16caa751030f6a69e588299fa09200ac',
  'sebastian/exporter' => '4.0.3@d89cc98761b8cb5a1a235a6b703ae50d34080e65',
  'sebastian/global-state' => '5.0.3@23bd5951f7ff26f12d4e3242864df3e08dec4e49',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => 'dev-master@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '2.3.x-dev@f24cbc541026c3bb7d27c647f0f9ea337135b22a',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'webmozart/assert' => 'dev-master@b419d648592b0b8911cbbe10d450fe314f4fd262',
  'pbrilius/getloan.localhost' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !(method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && (method_exists(InstalledVersions::class, 'getAllRawData') ? InstalledVersions::getAllRawData() : InstalledVersions::getRawData())) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
