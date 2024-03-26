<?php

namespace Modules\GoogleAnalytics\Database\Seeders\versions\v1_4_0;

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $parentId = addMenuItem('admin', 'Google Analytics', [
            'icon' => 'fas fa-chart-line',
            'sort' => 27,
        ]);

        addMenuItem('admin', 'Dashboard', [
            'parent' => $parentId,
            'link' => 'analytics-dashboard',
            'params' => '{"permission":"App\\\\Http\\\\Controllers\\\\GoogleAnalyticsController@dashboard", "route_name":["analytics.dashboard"]}',
            'sort' => 28
        ]);

        addMenuItem('admin', 'Visited Pages', [
            'parent' => $parentId,
            'link' => 'top-visited-pages',
            'params' => '{"permission":"App\\\\Http\\\\Controllers\\\\GoogleAnalyticsController@topVisitedPage", "route_name":["top.visited.page"]}',
            'sort' => 29
        ]);

        addMenuItem('admin', 'Visited Countries', [
            'parent' => $parentId,
            'link' => 'most-visited-country',
            'params' => '{"permission":"App\\\\Http\\\\Controllers\\\\GoogleAnalyticsController@mostVisitedCountry", "route_name":["most.visited.country"]}',
            'sort' => 30
        ]);

        addMenuItem('1', 'Settings', [
            'parent' => 'Google Analytics',
            'link' => 'analytics-settings',
            'params' => '{"permission":"App\\\\Http\\\\Controllers\\\\GoogleAnalyticsController@settings", "route_name":["analytics.settings"]}',
            'sort' => 31,
        ]);
    }
}
