{
    "_readme": [
        "This file locks the dependencies of your project to a known state",
        "Read more about it at https://getcomposer.org/doc/01-basic-usage.md#installing-dependencies",
        "This file is @generated automatically"
    ],
    "content-hash": "1a8ad4c40ae9c72afd322e292abe1f41",
    "packages": [
        {
            "name": "asm89/stack-cors",
            "version": "v2.1.1",
            "source": {
                "type": "git",
                "url": "https://github.com/asm89/stack-cors.git",
                "reference": "73e5b88775c64ccc0b84fb60836b30dc9d92ac4a"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/asm89/stack-cors/zipball/73e5b88775c64ccc0b84fb60836b30dc9d92ac4a",
                "reference": "73e5b88775c64ccc0b84fb60836b30dc9d92ac4a",
                "shasum": ""
            },
            "require": {
                "php": "^7.2|^8.0",
                "symfony/http-foundation": "^4|^5|^6",
                "symfony/http-kernel": "^4|^5|^6"
            },
            "require-dev": {
                "phpunit/phpunit": "^7|^9",
                "squizlabs/php_codesniffer": "^3.5"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.1-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Asm89\\Stack\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Alexander",
                    "email": "iam.asm89@gmail.com"
                }
            ],
            "description": "Cross-origin resource sharing library and stack middleware",
            "homepage": "https://github.com/asm89/stack-cors",
            "keywords": [
                "cors",
                "stack"
            ],
            "support": {
                "issues": "https://github.com/asm89/stack-cors/issues",
                "source": "https://github.com/asm89/stack-cors/tree/v2.1.1"
            },
            "time": "2022-01-18T09:12:03+00:00"
        },
        {
            "name": "brick/math",
            "version": "0.9.3",
            "source": {
                "type": "git",
                "url": "https://github.com/brick/math.git",
                "reference": "ca57d18f028f84f777b2168cd1911b0dee2343ae"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/brick/math/zipball/ca57d18f028f84f777b2168cd1911b0dee2343ae",
                "reference": "ca57d18f028f84f777b2168cd1911b0dee2343ae",
                "shasum": ""
            },
            "require": {
                "ext-json": "*",
                "php": "^7.1 || ^8.0"
            },
            "require-dev": {
                "php-coveralls/php-coveralls": "^2.2",
                "phpunit/phpunit": "^7.5.15 || ^8.5 || ^9.0",
                "vimeo/psalm": "4.9.2"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Brick\\Math\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "description": "Arbitrary-precision arithmetic library",
            "keywords": [
                "Arbitrary-precision",
                "BigInteger",
                "BigRational",
                "arithmetic",
                "bigdecimal",
                "bignum",
                "brick",
                "math"
            ],
            "support": {
                "issues": "https://github.com/brick/math/issues",
                "source": "https://github.com/brick/math/tree/0.9.3"
            },
            "funding": [
                {
                    "url": "https://github.com/BenMorel",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/brick/math",
                    "type": "tidelift"
                }
            ],
            "time": "2021-08-15T20:50:18+00:00"
        },
        {
            "name": "dflydev/dot-access-data",
            "version": "v3.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/dflydev/dflydev-dot-access-data.git",
                "reference": "0992cc19268b259a39e86f296da5f0677841f42c"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/dflydev/dflydev-dot-access-data/zipball/0992cc19268b259a39e86f296da5f0677841f42c",
                "reference": "0992cc19268b259a39e86f296da5f0677841f42c",
                "shasum": ""
            },
            "require": {
                "php": "^7.1 || ^8.0"
            },
            "require-dev": {
                "phpstan/phpstan": "^0.12.42",
                "phpunit/phpunit": "^7.5 || ^8.5 || ^9.3",
                "scrutinizer/ocular": "1.6.0",
                "squizlabs/php_codesniffer": "^3.5",
                "vimeo/psalm": "^3.14"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "3.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Dflydev\\DotAccessData\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Dragonfly Development Inc.",
                    "email": "info@dflydev.com",
                    "homepage": "http://dflydev.com"
                },
                {
                    "name": "Beau Simensen",
                    "email": "beau@dflydev.com",
                    "homepage": "http://beausimensen.com"
                },
                {
                    "name": "Carlos Frutos",
                    "email": "carlos@kiwing.it",
                    "homepage": "https://github.com/cfrutos"
                },
                {
                    "name": "Colin O'Dell",
                    "email": "colinodell@gmail.com",
                    "homepage": "https://www.colinodell.com"
                }
            ],
            "description": "Given a deep data structure, access data by dot notation.",
            "homepage": "https://github.com/dflydev/dflydev-dot-access-data",
            "keywords": [
                "access",
                "data",
                "dot",
                "notation"
            ],
            "support": {
                "issues": "https://github.com/dflydev/dflydev-dot-access-data/issues",
                "source": "https://github.com/dflydev/dflydev-dot-access-data/tree/v3.0.1"
            },
            "time": "2021-08-13T13:06:58+00:00"
        },
        {
            "name": "doctrine/inflector",
            "version": "2.0.4",
            "source": {
                "type": "git",
                "url": "https://github.com/doctrine/inflector.git",
                "reference": "8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/doctrine/inflector/zipball/8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89",
                "reference": "8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89",
                "shasum": ""
            },
            "require": {
                "php": "^7.2 || ^8.0"
            },
            "require-dev": {
                "doctrine/coding-standard": "^8.2",
                "phpstan/phpstan": "^0.12",
                "phpstan/phpstan-phpunit": "^0.12",
                "phpstan/phpstan-strict-rules": "^0.12",
                "phpunit/phpunit": "^7.0 || ^8.0 || ^9.0",
                "vimeo/psalm": "^4.10"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Doctrine\\Inflector\\": "lib/Doctrine/Inflector"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Guilherme Blanco",
                    "email": "guilhermeblanco@gmail.com"
                },
                {
                    "name": "Roman Borschel",
                    "email": "roman@code-factory.org"
                },
                {
                    "name": "Benjamin Eberlei",
                    "email": "kontakt@beberlei.de"
                },
                {
                    "name": "Jonathan Wage",
                    "email": "jonwage@gmail.com"
                },
                {
                    "name": "Johannes Schmitt",
                    "email": "schmittjoh@gmail.com"
                }
            ],
            "description": "PHP Doctrine Inflector is a small library that can perform string manipulations with regard to upper/lowercase and singular/plural forms of words.",
            "homepage": "https://www.doctrine-project.org/projects/inflector.html",
            "keywords": [
                "inflection",
                "inflector",
                "lowercase",
                "manipulation",
                "php",
                "plural",
                "singular",
                "strings",
                "uppercase",
                "words"
            ],
            "support": {
                "issues": "https://github.com/doctrine/inflector/issues",
                "source": "https://github.com/doctrine/inflector/tree/2.0.4"
            },
            "funding": [
                {
                    "url": "https://www.doctrine-project.org/sponsorship.html",
                    "type": "custom"
                },
                {
                    "url": "https://www.patreon.com/phpdoctrine",
                    "type": "patreon"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/doctrine%2Finflector",
                    "type": "tidelift"
                }
            ],
            "time": "2021-10-22T20:16:43+00:00"
        },
        {
            "name": "doctrine/lexer",
            "version": "1.2.3",
            "source": {
                "type": "git",
                "url": "https://github.com/doctrine/lexer.git",
                "reference": "c268e882d4dbdd85e36e4ad69e02dc284f89d229"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/doctrine/lexer/zipball/c268e882d4dbdd85e36e4ad69e02dc284f89d229",
                "reference": "c268e882d4dbdd85e36e4ad69e02dc284f89d229",
                "shasum": ""
            },
            "require": {
                "php": "^7.1 || ^8.0"
            },
            "require-dev": {
                "doctrine/coding-standard": "^9.0",
                "phpstan/phpstan": "^1.3",
                "phpunit/phpunit": "^7.5 || ^8.5 || ^9.5",
                "vimeo/psalm": "^4.11"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Doctrine\\Common\\Lexer\\": "lib/Doctrine/Common/Lexer"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Guilherme Blanco",
                    "email": "guilhermeblanco@gmail.com"
                },
                {
                    "name": "Roman Borschel",
                    "email": "roman@code-factory.org"
                },
                {
                    "name": "Johannes Schmitt",
                    "email": "schmittjoh@gmail.com"
                }
            ],
            "description": "PHP Doctrine Lexer parser library that can be used in Top-Down, Recursive Descent Parsers.",
            "homepage": "https://www.doctrine-project.org/projects/lexer.html",
            "keywords": [
                "annotations",
                "docblock",
                "lexer",
                "parser",
                "php"
            ],
            "support": {
                "issues": "https://github.com/doctrine/lexer/issues",
                "source": "https://github.com/doctrine/lexer/tree/1.2.3"
            },
            "funding": [
                {
                    "url": "https://www.doctrine-project.org/sponsorship.html",
                    "type": "custom"
                },
                {
                    "url": "https://www.patreon.com/phpdoctrine",
                    "type": "patreon"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/doctrine%2Flexer",
                    "type": "tidelift"
                }
            ],
            "time": "2022-02-28T11:07:21+00:00"
        },
        {
            "name": "dragonmantank/cron-expression",
            "version": "v3.3.1",
            "source": {
                "type": "git",
                "url": "https://github.com/dragonmantank/cron-expression.git",
                "reference": "be85b3f05b46c39bbc0d95f6c071ddff669510fa"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/dragonmantank/cron-expression/zipball/be85b3f05b46c39bbc0d95f6c071ddff669510fa",
                "reference": "be85b3f05b46c39bbc0d95f6c071ddff669510fa",
                "shasum": ""
            },
            "require": {
                "php": "^7.2|^8.0",
                "webmozart/assert": "^1.0"
            },
            "replace": {
                "mtdowling/cron-expression": "^1.0"
            },
            "require-dev": {
                "phpstan/extension-installer": "^1.0",
                "phpstan/phpstan": "^1.0",
                "phpstan/phpstan-webmozart-assert": "^1.0",
                "phpunit/phpunit": "^7.0|^8.0|^9.0"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Cron\\": "src/Cron/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Chris Tankersley",
                    "email": "chris@ctankersley.com",
                    "homepage": "https://github.com/dragonmantank"
                }
            ],
            "description": "CRON for PHP: Calculate the next or previous run date and determine if a CRON expression is due",
            "keywords": [
                "cron",
                "schedule"
            ],
            "support": {
                "issues": "https://github.com/dragonmantank/cron-expression/issues",
                "source": "https://github.com/dragonmantank/cron-expression/tree/v3.3.1"
            },
            "funding": [
                {
                    "url": "https://github.com/dragonmantank",
                    "type": "github"
                }
            ],
            "time": "2022-01-18T15:43:28+00:00"
        },
        {
            "name": "egulias/email-validator",
            "version": "2.1.25",
            "source": {
                "type": "git",
                "url": "https://github.com/egulias/EmailValidator.git",
                "reference": "0dbf5d78455d4d6a41d186da50adc1122ec066f4"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/egulias/EmailValidator/zipball/0dbf5d78455d4d6a41d186da50adc1122ec066f4",
                "reference": "0dbf5d78455d4d6a41d186da50adc1122ec066f4",
                "shasum": ""
            },
            "require": {
                "doctrine/lexer": "^1.0.1",
                "php": ">=5.5",
                "symfony/polyfill-intl-idn": "^1.10"
            },
            "require-dev": {
                "dominicsayers/isemail": "^3.0.7",
                "phpunit/phpunit": "^4.8.36|^7.5.15",
                "satooshi/php-coveralls": "^1.0.1"
            },
            "suggest": {
                "ext-intl": "PHP Internationalization Libraries are required to use the SpoofChecking validation"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.1.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Egulias\\EmailValidator\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Eduardo Gulias Davis"
                }
            ],
            "description": "A library for validating emails against several RFCs",
            "homepage": "https://github.com/egulias/EmailValidator",
            "keywords": [
                "email",
                "emailvalidation",
                "emailvalidator",
                "validation",
                "validator"
            ],
            "support": {
                "issues": "https://github.com/egulias/EmailValidator/issues",
                "source": "https://github.com/egulias/EmailValidator/tree/2.1.25"
            },
            "funding": [
                {
                    "url": "https://github.com/egulias",
                    "type": "github"
                }
            ],
            "time": "2020-12-29T14:50:06+00:00"
        },
        {
            "name": "ezyang/htmlpurifier",
            "version": "v4.14.0",
            "source": {
                "type": "git",
                "url": "https://github.com/ezyang/htmlpurifier.git",
                "reference": "12ab42bd6e742c70c0a52f7b82477fcd44e64b75"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/ezyang/htmlpurifier/zipball/12ab42bd6e742c70c0a52f7b82477fcd44e64b75",
                "reference": "12ab42bd6e742c70c0a52f7b82477fcd44e64b75",
                "shasum": ""
            },
            "require": {
                "php": ">=5.2"
            },
            "type": "library",
            "autoload": {
                "files": [
                    "library/HTMLPurifier.composer.php"
                ],
                "psr-0": {
                    "HTMLPurifier": "library/"
                },
                "exclude-from-classmap": [
                    "/library/HTMLPurifier/Language/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "LGPL-2.1-or-later"
            ],
            "authors": [
                {
                    "name": "Edward Z. Yang",
                    "email": "admin@htmlpurifier.org",
                    "homepage": "http://ezyang.com"
                }
            ],
            "description": "Standards compliant HTML filter written in PHP",
            "homepage": "http://htmlpurifier.org/",
            "keywords": [
                "html"
            ],
            "support": {
                "issues": "https://github.com/ezyang/htmlpurifier/issues",
                "source": "https://github.com/ezyang/htmlpurifier/tree/v4.14.0"
            },
            "time": "2021-12-25T01:21:49+00:00"
        },
        {
            "name": "fruitcake/laravel-cors",
            "version": "v2.2.0",
            "source": {
                "type": "git",
                "url": "https://github.com/fruitcake/laravel-cors.git",
                "reference": "783a74f5e3431d7b9805be8afb60fd0a8f743534"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/fruitcake/laravel-cors/zipball/783a74f5e3431d7b9805be8afb60fd0a8f743534",
                "reference": "783a74f5e3431d7b9805be8afb60fd0a8f743534",
                "shasum": ""
            },
            "require": {
                "asm89/stack-cors": "^2.0.1",
                "illuminate/contracts": "^6|^7|^8|^9",
                "illuminate/support": "^6|^7|^8|^9",
                "php": ">=7.2"
            },
            "require-dev": {
                "laravel/framework": "^6|^7.24|^8",
                "orchestra/testbench-dusk": "^4|^5|^6|^7",
                "phpunit/phpunit": "^6|^7|^8|^9",
                "squizlabs/php_codesniffer": "^3.5"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.1-dev"
                },
                "laravel": {
                    "providers": [
                        "Fruitcake\\Cors\\CorsServiceProvider"
                    ]
                }
            },
            "autoload": {
                "psr-4": {
                    "Fruitcake\\Cors\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fruitcake",
                    "homepage": "https://fruitcake.nl"
                },
                {
                    "name": "Barry vd. Heuvel",
                    "email": "barryvdh@gmail.com"
                }
            ],
            "description": "Adds CORS (Cross-Origin Resource Sharing) headers support in your Laravel application",
            "keywords": [
                "api",
                "cors",
                "crossdomain",
                "laravel"
            ],
            "support": {
                "issues": "https://github.com/fruitcake/laravel-cors/issues",
                "source": "https://github.com/fruitcake/laravel-cors/tree/v2.2.0"
            },
            "funding": [
                {
                    "url": "https://fruitcake.nl",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/barryvdh",
                    "type": "github"
                }
            ],
            "time": "2022-02-23T14:25:13+00:00"
        },
        {
            "name": "graham-campbell/result-type",
            "version": "v1.0.4",
            "source": {
                "type": "git",
                "url": "https://github.com/GrahamCampbell/Result-Type.git",
                "reference": "0690bde05318336c7221785f2a932467f98b64ca"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/GrahamCampbell/Result-Type/zipball/0690bde05318336c7221785f2a932467f98b64ca",
                "reference": "0690bde05318336c7221785f2a932467f98b64ca",
                "shasum": ""
            },
            "require": {
                "php": "^7.0 || ^8.0",
                "phpoption/phpoption": "^1.8"
            },
            "require-dev": {
                "phpunit/phpunit": "^6.5.14 || ^7.5.20 || ^8.5.19 || ^9.5.8"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "GrahamCampbell\\ResultType\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Graham Campbell",
                    "email": "hello@gjcampbell.co.uk",
                    "homepage": "https://github.com/GrahamCampbell"
                }
            ],
            "description": "An Implementation Of The Result Type",
            "keywords": [
                "Graham Campbell",
                "GrahamCampbell",
                "Result Type",
                "Result-Type",
                "result"
            ],
            "support": {
                "issues": "https://github.com/GrahamCampbell/Result-Type/issues",
                "source": "https://github.com/GrahamCampbell/Result-Type/tree/v1.0.4"
            },
            "funding": [
                {
                    "url": "https://github.com/GrahamCampbell",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/graham-campbell/result-type",
                    "type": "tidelift"
                }
            ],
            "time": "2021-11-21T21:41:47+00:00"
        },
        {
            "name": "guzzlehttp/guzzle",
            "version": "7.4.5",
            "source": {
                "type": "git",
                "url": "https://github.com/guzzle/guzzle.git",
                "reference": "1dd98b0564cb3f6bd16ce683cb755f94c10fbd82"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/guzzle/guzzle/zipball/1dd98b0564cb3f6bd16ce683cb755f94c10fbd82",
                "reference": "1dd98b0564cb3f6bd16ce683cb755f94c10fbd82",
                "shasum": ""
            },
            "require": {
                "ext-json": "*",
                "guzzlehttp/promises": "^1.5",
                "guzzlehttp/psr7": "^1.9 || ^2.4",
                "php": "^7.2.5 || ^8.0",
                "psr/http-client": "^1.0",
                "symfony/deprecation-contracts": "^2.2 || ^3.0"
            },
            "provide": {
                "psr/http-client-implementation": "1.0"
            },
            "require-dev": {
                "bamarni/composer-bin-plugin": "^1.4.1",
                "ext-curl": "*",
                "php-http/client-integration-tests": "^3.0",
                "phpunit/phpunit": "^8.5.5 || ^9.3.5",
                "psr/log": "^1.1 || ^2.0 || ^3.0"
            },
            "suggest": {
                "ext-curl": "Required for CURL handler support",
                "ext-intl": "Required for Internationalized Domain Name (IDN) support",
                "psr/log": "Required for using the Log middleware"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "7.4-dev"
                }
            },
            "autoload": {
                "files": [
                    "src/functions_include.php"
                ],
                "psr-4": {
                    "GuzzleHttp\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Graham Campbell",
                    "email": "hello@gjcampbell.co.uk",
                    "homepage": "https://github.com/GrahamCampbell"
                },
                {
                    "name": "Michael Dowling",
                    "email": "mtdowling@gmail.com",
                    "homepage": "https://github.com/mtdowling"
                },
                {
                    "name": "Jeremy Lindblom",
                    "email": "jeremeamia@gmail.com",
                    "homepage": "https://github.com/jeremeamia"
                },
                {
                    "name": "George Mponos",
                    "email": "gmponos@gmail.com",
                    "homepage": "https://github.com/gmponos"
                },
                {
                    "name": "Tobias Nyholm",
                    "email": "tobias.nyholm@gmail.com",
                    "homepage": "https://github.com/Nyholm"
                },
                {
                    "name": "Márk Sági-Kazár",
                    "email": "mark.sagikazar@gmail.com",
                    "homepage": "https://github.com/sagikazarmark"
                },
                {
                    "name": "Tobias Schultze",
                    "email": "webmaster@tubo-world.de",
                    "homepage": "https://github.com/Tobion"
                }
            ],
            "description": "Guzzle is a PHP HTTP client library",
            "keywords": [
                "client",
                "curl",
                "framework",
                "http",
                "http client",
                "psr-18",
                "psr-7",
                "rest",
                "web service"
            ],
            "support": {
                "issues": "https://github.com/guzzle/guzzle/issues",
                "source": "https://github.com/guzzle/guzzle/tree/7.4.5"
            },
            "funding": [
                {
                    "url": "https://github.com/GrahamCampbell",
                    "type": "github"
                },
                {
                    "url": "https://github.com/Nyholm",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/guzzlehttp/guzzle",
                    "type": "tidelift"
                }
            ],
            "time": "2022-06-20T22:16:13+00:00"
        },
        {
            "name": "guzzlehttp/promises",
            "version": "1.5.1",
            "source": {
                "type": "git",
                "url": "https://github.com/guzzle/promises.git",
                "reference": "fe752aedc9fd8fcca3fe7ad05d419d32998a06da"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/guzzle/promises/zipball/fe752aedc9fd8fcca3fe7ad05d419d32998a06da",
                "reference": "fe752aedc9fd8fcca3fe7ad05d419d32998a06da",
                "shasum": ""
            },
            "require": {
                "php": ">=5.5"
            },
            "require-dev": {
                "symfony/phpunit-bridge": "^4.4 || ^5.1"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.5-dev"
                }
            },
            "autoload": {
                "files": [
                    "src/functions_include.php"
                ],
                "psr-4": {
                    "GuzzleHttp\\Promise\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Graham Campbell",
                    "email": "hello@gjcampbell.co.uk",
                    "homepage": "https://github.com/GrahamCampbell"
                },
                {
                    "name": "Michael Dowling",
                    "email": "mtdowling@gmail.com",
                    "homepage": "https://github.com/mtdowling"
                },
                {
                    "name": "Tobias Nyholm",
                    "email": "tobias.nyholm@gmail.com",
                    "homepage": "https://github.com/Nyholm"
                },
                {
                    "name": "Tobias Schultze",
                    "email": "webmaster@tubo-world.de",
                    "homepage": "https://github.com/Tobion"
                }
            ],
            "description": "Guzzle promises library",
            "keywords": [
                "promise"
            ],
            "support": {
                "issues": "https://github.com/guzzle/promises/issues",
                "source": "https://github.com/guzzle/promises/tree/1.5.1"
            },
            "funding": [
                {
                    "url": "https://github.com/GrahamCampbell",
                    "type": "github"
                },
                {
                    "url": "https://github.com/Nyholm",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/guzzlehttp/promises",
                    "type": "tidelift"
                }
            ],
            "time": "2021-10-22T20:56:57+00:00"
        },
        {
            "name": "guzzlehttp/psr7",
            "version": "2.4.0",
            "source": {
                "type": "git",
                "url": "https://github.com/guzzle/psr7.git",
                "reference": "13388f00956b1503577598873fffb5ae994b5737"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/guzzle/psr7/zipball/13388f00956b1503577598873fffb5ae994b5737",
                "reference": "13388f00956b1503577598873fffb5ae994b5737",
                "shasum": ""
            },
            "require": {
                "php": "^7.2.5 || ^8.0",
                "psr/http-factory": "^1.0",
                "psr/http-message": "^1.0",
                "ralouphie/getallheaders": "^3.0"
            },
            "provide": {
                "psr/http-factory-implementation": "1.0",
                "psr/http-message-implementation": "1.0"
            },
            "require-dev": {
                "bamarni/composer-bin-plugin": "^1.4.1",
                "http-interop/http-factory-tests": "^0.9",
                "phpunit/phpunit": "^8.5.8 || ^9.3.10"
            },
            "suggest": {
                "laminas/laminas-httphandlerrunner": "Emit PSR-7 responses"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.4-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "GuzzleHttp\\Psr7\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Graham Campbell",
                    "email": "hello@gjcampbell.co.uk",
                    "homepage": "https://github.com/GrahamCampbell"
                },
                {
                    "name": "Michael Dowling",
                    "email": "mtdowling@gmail.com",
                    "homepage": "https://github.com/mtdowling"
                },
                {
                    "name": "George Mponos",
                    "email": "gmponos@gmail.com",
                    "homepage": "https://github.com/gmponos"
                },
                {
                    "name": "Tobias Nyholm",
                    "email": "tobias.nyholm@gmail.com",
                    "homepage": "https://github.com/Nyholm"
                },
                {
                    "name": "Márk Sági-Kazár",
                    "email": "mark.sagikazar@gmail.com",
                    "homepage": "https://github.com/sagikazarmark"
                },
                {
                    "name": "Tobias Schultze",
                    "email": "webmaster@tubo-world.de",
                    "homepage": "https://github.com/Tobion"
                },
                {
                    "name": "Márk Sági-Kazár",
                    "email": "mark.sagikazar@gmail.com",
                    "homepage": "https://sagikazarmark.hu"
                }
            ],
            "description": "PSR-7 message implementation that also provides common utility methods",
            "keywords": [
                "http",
                "message",
                "psr-7",
                "request",
                "response",
                "stream",
                "uri",
                "url"
            ],
            "support": {
                "issues": "https://github.com/guzzle/psr7/issues",
                "source": "https://github.com/guzzle/psr7/tree/2.4.0"
            },
            "funding": [
                {
                    "url": "https://github.com/GrahamCampbell",
                    "type": "github"
                },
                {
                    "url": "https://github.com/Nyholm",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/guzzlehttp/psr7",
                    "type": "tidelift"
                }
            ],
            "time": "2022-06-20T21:43:11+00:00"
        },
        {
            "name": "laravel/framework",
            "version": "v8.83.19",
            "source": {
                "type": "git",
                "url": "https://github.com/laravel/framework.git",
                "reference": "4264f2ee12330bdb1be050998f58ba7271236395"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/laravel/framework/zipball/4264f2ee12330bdb1be050998f58ba7271236395",
                "reference": "4264f2ee12330bdb1be050998f58ba7271236395",
                "shasum": ""
            },
            "require": {
                "doctrine/inflector": "^1.4|^2.0",
                "dragonmantank/cron-expression": "^3.0.2",
                "egulias/email-validator": "^2.1.10",
                "ext-json": "*",
                "ext-mbstring": "*",
                "ext-openssl": "*",
                "laravel/serializable-closure": "^1.0",
                "league/commonmark": "^1.3|^2.0.2",
                "league/flysystem": "^1.1",
                "monolog/monolog": "^2.0",
                "nesbot/carbon": "^2.53.1",
                "opis/closure": "^3.6",
                "php": "^7.3|^8.0",
                "psr/container": "^1.0",
                "psr/log": "^1.0|^2.0",
                "psr/simple-cache": "^1.0",
                "ramsey/uuid": "^4.2.2",
                "swiftmailer/swiftmailer": "^6.3",
                "symfony/console": "^5.4",
                "symfony/error-handler": "^5.4",
                "symfony/finder": "^5.4",
                "symfony/http-foundation": "^5.4",
                "symfony/http-kernel": "^5.4",
                "symfony/mime": "^5.4",
                "symfony/process": "^5.4",
                "symfony/routing": "^5.4",
                "symfony/var-dumper": "^5.4",
                "tijsverkoyen/css-to-inline-styles": "^2.2.2",
                "vlucas/phpdotenv": "^5.4.1",
                "voku/portable-ascii": "^1.6.1"
            },
            "conflict": {
                "tightenco/collect": "<5.5.33"
            },
            "provide": {
                "psr/container-implementation": "1.0",
                "psr/simple-cache-implementation": "1.0"
            },
            "replace": {
                "illuminate/auth": "self.version",
                "illuminate/broadcasting": "self.version",
                "illuminate/bus": "self.version",
                "illuminate/cache": "self.version",
                "illuminate/collections": "self.version",
                "illuminate/config": "self.version",
                "illuminate/console": "self.version",
                "illuminate/container": "self.version",
                "illuminate/contracts": "self.version",
                "illuminate/cookie": "self.version",
                "illuminate/database": "self.version",
                "illuminate/encryption": "self.version",
                "illuminate/events": "self.version",
                "illuminate/filesystem": "self.version",
                "illuminate/hashing": "self.version",
                "illuminate/http": "self.version",
                "illuminate/log": "self.version",
                "illuminate/macroable": "self.version",
                "illuminate/mail": "self.version",
                "illuminate/notifications": "self.version",
                "illuminate/pagination": "self.version",
                "illuminate/pipeline": "self.version",
                "illuminate/queue": "self.version",
                "illuminate/redis": "self.version",
                "illuminate/routing": "self.version",
                "illuminate/session": "self.version",
                "illuminate/support": "self.version",
                "illuminate/testing": "self.version",
                "illuminate/translation": "self.version",
                "illuminate/validation": "self.version",
                "illuminate/view": "self.version"
            },
            "require-dev": {
                "aws/aws-sdk-php": "^3.198.1",
                "doctrine/dbal": "^2.13.3|^3.1.4",
                "filp/whoops": "^2.14.3",
                "guzzlehttp/guzzle": "^6.5.5|^7.0.1",
                "league/flysystem-cached-adapter": "^1.0",
                "mockery/mockery": "^1.4.4",
                "orchestra/testbench-core": "^6.27",
                "pda/pheanstalk": "^4.0",
                "phpunit/phpunit": "^8.5.19|^9.5.8",
                "predis/predis": "^1.1.9",
                "symfony/cache": "^5.4"
            },
            "suggest": {
                "ably/ably-php": "Required to use the Ably broadcast driver (^1.0).",
                "aws/aws-sdk-php": "Required to use the SQS queue driver, DynamoDb failed job storage and SES mail driver (^3.198.1).",
                "brianium/paratest": "Required to run tests in parallel (^6.0).",
                "doctrine/dbal": "Required to rename columns and drop SQLite columns (^2.13.3|^3.1.4).",
                "ext-bcmath": "Required to use the multiple_of validation rule.",
                "ext-ftp": "Required to use the Flysystem FTP driver.",
                "ext-gd": "Required to use Illuminate\\Http\\Testing\\FileFactory::image().",
                "ext-memcached": "Required to use the memcache cache driver.",
                "ext-pcntl": "Required to use all features of the queue worker.",
                "ext-posix": "Required to use all features of the queue worker.",
                "ext-redis": "Required to use the Redis cache and queue drivers (^4.0|^5.0).",
                "fakerphp/faker": "Required to use the eloquent factory builder (^1.9.1).",
                "filp/whoops": "Required for friendly error pages in development (^2.14.3).",
                "guzzlehttp/guzzle": "Required to use the HTTP Client, Mailgun mail driver and the ping methods on schedules (^6.5.5|^7.0.1).",
                "laravel/tinker": "Required to use the tinker console command (^2.0).",
                "league/flysystem-aws-s3-v3": "Required to use the Flysystem S3 driver (^1.0).",
                "league/flysystem-cached-adapter": "Required to use the Flysystem cache (^1.0).",
                "league/flysystem-sftp": "Required to use the Flysystem SFTP driver (^1.0).",
                "mockery/mockery": "Required to use mocking (^1.4.4).",
                "nyholm/psr7": "Required to use PSR-7 bridging features (^1.2).",
                "pda/pheanstalk": "Required to use the beanstalk queue driver (^4.0).",
                "phpunit/phpunit": "Required to use assertions and run tests (^8.5.19|^9.5.8).",
                "predis/predis": "Required to use the predis connector (^1.1.9).",
                "psr/http-message": "Required to allow Storage::put to accept a StreamInterface (^1.0).",
                "pusher/pusher-php-server": "Required to use the Pusher broadcast driver (^4.0|^5.0|^6.0|^7.0).",
                "symfony/cache": "Required to PSR-6 cache bridge (^5.4).",
                "symfony/filesystem": "Required to enable support for relative symbolic links (^5.4).",
                "symfony/psr-http-message-bridge": "Required to use PSR-7 bridging features (^2.0).",
                "wildbit/swiftmailer-postmark": "Required to use Postmark mail driver (^3.0)."
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "8.x-dev"
                }
            },
            "autoload": {
                "files": [
                    "src/Illuminate/Collections/helpers.php",
                    "src/Illuminate/Events/functions.php",
                    "src/Illuminate/Foundation/helpers.php",
                    "src/Illuminate/Support/helpers.php"
                ],
                "psr-4": {
                    "Illuminate\\": "src/Illuminate/",
                    "Illuminate\\Support\\": [
                        "src/Illuminate/Macroable/",
                        "src/Illuminate/Collections/"
                    ]
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Taylor Otwell",
                    "email": "taylor@laravel.com"
                }
            ],
            "description": "The Laravel Framework.",
            "homepage": "https://laravel.com",
            "keywords": [
                "framework",
                "laravel"
            ],
            "support": {
                "issues": "https://github.com/laravel/framework/issues",
                "source": "https://github.com/laravel/framework"
            },
            "time": "2022-07-13T13:23:09+00:00"
        },
        {
            "name": "laravel/sanctum",
            "version": "v2.15.1",
            "source": {
                "type": "git",
                "url": "https://github.com/laravel/sanctum.git",
                "reference": "31fbe6f85aee080c4dc2f9b03dc6dd5d0ee72473"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/laravel/sanctum/zipball/31fbe6f85aee080c4dc2f9b03dc6dd5d0ee72473",
                "reference": "31fbe6f85aee080c4dc2f9b03dc6dd5d0ee72473",
                "shasum": ""
            },
            "require": {
                "ext-json": "*",
                "illuminate/console": "^6.9|^7.0|^8.0|^9.0",
                "illuminate/contracts": "^6.9|^7.0|^8.0|^9.0",
                "illuminate/database": "^6.9|^7.0|^8.0|^9.0",
                "illuminate/support": "^6.9|^7.0|^8.0|^9.0",
                "php": "^7.2|^8.0"
            },
            "require-dev": {
                "mockery/mockery": "^1.0",
                "orchestra/testbench": "^4.0|^5.0|^6.0|^7.0",
                "phpunit/phpunit": "^8.0|^9.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.x-dev"
                },
                "laravel": {
                    "providers": [
                        "Laravel\\Sanctum\\SanctumServiceProvider"
                    ]
                }
            },
            "autoload": {
                "psr-4": {
                    "Laravel\\Sanctum\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Taylor Otwell",
                    "email": "taylor@laravel.com"
                }
            ],
            "description": "Laravel Sanctum provides a featherweight authentication system for SPAs and simple APIs.",
            "keywords": [
                "auth",
                "laravel",
                "sanctum"
            ],
            "support": {
                "issues": "https://github.com/laravel/sanctum/issues",
                "source": "https://github.com/laravel/sanctum"
            },
            "time": "2022-04-08T13:39:49+00:00"
        },
        {
            "name": "laravel/serializable-closure",
            "version": "v1.2.0",
            "source": {
                "type": "git",
                "url": "https://github.com/laravel/serializable-closure.git",
                "reference": "09f0e9fb61829f628205b7c94906c28740ff9540"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/laravel/serializable-closure/zipball/09f0e9fb61829f628205b7c94906c28740ff9540",
                "reference": "09f0e9fb61829f628205b7c94906c28740ff9540",
                "shasum": ""
            },
            "require": {
                "php": "^7.3|^8.0"
            },
            "require-dev": {
                "pestphp/pest": "^1.18",
                "phpstan/phpstan": "^0.12.98",
                "symfony/var-dumper": "^5.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Laravel\\SerializableClosure\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Taylor Otwell",
                    "email": "taylor@laravel.com"
                },
                {
                    "name": "Nuno Maduro",
                    "email": "nuno@laravel.com"
                }
            ],
            "description": "Laravel Serializable Closure provides an easy and secure way to serialize closures in PHP.",
            "keywords": [
                "closure",
                "laravel",
                "serializable"
            ],
            "support": {
                "issues": "https://github.com/laravel/serializable-closure/issues",
                "source": "https://github.com/laravel/serializable-closure"
            },
            "time": "2022-05-16T17:09:47+00:00"
        },
        {
            "name": "laravel/tinker",
            "version": "v2.7.2",
            "source": {
                "type": "git",
                "url": "https://github.com/laravel/tinker.git",
                "reference": "dff39b661e827dae6e092412f976658df82dbac5"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/laravel/tinker/zipball/dff39b661e827dae6e092412f976658df82dbac5",
                "reference": "dff39b661e827dae6e092412f976658df82dbac5",
                "shasum": ""
            },
            "require": {
                "illuminate/console": "^6.0|^7.0|^8.0|^9.0",
                "illuminate/contracts": "^6.0|^7.0|^8.0|^9.0",
                "illuminate/support": "^6.0|^7.0|^8.0|^9.0",
                "php": "^7.2.5|^8.0",
                "psy/psysh": "^0.10.4|^0.11.1",
                "symfony/var-dumper": "^4.3.4|^5.0|^6.0"
            },
            "require-dev": {
                "mockery/mockery": "~1.3.3|^1.4.2",
                "phpunit/phpunit": "^8.5.8|^9.3.3"
            },
            "suggest": {
                "illuminate/database": "The Illuminate Database package (^6.0|^7.0|^8.0|^9.0)."
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.x-dev"
                },
                "laravel": {
                    "providers": [
                        "Laravel\\Tinker\\TinkerServiceProvider"
                    ]
                }
            },
            "autoload": {
                "psr-4": {
                    "Laravel\\Tinker\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Taylor Otwell",
                    "email": "taylor@laravel.com"
                }
            ],
            "description": "Powerful REPL for the Laravel framework.",
            "keywords": [
                "REPL",
                "Tinker",
                "laravel",
                "psysh"
            ],
            "support": {
                "issues": "https://github.com/laravel/tinker/issues",
                "source": "https://github.com/laravel/tinker/tree/v2.7.2"
            },
            "time": "2022-03-23T12:38:24+00:00"
        },
        {
            "name": "league/commonmark",
            "version": "2.3.3",
            "source": {
                "type": "git",
                "url": "https://github.com/thephpleague/commonmark.git",
                "reference": "0da1dca5781dd3cfddbe328224d9a7a62571addc"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/thephpleague/commonmark/zipball/0da1dca5781dd3cfddbe328224d9a7a62571addc",
                "reference": "0da1dca5781dd3cfddbe328224d9a7a62571addc",
                "shasum": ""
            },
            "require": {
                "ext-mbstring": "*",
                "league/config": "^1.1.1",
                "php": "^7.4 || ^8.0",
                "psr/event-dispatcher": "^1.0",
                "symfony/deprecation-contracts": "^2.1 || ^3.0",
                "symfony/polyfill-php80": "^1.16"
            },
            "require-dev": {
                "cebe/markdown": "^1.0",
                "commonmark/cmark": "0.30.0",
                "commonmark/commonmark.js": "0.30.0",
                "composer/package-versions-deprecated": "^1.8",
                "embed/embed": "^4.4",
                "erusev/parsedown": "^1.0",
                "ext-json": "*",
                "github/gfm": "0.29.0",
                "michelf/php-markdown": "^1.4",
                "nyholm/psr7": "^1.5",
                "phpstan/phpstan": "^0.12.88 || ^1.0.0",
                "phpunit/phpunit": "^9.5.5",
                "scrutinizer/ocular": "^1.8.1",
                "symfony/finder": "^5.3",
                "symfony/yaml": "^2.3 | ^3.0 | ^4.0 | ^5.0 | ^6.0",
                "unleashedtech/php-coding-standard": "^3.1",
                "vimeo/psalm": "^4.7.3"
            },
            "suggest": {
                "symfony/yaml": "v2.3+ required if using the Front Matter extension"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "2.4-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "League\\CommonMark\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Colin O'Dell",
                    "email": "colinodell@gmail.com",
                    "homepage": "https://www.colinodell.com",
                    "role": "Lead Developer"
                }
            ],
            "description": "Highly-extensible PHP Markdown parser which fully supports the CommonMark spec and GitHub-Flavored Markdown (GFM)",
            "homepage": "https://commonmark.thephpleague.com",
            "keywords": [
                "commonmark",
                "flavored",
                "gfm",
                "github",
                "github-flavored",
                "markdown",
                "md",
                "parser"
            ],
            "support": {
                "docs": "https://commonmark.thephpleague.com/",
                "forum": "https://github.com/thephpleague/commonmark/discussions",
                "issues": "https://github.com/thephpleague/commonmark/issues",
                "rss": "https://github.com/thephpleague/commonmark/releases.atom",
                "source": "https://github.com/thephpleague/commonmark"
            },
            "funding": [
                {
                    "url": "https://www.colinodell.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://www.paypal.me/colinpodell/10.00",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/colinodell",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/league/commonmark",
                    "type": "tidelift"
                }
            ],
            "time": "2022-06-07T21:28:26+00:00"
        },
        {
            "name": "league/config",
            "version": "v1.1.1",
            "source": {
                "type": "git",
                "url": "https://github.com/thephpleague/config.git",
                "reference": "a9d39eeeb6cc49d10a6e6c36f22c4c1f4a767f3e"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/thephpleague/config/zipball/a9d39eeeb6cc49d10a6e6c36f22c4c1f4a767f3e",
                "reference": "a9d39eeeb6cc49d10a6e6c36f22c4c1f4a767f3e",
                "shasum": ""
            },
            "require": {
                "dflydev/dot-access-data": "^3.0.1",
                "nette/schema": "^1.2",
                "php": "^7.4 || ^8.0"
            },
            "require-dev": {
                "phpstan/phpstan": "^0.12.90",
                "phpunit/phpunit": "^9.5.5",
                "scrutinizer/ocular": "^1.8.1",
                "unleashedtech/php-coding-standard": "^3.1",
                "vimeo/psalm": "^4.7.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "1.2-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "League\\Config\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Colin O'Dell",
                    "email": "colinodell@gmail.com",
                    "homepage": "https://www.colinodell.com",
                    "role": "Lead Developer"
                }
            ],
            "description": "Define configuration arrays with strict schemas and access values with dot notation",
            "homepage": "https://config.thephpleague.com",
            "keywords": [
                "array",
                "config",
                "configuration",
                "dot",
                "dot-access",
                "nested",
                "schema"
            ],
            "support": {
                "docs": "https://config.thephpleague.com/",
                "issues": "https://github.com/thephpleague/config/issues",
                "rss": "https://github.com/thephpleague/config/releases.atom",
                "source": "https://github.com/thephpleague/config"
            },
            "funding": [
                {
                    "url": "https://www.colinodell.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://www.paypal.me/colinpodell/10.00",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/colinodell",
                    "type": "github"
                }
            ],
            "time": "2021-08-14T12:15:32+00:00"
        },
        {
            "name": "league/flysystem",
            "version": "1.1.9",
            "source": {
                "type": "git",
                "url": "https://github.com/thephpleague/flysystem.git",
                "reference": "094defdb4a7001845300334e7c1ee2335925ef99"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/thephpleague/flysystem/zipball/094defdb4a7001845300334e7c1ee2335925ef99",
                "reference": "094defdb4a7001845300334e7c1ee2335925ef99",
                "shasum": ""
            },
            "require": {
                "ext-fileinfo": "*",
                "league/mime-type-detection": "^1.3",
                "php": "^7.2.5 || ^8.0"
            },
            "conflict": {
                "league/flysystem-sftp": "<1.0.6"
            },
            "require-dev": {
                "phpspec/prophecy": "^1.11.1",
                "phpunit/phpunit": "^8.5.8"
            },
            "suggest": {
                "ext-ftp": "Allows you to use FTP server storage",
                "ext-openssl": "Allows you to use FTPS server storage",
                "league/flysystem-aws-s3-v2": "Allows you to use S3 storage with AWS SDK v2",
                "league/flysystem-aws-s3-v3": "Allows you to use S3 storage with AWS SDK v3",
                "league/flysystem-azure": "Allows you to use Windows Azure Blob storage",
                "league/flysystem-cached-adapter": "Flysystem adapter decorator for metadata caching",
                "league/flysystem-eventable-filesystem": "Allows you to use EventableFilesystem",
                "league/flysystem-rackspace": "Allows you to use Rackspace Cloud Files",
                "league/flysystem-sftp": "Allows you to use SFTP server storage via phpseclib",
                "league/flysystem-webdav": "Allows you to use WebDAV storage",
                "league/flysystem-ziparchive": "Allows you to use ZipArchive adapter",
                "spatie/flysystem-dropbox": "Allows you to use Dropbox storage",
                "srmklive/flysystem-dropbox-v2": "Allows you to use Dropbox storage for PHP 5 applications"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.1-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "League\\Flysystem\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Frank de Jonge",
                    "email": "info@frenky.net"
                }
            ],
            "description": "Filesystem abstraction: Many filesystems, one API.",
            "keywords": [
                "Cloud Files",
                "WebDAV",
                "abstraction",
                "aws",
                "cloud",
                "copy.com",
                "dropbox",
                "file systems",
                "files",
                "filesystem",
                "filesystems",
                "ftp",
                "rackspace",
                "remote",
                "s3",
                "sftp",
                "storage"
            ],
            "support": {
                "issues": "https://github.com/thephpleague/flysystem/issues",
                "source": "https://github.com/thephpleague/flysystem/tree/1.1.9"
            },
            "funding": [
                {
                    "url": "https://offset.earth/frankdejonge",
                    "type": "other"
                }
            ],
            "time": "2021-12-09T09:40:50+00:00"
        },
        {
            "name": "league/mime-type-detection",
            "version": "1.11.0",
            "source": {
                "type": "git",
                "url": "https://github.com/thephpleague/mime-type-detection.git",
                "reference": "ff6248ea87a9f116e78edd6002e39e5128a0d4dd"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/thephpleague/mime-type-detection/zipball/ff6248ea87a9f116e78edd6002e39e5128a0d4dd",
                "reference": "ff6248ea87a9f116e78edd6002e39e5128a0d4dd",
                "shasum": ""
            },
            "require": {
                "ext-fileinfo": "*",
                "php": "^7.2 || ^8.0"
            },
            "require-dev": {
                "friendsofphp/php-cs-fixer": "^3.2",
                "phpstan/phpstan": "^0.12.68",
                "phpunit/phpunit": "^8.5.8 || ^9.3"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "League\\MimeTypeDetection\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Frank de Jonge",
                    "email": "info@frankdejonge.nl"
                }
            ],
            "description": "Mime-type detection for Flysystem",
            "support": {
                "issues": "https://github.com/thephpleague/mime-type-detection/issues",
                "source": "https://github.com/thephpleague/mime-type-detection/tree/1.11.0"
            },
            "funding": [
                {
                    "url": "https://github.com/frankdejonge",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/league/flysystem",
                    "type": "tidelift"
                }
            ],
            "time": "2022-04-17T13:12:02+00:00"
        },
        {
            "name": "maatwebsite/excel",
            "version": "3.1.40",
            "source": {
                "type": "git",
                "url": "https://github.com/SpartnerNL/Laravel-Excel.git",
                "reference": "8a54972e3d616c74687c3cbff15765555761885c"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/SpartnerNL/Laravel-Excel/zipball/8a54972e3d616c74687c3cbff15765555761885c",
                "reference": "8a54972e3d616c74687c3cbff15765555761885c",
                "shasum": ""
            },
            "require": {
                "ext-json": "*",
                "illuminate/support": "5.8.*|^6.0|^7.0|^8.0|^9.0",
                "php": "^7.0|^8.0",
                "phpoffice/phpspreadsheet": "^1.18"
            },
            "require-dev": {
                "orchestra/testbench": "^6.0|^7.0",
                "predis/predis": "^1.1"
            },
            "type": "library",
            "extra": {
                "laravel": {
                    "providers": [
                        "Maatwebsite\\Excel\\ExcelServiceProvider"
                    ],
                    "aliases": {
                        "Excel": "Maatwebsite\\Excel\\Facades\\Excel"
                    }
                }
            },
            "autoload": {
                "psr-4": {
                    "Maatwebsite\\Excel\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Patrick Brouwers",
                    "email": "patrick@spartner.nl"
                }
            ],
            "description": "Supercharged Excel exports and imports in Laravel",
            "keywords": [
                "PHPExcel",
                "batch",
                "csv",
                "excel",
                "export",
                "import",
                "laravel",
                "php",
                "phpspreadsheet"
            ],
            "support": {
                "issues": "https://github.com/SpartnerNL/Laravel-Excel/issues",
                "source": "https://github.com/SpartnerNL/Laravel-Excel/tree/3.1.40"
            },
            "funding": [
                {
                    "url": "https://laravel-excel.com/commercial-support",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/patrickbrouwers",
                    "type": "github"
                }
            ],
            "time": "2022-05-02T13:50:01+00:00"
        },
        {
            "name": "maennchen/zipstream-php",
            "version": "2.2.1",
            "source": {
                "type": "git",
                "url": "https://github.com/maennchen/ZipStream-PHP.git",
                "reference": "211e9ba1530ea5260b45d90c9ea252f56ec52729"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/maennchen/ZipStream-PHP/zipball/211e9ba1530ea5260b45d90c9ea252f56ec52729",
                "reference": "211e9ba1530ea5260b45d90c9ea252f56ec52729",
                "shasum": ""
            },
            "require": {
                "myclabs/php-enum": "^1.5",
                "php": "^7.4 || ^8.0",
                "psr/http-message": "^1.0",
                "symfony/polyfill-mbstring": "^1.0"
            },
            "require-dev": {
                "ext-zip": "*",
                "guzzlehttp/guzzle": "^6.5.3 || ^7.2.0",
                "mikey179/vfsstream": "^1.6",
                "php-coveralls/php-coveralls": "^2.4",
                "phpunit/phpunit": "^8.5.8 || ^9.4.2",
                "vimeo/psalm": "^4.1"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "ZipStream\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Paul Duncan",
                    "email": "pabs@pablotron.org"
                },
                {
                    "name": "Jonatan Männchen",
                    "email": "jonatan@maennchen.ch"
                },
                {
                    "name": "Jesse Donat",
                    "email": "donatj@gmail.com"
                },
                {
                    "name": "András Kolesár",
                    "email": "kolesar@kolesar.hu"
                }
            ],
            "description": "ZipStream is a library for dynamically streaming dynamic zip files from PHP without writing to the disk at all on the server.",
            "keywords": [
                "stream",
                "zip"
            ],
            "support": {
                "issues": "https://github.com/maennchen/ZipStream-PHP/issues",
                "source": "https://github.com/maennchen/ZipStream-PHP/tree/2.2.1"
            },
            "funding": [
                {
                    "url": "https://opencollective.com/zipstream",
                    "type": "open_collective"
                }
            ],
            "time": "2022-05-18T15:52:06+00:00"
        },
        {
            "name": "markbaker/complex",
            "version": "3.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/MarkBaker/PHPComplex.git",
                "reference": "ab8bc271e404909db09ff2d5ffa1e538085c0f22"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/MarkBaker/PHPComplex/zipball/ab8bc271e404909db09ff2d5ffa1e538085c0f22",
                "reference": "ab8bc271e404909db09ff2d5ffa1e538085c0f22",
                "shasum": ""
            },
            "require": {
                "php": "^7.2 || ^8.0"
            },
            "require-dev": {
                "dealerdirect/phpcodesniffer-composer-installer": "^0.7.0",
                "phpcompatibility/php-compatibility": "^9.0",
                "phpunit/phpunit": "^7.0 || ^8.0 || ^9.3",
                "squizlabs/php_codesniffer": "^3.4"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Complex\\": "classes/src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Mark Baker",
                    "email": "mark@lange.demon.co.uk"
                }
            ],
            "description": "PHP Class for working with complex numbers",
            "homepage": "https://github.com/MarkBaker/PHPComplex",
            "keywords": [
                "complex",
                "mathematics"
            ],
            "support": {
                "issues": "https://github.com/MarkBaker/PHPComplex/issues",
                "source": "https://github.com/MarkBaker/PHPComplex/tree/3.0.1"
            },
            "time": "2021-06-29T15:32:53+00:00"
        },
        {
            "name": "markbaker/matrix",
            "version": "3.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/MarkBaker/PHPMatrix.git",
                "reference": "c66aefcafb4f6c269510e9ac46b82619a904c576"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/MarkBaker/PHPMatrix/zipball/c66aefcafb4f6c269510e9ac46b82619a904c576",
                "reference": "c66aefcafb4f6c269510e9ac46b82619a904c576",
                "shasum": ""
            },
            "require": {
                "php": "^7.1 || ^8.0"
            },
            "require-dev": {
                "dealerdirect/phpcodesniffer-composer-installer": "^0.7.0",
                "phpcompatibility/php-compatibility": "^9.0",
                "phpdocumentor/phpdocumentor": "2.*",
                "phploc/phploc": "^4.0",
                "phpmd/phpmd": "2.*",
                "phpunit/phpunit": "^7.0 || ^8.0 || ^9.3",
                "sebastian/phpcpd": "^4.0",
                "squizlabs/php_codesniffer": "^3.4"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Matrix\\": "classes/src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Mark Baker",
                    "email": "mark@demon-angel.eu"
                }
            ],
            "description": "PHP Class for working with matrices",
            "homepage": "https://github.com/MarkBaker/PHPMatrix",
            "keywords": [
                "mathematics",
                "matrix",
                "vector"
            ],
            "support": {
                "issues": "https://github.com/MarkBaker/PHPMatrix/issues",
                "source": "https://github.com/MarkBaker/PHPMatrix/tree/3.0.0"
            },
            "time": "2021-07-01T19:01:15+00:00"
        },
        {
            "name": "monolog/monolog",
            "version": "2.7.0",
            "source": {
                "type": "git",
                "url": "https://github.com/Seldaek/monolog.git",
                "reference": "5579edf28aee1190a798bfa5be8bc16c563bd524"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/Seldaek/monolog/zipball/5579edf28aee1190a798bfa5be8bc16c563bd524",
                "reference": "5579edf28aee1190a798bfa5be8bc16c563bd524",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2",
                "psr/log": "^1.0.1 || ^2.0 || ^3.0"
            },
            "provide": {
                "psr/log-implementation": "1.0.0 || 2.0.0 || 3.0.0"
            },
            "require-dev": {
                "aws/aws-sdk-php": "^2.4.9 || ^3.0",
                "doctrine/couchdb": "~1.0@dev",
                "elasticsearch/elasticsearch": "^7 || ^8",
                "ext-json": "*",
                "graylog2/gelf-php": "^1.4.2",
                "guzzlehttp/guzzle": "^7.4",
                "guzzlehttp/psr7": "^2.2",
                "mongodb/mongodb": "^1.8",
                "php-amqplib/php-amqplib": "~2.4 || ^3",
                "php-console/php-console": "^3.1.3",
                "phpspec/prophecy": "^1.15",
                "phpstan/phpstan": "^0.12.91",
                "phpunit/phpunit": "^8.5.14",
                "predis/predis": "^1.1",
                "rollbar/rollbar": "^1.3 || ^2 || ^3",
                "ruflin/elastica": "^7",
                "swiftmailer/swiftmailer": "^5.3|^6.0",
                "symfony/mailer": "^5.4 || ^6",
                "symfony/mime": "^5.4 || ^6"
            },
            "suggest": {
                "aws/aws-sdk-php": "Allow sending log messages to AWS services like DynamoDB",
                "doctrine/couchdb": "Allow sending log messages to a CouchDB server",
                "elasticsearch/elasticsearch": "Allow sending log messages to an Elasticsearch server via official client",
                "ext-amqp": "Allow sending log messages to an AMQP server (1.0+ required)",
                "ext-curl": "Required to send log messages using the IFTTTHandler, the LogglyHandler, the SendGridHandler, the SlackWebhookHandler or the TelegramBotHandler",
                "ext-mbstring": "Allow to work properly with unicode symbols",
                "ext-mongodb": "Allow sending log messages to a MongoDB server (via driver)",
                "ext-openssl": "Required to send log messages using SSL",
                "ext-sockets": "Allow sending log messages to a Syslog server (via UDP driver)",
                "graylog2/gelf-php": "Allow sending log messages to a GrayLog2 server",
                "mongodb/mongodb": "Allow sending log messages to a MongoDB server (via library)",
                "php-amqplib/php-amqplib": "Allow sending log messages to an AMQP server using php-amqplib",
                "php-console/php-console": "Allow sending log messages to Google Chrome",
                "rollbar/rollbar": "Allow sending log messages to Rollbar",
                "ruflin/elastica": "Allow sending log messages to an Elastic Search server"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "2.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Monolog\\": "src/Monolog"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Jordi Boggiano",
                    "email": "j.boggiano@seld.be",
                    "homepage": "https://seld.be"
                }
            ],
            "description": "Sends your logs to files, sockets, inboxes, databases and various web services",
            "homepage": "https://github.com/Seldaek/monolog",
            "keywords": [
                "log",
                "logging",
                "psr-3"
            ],
            "support": {
                "issues": "https://github.com/Seldaek/monolog/issues",
                "source": "https://github.com/Seldaek/monolog/tree/2.7.0"
            },
            "funding": [
                {
                    "url": "https://github.com/Seldaek",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/monolog/monolog",
                    "type": "tidelift"
                }
            ],
            "time": "2022-06-09T08:59:12+00:00"
        },
        {
            "name": "myclabs/php-enum",
            "version": "1.8.3",
            "source": {
                "type": "git",
                "url": "https://github.com/myclabs/php-enum.git",
                "reference": "b942d263c641ddb5190929ff840c68f78713e937"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/myclabs/php-enum/zipball/b942d263c641ddb5190929ff840c68f78713e937",
                "reference": "b942d263c641ddb5190929ff840c68f78713e937",
                "shasum": ""
            },
            "require": {
                "ext-json": "*",
                "php": "^7.3 || ^8.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^9.5",
                "squizlabs/php_codesniffer": "1.*",
                "vimeo/psalm": "^4.6.2"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "MyCLabs\\Enum\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "PHP Enum contributors",
                    "homepage": "https://github.com/myclabs/php-enum/graphs/contributors"
                }
            ],
            "description": "PHP Enum implementation",
            "homepage": "http://github.com/myclabs/php-enum",
            "keywords": [
                "enum"
            ],
            "support": {
                "issues": "https://github.com/myclabs/php-enum/issues",
                "source": "https://github.com/myclabs/php-enum/tree/1.8.3"
            },
            "funding": [
                {
                    "url": "https://github.com/mnapoli",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/myclabs/php-enum",
                    "type": "tidelift"
                }
            ],
            "time": "2021-07-05T08:18:36+00:00"
        },
        {
            "name": "nesbot/carbon",
            "version": "2.59.1",
            "source": {
                "type": "git",
                "url": "https://github.com/briannesbitt/Carbon.git",
                "reference": "a9000603ea337c8df16cc41f8b6be95a65f4d0f5"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/briannesbitt/Carbon/zipball/a9000603ea337c8df16cc41f8b6be95a65f4d0f5",
                "reference": "a9000603ea337c8df16cc41f8b6be95a65f4d0f5",
                "shasum": ""
            },
            "require": {
                "ext-json": "*",
                "php": "^7.1.8 || ^8.0",
                "symfony/polyfill-mbstring": "^1.0",
                "symfony/polyfill-php80": "^1.16",
                "symfony/translation": "^3.4 || ^4.0 || ^5.0 || ^6.0"
            },
            "require-dev": {
                "doctrine/dbal": "^2.0 || ^3.0",
                "doctrine/orm": "^2.7",
                "friendsofphp/php-cs-fixer": "^3.0",
                "kylekatarnls/multi-tester": "^2.0",
                "ondrejmirtes/better-reflection": "*",
                "phpmd/phpmd": "^2.9",
                "phpstan/extension-installer": "^1.0",
                "phpstan/phpstan": "^0.12.99 || ^1.7.14",
                "phpunit/php-file-iterator": "^2.0.5 || ^3.0.6",
                "phpunit/phpunit": "^7.5.20 || ^8.5.26 || ^9.5.20",
                "squizlabs/php_codesniffer": "^3.4"
            },
            "bin": [
                "bin/carbon"
            ],
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-3.x": "3.x-dev",
                    "dev-master": "2.x-dev"
                },
                "laravel": {
                    "providers": [
                        "Carbon\\Laravel\\ServiceProvider"
                    ]
                },
                "phpstan": {
                    "includes": [
                        "extension.neon"
                    ]
                }
            },
            "autoload": {
                "psr-4": {
                    "Carbon\\": "src/Carbon/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Brian Nesbitt",
                    "email": "brian@nesbot.com",
                    "homepage": "https://markido.com"
                },
                {
                    "name": "kylekatarnls",
                    "homepage": "https://github.com/kylekatarnls"
                }
            ],
            "description": "An API extension for DateTime that supports 281 different languages.",
            "homepage": "https://carbon.nesbot.com",
            "keywords": [
                "date",
                "datetime",
                "time"
            ],
            "support": {
                "docs": "https://carbon.nesbot.com/docs",
                "issues": "https://github.com/briannesbitt/Carbon/issues",
                "source": "https://github.com/briannesbitt/Carbon"
            },
            "funding": [
                {
                    "url": "https://github.com/sponsors/kylekatarnls",
                    "type": "github"
                },
                {
                    "url": "https://opencollective.com/Carbon#sponsor",
                    "type": "opencollective"
                },
                {
                    "url": "https://tidelift.com/subscription/pkg/packagist-nesbot-carbon?utm_source=packagist-nesbot-carbon&utm_medium=referral&utm_campaign=readme",
                    "type": "tidelift"
                }
            ],
            "time": "2022-06-29T21:43:55+00:00"
        },
        {
            "name": "nette/schema",
            "version": "v1.2.2",
            "source": {
                "type": "git",
                "url": "https://github.com/nette/schema.git",
                "reference": "9a39cef03a5b34c7de64f551538cbba05c2be5df"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/nette/schema/zipball/9a39cef03a5b34c7de64f551538cbba05c2be5df",
                "reference": "9a39cef03a5b34c7de64f551538cbba05c2be5df",
                "shasum": ""
            },
            "require": {
                "nette/utils": "^2.5.7 || ^3.1.5 ||  ^4.0",
                "php": ">=7.1 <8.2"
            },
            "require-dev": {
                "nette/tester": "^2.3 || ^2.4",
                "phpstan/phpstan-nette": "^0.12",
                "tracy/tracy": "^2.7"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.2-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause",
                "GPL-2.0-only",
                "GPL-3.0-only"
            ],
            "authors": [
                {
                    "name": "David Grudl",
                    "homepage": "https://davidgrudl.com"
                },
                {
                    "name": "Nette Community",
                    "homepage": "https://nette.org/contributors"
                }
            ],
            "description": "📐 Nette Schema: validating data structures against a given Schema.",
            "homepage": "https://nette.org",
            "keywords": [
                "config",
                "nette"
            ],
            "support": {
                "issues": "https://github.com/nette/schema/issues",
                "source": "https://github.com/nette/schema/tree/v1.2.2"
            },
            "time": "2021-10-15T11:40:02+00:00"
        },
        {
            "name": "nette/utils",
            "version": "v3.2.7",
            "source": {
                "type": "git",
                "url": "https://github.com/nette/utils.git",
                "reference": "0af4e3de4df9f1543534beab255ccf459e7a2c99"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/nette/utils/zipball/0af4e3de4df9f1543534beab255ccf459e7a2c99",
                "reference": "0af4e3de4df9f1543534beab255ccf459e7a2c99",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2 <8.2"
            },
            "conflict": {
                "nette/di": "<3.0.6"
            },
            "require-dev": {
                "nette/tester": "~2.0",
                "phpstan/phpstan": "^1.0",
                "tracy/tracy": "^2.3"
            },
            "suggest": {
                "ext-gd": "to use Image",
                "ext-iconv": "to use Strings::webalize(), toAscii(), chr() and reverse()",
                "ext-intl": "to use Strings::webalize(), toAscii(), normalize() and compare()",
                "ext-json": "to use Nette\\Utils\\Json",
                "ext-mbstring": "to use Strings::lower() etc...",
                "ext-tokenizer": "to use Nette\\Utils\\Reflection::getUseStatements()",
                "ext-xml": "to use Strings::length() etc. when mbstring is not available"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.2-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause",
                "GPL-2.0-only",
                "GPL-3.0-only"
            ],
            "authors": [
                {
                    "name": "David Grudl",
                    "homepage": "https://davidgrudl.com"
                },
                {
                    "name": "Nette Community",
                    "homepage": "https://nette.org/contributors"
                }
            ],
            "description": "🛠  Nette Utils: lightweight utilities for string & array manipulation, image handling, safe JSON encoding/decoding, validation, slug or strong password generating etc.",
            "homepage": "https://nette.org",
            "keywords": [
                "array",
                "core",
                "datetime",
                "images",
                "json",
                "nette",
                "paginator",
                "password",
                "slugify",
                "string",
                "unicode",
                "utf-8",
                "utility",
                "validation"
            ],
            "support": {
                "issues": "https://github.com/nette/utils/issues",
                "source": "https://github.com/nette/utils/tree/v3.2.7"
            },
            "time": "2022-01-24T11:29:14+00:00"
        },
        {
            "name": "nikic/php-parser",
            "version": "v4.14.0",
            "source": {
                "type": "git",
                "url": "https://github.com/nikic/PHP-Parser.git",
                "reference": "34bea19b6e03d8153165d8f30bba4c3be86184c1"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/nikic/PHP-Parser/zipball/34bea19b6e03d8153165d8f30bba4c3be86184c1",
                "reference": "34bea19b6e03d8153165d8f30bba4c3be86184c1",
                "shasum": ""
            },
            "require": {
                "ext-tokenizer": "*",
                "php": ">=7.0"
            },
            "require-dev": {
                "ircmaxell/php-yacc": "^0.0.7",
                "phpunit/phpunit": "^6.5 || ^7.0 || ^8.0 || ^9.0"
            },
            "bin": [
                "bin/php-parse"
            ],
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "4.9-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "PhpParser\\": "lib/PhpParser"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Nikita Popov"
                }
            ],
            "description": "A PHP parser written in PHP",
            "keywords": [
                "parser",
                "php"
            ],
            "support": {
                "issues": "https://github.com/nikic/PHP-Parser/issues",
                "source": "https://github.com/nikic/PHP-Parser/tree/v4.14.0"
            },
            "time": "2022-05-31T20:59:12+00:00"
        },
        {
            "name": "opis/closure",
            "version": "3.6.3",
            "source": {
                "type": "git",
                "url": "https://github.com/opis/closure.git",
                "reference": "3d81e4309d2a927abbe66df935f4bb60082805ad"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/opis/closure/zipball/3d81e4309d2a927abbe66df935f4bb60082805ad",
                "reference": "3d81e4309d2a927abbe66df935f4bb60082805ad",
                "shasum": ""
            },
            "require": {
                "php": "^5.4 || ^7.0 || ^8.0"
            },
            "require-dev": {
                "jeremeamia/superclosure": "^2.0",
                "phpunit/phpunit": "^4.0 || ^5.0 || ^6.0 || ^7.0 || ^8.0 || ^9.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.6.x-dev"
                }
            },
            "autoload": {
                "files": [
                    "functions.php"
                ],
                "psr-4": {
                    "Opis\\Closure\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Marius Sarca",
                    "email": "marius.sarca@gmail.com"
                },
                {
                    "name": "Sorin Sarca",
                    "email": "sarca_sorin@hotmail.com"
                }
            ],
            "description": "A library that can be used to serialize closures (anonymous functions) and arbitrary objects.",
            "homepage": "https://opis.io/closure",
            "keywords": [
                "anonymous functions",
                "closure",
                "function",
                "serializable",
                "serialization",
                "serialize"
            ],
            "support": {
                "issues": "https://github.com/opis/closure/issues",
                "source": "https://github.com/opis/closure/tree/3.6.3"
            },
            "time": "2022-01-27T09:35:39+00:00"
        },
        {
            "name": "phpoffice/phpspreadsheet",
            "version": "1.24.0",
            "source": {
                "type": "git",
                "url": "https://github.com/PHPOffice/PhpSpreadsheet.git",
                "reference": "ebe8745c92a7cac4514d040758393b5399633b83"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/PHPOffice/PhpSpreadsheet/zipball/ebe8745c92a7cac4514d040758393b5399633b83",
                "reference": "ebe8745c92a7cac4514d040758393b5399633b83",
                "shasum": ""
            },
            "require": {
                "ext-ctype": "*",
                "ext-dom": "*",
                "ext-fileinfo": "*",
                "ext-gd": "*",
                "ext-iconv": "*",
                "ext-libxml": "*",
                "ext-mbstring": "*",
                "ext-simplexml": "*",
                "ext-xml": "*",
                "ext-xmlreader": "*",
                "ext-xmlwriter": "*",
                "ext-zip": "*",
                "ext-zlib": "*",
                "ezyang/htmlpurifier": "^4.13",
                "maennchen/zipstream-php": "^2.1",
                "markbaker/complex": "^3.0",
                "markbaker/matrix": "^3.0",
                "php": "^7.3 || ^8.0",
                "psr/http-client": "^1.0",
                "psr/http-factory": "^1.0",
                "psr/simple-cache": "^1.0 || ^2.0"
            },
            "require-dev": {
                "dealerdirect/phpcodesniffer-composer-installer": "dev-master",
                "dompdf/dompdf": "^1.0 || ^2.0",
                "friendsofphp/php-cs-fixer": "^3.2",
                "jpgraph/jpgraph": "^4.0",
                "mpdf/mpdf": "8.1.1",
                "phpcompatibility/php-compatibility": "^9.3",
                "phpstan/phpstan": "^1.1",
                "phpstan/phpstan-phpunit": "^1.0",
                "phpunit/phpunit": "^8.5 || ^9.0",
                "squizlabs/php_codesniffer": "^3.7",
                "tecnickcom/tcpdf": "^6.4"
            },
            "suggest": {
                "dompdf/dompdf": "Option for rendering PDF with PDF Writer (doesn't yet support PHP8)",
                "jpgraph/jpgraph": "Option for rendering charts, or including charts with PDF or HTML Writers",
                "mpdf/mpdf": "Option for rendering PDF with PDF Writer",
                "tecnickcom/tcpdf": "Option for rendering PDF with PDF Writer (doesn't yet support PHP8)"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "PhpOffice\\PhpSpreadsheet\\": "src/PhpSpreadsheet"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Maarten Balliauw",
                    "homepage": "https://blog.maartenballiauw.be"
                },
                {
                    "name": "Mark Baker",
                    "homepage": "https://markbakeruk.net"
                },
                {
                    "name": "Franck Lefevre",
                    "homepage": "https://rootslabs.net"
                },
                {
                    "name": "Erik Tilt"
                },
                {
                    "name": "Adrien Crivelli"
                }
            ],
            "description": "PHPSpreadsheet - Read, Create and Write Spreadsheet documents in PHP - Spreadsheet engine",
            "homepage": "https://github.com/PHPOffice/PhpSpreadsheet",
            "keywords": [
                "OpenXML",
                "excel",
                "gnumeric",
                "ods",
                "php",
                "spreadsheet",
                "xls",
                "xlsx"
            ],
            "support": {
                "issues": "https://github.com/PHPOffice/PhpSpreadsheet/issues",
                "source": "https://github.com/PHPOffice/PhpSpreadsheet/tree/1.24.0"
            },
            "time": "2022-07-09T13:49:09+00:00"
        },
        {
            "name": "phpoption/phpoption",
            "version": "1.8.1",
            "source": {
                "type": "git",
                "url": "https://github.com/schmittjoh/php-option.git",
                "reference": "eab7a0df01fe2344d172bff4cd6dbd3f8b84ad15"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/schmittjoh/php-option/zipball/eab7a0df01fe2344d172bff4cd6dbd3f8b84ad15",
                "reference": "eab7a0df01fe2344d172bff4cd6dbd3f8b84ad15",
                "shasum": ""
            },
            "require": {
                "php": "^7.0 || ^8.0"
            },
            "require-dev": {
                "bamarni/composer-bin-plugin": "^1.4.1",
                "phpunit/phpunit": "^6.5.14 || ^7.5.20 || ^8.5.19 || ^9.5.8"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.8-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "PhpOption\\": "src/PhpOption/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "Apache-2.0"
            ],
            "authors": [
                {
                    "name": "Johannes M. Schmitt",
                    "email": "schmittjoh@gmail.com",
                    "homepage": "https://github.com/schmittjoh"
                },
                {
                    "name": "Graham Campbell",
                    "email": "hello@gjcampbell.co.uk",
                    "homepage": "https://github.com/GrahamCampbell"
                }
            ],
            "description": "Option Type for PHP",
            "keywords": [
                "language",
                "option",
                "php",
                "type"
            ],
            "support": {
                "issues": "https://github.com/schmittjoh/php-option/issues",
                "source": "https://github.com/schmittjoh/php-option/tree/1.8.1"
            },
            "funding": [
                {
                    "url": "https://github.com/GrahamCampbell",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/phpoption/phpoption",
                    "type": "tidelift"
                }
            ],
            "time": "2021-12-04T23:24:31+00:00"
        },
        {
            "name": "psr/container",
            "version": "1.1.2",
            "source": {
                "type": "git",
                "url": "https://github.com/php-fig/container.git",
                "reference": "513e0666f7216c7459170d56df27dfcefe1689ea"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/php-fig/container/zipball/513e0666f7216c7459170d56df27dfcefe1689ea",
                "reference": "513e0666f7216c7459170d56df27dfcefe1689ea",
                "shasum": ""
            },
            "require": {
                "php": ">=7.4.0"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Psr\\Container\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "PHP-FIG",
                    "homepage": "https://www.php-fig.org/"
                }
            ],
            "description": "Common Container Interface (PHP FIG PSR-11)",
            "homepage": "https://github.com/php-fig/container",
            "keywords": [
                "PSR-11",
                "container",
                "container-interface",
                "container-interop",
                "psr"
            ],
            "support": {
                "issues": "https://github.com/php-fig/container/issues",
                "source": "https://github.com/php-fig/container/tree/1.1.2"
            },
            "time": "2021-11-05T16:50:12+00:00"
        },
        {
            "name": "psr/event-dispatcher",
            "version": "1.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/php-fig/event-dispatcher.git",
                "reference": "dbefd12671e8a14ec7f180cab83036ed26714bb0"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/php-fig/event-dispatcher/zipball/dbefd12671e8a14ec7f180cab83036ed26714bb0",
                "reference": "dbefd12671e8a14ec7f180cab83036ed26714bb0",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Psr\\EventDispatcher\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "PHP-FIG",
                    "homepage": "http://www.php-fig.org/"
                }
            ],
            "description": "Standard interfaces for event handling.",
            "keywords": [
                "events",
                "psr",
                "psr-14"
            ],
            "support": {
                "issues": "https://github.com/php-fig/event-dispatcher/issues",
                "source": "https://github.com/php-fig/event-dispatcher/tree/1.0.0"
            },
            "time": "2019-01-08T18:20:26+00:00"
        },
        {
            "name": "psr/http-client",
            "version": "1.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/php-fig/http-client.git",
                "reference": "2dfb5f6c5eff0e91e20e913f8c5452ed95b86621"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/php-fig/http-client/zipball/2dfb5f6c5eff0e91e20e913f8c5452ed95b86621",
                "reference": "2dfb5f6c5eff0e91e20e913f8c5452ed95b86621",
                "shasum": ""
            },
            "require": {
                "php": "^7.0 || ^8.0",
                "psr/http-message": "^1.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Psr\\Http\\Client\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "PHP-FIG",
                    "homepage": "http://www.php-fig.org/"
                }
            ],
            "description": "Common interface for HTTP clients",
            "homepage": "https://github.com/php-fig/http-client",
            "keywords": [
                "http",
                "http-client",
                "psr",
                "psr-18"
            ],
            "support": {
                "source": "https://github.com/php-fig/http-client/tree/master"
            },
            "time": "2020-06-29T06:28:15+00:00"
        },
        {
            "name": "psr/http-factory",
            "version": "1.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/php-fig/http-factory.git",
                "reference": "12ac7fcd07e5b077433f5f2bee95b3a771bf61be"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/php-fig/http-factory/zipball/12ac7fcd07e5b077433f5f2bee95b3a771bf61be",
                "reference": "12ac7fcd07e5b077433f5f2bee95b3a771bf61be",
                "shasum": ""
            },
            "require": {
                "php": ">=7.0.0",
                "psr/http-message": "^1.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Psr\\Http\\Message\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "PHP-FIG",
                    "homepage": "http://www.php-fig.org/"
                }
            ],
            "description": "Common interfaces for PSR-7 HTTP message factories",
            "keywords": [
                "factory",
                "http",
                "message",
                "psr",
                "psr-17",
                "psr-7",
                "request",
                "response"
            ],
            "support": {
                "source": "https://github.com/php-fig/http-factory/tree/master"
            },
            "time": "2019-04-30T12:38:16+00:00"
        },
        {
            "name": "psr/http-message",
            "version": "1.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/php-fig/http-message.git",
                "reference": "f6561bf28d520154e4b0ec72be95418abe6d9363"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/php-fig/http-message/zipball/f6561bf28d520154e4b0ec72be95418abe6d9363",
                "reference": "f6561bf28d520154e4b0ec72be95418abe6d9363",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Psr\\Http\\Message\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "PHP-FIG",
                    "homepage": "http://www.php-fig.org/"
                }
            ],
            "description": "Common interface for HTTP messages",
            "homepage": "https://github.com/php-fig/http-message",
            "keywords": [
                "http",
                "http-message",
                "psr",
                "psr-7",
                "request",
                "response"
            ],
            "support": {
                "source": "https://github.com/php-fig/http-message/tree/master"
            },
            "time": "2016-08-06T14:39:51+00:00"
        },
        {
            "name": "psr/log",
            "version": "2.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/php-fig/log.git",
                "reference": "ef29f6d262798707a9edd554e2b82517ef3a9376"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/php-fig/log/zipball/ef29f6d262798707a9edd554e2b82517ef3a9376",
                "reference": "ef29f6d262798707a9edd554e2b82517ef3a9376",
                "shasum": ""
            },
            "require": {
                "php": ">=8.0.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.0.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Psr\\Log\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "PHP-FIG",
                    "homepage": "https://www.php-fig.org/"
                }
            ],
            "description": "Common interface for logging libraries",
            "homepage": "https://github.com/php-fig/log",
            "keywords": [
                "log",
                "psr",
                "psr-3"
            ],
            "support": {
                "source": "https://github.com/php-fig/log/tree/2.0.0"
            },
            "time": "2021-07-14T16:41:46+00:00"
        },
        {
            "name": "psr/simple-cache",
            "version": "1.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/php-fig/simple-cache.git",
                "reference": "408d5eafb83c57f6365a3ca330ff23aa4a5fa39b"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/php-fig/simple-cache/zipball/408d5eafb83c57f6365a3ca330ff23aa4a5fa39b",
                "reference": "408d5eafb83c57f6365a3ca330ff23aa4a5fa39b",
                "shasum": ""
            },
            "require": {
                "php": ">=5.3.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Psr\\SimpleCache\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "PHP-FIG",
                    "homepage": "http://www.php-fig.org/"
                }
            ],
            "description": "Common interfaces for simple caching",
            "keywords": [
                "cache",
                "caching",
                "psr",
                "psr-16",
                "simple-cache"
            ],
            "support": {
                "source": "https://github.com/php-fig/simple-cache/tree/master"
            },
            "time": "2017-10-23T01:57:42+00:00"
        },
        {
            "name": "psy/psysh",
            "version": "v0.11.7",
            "source": {
                "type": "git",
                "url": "https://github.com/bobthecow/psysh.git",
                "reference": "77fc7270031fbc28f9a7bea31385da5c4855cb7a"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/bobthecow/psysh/zipball/77fc7270031fbc28f9a7bea31385da5c4855cb7a",
                "reference": "77fc7270031fbc28f9a7bea31385da5c4855cb7a",
                "shasum": ""
            },
            "require": {
                "ext-json": "*",
                "ext-tokenizer": "*",
                "nikic/php-parser": "^4.0 || ^3.1",
                "php": "^8.0 || ^7.0.8",
                "symfony/console": "^6.0 || ^5.0 || ^4.0 || ^3.4",
                "symfony/var-dumper": "^6.0 || ^5.0 || ^4.0 || ^3.4"
            },
            "conflict": {
                "symfony/console": "4.4.37 || 5.3.14 || 5.3.15 || 5.4.3 || 5.4.4 || 6.0.3 || 6.0.4"
            },
            "require-dev": {
                "bamarni/composer-bin-plugin": "^1.2"
            },
            "suggest": {
                "ext-pcntl": "Enabling the PCNTL extension makes PsySH a lot happier :)",
                "ext-pdo-sqlite": "The doc command requires SQLite to work.",
                "ext-posix": "If you have PCNTL, you'll want the POSIX extension as well.",
                "ext-readline": "Enables support for arrow-key history navigation, and showing and manipulating command history."
            },
            "bin": [
                "bin/psysh"
            ],
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "0.11.x-dev"
                }
            },
            "autoload": {
                "files": [
                    "src/functions.php"
                ],
                "psr-4": {
                    "Psy\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Justin Hileman",
                    "email": "justin@justinhileman.info",
                    "homepage": "http://justinhileman.com"
                }
            ],
            "description": "An interactive shell for modern PHP.",
            "homepage": "http://psysh.org",
            "keywords": [
                "REPL",
                "console",
                "interactive",
                "shell"
            ],
            "support": {
                "issues": "https://github.com/bobthecow/psysh/issues",
                "source": "https://github.com/bobthecow/psysh/tree/v0.11.7"
            },
            "time": "2022-07-07T13:49:11+00:00"
        },
        {
            "name": "ralouphie/getallheaders",
            "version": "3.0.3",
            "source": {
                "type": "git",
                "url": "https://github.com/ralouphie/getallheaders.git",
                "reference": "120b605dfeb996808c31b6477290a714d356e822"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/ralouphie/getallheaders/zipball/120b605dfeb996808c31b6477290a714d356e822",
                "reference": "120b605dfeb996808c31b6477290a714d356e822",
                "shasum": ""
            },
            "require": {
                "php": ">=5.6"
            },
            "require-dev": {
                "php-coveralls/php-coveralls": "^2.1",
                "phpunit/phpunit": "^5 || ^6.5"
            },
            "type": "library",
            "autoload": {
                "files": [
                    "src/getallheaders.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Ralph Khattar",
                    "email": "ralph.khattar@gmail.com"
                }
            ],
            "description": "A polyfill for getallheaders.",
            "support": {
                "issues": "https://github.com/ralouphie/getallheaders/issues",
                "source": "https://github.com/ralouphie/getallheaders/tree/develop"
            },
            "time": "2019-03-08T08:55:37+00:00"
        },
        {
            "name": "ramsey/collection",
            "version": "1.2.2",
            "source": {
                "type": "git",
                "url": "https://github.com/ramsey/collection.git",
                "reference": "cccc74ee5e328031b15640b51056ee8d3bb66c0a"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/ramsey/collection/zipball/cccc74ee5e328031b15640b51056ee8d3bb66c0a",
                "reference": "cccc74ee5e328031b15640b51056ee8d3bb66c0a",
                "shasum": ""
            },
            "require": {
                "php": "^7.3 || ^8",
                "symfony/polyfill-php81": "^1.23"
            },
            "require-dev": {
                "captainhook/captainhook": "^5.3",
                "dealerdirect/phpcodesniffer-composer-installer": "^0.7.0",
                "ergebnis/composer-normalize": "^2.6",
                "fakerphp/faker": "^1.5",
                "hamcrest/hamcrest-php": "^2",
                "jangregor/phpstan-prophecy": "^0.8",
                "mockery/mockery": "^1.3",
                "phpspec/prophecy-phpunit": "^2.0",
                "phpstan/extension-installer": "^1",
                "phpstan/phpstan": "^0.12.32",
                "phpstan/phpstan-mockery": "^0.12.5",
                "phpstan/phpstan-phpunit": "^0.12.11",
                "phpunit/phpunit": "^8.5 || ^9",
                "psy/psysh": "^0.10.4",
                "slevomat/coding-standard": "^6.3",
                "squizlabs/php_codesniffer": "^3.5",
                "vimeo/psalm": "^4.4"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Ramsey\\Collection\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Ben Ramsey",
                    "email": "ben@benramsey.com",
                    "homepage": "https://benramsey.com"
                }
            ],
            "description": "A PHP library for representing and manipulating collections.",
            "keywords": [
                "array",
                "collection",
                "hash",
                "map",
                "queue",
                "set"
            ],
            "support": {
                "issues": "https://github.com/ramsey/collection/issues",
                "source": "https://github.com/ramsey/collection/tree/1.2.2"
            },
            "funding": [
                {
                    "url": "https://github.com/ramsey",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/ramsey/collection",
                    "type": "tidelift"
                }
            ],
            "time": "2021-10-10T03:01:02+00:00"
        },
        {
            "name": "ramsey/uuid",
            "version": "4.3.1",
            "source": {
                "type": "git",
                "url": "https://github.com/ramsey/uuid.git",
                "reference": "8505afd4fea63b81a85d3b7b53ac3cb8dc347c28"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/ramsey/uuid/zipball/8505afd4fea63b81a85d3b7b53ac3cb8dc347c28",
                "reference": "8505afd4fea63b81a85d3b7b53ac3cb8dc347c28",
                "shasum": ""
            },
            "require": {
                "brick/math": "^0.8 || ^0.9",
                "ext-ctype": "*",
                "ext-json": "*",
                "php": "^8.0",
                "ramsey/collection": "^1.0"
            },
            "replace": {
                "rhumsaa/uuid": "self.version"
            },
            "require-dev": {
                "captainhook/captainhook": "^5.10",
                "captainhook/plugin-composer": "^5.3",
                "dealerdirect/phpcodesniffer-composer-installer": "^0.7.0",
                "doctrine/annotations": "^1.8",
                "ergebnis/composer-normalize": "^2.15",
                "mockery/mockery": "^1.3",
                "moontoast/math": "^1.1",
                "paragonie/random-lib": "^2",
                "php-mock/php-mock": "^2.2",
                "php-mock/php-mock-mockery": "^1.3",
                "php-parallel-lint/php-parallel-lint": "^1.1",
                "phpbench/phpbench": "^1.0",
                "phpstan/extension-installer": "^1.0",
                "phpstan/phpstan": "^0.12",
                "phpstan/phpstan-mockery": "^0.12",
                "phpstan/phpstan-phpunit": "^0.12",
                "phpunit/phpunit": "^8.5 || ^9",
                "slevomat/coding-standard": "^7.0",
                "squizlabs/php_codesniffer": "^3.5",
                "vimeo/psalm": "^4.9"
            },
            "suggest": {
                "ext-bcmath": "Enables faster math with arbitrary-precision integers using BCMath.",
                "ext-ctype": "Enables faster processing of character classification using ctype functions.",
                "ext-gmp": "Enables faster math with arbitrary-precision integers using GMP.",
                "ext-uuid": "Enables the use of PeclUuidTimeGenerator and PeclUuidRandomGenerator.",
                "paragonie/random-lib": "Provides RandomLib for use with the RandomLibAdapter",
                "ramsey/uuid-doctrine": "Allows the use of Ramsey\\Uuid\\Uuid as Doctrine field type."
            },
            "type": "library",
            "extra": {
                "captainhook": {
                    "force-install": true
                }
            },
            "autoload": {
                "files": [
                    "src/functions.php"
                ],
                "psr-4": {
                    "Ramsey\\Uuid\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "description": "A PHP library for generating and working with universally unique identifiers (UUIDs).",
            "keywords": [
                "guid",
                "identifier",
                "uuid"
            ],
            "support": {
                "issues": "https://github.com/ramsey/uuid/issues",
                "source": "https://github.com/ramsey/uuid/tree/4.3.1"
            },
            "funding": [
                {
                    "url": "https://github.com/ramsey",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/ramsey/uuid",
                    "type": "tidelift"
                }
            ],
            "time": "2022-03-27T21:42:02+00:00"
        },
        {
            "name": "swiftmailer/swiftmailer",
            "version": "v6.3.0",
            "source": {
                "type": "git",
                "url": "https://github.com/swiftmailer/swiftmailer.git",
                "reference": "8a5d5072dca8f48460fce2f4131fcc495eec654c"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/swiftmailer/swiftmailer/zipball/8a5d5072dca8f48460fce2f4131fcc495eec654c",
                "reference": "8a5d5072dca8f48460fce2f4131fcc495eec654c",
                "shasum": ""
            },
            "require": {
                "egulias/email-validator": "^2.0|^3.1",
                "php": ">=7.0.0",
                "symfony/polyfill-iconv": "^1.0",
                "symfony/polyfill-intl-idn": "^1.10",
                "symfony/polyfill-mbstring": "^1.0"
            },
            "require-dev": {
                "mockery/mockery": "^1.0",
                "symfony/phpunit-bridge": "^4.4|^5.4"
            },
            "suggest": {
                "ext-intl": "Needed to support internationalized email addresses"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "6.2-dev"
                }
            },
            "autoload": {
                "files": [
                    "lib/swift_required.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Chris Corbyn"
                },
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                }
            ],
            "description": "Swiftmailer, free feature-rich PHP mailer",
            "homepage": "https://swiftmailer.symfony.com",
            "keywords": [
                "email",
                "mail",
                "mailer"
            ],
            "support": {
                "issues": "https://github.com/swiftmailer/swiftmailer/issues",
                "source": "https://github.com/swiftmailer/swiftmailer/tree/v6.3.0"
            },
            "funding": [
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/swiftmailer/swiftmailer",
                    "type": "tidelift"
                }
            ],
            "abandoned": "symfony/mailer",
            "time": "2021-10-18T15:26:12+00:00"
        },
        {
            "name": "symfony/console",
            "version": "v5.4.10",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/console.git",
                "reference": "4d671ab4ddac94ee439ea73649c69d9d200b5000"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/console/zipball/4d671ab4ddac94ee439ea73649c69d9d200b5000",
                "reference": "4d671ab4ddac94ee439ea73649c69d9d200b5000",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.5",
                "symfony/deprecation-contracts": "^2.1|^3",
                "symfony/polyfill-mbstring": "~1.0",
                "symfony/polyfill-php73": "^1.9",
                "symfony/polyfill-php80": "^1.16",
                "symfony/service-contracts": "^1.1|^2|^3",
                "symfony/string": "^5.1|^6.0"
            },
            "conflict": {
                "psr/log": ">=3",
                "symfony/dependency-injection": "<4.4",
                "symfony/dotenv": "<5.1",
                "symfony/event-dispatcher": "<4.4",
                "symfony/lock": "<4.4",
                "symfony/process": "<4.4"
            },
            "provide": {
                "psr/log-implementation": "1.0|2.0"
            },
            "require-dev": {
                "psr/log": "^1|^2",
                "symfony/config": "^4.4|^5.0|^6.0",
                "symfony/dependency-injection": "^4.4|^5.0|^6.0",
                "symfony/event-dispatcher": "^4.4|^5.0|^6.0",
                "symfony/lock": "^4.4|^5.0|^6.0",
                "symfony/process": "^4.4|^5.0|^6.0",
                "symfony/var-dumper": "^4.4|^5.0|^6.0"
            },
            "suggest": {
                "psr/log": "For using the console logger",
                "symfony/event-dispatcher": "",
                "symfony/lock": "",
                "symfony/process": ""
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Console\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Eases the creation of beautiful and testable command line interfaces",
            "homepage": "https://symfony.com",
            "keywords": [
                "cli",
                "command line",
                "console",
                "terminal"
            ],
            "support": {
                "source": "https://github.com/symfony/console/tree/v5.4.10"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2022-06-26T13:00:04+00:00"
        },
        {
            "name": "symfony/css-selector",
            "version": "v6.0.3",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/css-selector.git",
                "reference": "1955d595c12c111629cc814d3f2a2ff13580508a"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/css-selector/zipball/1955d595c12c111629cc814d3f2a2ff13580508a",
                "reference": "1955d595c12c111629cc814d3f2a2ff13580508a",
                "shasum": ""
            },
            "require": {
                "php": ">=8.0.2"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\CssSelector\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Jean-François Simon",
                    "email": "jeanfrancois.simon@sensiolabs.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Converts CSS selectors to XPath expressions",
            "homepage": "https://symfony.com",
            "support": {
                "source": "https://github.com/symfony/css-selector/tree/v6.0.3"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2022-01-02T09:55:41+00:00"
        },
        {
            "name": "symfony/deprecation-contracts",
            "version": "v3.0.2",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/deprecation-contracts.git",
                "reference": "26954b3d62a6c5fd0ea8a2a00c0353a14978d05c"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/deprecation-contracts/zipball/26954b3d62a6c5fd0ea8a2a00c0353a14978d05c",
                "reference": "26954b3d62a6c5fd0ea8a2a00c0353a14978d05c",
                "shasum": ""
            },
            "require": {
                "php": ">=8.0.2"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "3.0-dev"
                },
                "thanks": {
                    "name": "symfony/contracts",
                    "url": "https://github.com/symfony/contracts"
                }
            },
            "autoload": {
                "files": [
                    "function.php"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "A generic function and convention to trigger deprecation notices",
            "homepage": "https://symfony.com",
            "support": {
                "source": "https://github.com/symfony/deprecation-contracts/tree/v3.0.2"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2022-01-02T09:55:41+00:00"
        },
        {
            "name": "symfony/error-handler",
            "version": "v5.4.9",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/error-handler.git",
                "reference": "c116cda1f51c678782768dce89a45f13c949455d"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/error-handler/zipball/c116cda1f51c678782768dce89a45f13c949455d",
                "reference": "c116cda1f51c678782768dce89a45f13c949455d",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.5",
                "psr/log": "^1|^2|^3",
                "symfony/var-dumper": "^4.4|^5.0|^6.0"
            },
            "require-dev": {
                "symfony/deprecation-contracts": "^2.1|^3",
                "symfony/http-kernel": "^4.4|^5.0|^6.0",
                "symfony/serializer": "^4.4|^5.0|^6.0"
            },
            "bin": [
                "Resources/bin/patch-type-declarations"
            ],
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\ErrorHandler\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Provides tools to manage errors and ease debugging PHP code",
            "homepage": "https://symfony.com",
            "support": {
                "source": "https://github.com/symfony/error-handler/tree/v5.4.9"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2022-05-21T13:57:48+00:00"
        },
        {
            "name": "symfony/event-dispatcher",
            "version": "v6.0.9",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/event-dispatcher.git",
                "reference": "5c85b58422865d42c6eb46f7693339056db098a8"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/event-dispatcher/zipball/5c85b58422865d42c6eb46f7693339056db098a8",
                "reference": "5c85b58422865d42c6eb46f7693339056db098a8",
                "shasum": ""
            },
            "require": {
                "php": ">=8.0.2",
                "symfony/event-dispatcher-contracts": "^2|^3"
            },
            "conflict": {
                "symfony/dependency-injection": "<5.4"
            },
            "provide": {
                "psr/event-dispatcher-implementation": "1.0",
                "symfony/event-dispatcher-implementation": "2.0|3.0"
            },
            "require-dev": {
                "psr/log": "^1|^2|^3",
                "symfony/config": "^5.4|^6.0",
                "symfony/dependency-injection": "^5.4|^6.0",
                "symfony/error-handler": "^5.4|^6.0",
                "symfony/expression-language": "^5.4|^6.0",
                "symfony/http-foundation": "^5.4|^6.0",
                "symfony/service-contracts": "^1.1|^2|^3",
                "symfony/stopwatch": "^5.4|^6.0"
            },
            "suggest": {
                "symfony/dependency-injection": "",
                "symfony/http-kernel": ""
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\EventDispatcher\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Provides tools that allow your application components to communicate with each other by dispatching events and listening to them",
            "homepage": "https://symfony.com",
            "support": {
                "source": "https://github.com/symfony/event-dispatcher/tree/v6.0.9"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2022-05-05T16:45:52+00:00"
        },
        {
            "name": "symfony/event-dispatcher-contracts",
            "version": "v3.0.2",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/event-dispatcher-contracts.git",
                "reference": "7bc61cc2db649b4637d331240c5346dcc7708051"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/event-dispatcher-contracts/zipball/7bc61cc2db649b4637d331240c5346dcc7708051",
                "reference": "7bc61cc2db649b4637d331240c5346dcc7708051",
                "shasum": ""
            },
            "require": {
                "php": ">=8.0.2",
                "psr/event-dispatcher": "^1"
            },
            "suggest": {
                "symfony/event-dispatcher-implementation": ""
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "3.0-dev"
                },
                "thanks": {
                    "name": "symfony/contracts",
                    "url": "https://github.com/symfony/contracts"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Contracts\\EventDispatcher\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Generic abstractions related to dispatching event",
            "homepage": "https://symfony.com",
            "keywords": [
                "abstractions",
                "contracts",
                "decoupling",
                "interfaces",
                "interoperability",
                "standards"
            ],
            "support": {
                "source": "https://github.com/symfony/event-dispatcher-contracts/tree/v3.0.2"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2022-01-02T09:55:41+00:00"
        },
        {
            "name": "symfony/finder",
            "version": "v5.4.8",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/finder.git",
                "reference": "9b630f3427f3ebe7cd346c277a1408b00249dad9"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/finder/zipball/9b630f3427f3ebe7cd346c277a1408b00249dad9",
                "reference": "9b630f3427f3ebe7cd346c277a1408b00249dad9",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.5",
                "symfony/deprecation-contracts": "^2.1|^3",
                "symfony/polyfill-php80": "^1.16"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Finder\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Finds files and directories via an intuitive fluent interface",
            "homepage": "https://symfony.com",
            "support": {
                "source": "https://github.com/symfony/finder/tree/v5.4.8"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2022-04-15T08:07:45+00:00"
        },
        {
            "name": "symfony/http-foundation",
            "version": "v5.4.10",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/http-foundation.git",
                "reference": "e7793b7906f72a8cc51054fbca9dcff7a8af1c1e"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/http-foundation/zipball/e7793b7906f72a8cc51054fbca9dcff7a8af1c1e",
                "reference": "e7793b7906f72a8cc51054fbca9dcff7a8af1c1e",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.5",
                "symfony/deprecation-contracts": "^2.1|^3",
                "symfony/polyfill-mbstring": "~1.1",
                "symfony/polyfill-php80": "^1.16"
            },
            "require-dev": {
                "predis/predis": "~1.0",
                "symfony/cache": "^4.4|^5.0|^6.0",
                "symfony/expression-language": "^4.4|^5.0|^6.0",
                "symfony/mime": "^4.4|^5.0|^6.0"
            },
            "suggest": {
                "symfony/mime": "To use the file extension guesser"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\HttpFoundation\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Defines an object-oriented layer for the HTTP specification",
            "homepage": "https://symfony.com",
            "support": {
                "source": "https://github.com/symfony/http-foundation/tree/v5.4.10"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2022-06-19T13:13:40+00:00"
        },
        {
            "name": "symfony/http-kernel",
            "version": "v5.4.10",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/http-kernel.git",
                "reference": "255ae3b0a488d78fbb34da23d3e0c059874b5948"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/http-kernel/zipball/255ae3b0a488d78fbb34da23d3e0c059874b5948",
                "reference": "255ae3b0a488d78fbb34da23d3e0c059874b5948",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.5",
                "psr/log": "^1|^2",
                "symfony/deprecation-contracts": "^2.1|^3",
                "symfony/error-handler": "^4.4|^5.0|^6.0",
                "symfony/event-dispatcher": "^5.0|^6.0",
                "symfony/http-foundation": "^5.3.7|^6.0",
                "symfony/polyfill-ctype": "^1.8",
                "symfony/polyfill-php73": "^1.9",
                "symfony/polyfill-php80": "^1.16"
            },
            "conflict": {
                "symfony/browser-kit": "<5.4",
                "symfony/cache": "<5.0",
                "symfony/config": "<5.0",
                "symfony/console": "<4.4",
                "symfony/dependency-injection": "<5.3",
                "symfony/doctrine-bridge": "<5.0",
                "symfony/form": "<5.0",
                "symfony/http-client": "<5.0",
                "symfony/mailer": "<5.0",
                "symfony/messenger": "<5.0",
                "symfony/translation": "<5.0",
                "symfony/twig-bridge": "<5.0",
                "symfony/validator": "<5.0",
                "twig/twig": "<2.13"
            },
            "provide": {
                "psr/log-implementation": "1.0|2.0"
            },
            "require-dev": {
                "psr/cache": "^1.0|^2.0|^3.0",
                "symfony/browser-kit": "^5.4|^6.0",
                "symfony/config": "^5.0|^6.0",
                "symfony/console": "^4.4|^5.0|^6.0",
                "symfony/css-selector": "^4.4|^5.0|^6.0",
                "symfony/dependency-injection": "^5.3|^6.0",
                "symfony/dom-crawler": "^4.4|^5.0|^6.0",
                "symfony/expression-language": "^4.4|^5.0|^6.0",
                "symfony/finder": "^4.4|^5.0|^6.0",
                "symfony/http-client-contracts": "^1.1|^2|^3",
                "symfony/process": "^4.4|^5.0|^6.0",
                "symfony/routing": "^4.4|^5.0|^6.0",
                "symfony/stopwatch": "^4.4|^5.0|^6.0",
                "symfony/translation": "^4.4|^5.0|^6.0",
                "symfony/translation-contracts": "^1.1|^2|^3",
                "twig/twig": "^2.13|^3.0.4"
            },
            "suggest": {
                "symfony/browser-kit": "",
                "symfony/config": "",
                "symfony/console": "",
                "symfony/dependency-injection": ""
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\HttpKernel\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Provides a structured process for converting a Request into a Response",
            "homepage": "https://symfony.com",
            "support": {
                "source": "https://github.com/symfony/http-kernel/tree/v5.4.10"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2022-06-26T16:57:59+00:00"
        },
        {
            "name": "symfony/mime",
            "version": "v5.4.10",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/mime.git",
                "reference": "02265e1e5111c3cd7480387af25e82378b7ab9cc"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/mime/zipball/02265e1e5111c3cd7480387af25e82378b7ab9cc",
                "reference": "02265e1e5111c3cd7480387af25e82378b7ab9cc",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.5",
                "symfony/deprecation-contracts": "^2.1|^3",
                "symfony/polyfill-intl-idn": "^1.10",
                "symfony/polyfill-mbstring": "^1.0",
                "symfony/polyfill-php80": "^1.16"
            },
            "conflict": {
                "egulias/email-validator": "~3.0.0",
                "phpdocumentor/reflection-docblock": "<3.2.2",
                "phpdocumentor/type-resolver": "<1.4.0",
                "symfony/mailer": "<4.4"
            },
            "require-dev": {
                "egulias/email-validator": "^2.1.10|^3.1",
                "phpdocumentor/reflection-docblock": "^3.0|^4.0|^5.0",
                "symfony/dependency-injection": "^4.4|^5.0|^6.0",
                "symfony/property-access": "^4.4|^5.1|^6.0",
                "symfony/property-info": "^4.4|^5.1|^6.0",
                "symfony/serializer": "^5.2|^6.0"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Mime\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Allows manipulating MIME messages",
            "homepage": "https://symfony.com",
            "keywords": [
                "mime",
                "mime-type"
            ],
            "support": {
                "source": "https://github.com/symfony/mime/tree/v5.4.10"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2022-06-09T12:22:40+00:00"
        },
        {
            "name": "symfony/polyfill-ctype",
            "version": "v1.26.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-ctype.git",
                "reference": "6fd1b9a79f6e3cf65f9e679b23af304cd9e010d4"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-ctype/zipball/6fd1b9a79f6e3cf65f9e679b23af304cd9e010d4",
                "reference": "6fd1b9a79f6e3cf65f9e679b23af304cd9e010d4",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1"
            },
            "provide": {
                "ext-ctype": "*"
            },
            "suggest": {
                "ext-ctype": "For best performance"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "1.26-dev"
                },
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "files": [
                    "bootstrap.php"
                ],
                "psr-4": {
                    "Symfony\\Polyfill\\Ctype\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Gert de Pagter",
                    "email": "BackEndTea@gmail.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill for ctype functions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "ctype",
                "polyfill",
                "portable"
            ],
            "support": {
                "source": "https://github.com/symfony/polyfill-ctype/tree/v1.26.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2022-05-24T11:49:31+00:00"
        },
        {
            "name": "symfony/polyfill-iconv",
            "version": "v1.26.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-iconv.git",
                "reference": "143f1881e655bebca1312722af8068de235ae5dc"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-iconv/zipball/143f1881e655bebca1312722af8068de235ae5dc",
                "reference": "143f1881e655bebca1312722af8068de235ae5dc",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1"
            },
            "provide": {
                "ext-iconv": "*"
            },
            "suggest": {
                "ext-iconv": "For best performance"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "1.26-dev"
                },
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "files": [
                    "bootstrap.php"
                ],
                "psr-4": {
                    "Symfony\\Polyfill\\Iconv\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill for the Iconv extension",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "iconv",
                "polyfill",
                "portable",
                "shim"
            ],
            "support": {
                "source": "https://github.com/symfony/polyfill-iconv/tree/v1.26.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2022-05-24T11:49:31+00:00"
        },
        {
            "name": "symfony/polyfill-intl-grapheme",
            "version": "v1.26.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-intl-grapheme.git",
                "reference": "433d05519ce6990bf3530fba6957499d327395c2"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-intl-grapheme/zipball/433d05519ce6990bf3530fba6957499d327395c2",
                "reference": "433d05519ce6990bf3530fba6957499d327395c2",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1"
            },
            "suggest": {
                "ext-intl": "For best performance"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "1.26-dev"
                },
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "files": [
                    "bootstrap.php"
                ],
                "psr-4": {
                    "Symfony\\Polyfill\\Intl\\Grapheme\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill for intl's grapheme_* functions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "grapheme",
                "intl",
                "polyfill",
                "portable",
                "shim"
            ],
            "support": {
                "source": "https://github.com/symfony/polyfill-intl-grapheme/tree/v1.26.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2022-05-24T11:49:31+00:00"
        },
        {
            "name": "symfony/polyfill-intl-idn",
            "version": "v1.26.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-intl-idn.git",
                "reference": "59a8d271f00dd0e4c2e518104cc7963f655a1aa8"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-intl-idn/zipball/59a8d271f00dd0e4c2e518104cc7963f655a1aa8",
                "reference": "59a8d271f00dd0e4c2e518104cc7963f655a1aa8",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1",
                "symfony/polyfill-intl-normalizer": "^1.10",
                "symfony/polyfill-php72": "^1.10"
            },
            "suggest": {
                "ext-intl": "For best performance"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "1.26-dev"
                },
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "files": [
                    "bootstrap.php"
                ],
                "psr-4": {
                    "Symfony\\Polyfill\\Intl\\Idn\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Laurent Bassin",
                    "email": "laurent@bassin.info"
                },
                {
                    "name": "Trevor Rowbotham",
                    "email": "trevor.rowbotham@pm.me"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill for intl's idn_to_ascii and idn_to_utf8 functions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "idn",
                "intl",
                "polyfill",
                "portable",
                "shim"
            ],
            "support": {
                "source": "https://github.com/symfony/polyfill-intl-idn/tree/v1.26.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2022-05-24T11:49:31+00:00"
        },
        {
            "name": "symfony/polyfill-intl-normalizer",
            "version": "v1.26.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-intl-normalizer.git",
                "reference": "219aa369ceff116e673852dce47c3a41794c14bd"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-intl-normalizer/zipball/219aa369ceff116e673852dce47c3a41794c14bd",
                "reference": "219aa369ceff116e673852dce47c3a41794c14bd",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1"
            },
            "suggest": {
                "ext-intl": "For best performance"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "1.26-dev"
                },
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "files": [
                    "bootstrap.php"
                ],
                "psr-4": {
                    "Symfony\\Polyfill\\Intl\\Normalizer\\": ""
                },
                "classmap": [
                    "Resources/stubs"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill for intl's Normalizer class and related functions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "intl",
                "normalizer",
                "polyfill",
                "portable",
                "shim"
            ],
            "support": {
                "source": "https://github.com/symfony/polyfill-intl-normalizer/tree/v1.26.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2022-05-24T11:49:31+00:00"
        },
        {
            "name": "symfony/polyfill-mbstring",
            "version": "v1.26.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-mbstring.git",
                "reference": "9344f9cb97f3b19424af1a21a3b0e75b0a7d8d7e"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-mbstring/zipball/9344f9cb97f3b19424af1a21a3b0e75b0a7d8d7e",
                "reference": "9344f9cb97f3b19424af1a21a3b0e75b0a7d8d7e",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1"
            },
            "provide": {
                "ext-mbstring": "*"
            },
            "suggest": {
                "ext-mbstring": "For best performance"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "1.26-dev"
                },
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "files": [
                    "bootstrap.php"
                ],
                "psr-4": {
                    "Symfony\\Polyfill\\Mbstring\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill for the Mbstring extension",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "mbstring",
                "polyfill",
                "portable",
                "shim"
            ],
            "support": {
                "source": "https://github.com/symfony/polyfill-mbstring/tree/v1.26.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2022-05-24T11:49:31+00:00"
        },
        {
            "name": "symfony/polyfill-php72",
            "version": "v1.26.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-php72.git",
                "reference": "bf44a9fd41feaac72b074de600314a93e2ae78e2"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-php72/zipball/bf44a9fd41feaac72b074de600314a93e2ae78e2",
                "reference": "bf44a9fd41feaac72b074de600314a93e2ae78e2",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "1.26-dev"
                },
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "files": [
                    "bootstrap.php"
                ],
                "psr-4": {
                    "Symfony\\Polyfill\\Php72\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill backporting some PHP 7.2+ features to lower PHP versions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "polyfill",
                "portable",
                "shim"
            ],
            "support": {
                "source": "https://github.com/symfony/polyfill-php72/tree/v1.26.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2022-05-24T11:49:31+00:00"
        },
        {
            "name": "symfony/polyfill-php73",
            "version": "v1.26.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-php73.git",
                "reference": "e440d35fa0286f77fb45b79a03fedbeda9307e85"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-php73/zipball/e440d35fa0286f77fb45b79a03fedbeda9307e85",
                "reference": "e440d35fa0286f77fb45b79a03fedbeda9307e85",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "1.26-dev"
                },
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "files": [
                    "bootstrap.php"
                ],
                "psr-4": {
                    "Symfony\\Polyfill\\Php73\\": ""
                },
                "classmap": [
                    "Resources/stubs"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill backporting some PHP 7.3+ features to lower PHP versions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "polyfill",
                "portable",
                "shim"
            ],
            "support": {
                "source": "https://github.com/symfony/polyfill-php73/tree/v1.26.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2022-05-24T11:49:31+00:00"
        },
        {
            "name": "symfony/polyfill-php80",
            "version": "v1.26.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-php80.git",
                "reference": "cfa0ae98841b9e461207c13ab093d76b0fa7bace"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-php80/zipball/cfa0ae98841b9e461207c13ab093d76b0fa7bace",
                "reference": "cfa0ae98841b9e461207c13ab093d76b0fa7bace",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "1.26-dev"
                },
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "files": [
                    "bootstrap.php"
                ],
                "psr-4": {
                    "Symfony\\Polyfill\\Php80\\": ""
                },
                "classmap": [
                    "Resources/stubs"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Ion Bazan",
                    "email": "ion.bazan@gmail.com"
                },
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill backporting some PHP 8.0+ features to lower PHP versions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "polyfill",
                "portable",
                "shim"
            ],
            "support": {
                "source": "https://github.com/symfony/polyfill-php80/tree/v1.26.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2022-05-10T07:21:04+00:00"
        },
        {
            "name": "symfony/polyfill-php81",
            "version": "v1.26.0",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/polyfill-php81.git",
                "reference": "13f6d1271c663dc5ae9fb843a8f16521db7687a1"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/polyfill-php81/zipball/13f6d1271c663dc5ae9fb843a8f16521db7687a1",
                "reference": "13f6d1271c663dc5ae9fb843a8f16521db7687a1",
                "shasum": ""
            },
            "require": {
                "php": ">=7.1"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "1.26-dev"
                },
                "thanks": {
                    "name": "symfony/polyfill",
                    "url": "https://github.com/symfony/polyfill"
                }
            },
            "autoload": {
                "files": [
                    "bootstrap.php"
                ],
                "psr-4": {
                    "Symfony\\Polyfill\\Php81\\": ""
                },
                "classmap": [
                    "Resources/stubs"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Symfony polyfill backporting some PHP 8.1+ features to lower PHP versions",
            "homepage": "https://symfony.com",
            "keywords": [
                "compatibility",
                "polyfill",
                "portable",
                "shim"
            ],
            "support": {
                "source": "https://github.com/symfony/polyfill-php81/tree/v1.26.0"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2022-05-24T11:49:31+00:00"
        },
        {
            "name": "symfony/process",
            "version": "v5.4.8",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/process.git",
                "reference": "597f3fff8e3e91836bb0bd38f5718b56ddbde2f3"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/process/zipball/597f3fff8e3e91836bb0bd38f5718b56ddbde2f3",
                "reference": "597f3fff8e3e91836bb0bd38f5718b56ddbde2f3",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.5",
                "symfony/polyfill-php80": "^1.16"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Process\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Executes commands in sub-processes",
            "homepage": "https://symfony.com",
            "support": {
                "source": "https://github.com/symfony/process/tree/v5.4.8"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2022-04-08T05:07:18+00:00"
        },
        {
            "name": "symfony/routing",
            "version": "v5.4.8",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/routing.git",
                "reference": "e07817bb6244ea33ef5ad31abc4a9288bef3f2f7"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/routing/zipball/e07817bb6244ea33ef5ad31abc4a9288bef3f2f7",
                "reference": "e07817bb6244ea33ef5ad31abc4a9288bef3f2f7",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.5",
                "symfony/deprecation-contracts": "^2.1|^3",
                "symfony/polyfill-php80": "^1.16"
            },
            "conflict": {
                "doctrine/annotations": "<1.12",
                "symfony/config": "<5.3",
                "symfony/dependency-injection": "<4.4",
                "symfony/yaml": "<4.4"
            },
            "require-dev": {
                "doctrine/annotations": "^1.12",
                "psr/log": "^1|^2|^3",
                "symfony/config": "^5.3|^6.0",
                "symfony/dependency-injection": "^4.4|^5.0|^6.0",
                "symfony/expression-language": "^4.4|^5.0|^6.0",
                "symfony/http-foundation": "^4.4|^5.0|^6.0",
                "symfony/yaml": "^4.4|^5.0|^6.0"
            },
            "suggest": {
                "symfony/config": "For using the all-in-one router or any loader",
                "symfony/expression-language": "For using expression matching",
                "symfony/http-foundation": "For using a Symfony Request object",
                "symfony/yaml": "For using the YAML loader"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Symfony\\Component\\Routing\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Maps an HTTP request to a set of configuration variables",
            "homepage": "https://symfony.com",
            "keywords": [
                "router",
                "routing",
                "uri",
                "url"
            ],
            "support": {
                "source": "https://github.com/symfony/routing/tree/v5.4.8"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2022-04-18T21:45:37+00:00"
        },
        {
            "name": "symfony/service-contracts",
            "version": "v2.5.2",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/service-contracts.git",
                "reference": "4b426aac47d6427cc1a1d0f7e2ac724627f5966c"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/service-contracts/zipball/4b426aac47d6427cc1a1d0f7e2ac724627f5966c",
                "reference": "4b426aac47d6427cc1a1d0f7e2ac724627f5966c",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.5",
                "psr/container": "^1.1",
                "symfony/deprecation-contracts": "^2.1|^3"
            },
            "conflict": {
                "ext-psr": "<1.1|>=2"
            },
            "suggest": {
                "symfony/service-implementation": ""
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "2.5-dev"
                },
                "thanks": {
                    "name": "symfony/contracts",
                    "url": "https://github.com/symfony/contracts"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Contracts\\Service\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Generic abstractions related to writing services",
            "homepage": "https://symfony.com",
            "keywords": [
                "abstractions",
                "contracts",
                "decoupling",
                "interfaces",
                "interoperability",
                "standards"
            ],
            "support": {
                "source": "https://github.com/symfony/service-contracts/tree/v2.5.2"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2022-05-30T19:17:29+00:00"
        },
        {
            "name": "symfony/string",
            "version": "v6.0.10",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/string.git",
                "reference": "1b3adf02a0fc814bd9118d7fd68a097a599ebc27"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/string/zipball/1b3adf02a0fc814bd9118d7fd68a097a599ebc27",
                "reference": "1b3adf02a0fc814bd9118d7fd68a097a599ebc27",
                "shasum": ""
            },
            "require": {
                "php": ">=8.0.2",
                "symfony/polyfill-ctype": "~1.8",
                "symfony/polyfill-intl-grapheme": "~1.0",
                "symfony/polyfill-intl-normalizer": "~1.0",
                "symfony/polyfill-mbstring": "~1.0"
            },
            "conflict": {
                "symfony/translation-contracts": "<2.0"
            },
            "require-dev": {
                "symfony/error-handler": "^5.4|^6.0",
                "symfony/http-client": "^5.4|^6.0",
                "symfony/translation-contracts": "^2.0|^3.0",
                "symfony/var-exporter": "^5.4|^6.0"
            },
            "type": "library",
            "autoload": {
                "files": [
                    "Resources/functions.php"
                ],
                "psr-4": {
                    "Symfony\\Component\\String\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Provides an object-oriented API to strings and deals with bytes, UTF-8 code points and grapheme clusters in a unified way",
            "homepage": "https://symfony.com",
            "keywords": [
                "grapheme",
                "i18n",
                "string",
                "unicode",
                "utf-8",
                "utf8"
            ],
            "support": {
                "source": "https://github.com/symfony/string/tree/v6.0.10"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2022-06-26T16:34:50+00:00"
        },
        {
            "name": "symfony/translation",
            "version": "v6.0.9",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/translation.git",
                "reference": "9ba011309943955a3807b8236c17cff3b88f67b6"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/translation/zipball/9ba011309943955a3807b8236c17cff3b88f67b6",
                "reference": "9ba011309943955a3807b8236c17cff3b88f67b6",
                "shasum": ""
            },
            "require": {
                "php": ">=8.0.2",
                "symfony/polyfill-mbstring": "~1.0",
                "symfony/translation-contracts": "^2.3|^3.0"
            },
            "conflict": {
                "symfony/config": "<5.4",
                "symfony/console": "<5.4",
                "symfony/dependency-injection": "<5.4",
                "symfony/http-kernel": "<5.4",
                "symfony/twig-bundle": "<5.4",
                "symfony/yaml": "<5.4"
            },
            "provide": {
                "symfony/translation-implementation": "2.3|3.0"
            },
            "require-dev": {
                "psr/log": "^1|^2|^3",
                "symfony/config": "^5.4|^6.0",
                "symfony/console": "^5.4|^6.0",
                "symfony/dependency-injection": "^5.4|^6.0",
                "symfony/finder": "^5.4|^6.0",
                "symfony/http-client-contracts": "^1.1|^2.0|^3.0",
                "symfony/http-kernel": "^5.4|^6.0",
                "symfony/intl": "^5.4|^6.0",
                "symfony/polyfill-intl-icu": "^1.21",
                "symfony/service-contracts": "^1.1.2|^2|^3",
                "symfony/yaml": "^5.4|^6.0"
            },
            "suggest": {
                "psr/log-implementation": "To use logging capability in translator",
                "symfony/config": "",
                "symfony/yaml": ""
            },
            "type": "library",
            "autoload": {
                "files": [
                    "Resources/functions.php"
                ],
                "psr-4": {
                    "Symfony\\Component\\Translation\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Fabien Potencier",
                    "email": "fabien@symfony.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Provides tools to internationalize your application",
            "homepage": "https://symfony.com",
            "support": {
                "source": "https://github.com/symfony/translation/tree/v6.0.9"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2022-05-06T14:27:17+00:00"
        },
        {
            "name": "symfony/translation-contracts",
            "version": "v3.0.2",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/translation-contracts.git",
                "reference": "acbfbb274e730e5a0236f619b6168d9dedb3e282"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/translation-contracts/zipball/acbfbb274e730e5a0236f619b6168d9dedb3e282",
                "reference": "acbfbb274e730e5a0236f619b6168d9dedb3e282",
                "shasum": ""
            },
            "require": {
                "php": ">=8.0.2"
            },
            "suggest": {
                "symfony/translation-implementation": ""
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "3.0-dev"
                },
                "thanks": {
                    "name": "symfony/contracts",
                    "url": "https://github.com/symfony/contracts"
                }
            },
            "autoload": {
                "psr-4": {
                    "Symfony\\Contracts\\Translation\\": ""
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Generic abstractions related to translation",
            "homepage": "https://symfony.com",
            "keywords": [
                "abstractions",
                "contracts",
                "decoupling",
                "interfaces",
                "interoperability",
                "standards"
            ],
            "support": {
                "source": "https://github.com/symfony/translation-contracts/tree/v3.0.2"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2022-06-27T17:10:44+00:00"
        },
        {
            "name": "symfony/var-dumper",
            "version": "v5.4.9",
            "source": {
                "type": "git",
                "url": "https://github.com/symfony/var-dumper.git",
                "reference": "af52239a330fafd192c773795520dc2dd62b5657"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/symfony/var-dumper/zipball/af52239a330fafd192c773795520dc2dd62b5657",
                "reference": "af52239a330fafd192c773795520dc2dd62b5657",
                "shasum": ""
            },
            "require": {
                "php": ">=7.2.5",
                "symfony/polyfill-mbstring": "~1.0",
                "symfony/polyfill-php80": "^1.16"
            },
            "conflict": {
                "phpunit/phpunit": "<5.4.3",
                "symfony/console": "<4.4"
            },
            "require-dev": {
                "ext-iconv": "*",
                "symfony/console": "^4.4|^5.0|^6.0",
                "symfony/process": "^4.4|^5.0|^6.0",
                "symfony/uid": "^5.1|^6.0",
                "twig/twig": "^2.13|^3.0.4"
            },
            "suggest": {
                "ext-iconv": "To convert non-UTF-8 strings to UTF-8 (or symfony/polyfill-iconv in case ext-iconv cannot be used).",
                "ext-intl": "To show region name in time zone dump",
                "symfony/console": "To use the ServerDumpCommand and/or the bin/var-dump-server script"
            },
            "bin": [
                "Resources/bin/var-dump-server"
            ],
            "type": "library",
            "autoload": {
                "files": [
                    "Resources/functions/dump.php"
                ],
                "psr-4": {
                    "Symfony\\Component\\VarDumper\\": ""
                },
                "exclude-from-classmap": [
                    "/Tests/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nicolas Grekas",
                    "email": "p@tchwork.com"
                },
                {
                    "name": "Symfony Community",
                    "homepage": "https://symfony.com/contributors"
                }
            ],
            "description": "Provides mechanisms for walking through any arbitrary PHP variable",
            "homepage": "https://symfony.com",
            "keywords": [
                "debug",
                "dump"
            ],
            "support": {
                "source": "https://github.com/symfony/var-dumper/tree/v5.4.9"
            },
            "funding": [
                {
                    "url": "https://symfony.com/sponsor",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/fabpot",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/symfony/symfony",
                    "type": "tidelift"
                }
            ],
            "time": "2022-05-21T10:24:18+00:00"
        },
        {
            "name": "tijsverkoyen/css-to-inline-styles",
            "version": "2.2.4",
            "source": {
                "type": "git",
                "url": "https://github.com/tijsverkoyen/CssToInlineStyles.git",
                "reference": "da444caae6aca7a19c0c140f68c6182e337d5b1c"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/tijsverkoyen/CssToInlineStyles/zipball/da444caae6aca7a19c0c140f68c6182e337d5b1c",
                "reference": "da444caae6aca7a19c0c140f68c6182e337d5b1c",
                "shasum": ""
            },
            "require": {
                "ext-dom": "*",
                "ext-libxml": "*",
                "php": "^5.5 || ^7.0 || ^8.0",
                "symfony/css-selector": "^2.7 || ^3.0 || ^4.0 || ^5.0 || ^6.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^4.8.35 || ^5.7 || ^6.0 || ^7.5 || ^8.5.21 || ^9.5.10"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.2.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "TijsVerkoyen\\CssToInlineStyles\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Tijs Verkoyen",
                    "email": "css_to_inline_styles@verkoyen.eu",
                    "role": "Developer"
                }
            ],
            "description": "CssToInlineStyles is a class that enables you to convert HTML-pages/files into HTML-pages/files with inline styles. This is very useful when you're sending emails.",
            "homepage": "https://github.com/tijsverkoyen/CssToInlineStyles",
            "support": {
                "issues": "https://github.com/tijsverkoyen/CssToInlineStyles/issues",
                "source": "https://github.com/tijsverkoyen/CssToInlineStyles/tree/2.2.4"
            },
            "time": "2021-12-08T09:12:39+00:00"
        },
        {
            "name": "vlucas/phpdotenv",
            "version": "v5.4.1",
            "source": {
                "type": "git",
                "url": "https://github.com/vlucas/phpdotenv.git",
                "reference": "264dce589e7ce37a7ba99cb901eed8249fbec92f"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/vlucas/phpdotenv/zipball/264dce589e7ce37a7ba99cb901eed8249fbec92f",
                "reference": "264dce589e7ce37a7ba99cb901eed8249fbec92f",
                "shasum": ""
            },
            "require": {
                "ext-pcre": "*",
                "graham-campbell/result-type": "^1.0.2",
                "php": "^7.1.3 || ^8.0",
                "phpoption/phpoption": "^1.8",
                "symfony/polyfill-ctype": "^1.23",
                "symfony/polyfill-mbstring": "^1.23.1",
                "symfony/polyfill-php80": "^1.23.1"
            },
            "require-dev": {
                "bamarni/composer-bin-plugin": "^1.4.1",
                "ext-filter": "*",
                "phpunit/phpunit": "^7.5.20 || ^8.5.21 || ^9.5.10"
            },
            "suggest": {
                "ext-filter": "Required to use the boolean validator."
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "5.4-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Dotenv\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Graham Campbell",
                    "email": "hello@gjcampbell.co.uk",
                    "homepage": "https://github.com/GrahamCampbell"
                },
                {
                    "name": "Vance Lucas",
                    "email": "vance@vancelucas.com",
                    "homepage": "https://github.com/vlucas"
                }
            ],
            "description": "Loads environment variables from `.env` to `getenv()`, `$_ENV` and `$_SERVER` automagically.",
            "keywords": [
                "dotenv",
                "env",
                "environment"
            ],
            "support": {
                "issues": "https://github.com/vlucas/phpdotenv/issues",
                "source": "https://github.com/vlucas/phpdotenv/tree/v5.4.1"
            },
            "funding": [
                {
                    "url": "https://github.com/GrahamCampbell",
                    "type": "github"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/vlucas/phpdotenv",
                    "type": "tidelift"
                }
            ],
            "time": "2021-12-12T23:22:04+00:00"
        },
        {
            "name": "voku/portable-ascii",
            "version": "1.6.1",
            "source": {
                "type": "git",
                "url": "https://github.com/voku/portable-ascii.git",
                "reference": "87337c91b9dfacee02452244ee14ab3c43bc485a"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/voku/portable-ascii/zipball/87337c91b9dfacee02452244ee14ab3c43bc485a",
                "reference": "87337c91b9dfacee02452244ee14ab3c43bc485a",
                "shasum": ""
            },
            "require": {
                "php": ">=7.0.0"
            },
            "require-dev": {
                "phpunit/phpunit": "~6.0 || ~7.0 || ~9.0"
            },
            "suggest": {
                "ext-intl": "Use Intl for transliterator_transliterate() support"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "voku\\": "src/voku/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Lars Moelleken",
                    "homepage": "http://www.moelleken.org/"
                }
            ],
            "description": "Portable ASCII library - performance optimized (ascii) string functions for php.",
            "homepage": "https://github.com/voku/portable-ascii",
            "keywords": [
                "ascii",
                "clean",
                "php"
            ],
            "support": {
                "issues": "https://github.com/voku/portable-ascii/issues",
                "source": "https://github.com/voku/portable-ascii/tree/1.6.1"
            },
            "funding": [
                {
                    "url": "https://www.paypal.me/moelleken",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/voku",
                    "type": "github"
                },
                {
                    "url": "https://opencollective.com/portable-ascii",
                    "type": "open_collective"
                },
                {
                    "url": "https://www.patreon.com/voku",
                    "type": "patreon"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/voku/portable-ascii",
                    "type": "tidelift"
                }
            ],
            "time": "2022-01-24T18:55:24+00:00"
        },
        {
            "name": "webmozart/assert",
            "version": "1.11.0",
            "source": {
                "type": "git",
                "url": "https://github.com/webmozarts/assert.git",
                "reference": "11cb2199493b2f8a3b53e7f19068fc6aac760991"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/webmozarts/assert/zipball/11cb2199493b2f8a3b53e7f19068fc6aac760991",
                "reference": "11cb2199493b2f8a3b53e7f19068fc6aac760991",
                "shasum": ""
            },
            "require": {
                "ext-ctype": "*",
                "php": "^7.2 || ^8.0"
            },
            "conflict": {
                "phpstan/phpstan": "<0.12.20",
                "vimeo/psalm": "<4.6.1 || 4.6.2"
            },
            "require-dev": {
                "phpunit/phpunit": "^8.5.13"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.10-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Webmozart\\Assert\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Bernhard Schussek",
                    "email": "bschussek@gmail.com"
                }
            ],
            "description": "Assertions to validate method input/output with nice error messages.",
            "keywords": [
                "assert",
                "check",
                "validate"
            ],
            "support": {
                "issues": "https://github.com/webmozarts/assert/issues",
                "source": "https://github.com/webmozarts/assert/tree/1.11.0"
            },
            "time": "2022-06-03T18:03:27+00:00"
        }
    ],
    "packages-dev": [
        {
            "name": "doctrine/instantiator",
            "version": "1.4.1",
            "source": {
                "type": "git",
                "url": "https://github.com/doctrine/instantiator.git",
                "reference": "10dcfce151b967d20fde1b34ae6640712c3891bc"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/doctrine/instantiator/zipball/10dcfce151b967d20fde1b34ae6640712c3891bc",
                "reference": "10dcfce151b967d20fde1b34ae6640712c3891bc",
                "shasum": ""
            },
            "require": {
                "php": "^7.1 || ^8.0"
            },
            "require-dev": {
                "doctrine/coding-standard": "^9",
                "ext-pdo": "*",
                "ext-phar": "*",
                "phpbench/phpbench": "^0.16 || ^1",
                "phpstan/phpstan": "^1.4",
                "phpstan/phpstan-phpunit": "^1",
                "phpunit/phpunit": "^7.5 || ^8.5 || ^9.5",
                "vimeo/psalm": "^4.22"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Doctrine\\Instantiator\\": "src/Doctrine/Instantiator/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Marco Pivetta",
                    "email": "ocramius@gmail.com",
                    "homepage": "https://ocramius.github.io/"
                }
            ],
            "description": "A small, lightweight utility to instantiate objects in PHP without invoking their constructors",
            "homepage": "https://www.doctrine-project.org/projects/instantiator.html",
            "keywords": [
                "constructor",
                "instantiate"
            ],
            "support": {
                "issues": "https://github.com/doctrine/instantiator/issues",
                "source": "https://github.com/doctrine/instantiator/tree/1.4.1"
            },
            "funding": [
                {
                    "url": "https://www.doctrine-project.org/sponsorship.html",
                    "type": "custom"
                },
                {
                    "url": "https://www.patreon.com/phpdoctrine",
                    "type": "patreon"
                },
                {
                    "url": "https://tidelift.com/funding/github/packagist/doctrine%2Finstantiator",
                    "type": "tidelift"
                }
            ],
            "time": "2022-03-03T08:28:38+00:00"
        },
        {
            "name": "facade/flare-client-php",
            "version": "1.9.1",
            "source": {
                "type": "git",
                "url": "https://github.com/facade/flare-client-php.git",
                "reference": "b2adf1512755637d0cef4f7d1b54301325ac78ed"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/facade/flare-client-php/zipball/b2adf1512755637d0cef4f7d1b54301325ac78ed",
                "reference": "b2adf1512755637d0cef4f7d1b54301325ac78ed",
                "shasum": ""
            },
            "require": {
                "facade/ignition-contracts": "~1.0",
                "illuminate/pipeline": "^5.5|^6.0|^7.0|^8.0",
                "php": "^7.1|^8.0",
                "symfony/http-foundation": "^3.3|^4.1|^5.0",
                "symfony/mime": "^3.4|^4.0|^5.1",
                "symfony/var-dumper": "^3.4|^4.0|^5.0"
            },
            "require-dev": {
                "friendsofphp/php-cs-fixer": "^2.14",
                "phpunit/phpunit": "^7.5.16",
                "spatie/phpunit-snapshot-assertions": "^2.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0-dev"
                }
            },
            "autoload": {
                "files": [
                    "src/helpers.php"
                ],
                "psr-4": {
                    "Facade\\FlareClient\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "description": "Send PHP errors to Flare",
            "homepage": "https://github.com/facade/flare-client-php",
            "keywords": [
                "exception",
                "facade",
                "flare",
                "reporting"
            ],
            "support": {
                "issues": "https://github.com/facade/flare-client-php/issues",
                "source": "https://github.com/facade/flare-client-php/tree/1.9.1"
            },
            "funding": [
                {
                    "url": "https://github.com/spatie",
                    "type": "github"
                }
            ],
            "time": "2021-09-13T12:16:46+00:00"
        },
        {
            "name": "facade/ignition",
            "version": "2.17.6",
            "source": {
                "type": "git",
                "url": "https://github.com/facade/ignition.git",
                "reference": "6acd82e986a2ecee89e2e68adfc30a1936d1ab7c"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/facade/ignition/zipball/6acd82e986a2ecee89e2e68adfc30a1936d1ab7c",
                "reference": "6acd82e986a2ecee89e2e68adfc30a1936d1ab7c",
                "shasum": ""
            },
            "require": {
                "ext-curl": "*",
                "ext-json": "*",
                "ext-mbstring": "*",
                "facade/flare-client-php": "^1.9.1",
                "facade/ignition-contracts": "^1.0.2",
                "illuminate/support": "^7.0|^8.0",
                "monolog/monolog": "^2.0",
                "php": "^7.2.5|^8.0",
                "symfony/console": "^5.0",
                "symfony/var-dumper": "^5.0"
            },
            "require-dev": {
                "friendsofphp/php-cs-fixer": "^2.14",
                "livewire/livewire": "^2.4",
                "mockery/mockery": "^1.3",
                "orchestra/testbench": "^5.0|^6.0",
                "psalm/plugin-laravel": "^1.2"
            },
            "suggest": {
                "laravel/telescope": "^3.1"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.x-dev"
                },
                "laravel": {
                    "providers": [
                        "Facade\\Ignition\\IgnitionServiceProvider"
                    ],
                    "aliases": {
                        "Flare": "Facade\\Ignition\\Facades\\Flare"
                    }
                }
            },
            "autoload": {
                "files": [
                    "src/helpers.php"
                ],
                "psr-4": {
                    "Facade\\Ignition\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "description": "A beautiful error page for Laravel applications.",
            "homepage": "https://github.com/facade/ignition",
            "keywords": [
                "error",
                "flare",
                "laravel",
                "page"
            ],
            "support": {
                "docs": "https://flareapp.io/docs/ignition-for-laravel/introduction",
                "forum": "https://twitter.com/flareappio",
                "issues": "https://github.com/facade/ignition/issues",
                "source": "https://github.com/facade/ignition"
            },
            "time": "2022-06-30T18:26:59+00:00"
        },
        {
            "name": "facade/ignition-contracts",
            "version": "1.0.2",
            "source": {
                "type": "git",
                "url": "https://github.com/facade/ignition-contracts.git",
                "reference": "3c921a1cdba35b68a7f0ccffc6dffc1995b18267"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/facade/ignition-contracts/zipball/3c921a1cdba35b68a7f0ccffc6dffc1995b18267",
                "reference": "3c921a1cdba35b68a7f0ccffc6dffc1995b18267",
                "shasum": ""
            },
            "require": {
                "php": "^7.3|^8.0"
            },
            "require-dev": {
                "friendsofphp/php-cs-fixer": "^v2.15.8",
                "phpunit/phpunit": "^9.3.11",
                "vimeo/psalm": "^3.17.1"
            },
            "type": "library",
            "autoload": {
                "psr-4": {
                    "Facade\\IgnitionContracts\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Freek Van der Herten",
                    "email": "freek@spatie.be",
                    "homepage": "https://flareapp.io",
                    "role": "Developer"
                }
            ],
            "description": "Solution contracts for Ignition",
            "homepage": "https://github.com/facade/ignition-contracts",
            "keywords": [
                "contracts",
                "flare",
                "ignition"
            ],
            "support": {
                "issues": "https://github.com/facade/ignition-contracts/issues",
                "source": "https://github.com/facade/ignition-contracts/tree/1.0.2"
            },
            "time": "2020-10-16T08:27:54+00:00"
        },
        {
            "name": "fakerphp/faker",
            "version": "v1.19.0",
            "source": {
                "type": "git",
                "url": "https://github.com/FakerPHP/Faker.git",
                "reference": "d7f08a622b3346766325488aa32ddc93ccdecc75"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/FakerPHP/Faker/zipball/d7f08a622b3346766325488aa32ddc93ccdecc75",
                "reference": "d7f08a622b3346766325488aa32ddc93ccdecc75",
                "shasum": ""
            },
            "require": {
                "php": "^7.1 || ^8.0",
                "psr/container": "^1.0 || ^2.0",
                "symfony/deprecation-contracts": "^2.2 || ^3.0"
            },
            "conflict": {
                "fzaninotto/faker": "*"
            },
            "require-dev": {
                "bamarni/composer-bin-plugin": "^1.4.1",
                "doctrine/persistence": "^1.3 || ^2.0",
                "ext-intl": "*",
                "symfony/phpunit-bridge": "^4.4 || ^5.2"
            },
            "suggest": {
                "doctrine/orm": "Required to use Faker\\ORM\\Doctrine",
                "ext-curl": "Required by Faker\\Provider\\Image to download images.",
                "ext-dom": "Required by Faker\\Provider\\HtmlLorem for generating random HTML.",
                "ext-iconv": "Required by Faker\\Provider\\ru_RU\\Text::realText() for generating real Russian text.",
                "ext-mbstring": "Required for multibyte Unicode string functionality."
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-main": "v1.19-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Faker\\": "src/Faker/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "François Zaninotto"
                }
            ],
            "description": "Faker is a PHP library that generates fake data for you.",
            "keywords": [
                "data",
                "faker",
                "fixtures"
            ],
            "support": {
                "issues": "https://github.com/FakerPHP/Faker/issues",
                "source": "https://github.com/FakerPHP/Faker/tree/v1.19.0"
            },
            "time": "2022-02-02T17:38:57+00:00"
        },
        {
            "name": "filp/whoops",
            "version": "2.14.5",
            "source": {
                "type": "git",
                "url": "https://github.com/filp/whoops.git",
                "reference": "a63e5e8f26ebbebf8ed3c5c691637325512eb0dc"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/filp/whoops/zipball/a63e5e8f26ebbebf8ed3c5c691637325512eb0dc",
                "reference": "a63e5e8f26ebbebf8ed3c5c691637325512eb0dc",
                "shasum": ""
            },
            "require": {
                "php": "^5.5.9 || ^7.0 || ^8.0",
                "psr/log": "^1.0.1 || ^2.0 || ^3.0"
            },
            "require-dev": {
                "mockery/mockery": "^0.9 || ^1.0",
                "phpunit/phpunit": "^4.8.36 || ^5.7.27 || ^6.5.14 || ^7.5.20 || ^8.5.8 || ^9.3.3",
                "symfony/var-dumper": "^2.6 || ^3.0 || ^4.0 || ^5.0"
            },
            "suggest": {
                "symfony/var-dumper": "Pretty print complex values better with var-dumper available",
                "whoops/soap": "Formats errors as SOAP responses"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.7-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Whoops\\": "src/Whoops/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Filipe Dobreira",
                    "homepage": "https://github.com/filp",
                    "role": "Developer"
                }
            ],
            "description": "php error handling for cool kids",
            "homepage": "https://filp.github.io/whoops/",
            "keywords": [
                "error",
                "exception",
                "handling",
                "library",
                "throwable",
                "whoops"
            ],
            "support": {
                "issues": "https://github.com/filp/whoops/issues",
                "source": "https://github.com/filp/whoops/tree/2.14.5"
            },
            "funding": [
                {
                    "url": "https://github.com/denis-sokolov",
                    "type": "github"
                }
            ],
            "time": "2022-01-07T12:00:00+00:00"
        },
        {
            "name": "hamcrest/hamcrest-php",
            "version": "v2.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/hamcrest/hamcrest-php.git",
                "reference": "8c3d0a3f6af734494ad8f6fbbee0ba92422859f3"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/hamcrest/hamcrest-php/zipball/8c3d0a3f6af734494ad8f6fbbee0ba92422859f3",
                "reference": "8c3d0a3f6af734494ad8f6fbbee0ba92422859f3",
                "shasum": ""
            },
            "require": {
                "php": "^5.3|^7.0|^8.0"
            },
            "replace": {
                "cordoval/hamcrest-php": "*",
                "davedevelopment/hamcrest-php": "*",
                "kodova/hamcrest-php": "*"
            },
            "require-dev": {
                "phpunit/php-file-iterator": "^1.4 || ^2.0",
                "phpunit/phpunit": "^4.8.36 || ^5.7 || ^6.5 || ^7.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.1-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "hamcrest"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "description": "This is the PHP port of Hamcrest Matchers",
            "keywords": [
                "test"
            ],
            "support": {
                "issues": "https://github.com/hamcrest/hamcrest-php/issues",
                "source": "https://github.com/hamcrest/hamcrest-php/tree/v2.0.1"
            },
            "time": "2020-07-09T08:09:16+00:00"
        },
        {
            "name": "laravel/sail",
            "version": "v1.15.0",
            "source": {
                "type": "git",
                "url": "https://github.com/laravel/sail.git",
                "reference": "676e1ff33c1b8af657779f62f57360c376cba666"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/laravel/sail/zipball/676e1ff33c1b8af657779f62f57360c376cba666",
                "reference": "676e1ff33c1b8af657779f62f57360c376cba666",
                "shasum": ""
            },
            "require": {
                "illuminate/console": "^8.0|^9.0",
                "illuminate/contracts": "^8.0|^9.0",
                "illuminate/support": "^8.0|^9.0",
                "php": "^7.3|^8.0"
            },
            "bin": [
                "bin/sail"
            ],
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.x-dev"
                },
                "laravel": {
                    "providers": [
                        "Laravel\\Sail\\SailServiceProvider"
                    ]
                }
            },
            "autoload": {
                "psr-4": {
                    "Laravel\\Sail\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Taylor Otwell",
                    "email": "taylor@laravel.com"
                }
            ],
            "description": "Docker files for running a basic Laravel application.",
            "keywords": [
                "docker",
                "laravel"
            ],
            "support": {
                "issues": "https://github.com/laravel/sail/issues",
                "source": "https://github.com/laravel/sail"
            },
            "time": "2022-06-24T13:56:11+00:00"
        },
        {
            "name": "mockery/mockery",
            "version": "1.5.0",
            "source": {
                "type": "git",
                "url": "https://github.com/mockery/mockery.git",
                "reference": "c10a5f6e06fc2470ab1822fa13fa2a7380f8fbac"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/mockery/mockery/zipball/c10a5f6e06fc2470ab1822fa13fa2a7380f8fbac",
                "reference": "c10a5f6e06fc2470ab1822fa13fa2a7380f8fbac",
                "shasum": ""
            },
            "require": {
                "hamcrest/hamcrest-php": "^2.0.1",
                "lib-pcre": ">=7.0",
                "php": "^7.3 || ^8.0"
            },
            "conflict": {
                "phpunit/phpunit": "<8.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^8.5 || ^9.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.4.x-dev"
                }
            },
            "autoload": {
                "psr-0": {
                    "Mockery": "library/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Pádraic Brady",
                    "email": "padraic.brady@gmail.com",
                    "homepage": "http://blog.astrumfutura.com"
                },
                {
                    "name": "Dave Marshall",
                    "email": "dave.marshall@atstsolutions.co.uk",
                    "homepage": "http://davedevelopment.co.uk"
                }
            ],
            "description": "Mockery is a simple yet flexible PHP mock object framework",
            "homepage": "https://github.com/mockery/mockery",
            "keywords": [
                "BDD",
                "TDD",
                "library",
                "mock",
                "mock objects",
                "mockery",
                "stub",
                "test",
                "test double",
                "testing"
            ],
            "support": {
                "issues": "https://github.com/mockery/mockery/issues",
                "source": "https://github.com/mockery/mockery/tree/1.5.0"
            },
            "time": "2022-01-20T13:18:17+00:00"
        },
        {
            "name": "myclabs/deep-copy",
            "version": "1.11.0",
            "source": {
                "type": "git",
                "url": "https://github.com/myclabs/DeepCopy.git",
                "reference": "14daed4296fae74d9e3201d2c4925d1acb7aa614"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/myclabs/DeepCopy/zipball/14daed4296fae74d9e3201d2c4925d1acb7aa614",
                "reference": "14daed4296fae74d9e3201d2c4925d1acb7aa614",
                "shasum": ""
            },
            "require": {
                "php": "^7.1 || ^8.0"
            },
            "conflict": {
                "doctrine/collections": "<1.6.8",
                "doctrine/common": "<2.13.3 || >=3,<3.2.2"
            },
            "require-dev": {
                "doctrine/collections": "^1.6.8",
                "doctrine/common": "^2.13.3 || ^3.2.2",
                "phpunit/phpunit": "^7.5.20 || ^8.5.23 || ^9.5.13"
            },
            "type": "library",
            "autoload": {
                "files": [
                    "src/DeepCopy/deep_copy.php"
                ],
                "psr-4": {
                    "DeepCopy\\": "src/DeepCopy/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "description": "Create deep copies (clones) of your objects",
            "keywords": [
                "clone",
                "copy",
                "duplicate",
                "object",
                "object graph"
            ],
            "support": {
                "issues": "https://github.com/myclabs/DeepCopy/issues",
                "source": "https://github.com/myclabs/DeepCopy/tree/1.11.0"
            },
            "funding": [
                {
                    "url": "https://tidelift.com/funding/github/packagist/myclabs/deep-copy",
                    "type": "tidelift"
                }
            ],
            "time": "2022-03-03T13:19:32+00:00"
        },
        {
            "name": "nunomaduro/collision",
            "version": "v5.11.0",
            "source": {
                "type": "git",
                "url": "https://github.com/nunomaduro/collision.git",
                "reference": "8b610eef8582ccdc05d8f2ab23305e2d37049461"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/nunomaduro/collision/zipball/8b610eef8582ccdc05d8f2ab23305e2d37049461",
                "reference": "8b610eef8582ccdc05d8f2ab23305e2d37049461",
                "shasum": ""
            },
            "require": {
                "facade/ignition-contracts": "^1.0",
                "filp/whoops": "^2.14.3",
                "php": "^7.3 || ^8.0",
                "symfony/console": "^5.0"
            },
            "require-dev": {
                "brianium/paratest": "^6.1",
                "fideloper/proxy": "^4.4.1",
                "fruitcake/laravel-cors": "^2.0.3",
                "laravel/framework": "8.x-dev",
                "nunomaduro/larastan": "^0.6.2",
                "nunomaduro/mock-final-classes": "^1.0",
                "orchestra/testbench": "^6.0",
                "phpstan/phpstan": "^0.12.64",
                "phpunit/phpunit": "^9.5.0"
            },
            "type": "library",
            "extra": {
                "laravel": {
                    "providers": [
                        "NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider"
                    ]
                }
            },
            "autoload": {
                "psr-4": {
                    "NunoMaduro\\Collision\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Nuno Maduro",
                    "email": "enunomaduro@gmail.com"
                }
            ],
            "description": "Cli error handling for console/command-line PHP applications.",
            "keywords": [
                "artisan",
                "cli",
                "command-line",
                "console",
                "error",
                "handling",
                "laravel",
                "laravel-zero",
                "php",
                "symfony"
            ],
            "support": {
                "issues": "https://github.com/nunomaduro/collision/issues",
                "source": "https://github.com/nunomaduro/collision"
            },
            "funding": [
                {
                    "url": "https://www.paypal.com/paypalme/enunomaduro",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/nunomaduro",
                    "type": "github"
                },
                {
                    "url": "https://www.patreon.com/nunomaduro",
                    "type": "patreon"
                }
            ],
            "time": "2022-01-10T16:22:52+00:00"
        },
        {
            "name": "phar-io/manifest",
            "version": "2.0.3",
            "source": {
                "type": "git",
                "url": "https://github.com/phar-io/manifest.git",
                "reference": "97803eca37d319dfa7826cc2437fc020857acb53"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/phar-io/manifest/zipball/97803eca37d319dfa7826cc2437fc020857acb53",
                "reference": "97803eca37d319dfa7826cc2437fc020857acb53",
                "shasum": ""
            },
            "require": {
                "ext-dom": "*",
                "ext-phar": "*",
                "ext-xmlwriter": "*",
                "phar-io/version": "^3.0.1",
                "php": "^7.2 || ^8.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.0.x-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Arne Blankerts",
                    "email": "arne@blankerts.de",
                    "role": "Developer"
                },
                {
                    "name": "Sebastian Heuer",
                    "email": "sebastian@phpeople.de",
                    "role": "Developer"
                },
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "Developer"
                }
            ],
            "description": "Component for reading phar.io manifest information from a PHP Archive (PHAR)",
            "support": {
                "issues": "https://github.com/phar-io/manifest/issues",
                "source": "https://github.com/phar-io/manifest/tree/2.0.3"
            },
            "time": "2021-07-20T11:28:43+00:00"
        },
        {
            "name": "phar-io/version",
            "version": "3.2.1",
            "source": {
                "type": "git",
                "url": "https://github.com/phar-io/version.git",
                "reference": "4f7fd7836c6f332bb2933569e566a0d6c4cbed74"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/phar-io/version/zipball/4f7fd7836c6f332bb2933569e566a0d6c4cbed74",
                "reference": "4f7fd7836c6f332bb2933569e566a0d6c4cbed74",
                "shasum": ""
            },
            "require": {
                "php": "^7.2 || ^8.0"
            },
            "type": "library",
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Arne Blankerts",
                    "email": "arne@blankerts.de",
                    "role": "Developer"
                },
                {
                    "name": "Sebastian Heuer",
                    "email": "sebastian@phpeople.de",
                    "role": "Developer"
                },
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "Developer"
                }
            ],
            "description": "Library for handling version information and constraints",
            "support": {
                "issues": "https://github.com/phar-io/version/issues",
                "source": "https://github.com/phar-io/version/tree/3.2.1"
            },
            "time": "2022-02-21T01:04:05+00:00"
        },
        {
            "name": "phpdocumentor/reflection-common",
            "version": "2.2.0",
            "source": {
                "type": "git",
                "url": "https://github.com/phpDocumentor/ReflectionCommon.git",
                "reference": "1d01c49d4ed62f25aa84a747ad35d5a16924662b"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/phpDocumentor/ReflectionCommon/zipball/1d01c49d4ed62f25aa84a747ad35d5a16924662b",
                "reference": "1d01c49d4ed62f25aa84a747ad35d5a16924662b",
                "shasum": ""
            },
            "require": {
                "php": "^7.2 || ^8.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-2.x": "2.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "phpDocumentor\\Reflection\\": "src/"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Jaap van Otterdijk",
                    "email": "opensource@ijaap.nl"
                }
            ],
            "description": "Common reflection classes used by phpdocumentor to reflect the code structure",
            "homepage": "http://www.phpdoc.org",
            "keywords": [
                "FQSEN",
                "phpDocumentor",
                "phpdoc",
                "reflection",
                "static analysis"
            ],
            "support": {
                "issues": "https://github.com/phpDocumentor/ReflectionCommon/issues",
                "source": "https://github.com/phpDocumentor/ReflectionCommon/tree/2.x"
            },
            "time": "2020-06-27T09:03:43+00:00"
        },
        {
            "name": "phpdocumentor/reflection-docblock",
            "version": "5.3.0",
            "source": {
                "type": "git",
                "url": "https://github.com/phpDocumentor/ReflectionDocBlock.git",
                "reference": "622548b623e81ca6d78b721c5e029f4ce664f170"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/phpDocumentor/ReflectionDocBlock/zipball/622548b623e81ca6d78b721c5e029f4ce664f170",
                "reference": "622548b623e81ca6d78b721c5e029f4ce664f170",
                "shasum": ""
            },
            "require": {
                "ext-filter": "*",
                "php": "^7.2 || ^8.0",
                "phpdocumentor/reflection-common": "^2.2",
                "phpdocumentor/type-resolver": "^1.3",
                "webmozart/assert": "^1.9.1"
            },
            "require-dev": {
                "mockery/mockery": "~1.3.2",
                "psalm/phar": "^4.8"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "5.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "phpDocumentor\\Reflection\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Mike van Riel",
                    "email": "me@mikevanriel.com"
                },
                {
                    "name": "Jaap van Otterdijk",
                    "email": "account@ijaap.nl"
                }
            ],
            "description": "With this component, a library can provide support for annotations via DocBlocks or otherwise retrieve information that is embedded in a DocBlock.",
            "support": {
                "issues": "https://github.com/phpDocumentor/ReflectionDocBlock/issues",
                "source": "https://github.com/phpDocumentor/ReflectionDocBlock/tree/5.3.0"
            },
            "time": "2021-10-19T17:43:47+00:00"
        },
        {
            "name": "phpdocumentor/type-resolver",
            "version": "1.6.1",
            "source": {
                "type": "git",
                "url": "https://github.com/phpDocumentor/TypeResolver.git",
                "reference": "77a32518733312af16a44300404e945338981de3"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/phpDocumentor/TypeResolver/zipball/77a32518733312af16a44300404e945338981de3",
                "reference": "77a32518733312af16a44300404e945338981de3",
                "shasum": ""
            },
            "require": {
                "php": "^7.2 || ^8.0",
                "phpdocumentor/reflection-common": "^2.0"
            },
            "require-dev": {
                "ext-tokenizer": "*",
                "psalm/phar": "^4.8"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-1.x": "1.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "phpDocumentor\\Reflection\\": "src"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Mike van Riel",
                    "email": "me@mikevanriel.com"
                }
            ],
            "description": "A PSR-5 based resolver of Class names, Types and Structural Element Names",
            "support": {
                "issues": "https://github.com/phpDocumentor/TypeResolver/issues",
                "source": "https://github.com/phpDocumentor/TypeResolver/tree/1.6.1"
            },
            "time": "2022-03-15T21:29:03+00:00"
        },
        {
            "name": "phpspec/prophecy",
            "version": "v1.15.0",
            "source": {
                "type": "git",
                "url": "https://github.com/phpspec/prophecy.git",
                "reference": "bbcd7380b0ebf3961ee21409db7b38bc31d69a13"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/phpspec/prophecy/zipball/bbcd7380b0ebf3961ee21409db7b38bc31d69a13",
                "reference": "bbcd7380b0ebf3961ee21409db7b38bc31d69a13",
                "shasum": ""
            },
            "require": {
                "doctrine/instantiator": "^1.2",
                "php": "^7.2 || ~8.0, <8.2",
                "phpdocumentor/reflection-docblock": "^5.2",
                "sebastian/comparator": "^3.0 || ^4.0",
                "sebastian/recursion-context": "^3.0 || ^4.0"
            },
            "require-dev": {
                "phpspec/phpspec": "^6.0 || ^7.0",
                "phpunit/phpunit": "^8.0 || ^9.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.x-dev"
                }
            },
            "autoload": {
                "psr-4": {
                    "Prophecy\\": "src/Prophecy"
                }
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "MIT"
            ],
            "authors": [
                {
                    "name": "Konstantin Kudryashov",
                    "email": "ever.zet@gmail.com",
                    "homepage": "http://everzet.com"
                },
                {
                    "name": "Marcello Duarte",
                    "email": "marcello.duarte@gmail.com"
                }
            ],
            "description": "Highly opinionated mocking framework for PHP 5.3+",
            "homepage": "https://github.com/phpspec/prophecy",
            "keywords": [
                "Double",
                "Dummy",
                "fake",
                "mock",
                "spy",
                "stub"
            ],
            "support": {
                "issues": "https://github.com/phpspec/prophecy/issues",
                "source": "https://github.com/phpspec/prophecy/tree/v1.15.0"
            },
            "time": "2021-12-08T12:19:24+00:00"
        },
        {
            "name": "phpunit/php-code-coverage",
            "version": "9.2.15",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/php-code-coverage.git",
                "reference": "2e9da11878c4202f97915c1cb4bb1ca318a63f5f"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/php-code-coverage/zipball/2e9da11878c4202f97915c1cb4bb1ca318a63f5f",
                "reference": "2e9da11878c4202f97915c1cb4bb1ca318a63f5f",
                "shasum": ""
            },
            "require": {
                "ext-dom": "*",
                "ext-libxml": "*",
                "ext-xmlwriter": "*",
                "nikic/php-parser": "^4.13.0",
                "php": ">=7.3",
                "phpunit/php-file-iterator": "^3.0.3",
                "phpunit/php-text-template": "^2.0.2",
                "sebastian/code-unit-reverse-lookup": "^2.0.2",
                "sebastian/complexity": "^2.0",
                "sebastian/environment": "^5.1.2",
                "sebastian/lines-of-code": "^1.0.3",
                "sebastian/version": "^3.0.1",
                "theseer/tokenizer": "^1.2.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^9.3"
            },
            "suggest": {
                "ext-pcov": "*",
                "ext-xdebug": "*"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "9.2-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "Library that provides collection, processing, and rendering functionality for PHP code coverage information.",
            "homepage": "https://github.com/sebastianbergmann/php-code-coverage",
            "keywords": [
                "coverage",
                "testing",
                "xunit"
            ],
            "support": {
                "issues": "https://github.com/sebastianbergmann/php-code-coverage/issues",
                "source": "https://github.com/sebastianbergmann/php-code-coverage/tree/9.2.15"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2022-03-07T09:28:20+00:00"
        },
        {
            "name": "phpunit/php-file-iterator",
            "version": "3.0.6",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/php-file-iterator.git",
                "reference": "cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/php-file-iterator/zipball/cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf",
                "reference": "cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf",
                "shasum": ""
            },
            "require": {
                "php": ">=7.3"
            },
            "require-dev": {
                "phpunit/phpunit": "^9.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "FilterIterator implementation that filters files based on a list of suffixes.",
            "homepage": "https://github.com/sebastianbergmann/php-file-iterator/",
            "keywords": [
                "filesystem",
                "iterator"
            ],
            "support": {
                "issues": "https://github.com/sebastianbergmann/php-file-iterator/issues",
                "source": "https://github.com/sebastianbergmann/php-file-iterator/tree/3.0.6"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2021-12-02T12:48:52+00:00"
        },
        {
            "name": "phpunit/php-invoker",
            "version": "3.1.1",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/php-invoker.git",
                "reference": "5a10147d0aaf65b58940a0b72f71c9ac0423cc67"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/php-invoker/zipball/5a10147d0aaf65b58940a0b72f71c9ac0423cc67",
                "reference": "5a10147d0aaf65b58940a0b72f71c9ac0423cc67",
                "shasum": ""
            },
            "require": {
                "php": ">=7.3"
            },
            "require-dev": {
                "ext-pcntl": "*",
                "phpunit/phpunit": "^9.3"
            },
            "suggest": {
                "ext-pcntl": "*"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.1-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "Invoke callables with a timeout",
            "homepage": "https://github.com/sebastianbergmann/php-invoker/",
            "keywords": [
                "process"
            ],
            "support": {
                "issues": "https://github.com/sebastianbergmann/php-invoker/issues",
                "source": "https://github.com/sebastianbergmann/php-invoker/tree/3.1.1"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2020-09-28T05:58:55+00:00"
        },
        {
            "name": "phpunit/php-text-template",
            "version": "2.0.4",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/php-text-template.git",
                "reference": "5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/php-text-template/zipball/5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28",
                "reference": "5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28",
                "shasum": ""
            },
            "require": {
                "php": ">=7.3"
            },
            "require-dev": {
                "phpunit/phpunit": "^9.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "Simple template engine.",
            "homepage": "https://github.com/sebastianbergmann/php-text-template/",
            "keywords": [
                "template"
            ],
            "support": {
                "issues": "https://github.com/sebastianbergmann/php-text-template/issues",
                "source": "https://github.com/sebastianbergmann/php-text-template/tree/2.0.4"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2020-10-26T05:33:50+00:00"
        },
        {
            "name": "phpunit/php-timer",
            "version": "5.0.3",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/php-timer.git",
                "reference": "5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/php-timer/zipball/5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2",
                "reference": "5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2",
                "shasum": ""
            },
            "require": {
                "php": ">=7.3"
            },
            "require-dev": {
                "phpunit/phpunit": "^9.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "5.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "Utility class for timing",
            "homepage": "https://github.com/sebastianbergmann/php-timer/",
            "keywords": [
                "timer"
            ],
            "support": {
                "issues": "https://github.com/sebastianbergmann/php-timer/issues",
                "source": "https://github.com/sebastianbergmann/php-timer/tree/5.0.3"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2020-10-26T13:16:10+00:00"
        },
        {
            "name": "phpunit/phpunit",
            "version": "9.5.21",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/phpunit.git",
                "reference": "0e32b76be457de00e83213528f6bb37e2a38fcb1"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/phpunit/zipball/0e32b76be457de00e83213528f6bb37e2a38fcb1",
                "reference": "0e32b76be457de00e83213528f6bb37e2a38fcb1",
                "shasum": ""
            },
            "require": {
                "doctrine/instantiator": "^1.3.1",
                "ext-dom": "*",
                "ext-json": "*",
                "ext-libxml": "*",
                "ext-mbstring": "*",
                "ext-xml": "*",
                "ext-xmlwriter": "*",
                "myclabs/deep-copy": "^1.10.1",
                "phar-io/manifest": "^2.0.3",
                "phar-io/version": "^3.0.2",
                "php": ">=7.3",
                "phpspec/prophecy": "^1.12.1",
                "phpunit/php-code-coverage": "^9.2.13",
                "phpunit/php-file-iterator": "^3.0.5",
                "phpunit/php-invoker": "^3.1.1",
                "phpunit/php-text-template": "^2.0.3",
                "phpunit/php-timer": "^5.0.2",
                "sebastian/cli-parser": "^1.0.1",
                "sebastian/code-unit": "^1.0.6",
                "sebastian/comparator": "^4.0.5",
                "sebastian/diff": "^4.0.3",
                "sebastian/environment": "^5.1.3",
                "sebastian/exporter": "^4.0.3",
                "sebastian/global-state": "^5.0.1",
                "sebastian/object-enumerator": "^4.0.3",
                "sebastian/resource-operations": "^3.0.3",
                "sebastian/type": "^3.0",
                "sebastian/version": "^3.0.2"
            },
            "require-dev": {
                "phpspec/prophecy-phpunit": "^2.0.1"
            },
            "suggest": {
                "ext-soap": "*",
                "ext-xdebug": "*"
            },
            "bin": [
                "phpunit"
            ],
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "9.5-dev"
                }
            },
            "autoload": {
                "files": [
                    "src/Framework/Assert/Functions.php"
                ],
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "The PHP Unit Testing framework.",
            "homepage": "https://phpunit.de/",
            "keywords": [
                "phpunit",
                "testing",
                "xunit"
            ],
            "support": {
                "issues": "https://github.com/sebastianbergmann/phpunit/issues",
                "source": "https://github.com/sebastianbergmann/phpunit/tree/9.5.21"
            },
            "funding": [
                {
                    "url": "https://phpunit.de/sponsors.html",
                    "type": "custom"
                },
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2022-06-19T12:14:25+00:00"
        },
        {
            "name": "sebastian/cli-parser",
            "version": "1.0.1",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/cli-parser.git",
                "reference": "442e7c7e687e42adc03470c7b668bc4b2402c0b2"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/cli-parser/zipball/442e7c7e687e42adc03470c7b668bc4b2402c0b2",
                "reference": "442e7c7e687e42adc03470c7b668bc4b2402c0b2",
                "shasum": ""
            },
            "require": {
                "php": ">=7.3"
            },
            "require-dev": {
                "phpunit/phpunit": "^9.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "Library for parsing CLI options",
            "homepage": "https://github.com/sebastianbergmann/cli-parser",
            "support": {
                "issues": "https://github.com/sebastianbergmann/cli-parser/issues",
                "source": "https://github.com/sebastianbergmann/cli-parser/tree/1.0.1"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2020-09-28T06:08:49+00:00"
        },
        {
            "name": "sebastian/code-unit",
            "version": "1.0.8",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/code-unit.git",
                "reference": "1fc9f64c0927627ef78ba436c9b17d967e68e120"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/code-unit/zipball/1fc9f64c0927627ef78ba436c9b17d967e68e120",
                "reference": "1fc9f64c0927627ef78ba436c9b17d967e68e120",
                "shasum": ""
            },
            "require": {
                "php": ">=7.3"
            },
            "require-dev": {
                "phpunit/phpunit": "^9.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "Collection of value objects that represent the PHP code units",
            "homepage": "https://github.com/sebastianbergmann/code-unit",
            "support": {
                "issues": "https://github.com/sebastianbergmann/code-unit/issues",
                "source": "https://github.com/sebastianbergmann/code-unit/tree/1.0.8"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2020-10-26T13:08:54+00:00"
        },
        {
            "name": "sebastian/code-unit-reverse-lookup",
            "version": "2.0.3",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/code-unit-reverse-lookup.git",
                "reference": "ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/code-unit-reverse-lookup/zipball/ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5",
                "reference": "ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5",
                "shasum": ""
            },
            "require": {
                "php": ">=7.3"
            },
            "require-dev": {
                "phpunit/phpunit": "^9.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                }
            ],
            "description": "Looks up which function or method a line of code belongs to",
            "homepage": "https://github.com/sebastianbergmann/code-unit-reverse-lookup/",
            "support": {
                "issues": "https://github.com/sebastianbergmann/code-unit-reverse-lookup/issues",
                "source": "https://github.com/sebastianbergmann/code-unit-reverse-lookup/tree/2.0.3"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2020-09-28T05:30:19+00:00"
        },
        {
            "name": "sebastian/comparator",
            "version": "4.0.6",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/comparator.git",
                "reference": "55f4261989e546dc112258c7a75935a81a7ce382"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/comparator/zipball/55f4261989e546dc112258c7a75935a81a7ce382",
                "reference": "55f4261989e546dc112258c7a75935a81a7ce382",
                "shasum": ""
            },
            "require": {
                "php": ">=7.3",
                "sebastian/diff": "^4.0",
                "sebastian/exporter": "^4.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^9.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "4.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                },
                {
                    "name": "Jeff Welch",
                    "email": "whatthejeff@gmail.com"
                },
                {
                    "name": "Volker Dusch",
                    "email": "github@wallbash.com"
                },
                {
                    "name": "Bernhard Schussek",
                    "email": "bschussek@2bepublished.at"
                }
            ],
            "description": "Provides the functionality to compare PHP values for equality",
            "homepage": "https://github.com/sebastianbergmann/comparator",
            "keywords": [
                "comparator",
                "compare",
                "equality"
            ],
            "support": {
                "issues": "https://github.com/sebastianbergmann/comparator/issues",
                "source": "https://github.com/sebastianbergmann/comparator/tree/4.0.6"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2020-10-26T15:49:45+00:00"
        },
        {
            "name": "sebastian/complexity",
            "version": "2.0.2",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/complexity.git",
                "reference": "739b35e53379900cc9ac327b2147867b8b6efd88"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/complexity/zipball/739b35e53379900cc9ac327b2147867b8b6efd88",
                "reference": "739b35e53379900cc9ac327b2147867b8b6efd88",
                "shasum": ""
            },
            "require": {
                "nikic/php-parser": "^4.7",
                "php": ">=7.3"
            },
            "require-dev": {
                "phpunit/phpunit": "^9.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "Library for calculating the complexity of PHP code units",
            "homepage": "https://github.com/sebastianbergmann/complexity",
            "support": {
                "issues": "https://github.com/sebastianbergmann/complexity/issues",
                "source": "https://github.com/sebastianbergmann/complexity/tree/2.0.2"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2020-10-26T15:52:27+00:00"
        },
        {
            "name": "sebastian/diff",
            "version": "4.0.4",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/diff.git",
                "reference": "3461e3fccc7cfdfc2720be910d3bd73c69be590d"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/diff/zipball/3461e3fccc7cfdfc2720be910d3bd73c69be590d",
                "reference": "3461e3fccc7cfdfc2720be910d3bd73c69be590d",
                "shasum": ""
            },
            "require": {
                "php": ">=7.3"
            },
            "require-dev": {
                "phpunit/phpunit": "^9.3",
                "symfony/process": "^4.2 || ^5"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "4.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                },
                {
                    "name": "Kore Nordmann",
                    "email": "mail@kore-nordmann.de"
                }
            ],
            "description": "Diff implementation",
            "homepage": "https://github.com/sebastianbergmann/diff",
            "keywords": [
                "diff",
                "udiff",
                "unidiff",
                "unified diff"
            ],
            "support": {
                "issues": "https://github.com/sebastianbergmann/diff/issues",
                "source": "https://github.com/sebastianbergmann/diff/tree/4.0.4"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2020-10-26T13:10:38+00:00"
        },
        {
            "name": "sebastian/environment",
            "version": "5.1.4",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/environment.git",
                "reference": "1b5dff7bb151a4db11d49d90e5408e4e938270f7"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/environment/zipball/1b5dff7bb151a4db11d49d90e5408e4e938270f7",
                "reference": "1b5dff7bb151a4db11d49d90e5408e4e938270f7",
                "shasum": ""
            },
            "require": {
                "php": ">=7.3"
            },
            "require-dev": {
                "phpunit/phpunit": "^9.3"
            },
            "suggest": {
                "ext-posix": "*"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "5.1-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                }
            ],
            "description": "Provides functionality to handle HHVM/PHP environments",
            "homepage": "http://www.github.com/sebastianbergmann/environment",
            "keywords": [
                "Xdebug",
                "environment",
                "hhvm"
            ],
            "support": {
                "issues": "https://github.com/sebastianbergmann/environment/issues",
                "source": "https://github.com/sebastianbergmann/environment/tree/5.1.4"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2022-04-03T09:37:03+00:00"
        },
        {
            "name": "sebastian/exporter",
            "version": "4.0.4",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/exporter.git",
                "reference": "65e8b7db476c5dd267e65eea9cab77584d3cfff9"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/exporter/zipball/65e8b7db476c5dd267e65eea9cab77584d3cfff9",
                "reference": "65e8b7db476c5dd267e65eea9cab77584d3cfff9",
                "shasum": ""
            },
            "require": {
                "php": ">=7.3",
                "sebastian/recursion-context": "^4.0"
            },
            "require-dev": {
                "ext-mbstring": "*",
                "phpunit/phpunit": "^9.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "4.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                },
                {
                    "name": "Jeff Welch",
                    "email": "whatthejeff@gmail.com"
                },
                {
                    "name": "Volker Dusch",
                    "email": "github@wallbash.com"
                },
                {
                    "name": "Adam Harvey",
                    "email": "aharvey@php.net"
                },
                {
                    "name": "Bernhard Schussek",
                    "email": "bschussek@gmail.com"
                }
            ],
            "description": "Provides the functionality to export PHP variables for visualization",
            "homepage": "https://www.github.com/sebastianbergmann/exporter",
            "keywords": [
                "export",
                "exporter"
            ],
            "support": {
                "issues": "https://github.com/sebastianbergmann/exporter/issues",
                "source": "https://github.com/sebastianbergmann/exporter/tree/4.0.4"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2021-11-11T14:18:36+00:00"
        },
        {
            "name": "sebastian/global-state",
            "version": "5.0.5",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/global-state.git",
                "reference": "0ca8db5a5fc9c8646244e629625ac486fa286bf2"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/global-state/zipball/0ca8db5a5fc9c8646244e629625ac486fa286bf2",
                "reference": "0ca8db5a5fc9c8646244e629625ac486fa286bf2",
                "shasum": ""
            },
            "require": {
                "php": ">=7.3",
                "sebastian/object-reflector": "^2.0",
                "sebastian/recursion-context": "^4.0"
            },
            "require-dev": {
                "ext-dom": "*",
                "phpunit/phpunit": "^9.3"
            },
            "suggest": {
                "ext-uopz": "*"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "5.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                }
            ],
            "description": "Snapshotting of global state",
            "homepage": "http://www.github.com/sebastianbergmann/global-state",
            "keywords": [
                "global state"
            ],
            "support": {
                "issues": "https://github.com/sebastianbergmann/global-state/issues",
                "source": "https://github.com/sebastianbergmann/global-state/tree/5.0.5"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2022-02-14T08:28:10+00:00"
        },
        {
            "name": "sebastian/lines-of-code",
            "version": "1.0.3",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/lines-of-code.git",
                "reference": "c1c2e997aa3146983ed888ad08b15470a2e22ecc"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/lines-of-code/zipball/c1c2e997aa3146983ed888ad08b15470a2e22ecc",
                "reference": "c1c2e997aa3146983ed888ad08b15470a2e22ecc",
                "shasum": ""
            },
            "require": {
                "nikic/php-parser": "^4.6",
                "php": ">=7.3"
            },
            "require-dev": {
                "phpunit/phpunit": "^9.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "1.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "Library for counting the lines of code in PHP source code",
            "homepage": "https://github.com/sebastianbergmann/lines-of-code",
            "support": {
                "issues": "https://github.com/sebastianbergmann/lines-of-code/issues",
                "source": "https://github.com/sebastianbergmann/lines-of-code/tree/1.0.3"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2020-11-28T06:42:11+00:00"
        },
        {
            "name": "sebastian/object-enumerator",
            "version": "4.0.4",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/object-enumerator.git",
                "reference": "5c9eeac41b290a3712d88851518825ad78f45c71"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/object-enumerator/zipball/5c9eeac41b290a3712d88851518825ad78f45c71",
                "reference": "5c9eeac41b290a3712d88851518825ad78f45c71",
                "shasum": ""
            },
            "require": {
                "php": ">=7.3",
                "sebastian/object-reflector": "^2.0",
                "sebastian/recursion-context": "^4.0"
            },
            "require-dev": {
                "phpunit/phpunit": "^9.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "4.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                }
            ],
            "description": "Traverses array structures and object graphs to enumerate all referenced objects",
            "homepage": "https://github.com/sebastianbergmann/object-enumerator/",
            "support": {
                "issues": "https://github.com/sebastianbergmann/object-enumerator/issues",
                "source": "https://github.com/sebastianbergmann/object-enumerator/tree/4.0.4"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2020-10-26T13:12:34+00:00"
        },
        {
            "name": "sebastian/object-reflector",
            "version": "2.0.4",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/object-reflector.git",
                "reference": "b4f479ebdbf63ac605d183ece17d8d7fe49c15c7"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/object-reflector/zipball/b4f479ebdbf63ac605d183ece17d8d7fe49c15c7",
                "reference": "b4f479ebdbf63ac605d183ece17d8d7fe49c15c7",
                "shasum": ""
            },
            "require": {
                "php": ">=7.3"
            },
            "require-dev": {
                "phpunit/phpunit": "^9.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "2.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                }
            ],
            "description": "Allows reflection of object attributes, including inherited and non-public ones",
            "homepage": "https://github.com/sebastianbergmann/object-reflector/",
            "support": {
                "issues": "https://github.com/sebastianbergmann/object-reflector/issues",
                "source": "https://github.com/sebastianbergmann/object-reflector/tree/2.0.4"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2020-10-26T13:14:26+00:00"
        },
        {
            "name": "sebastian/recursion-context",
            "version": "4.0.4",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/recursion-context.git",
                "reference": "cd9d8cf3c5804de4341c283ed787f099f5506172"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/recursion-context/zipball/cd9d8cf3c5804de4341c283ed787f099f5506172",
                "reference": "cd9d8cf3c5804de4341c283ed787f099f5506172",
                "shasum": ""
            },
            "require": {
                "php": ">=7.3"
            },
            "require-dev": {
                "phpunit/phpunit": "^9.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "4.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                },
                {
                    "name": "Jeff Welch",
                    "email": "whatthejeff@gmail.com"
                },
                {
                    "name": "Adam Harvey",
                    "email": "aharvey@php.net"
                }
            ],
            "description": "Provides functionality to recursively process PHP variables",
            "homepage": "http://www.github.com/sebastianbergmann/recursion-context",
            "support": {
                "issues": "https://github.com/sebastianbergmann/recursion-context/issues",
                "source": "https://github.com/sebastianbergmann/recursion-context/tree/4.0.4"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2020-10-26T13:17:30+00:00"
        },
        {
            "name": "sebastian/resource-operations",
            "version": "3.0.3",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/resource-operations.git",
                "reference": "0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/resource-operations/zipball/0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8",
                "reference": "0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8",
                "shasum": ""
            },
            "require": {
                "php": ">=7.3"
            },
            "require-dev": {
                "phpunit/phpunit": "^9.0"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de"
                }
            ],
            "description": "Provides a list of PHP built-in functions that operate on resources",
            "homepage": "https://www.github.com/sebastianbergmann/resource-operations",
            "support": {
                "issues": "https://github.com/sebastianbergmann/resource-operations/issues",
                "source": "https://github.com/sebastianbergmann/resource-operations/tree/3.0.3"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2020-09-28T06:45:17+00:00"
        },
        {
            "name": "sebastian/type",
            "version": "3.0.0",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/type.git",
                "reference": "b233b84bc4465aff7b57cf1c4bc75c86d00d6dad"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/type/zipball/b233b84bc4465aff7b57cf1c4bc75c86d00d6dad",
                "reference": "b233b84bc4465aff7b57cf1c4bc75c86d00d6dad",
                "shasum": ""
            },
            "require": {
                "php": ">=7.3"
            },
            "require-dev": {
                "phpunit/phpunit": "^9.5"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "Collection of value objects that represent the types of the PHP type system",
            "homepage": "https://github.com/sebastianbergmann/type",
            "support": {
                "issues": "https://github.com/sebastianbergmann/type/issues",
                "source": "https://github.com/sebastianbergmann/type/tree/3.0.0"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2022-03-15T09:54:48+00:00"
        },
        {
            "name": "sebastian/version",
            "version": "3.0.2",
            "source": {
                "type": "git",
                "url": "https://github.com/sebastianbergmann/version.git",
                "reference": "c6c1022351a901512170118436c764e473f6de8c"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/sebastianbergmann/version/zipball/c6c1022351a901512170118436c764e473f6de8c",
                "reference": "c6c1022351a901512170118436c764e473f6de8c",
                "shasum": ""
            },
            "require": {
                "php": ">=7.3"
            },
            "type": "library",
            "extra": {
                "branch-alias": {
                    "dev-master": "3.0-dev"
                }
            },
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Sebastian Bergmann",
                    "email": "sebastian@phpunit.de",
                    "role": "lead"
                }
            ],
            "description": "Library that helps with managing the version number of Git-hosted PHP projects",
            "homepage": "https://github.com/sebastianbergmann/version",
            "support": {
                "issues": "https://github.com/sebastianbergmann/version/issues",
                "source": "https://github.com/sebastianbergmann/version/tree/3.0.2"
            },
            "funding": [
                {
                    "url": "https://github.com/sebastianbergmann",
                    "type": "github"
                }
            ],
            "time": "2020-09-28T06:39:44+00:00"
        },
        {
            "name": "theseer/tokenizer",
            "version": "1.2.1",
            "source": {
                "type": "git",
                "url": "https://github.com/theseer/tokenizer.git",
                "reference": "34a41e998c2183e22995f158c581e7b5e755ab9e"
            },
            "dist": {
                "type": "zip",
                "url": "https://api.github.com/repos/theseer/tokenizer/zipball/34a41e998c2183e22995f158c581e7b5e755ab9e",
                "reference": "34a41e998c2183e22995f158c581e7b5e755ab9e",
                "shasum": ""
            },
            "require": {
                "ext-dom": "*",
                "ext-tokenizer": "*",
                "ext-xmlwriter": "*",
                "php": "^7.2 || ^8.0"
            },
            "type": "library",
            "autoload": {
                "classmap": [
                    "src/"
                ]
            },
            "notification-url": "https://packagist.org/downloads/",
            "license": [
                "BSD-3-Clause"
            ],
            "authors": [
                {
                    "name": "Arne Blankerts",
                    "email": "arne@blankerts.de",
                    "role": "Developer"
                }
            ],
            "description": "A small library for converting tokenized PHP source code into XML and potentially other formats",
            "support": {
                "issues": "https://github.com/theseer/tokenizer/issues",
                "source": "https://github.com/theseer/tokenizer/tree/1.2.1"
            },
            "funding": [
                {
                    "url": "https://github.com/theseer",
                    "type": "github"
                }
            ],
            "time": "2021-07-28T10:34:58+00:00"
        }
    ],
    "aliases": [],
    "minimum-stability": "dev",
    "stability-flags": [],
    "prefer-stable": true,
    "prefer-lowest": false,
    "platform": {
        "php": "^7.3|^8.0"
    },
    "platform-dev": [],
    "plugin-api-version": "2.1.0"
}
