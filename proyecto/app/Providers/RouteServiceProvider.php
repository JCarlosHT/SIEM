<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Blade;
use Auth;
use App\Models\Admin;
class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    // protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        });
        Blade::if('env', function ($ruta) {
            if(!empty(Auth::user()->cat_accesos)){
               if(!empty(Auth::user()->cat_accesos->where('tipo_usuarios_id','like','%'.Auth::user()->tipo_usuario.'%')->where('name',$ruta)->get()->toarray())){
                   return true;
               }else
               {
                   return false;  
               }         
           }
           else
           {
              return false;  
           }
        
        return false ;
        });
        Blade::if('seccion', function ($ruta) {
            if(!empty(Auth::user()->cat_secion)){
               if(!empty(Auth::user()->cat_secion->where('id_usuario',Auth::user()->id)->where('id_seccion','like','%'.$ruta.'%')->get()->toarray())){
                   return true;
               }else{
                   return false;  
               }         
           }
           else
           {
              return false;  
           }
        
        return false ;
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
