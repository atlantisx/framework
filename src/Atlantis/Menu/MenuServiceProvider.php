<?php namespace Atlantis\Menu;
/**
 * Part of the Atlantis package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Atlantis
 * @version    1.0.0
 * @author     Nematix LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 1997 - 2013, Nematix LLC
 * @link       http://nematix.com
 */

use Atlantis\Menu\Environment;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;


class MenuServiceProvider extends BaseServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;


    /**
     * Register service provider
     *
     * @return void
     */
    public function register(){
        $this->app['atlantis.menu'] = $this->app->share(function($app){
            return new Environment($app);
        });

        /*
        $this->package('vespakoen/menu', null, __DIR__ . '/../');
        $container = Menu::getContainer();
        $container['url'] = $this->app['url'];
        $container['config'] = $this->app['config'];
        Menu::setContainer($container);
         */
    }


    /**
     * Boot service provider
     *
     * @return void
     */
    public function boot(){
        $this->package('atlantis/menu');
    }


    public function provides(){
        return ['atlantis.menu'];
    }

}