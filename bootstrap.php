<?php

Config::push('twill.block_editor.directories.source.blocks', [
    'path' => __DIR__ . '/resources/views/admin/blocks',
    'source' => __CLASS__,
]);

Config::push('twill.block_editor.directories.source.repeaters',
    [
    'path' => __DIR__ . '/resources/views/admin/repeaters',
    'source' => __CLASS__,
]);
