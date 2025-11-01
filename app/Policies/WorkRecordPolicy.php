<?php

namespace App\Policies;

use App\Models\User;
use App\Models\WorkRecord;
use Illuminate\Auth\Access\HandlesAuthorization;

class WorkRecordPolicy
{
    use HandlesAuthorization;

    /**
     * 作業記録作成権限
     */

    // WorkRecordPolicy.php
    public function view(User $user, WorkRecord $record)
    {
        return in_array($user->role, ['admin', 'facility']);
    }


    public function share(User $user, WorkRecord $record)
    {
        // 管理者のみ共有可能
        return $user->role === 'admin';
    }

    public function viewAny(User $user)
    {
        // admin / facility のユーザーのみ閲覧可能
        return in_array($user->role, ['admin', 'facility']);
    }
    public function create(User $user)
    {
        // admin または facility のユーザーのみ作成可能
        return in_array($user->role, ['admin', 'facility']);
    }

    /**
     * 作業記録更新権限（必要に応じて）
     */
    public function update(User $user, WorkRecord $record)
    {
        // 管理者は全て更新可能、施設ユーザーは自分の作業だけ更新可能
        return $user->role === 'admin';
    }

    /**
     * 作業記録削除権限（必要に応じて）
     */
    public function delete(User $user, WorkRecord $record)
    {
        return $user->role === 'admin';
    }
}
