<?php


namespace Lerouse\LaravelChangeControl;

class Version
{

    public static function get(): string
    {
        $contents = self::changelog();

        preg_match('/## v[0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,4} {0,1}\w*/m', $contents, $output);

        return isset($output[0]) ? trim(str_replace('## ', '', $output[0])) : '-';
    }
    
    public static function changelog(): ?string
    {
        if (file_exists(self::getChangelogLocation())) {
            return file_get_contents(self::getChangelogLocation());
        }

        return null;
    }

    public static function getChangelogLocation(): string
    {
        return sprintf('%s/%s', config('change-control.path'), config('change-control.filename'));
    }

}