'providers' => [
    // ...既存のプロバイダ

    /*
     * Application Service Providers...
     */
    App\Providers\AppServiceProvider::class,
    // App\Providers\AuthServiceProvider::class,
    // App\Providers\BroadcastServiceProvider::class,
    App\Providers\EventServiceProvider::class,
    App\Providers\RouteServiceProvider::class,
    App\Providers\FortifyServiceProvider::class, // ← この行を追加
],
