<?php

use App\Models\Permission;
use App\Models\PermissionType;
use App\Models\RoleUser;
use App\Models\UserPermission;
use Illuminate\Database\Migrations\Migration;

class AddEmergencyContactModuleAndPermission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        $admins = RoleUser::where('role_id', '1')->get();
        $allTypePermisison = PermissionType::where('name', 'all')->first();

        $employeeCustomPermisisons = [
            'manage_emergency_contact'
        ];

        foreach ($employeeCustomPermisisons as $permission) {
            $perm = Permission::create([
                'name' => $permission,
                'display_name' => mb_ucwords(str_replace('_', ' ', $permission)),
                'is_custom' => 1,
                'module_id' => 2,
                'allowed_permissions' => '{"all":4, "none":5}'
            ]);

            foreach ($admins as $item) {
                UserPermission::create(
                    [
                        'user_id' => $item->user_id,
                        'permission_id' => $perm->id,
                        'permission_type_id' => $allTypePermisison->id
                    ]
                );
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Permission::where('name', 'manage_emergency_contact')->delete();
    }

}
