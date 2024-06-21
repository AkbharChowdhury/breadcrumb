<?php
class Helper {
    public static function titleCase($title): string
    {
        return str_contains('_', $title) ? ucwords(str_replace(search: "_", replace: " ", subject: $title)) : ucwords($title);

    }
}