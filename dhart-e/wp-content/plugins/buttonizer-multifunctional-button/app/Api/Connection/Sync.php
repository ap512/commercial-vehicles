<?php
/*
 * SOFTWARE LICENSE INFORMATION
 *
 * Copyright (c) 2017 Buttonizer, all rights reserved.
 *
 * This file is part of Buttonizer
 *
 * For detailed information regarding to the licensing of
 * this software, please review the license.txt or visit:
 * https://buttonizer.pro/license/
 */

namespace Buttonizer\Api\Connection;

use Buttonizer\Utils\ApiRequest;
use Buttonizer\Utils\ButtonizerAccount;
use Buttonizer\Utils\PermissionCheck;
use Buttonizer\Utils\Settings;

/**
 * Sync API
 *
 * @endpoint /wp-json/buttonizer/sync
 * @methods POST
 */
class Sync
{
    /**
     * Register route
     */
    public function registerRoute()
    {
        register_rest_route('buttonizer', '/sync', [
            [
                'methods'  => ['POST'],
                'args' => [
                    'nonce' => [
                        'validate_callback' => function ($value) {
                            return wp_verify_nonce($value, 'wp_rest');
                        },
                        'required' => true
                    ],
                ],
                'callback' => [$this, 'sync'],
                'permission_callback' => function () {
                    return PermissionCheck::hasPermission();
                }
            ]
        ]);
    }

    /**
     * Sync data
     */
    public function sync()
    {
        // Sync data
        $result = ApiRequest::post("/sync");

        // Handle errors
        if (is_a($result, 'WP_Error')) {
            return $result;
        }

        // Set last synced at
        Settings::setSetting("last_synced_at", new \DateTime('now'));
        Settings::setSetting("include_page_data", isset($result->site->licensed) && $result->site->licensed);

        // Save synced info
        Settings::saveUpdatedSettings();

        // Sync account settings
        ButtonizerAccount::syncToDatabase($result);

        return [
            'status' => 'success',
            'data' => ButtonizerAccount::getData()
        ];
    }
}
