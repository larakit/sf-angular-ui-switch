<?php
/**
 * Created by Larakit.
 * Link: http://github.com/larakit
 * User: Alexey Berdnikov
 * Date: 25.04.17
 * Time: 10:02
 */
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-ui-switch')
    ->usePackage('larakit/sf-angular')
    ->setSourceDir('public')
    ->jsPackage('angular-ui-switch.js')
    ->cssPackage('angular-ui-switch.css')
;
\Larakit\LkNgModule::register('uiSwitch');