<?php

use Illuminate\Support\HtmlString;

if (!function_exists('formatCode')) {
    function formatCode(string $string): HtmlString
    {
        return new HtmlString("<pre><code>{$string}</code></pre>");
    }
}