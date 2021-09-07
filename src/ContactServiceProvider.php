<?php
namespace Devpremierinfotech\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider {

   public function boot(){

      // Load Package Routes
      $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
      $this->loadViewsFrom(__DIR__. '/views', 'contact');
      $this->loadMigrationsFrom(__DIR__ . '/database/migrations/');
      $this->mergeConfigFrom(
         __DIR__.'/config/contact.php', 'contact'
      );
     $this->publishes([
         // __DIR__.'/config/contact.php' => resource_path('lang/vendor/courier'),
         __DIR__.'/config/contact.php' => config_path('contact.php'),
      ]);
   }

   public function register(){
       $this->publishes([
           // __DIR__.'/config/contact.php' => resource_path('lang/vendor/courier'),
           __DIR__.'/config/contact.php' => config_path('contact.php'),
       ], 'devpremier-contact');
   }

}

?>
