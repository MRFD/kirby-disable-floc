<?php

/**
 * Kirby 3 Disable FLoC
 *
 * @version   0.0.2
 * @author    Marijn Roovers <marijn@mrfd.nl>
 * @copyright Marijn Roovers <marijn@mrfd.nl>
 * @link      https://github.com/mrfd/kirby-disable-floc
 * @license   MIT
 */

Kirby::plugin('mrfd/kirby-disable-floc', [
    'hooks' => [
        'route:before' => function () {
            $options = option('mrfd.kirby-disable-floc');

            if ($options['enable'] === true) {
                header(
                    'Permissions-Policy: interest-cohort=()',
                    $options['replace']
                );
            }
        }
    ],
    'options' => [
        'enable' => true,
        'replace' => true,
    ]
]);
