<?php

namespace App\Providers;

use App\Repository\Subscription\SubscriptionRepository;
use App\Repository\Subscription\SubscriptionInterface;
use App\Repository\CompanyLogo\CompanyLogoRepository;
use App\Repository\CompanyLogo\CompanyLogoInterface;
use App\Repository\Testmonial\TestmonialRepository;
use App\Repository\Testmonial\TestmonialInterface;
use Illuminate\Support\ServiceProvider;
use App\Repository\Page\PageRepository;
use App\Repository\Page\PageInterface;
use App\Repository\State\StateRepository;
use App\Repository\State\StateInterface;
use App\Repository\Seo\SeoRepository;
use App\Repository\Seo\SeoInterface;
use Illuminate\Pagination\Paginator;
use App\Repository\City\CityRepository;
use App\Repository\City\CityInterface;
use App\Repository\Faq\FaqRepository;
use App\Repository\Faq\FaqInterface;
use Config;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PageInterface::class,PageRepository::class);
        $this->app->bind(SeoInterface::class,SeoRepository::class);
        $this->app->bind(CompanyLogoInterface::class,CompanyLogoRepository::class);
        $this->app->bind(TestmonialInterface::class,TestmonialRepository::class);
        $this->app->bind(SubscriptionInterface::class,SubscriptionRepository::class);
        $this->app->bind(StateInterface::class,StateRepository::class);
        $this->app->bind(CityInterface::class,CityRepository::class);
        $this->app->bind(FaqInterface::class,FaqRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*$data = [
            'driver'        => getDataFromSetting('mail_driver'),
            'host'          => getDataFromSetting('smtp_host'),
            'port'          => getDataFromSetting('smtp_port'),
            'encryption'    => getDataFromSetting('email_encryption'),
            'username'      => getDataFromSetting('smtp_user'),
            'password'      => getDataFromSetting('smtp_pass'),
            'from'          => [
                                    'address' => getDataFromSetting('mail_from'),
                                    'name' => getDataFromSetting('mail_from_name'),
                                ],
        ];

        Config::set('mail', $data);*/

        Paginator::useBootstrap();
    }
}
