<?php

use App\Modifiers\RemoveIdsModifier;
use App\Modifiers\ConvertH1ToH2Modifier;
use App\Modifiers\ConvertH2ToH3Modifier;
use App\Modifiers\ConvertH3ToH4Modifier;
use App\Modifiers\RemoveClassesModifier;
use App\Modifiers\RemoveTopTweetModifier;
use App\Modifiers\RemoveTopHeadingModifier;
use App\Modifiers\MoveHeadingImagesModifier;
use App\Modifiers\RemoveAuthorBlockModifier;
use App\Modifiers\RemoveBloatMarkupModifier;
use App\Modifiers\RemoveRetweetLinkModifier;
use App\Modifiers\ReplaceSourceSetsModifier;
use App\Modifiers\RemoveAuthorHeaderModifier;
use App\Modifiers\MoveParagraphImagesModifier;
use App\Modifiers\RemoveHeadingImagesModifier;
use App\Modifiers\RemoveHorizontalRuleModifier;
use App\Modifiers\ConvertPreSpanToPreCodeModifier;
use App\Modifiers\RemoveHtmlTagWhitespaceModifier;
use App\Modifiers\RemoveListItemParagraphsModifier;
use App\Modifiers\RemoveSmallOrMissingImagesModifier;
use App\Modifiers\ConvertBreakingLineToNewLineModifier;
use App\Modifiers\MarkdownRemoveHeadingImagesModifier;
use App\Modifiers\MarkdownRemoveHorizontalRuleModifier;

return [

    'host' => 'https://blog.ark.io/',

    'modifiers' => [

        'content_original_html' => [
            // Clean up obfuscation junk.
            RemoveClassesModifier::class,
            RemoveIdsModifier::class,
            RemoveHtmlTagWhitespaceModifier::class,
            // Fix/Clean HTML Markup
            ConvertPreSpanToPreCodeModifier::class,
            // RemoveTopHeadingModifier::class,
            RemoveAuthorHeaderModifier::class,
            // // MoveHeadingImagesModifier::class,
            // // MoveParagraphImagesModifier::class,
            ReplaceSourceSetsModifier::class,
            RemoveSmallOrMissingImagesModifier::class,
            RemoveHeadingImagesModifier::class,
            RemoveHorizontalRuleModifier::class,
            RemoveTopTweetModifier::class,
            RemoveRetweetLinkModifier::class,
            // RemoveListItemParagraphsModifier::class,
            ConvertH3ToH4Modifier::class,
            ConvertH2ToH3Modifier::class,
            ConvertH1ToH2Modifier::class,
            ConvertBreakingLineToNewLineModifier::class,
            // Remove dead elements without any contents after we cleaned up.
            RemoveBloatMarkupModifier::class,
        ],

        'content_markdown' => [
            MarkdownRemoveHeadingImagesModifier::class,
            MarkdownRemoveHorizontalRuleModifier::class,
        ],

        'content_markdown_html' => [
            RemoveTopHeadingModifier::class,
            RemoveAuthorBlockModifier::class,
            MoveHeadingImagesModifier::class,
            MoveParagraphImagesModifier::class,
            RemoveSmallOrMissingImagesModifier::class,
            RemoveHeadingImagesModifier::class,
            RemoveHorizontalRuleModifier::class,
            RemoveTopTweetModifier::class,
            RemoveRetweetLinkModifier::class,
            RemoveListItemParagraphsModifier::class,
            ConvertH3ToH4Modifier::class,
            ConvertH2ToH3Modifier::class,
            ConvertH1ToH2Modifier::class,
        ],

    ],

    'postIds' => [

        '10986f9db3dd',
        '10b864c8f6c4',
        '1131d8438902',
        '113806ae9ffe',
        '11c4964a0cb3',
        '1203e2717af6',
        '133ed2bf218',
        '1386d32d58f3',
        '157c9cc91088',
        '15f06328e8b7',
        '15f45fc4500c',
        '16820e5e925e',
        '17d80b539188',
        '17dd785fc2c7',
        '17ea9dcf842a',
        '1807a00b062a',
        '1915ad56dd33',
        '192e2ae7ad47',
        '1a34c415ca7',
        '1a80f2f0651e',
        '1b6c4bf16f79',
        '1b90f8026db8',
        '1c6fc1c9c41',
        '1dc06cbed72d',
        '1dd7fb1e17a0',
        '1e39f95d9cdb',
        '1e8d239e69e0',
        '1ed9699c778c',
        '1f240044a2f4',
        '1fad7c2fdc5b',
        '203d2123f163',
        '20c2a42857a5',
        '20e3ca8ed1a1',
        '20f4625ac7a3',
        '21b93cc372bb',
        '21c7209526c3',
        '21e33618d5f5',
        '22366e7ffb7e',
        '2303f56afed3',
        '23420de89e16',
        '23804d29ed82',
        '25b8ba6d9ae9',
        '2656f5c4ce44',
        '2661a5dc5fd3',
        '2731425aa1',
        '279a3dd47a36',
        '27bb4720982a',
        '2836756675bd',
        '29022b4ace5',
        '2a0cf5e87f29',
        '2b0c27137edf',
        '2b1c0bd20d42',
        '2b38bf4bf278',
        '2d4c286417f6',
        '2e652fbb9dcd',
        '2f2cec3f1936',
        '30068eb8619e',
        '30c645f5254a',
        '316de03bfd9a',
        '31f1aaf1e867',
        '32256465320e',
        '329daf4196de',
        '3320d3f78ec5',
        '36170f45c174',
        '36b7615b3cc',
        '36d5e78a1dfe',
        '37786476eb56',
        '37a995d1dab9',
        '37c966b8e8bb',
        '385dc493858e',
        '3b0b8215ed67',
        '3c8f077167a2',
        '3da3aa494b32',
        '3db8e151687f',
        '3ecbbb40a7f5',
        '3eedd68062ff',
        '3f3137c25100',
        '3f32410f2618',
        '407155d3aa15',
        '408da6302a49',
        '4097be06bf53',
        '411d0de0051b',
        '41a4e10aae46',
        '425cbbbdd04a',
        '440b070d611c',
        '44790ab230ed',
        '4518e375f7dd',
        '4545921e6b68',
        '45ea5169001',
        '461423772952',
        '472c233b033d',
        '48433639b10c',
        '490211f1e80',
        '4979caac887a',
        '49e080837760',
        '49f12670f7f5',
        '4b2e5ff86d5f',
        '4b66a87b5d9e',
        '4bae200621c1',
        '4bfa5cfb099c',
        '4bfe9a6fd9a8',
        '4e028944792',
        '4f38e396fc39',
        '4f471a5548db',
        '4f58c1cd8cf9',
        '4f66edc1ecf9',
        '4f770a4e62c8',
        '4f82910719da',
        '4ff404b2be95',
        '518b11fb2806',
        '53198b9072fd',
        '532f4b92e79f',
        '53b6730cb2a5',
        '541254028616',
        '548d94e51dc3',
        '54d8cb0746dd',
        '556811108e16',
        '558fc0d597fa',
        '55afcab284d7',
        '55b96555d10e',
        '57633346c249',
        '5876dcf0489b',
        '58869f851f09',
        '58a06aa9cbd5',
        '5963405b324d',
        '5a8770c1dfb8',
        '5a9e747016cc',
        '5b0a5ca9da4f',
        '5b967f6513d0',
        '5c07a57c3ac9',
        '5c8ba13c9c42',
        '5cb8d9403772',
        '5d00845791d8',
        '5e4e1257ca5e',
        '5ec8fa638a2b',
        '5fd156879a2d',
        '600708840632',
        '605976b8661f',
        '62b12aaa6972',
        '63711c63daa3',
        '63d03c383af8',
        '63f26cfb5445',
        '6411d293e09',
        '64341195a052',
        '6526f0d78c57',
        '655d10c2d2dc',
        '65b97313b73d',
        '6611a23fcba3',
        '66c1023ff7d3',
        '67df8f7bcbb5',
        '6818d3e4e96f',
        '68596a171ca1',
        '689421164da2',
        '68a85216ed2d',
        '6b0114b5a3ce',
        '6baea6a4d6db',
        '6bee0995c64c',
        '6bf1f9cf889d',
        '6cc937edd08a',
        '6d3c4469dfd',
        '6ddcc2a27608',
        '6e1cb0bde188',
        '6eaa5bd4cc91',
        '6f6adb024524',
        '6fa31ce76e5c',
        '6fe8353ec88b',
        '714b3d127313',
        '71a19f37c78',
        '71b8654c0a42',
        '71d0544bbdb0',
        '7239bb90cf3',
        '72b6d95f3a15',
        '73164e58d241',
        '7393ff1f7bfa',
        '73b22c9c9a64',
        '74db995928ec',
        '74ee6adc4d86',
        '74fc5398b96f',
        '750388369f8e',
        '76aa44304012',
        '76d776fa55f',
        '774f5fd63333',
        '77c72864ed96',
        '77fdd50831ce',
        '7a2aaa768ac7',
        '7a8bc3338d5a',
        '7bb2082e5e44',
        '7bf7bfff4cef',
        '7d1836fc36d9',
        '7e73ab69211c',
        '7eab1b91db9f',
        '7fac69993a73',
        '817e90b5ff66',
        '819c5439da68',
        '827c488c7fb8',
        '83fbb2ffdd94',
        '84e67ec9a1fa',
        '85265cdccc05',
        '85309dd01537',
        '854d90a537f4',
        '85f54f023ffb',
        '8652513db966',
        '865c7814de6f',
        '8678e20e47cc',
        '88428e47ad2e',
        '8895beeacc80',
        '88e91a005cb2',
        '89c905ff6db8',
        '8a8347d04585',
        '8ad0fe4a63fe',
        '8ae9e3f441c8',
        '8b3b8d5a60eb',
        '8b5715b63ef',
        '8cd6f3d1c2d',
        '8d6c4f508ce0',
        '8e2e51378f5a',
        '8e37c0f589a0',
        '8ea0fbb617bf',
        '8ee53dd39952',
        '8f11e30f5dd8',
        '8fcc456082c7',
        '909b4984bae',
        '90e052dbcff7',
        '91fe22951789',
        '930a50720e56',
        '931c17d8e4e0',
        '939d3b6b50df',
        '9429777a6513',
        '94d3ea68faec',
        '9544d7eadd07',
        '9557f5a9e711',
        '95a5b621f6f7',
        '95f692cd8d19',
        '963abb3b4c',
        '963fcb85d553',
        '967353e56dbc',
        '969b874987f9',
        '96f09ec4bdb1',
        '9866deec324b',
        '990a8141e0a9',
        '9999d3100ba2',
        '99daf9045d3',
        '99dde3a451d6',
        '9a47597547c2',
        '9a94ba9f110d',
        '9af56b8ddecd',
        '9b88ed0c8ce8',
        '9cc6a0580ebe',
        '9d7daa27b225',
        '9e5a8b81a389',
        '9e69a2b5d70a',
        '9edb06c252b2',
        '9f5f418b8187',
        'a01c250df69',
        'a04fbf4c97a0',
        'a058fa79a8b7',
        'a0def4df45d2',
        'a1087cfc8094',
        'a19f16417ee9',
        'a22dcf31d6a6',
        'a2cf1d32be20',
        'a3765e6bafd0',
        'a3824908b7d',
        'a3d0daa040be',
        'a4070cb5d057',
        'a46a7edec5dd',
        'a4edc43ecd7',
        'a5d7b3240edc',
        'a626390f5733',
        'a64c0dd7e873',
        'a725530225b7',
        'a76c2503146f',
        'a7b1e97b2f31',
        'a7e55c213582',
        'a86633bf4144',
        'a8ac46fe9619',
        'a8c536051182',
        'a8f958c7402e',
        'a95122d06879',
        'a956f0f6c8dc',
        'aac1892edf9c',
        'ab3e97a081db',
        'abc3143a3675',
        'abe2e7bf2b98',
        'ac09ded3f66f',
        'ac5778cac110',
        'ac6c2195de79',
        'ac85cbff3197',
        'acbcc15fb614',
        'ad1e625cfc03',
        'ad58bb5fd547',
        'ad887fd2e888',
        'ae182634addc',
        'ae96bceda3fc',
        'aeb712d88e24',
        'aed9a5bfafca',
        'aedd17ad41f9',
        'aee05cfb86cf',
        'af9ccd426e9b',
        'af9e2de5a701',
        'b0b26ec65390',
        'b1c5d5f19a23',
        'b26fd444f0d7',
        'b32dc075044c',
        'b39942eaa054',
        'b45fa4329972',
        'b48c2eba77c3',
        'b4b96ae54c69',
        'b4bdc7f912c3',
        'b51bcbc256f2',
        'b59a0f5ba577',
        'b5a7d70c2461',
        'b5ac66db71c6',
        'b60aad932034',
        'b70df45a2e9b',
        'b7479ff66482',
        'b812851d5760',
        'b87ca34afc12',
        'b88487a89031',
        'b8e651f066d3',
        'b90f7abc35bf',
        'b928e911df8f',
        'b9692288fe6c',
        'ba039f7accc3',
        'ba258c0a8722',
        'bb0a8c58675e',
        'bb0efe4a5a10',
        'bcb90a0537cc',
        'bd5fab4f95f8',
        'bdcc1a0ec99d',
        'bea6d137e02e',
        'bf29b1d251c2',
        'bf684ed7cd6e',
        'bfd8798fadf3',
        'c024d0f026f',
        'c044c1606b92',
        'c07443c1e11a',
        'c0ed903a1af6',
        'c10825ebb0e4',
        'c217f68d6349',
        'c2b3bf5874e4',
        'c2fe881c1753',
        'c60522f1b700',
        'c69b2d79e6fa',
        'c73a61bbc4e8',
        'c7de41f8082c',
        'c8a6f6d7c1d9',
        'c965c07373e3',
        'c9a1614b73f5',
        'c9b680f81a66',
        'c9cdf601709f',
        'cb5c70b9958a',
        'cb926e80303f',
        'ccbbf39aad74',
        'ccf020b13f6b',
        'cda4025051d5',
        'cdcc151aca58',
        'cedb2a407b92',
        'cedf73dd137f',
        'cf7b081cb28',
        'cfec81e6ffda',
        'd07b6620bd46',
        'd105e93e2591',
        'd275166713a9',
        'd2b7f5812869',
        'd3bfc43227aa',
        'd5311619e8b2',
        'd6847b602fb4',
        'd6924486b8c5',
        'd6f6b5806823',
        'd7efa092d1c8',
        'd817a4fbbbf3',
        'd83d2f3774bc',
        'd9c2b2dab4a8',
        'db066a33ddd3',
        'db9afc9aad05',
        'dbf050601d62',
        'dc6785cde1dd',
        'dd785e2224a4',
        'dd84a2507329',
        'dda650cef013',
        'deb1e7b465e1',
        'dff5f5435cba',
        'e04e2c8e14ad',
        'e20c3c730b08',
        'e219f81bb378',
        'e2618fdf2434',
        'e27a64230802',
        'e40d7f90ace9',
        'e40dfee1fe10',
        'e45b495aad4b',
        'e49e1fbd0b27',
        'e53595589cb4',
        'e541fa0452f2',
        'e560260a2410',
        'e5e23b86b8c1',
        'e683271a683e',
        'e69149b1e12c',
        'e6c386402789',
        'e6e433250017',
        'e8f3877bca19',
        'ea37b49525df',
        'eaa927221dc',
        'eb19041d627b',
        'eb704b7e75fd',
        'ebdb0301691d',
        'ec2a9a844061',
        'ecf9e8374aef',
        'ed64f4257020',
        'ed7228b7ae57',
        'ed948b4923f4',
        'eda74b5f5cf',
        'eefad5fbce4',
        'ef00519b1a4',
        'efe037a0978f',
        'f00a8790b019',
        'f12bf8ad045b',
        'f192a4bb5454',
        'f24126e7622c',
        'f24adf70dfff',
        'f284a60796bb',
        'f2c436f6caa9',
        'f32e3c21de80',
        'f35a7161ecd2',
        'f45268e18df4',
        'f4dc269faabf',
        'f4ea4c31904e',
        'f56d3ce9e5b3',
        'f57c4f6a792d',
        'f67ff9a4a3b1',
        'f69c02082019',
        'f6af69bc4830',
        'f737673e2099',
        'f74c56060557',
        'f81ca5a62de8',
        'f8a0a6900b0f',
        'f902ddb63581',
        'f90d632a5a0e',
        'f97a2a336018',
        'f9d2831e71c0',
        'fa1fd6e1e557',
        'fa48b16bcc64',
        'fa7562ed5717',
        'fa7b317c434',
        'faf8dff3b721',
        'fc00139906eb',
        'fc12abeb4ee1',
        'fc6ba7cf925',
        'fc950d9fa98a',
        'fcfcd5d97ff9',
        'fd6c9dac19c6',
        'fe9c4612a080',
        'fecd2e041950',

    ],

];
