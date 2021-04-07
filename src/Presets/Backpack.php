<?php


namespace Stats4SD\LaravelUi\Presets;


use Illuminate\Filesystem\Filesystem;

class Backpack extends Preset
{
    /**
     * Install the preset.
     *
     * @return void
     */
    public static function install()
    {
        static::updatePackages();
        static::updateSass();
        static::updateBootstrapping();
        static::removeNodeModules();
    }

    /**
     * Update the given package array.
     *
     * @param  array  $packages
     * @return array
     */
    protected static function updatePackageArray(array $packages)
    {
        return [
            "@coreui/coreui" => "^2.1.16",
            "@digitallyhappy/backstrap" => "^0.3.2",
            "animate.css" => "^3.7.2",
            "noty" => "^3.2.0-beta-deprecated",
        ] + $packages;
    }

    /**
     * Update the Sass files for the application.
     *
     * @return void
     */
    protected static function updateSass()
    {
        (new Filesystem)->ensureDirectoryExists(resource_path('sass'));

        copy(__DIR__.'/backpack-stubs/_variables.scss', resource_path('sass/_variables.scss'));
        copy(__DIR__.'/backpack-stubs/app.scss', resource_path('sass/app.scss'));
    }

    protected static function updateBootstrapping()
    {
        copy(__DIR__.'/backpack-stubs/app.js', resource_path('js/app.js'));

        (new Filesystem)->delete(
            resource_path('js/bootstrap.js')
        );
    }
}
