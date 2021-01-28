<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Config;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        if(config('app.env') === 'production') {
            \URL::forceScheme('https');
        }
        
        $headerDefault = [
            'metaTitle' => 'Startup Công nghệ với sứ mệnh Số hoá ngành vận tải hành khách thông qua việc cung cấp Phần mềm xe khách | ANVUI.VN',
            'metaDesc' => 'Đơn vị đầu tiên cung cấp Phần mềm xe khách quản lý tổng thể cho ngành vận tải, giúp Nhà xe tăng doanh thu, bảo vệ thương hiệu nâng cao năng lực cạnh tranh.',
            'metaKeyword' => 'vận tải,phần mềm,Phần mềm xe khách,phần mềm nhà xe,phần mềm vận tải hành khách,phần mềm hàng hoá',
            'img' => asset('imgs/img-home2.png')
        ];
        Config::set('HEADER', $headerDefault);
        View::share('HEADER', $headerDefault );
    }
}
