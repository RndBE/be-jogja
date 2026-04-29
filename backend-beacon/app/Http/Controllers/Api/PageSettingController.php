<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PageSetting;

class PageSettingController extends Controller
{
    /**
     * GET /api/v1/page-settings/{group}
     */
    public function show(string $group)
    {
        $settings = PageSetting::getGroup($group);

        if (empty($settings)) {
            return response()->json(['message' => 'Group not found.'], 404);
        }

        return response()->json($settings);
    }
}
