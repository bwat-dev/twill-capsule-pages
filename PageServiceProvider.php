<?php
namespace App\Twill\Capsules\Pages;

use App\Twill\Capsules\Pages\Models\Page;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class PageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Relation::morphMap([
            'pages' => Page::class,
        ]);
        Config::push('twill.block_editor.directories.source.blocks', [
            'path' => __DIR__ . '/resources/views/admin/blocks',
            'source' => __CLASS__,
        ]);

        Config::push('twill.block_editor.directories.source.repeaters', [
            'path' => __DIR__ . '/resources/views/admin/repeaters',
            'source' => __CLASS__,
        ]);

    }
}
