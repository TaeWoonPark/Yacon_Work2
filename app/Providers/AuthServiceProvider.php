<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

// 追加：WorkRecord と WorkRecordPolicy を use
use App\Models\WorkRecord;
use App\Policies\WorkRecordPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * ポリシーのマッピング
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // WorkRecord モデルに対して WorkRecordPolicy を割り当て
        WorkRecord::class => WorkRecordPolicy::class,
    ];

    /**
     * アプリケーションの認可ポリシーを登録
     */
    public function boot(): void
    {
        $this->registerPolicies();

        //
    }
}
