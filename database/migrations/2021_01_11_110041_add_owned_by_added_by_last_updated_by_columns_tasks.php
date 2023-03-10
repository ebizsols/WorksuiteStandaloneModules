<?php

use App\Models\Permission;
use App\Models\PermissionType;
use App\Models\RoleUser;
use App\Models\SubTask;
use App\Models\Task;
use App\Models\TaskCategory;
use App\Models\TaskComment;
use App\Models\TaskFile;
use App\Models\TaskNote;
use App\Models\User;
use App\Models\UserPermission;
use Illuminate\Console\Command;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use SebastianBergmann\Environment\Console;

class AddOwnedByAddedByLastUpdatedByColumnsTasks extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $admin = User::allAdmins()->first();
        $admins = RoleUser::where('role_id', '1')->get();
        $allTypePermisison = PermissionType::where('name', 'all')->first();

        Schema::table('tasks', function (Blueprint $table) {
            $table->integer('added_by')->unsigned()->nullable();
            $table->foreign('added_by')->references('id')->on('users')->onDelete('SET NULL')->onUpdate('cascade');

            $table->integer('last_updated_by')->unsigned()->nullable();
            $table->foreign('last_updated_by')->references('id')->on('users')->onDelete('SET NULL')->onUpdate('cascade');
        });

        Schema::table('task_category', function (Blueprint $table) {
            $table->integer('added_by')->unsigned()->nullable();
            $table->foreign('added_by')->references('id')->on('users')->onDelete('SET NULL')->onUpdate('cascade');

            $table->integer('last_updated_by')->unsigned()->nullable();
            $table->foreign('last_updated_by')->references('id')->on('users')->onDelete('SET NULL')->onUpdate('cascade');
        });

        Schema::table('task_files', function (Blueprint $table) {
            $table->integer('added_by')->unsigned()->nullable();
            $table->foreign('added_by')->references('id')->on('users')->onDelete('SET NULL')->onUpdate('cascade');

            $table->integer('last_updated_by')->unsigned()->nullable();
            $table->foreign('last_updated_by')->references('id')->on('users')->onDelete('SET NULL')->onUpdate('cascade');
        });

        Schema::table('sub_tasks', function (Blueprint $table) {
            $table->integer('added_by')->unsigned()->nullable();
            $table->foreign('added_by')->references('id')->on('users')->onDelete('SET NULL')->onUpdate('cascade');

            $table->integer('last_updated_by')->unsigned()->nullable();
            $table->foreign('last_updated_by')->references('id')->on('users')->onDelete('SET NULL')->onUpdate('cascade');
        });

        Schema::table('task_comments', function (Blueprint $table) {
            $table->integer('added_by')->unsigned()->nullable();
            $table->foreign('added_by')->references('id')->on('users')->onDelete('SET NULL')->onUpdate('cascade');

            $table->integer('last_updated_by')->unsigned()->nullable();
            $table->foreign('last_updated_by')->references('id')->on('users')->onDelete('SET NULL')->onUpdate('cascade');
        });

        Schema::table('task_notes', function (Blueprint $table) {
            $table->integer('added_by')->unsigned()->nullable();
            $table->foreign('added_by')->references('id')->on('users')->onDelete('SET NULL')->onUpdate('cascade');

            $table->integer('last_updated_by')->unsigned()->nullable();
            $table->foreign('last_updated_by')->references('id')->on('users')->onDelete('SET NULL')->onUpdate('cascade');
        });

        if (!is_null($admin)) {
            Task::whereNull('added_by')->update(['added_by' => $admin->id]);
            Task::whereNull('last_updated_by')->update(['last_updated_by' => $admin->id]);

            TaskCategory::whereNull('added_by')->update(['added_by' => $admin->id]);
            TaskCategory::whereNull('last_updated_by')->update(['last_updated_by' => $admin->id]);

            TaskFile::whereNull('added_by')->update(['added_by' => $admin->id]);
            TaskFile::whereNull('last_updated_by')->update(['last_updated_by' => $admin->id]);

            SubTask::whereNull('added_by')->update(['added_by' => $admin->id]);
            SubTask::whereNull('last_updated_by')->update(['last_updated_by' => $admin->id]);

            TaskComment::whereNull('added_by')->update(['added_by' => $admin->id]);
            TaskComment::whereNull('last_updated_by')->update(['last_updated_by' => $admin->id]);

            TaskNote::whereNull('added_by')->update(['added_by' => $admin->id]);
            TaskNote::whereNull('last_updated_by')->update(['last_updated_by' => $admin->id]);
        }

        $projectCustomPermisisons = [
            'view_task_category',
            'add_task_category',
            'edit_task_category',
            'delete_task_category',

            'view_task_files',
            'add_task_files',
            'edit_task_files',
            'delete_task_files',

            'view_sub_tasks',
            'add_sub_tasks',
            'edit_sub_tasks',
            'delete_sub_tasks',

            'view_task_comments',
            'add_task_comments',
            'edit_task_comments',
            'delete_task_comments',

            'view_task_notes',
            'add_task_notes',
            'edit_task_notes',
            'delete_task_notes',

            'task_labels',
            'change_status',
            'send_reminder',
            'add_status'
        ];

        foreach ($projectCustomPermisisons as $permission) {
            $perm = Permission::create([
                'name' => $permission,
                'display_name' => mb_ucwords(str_replace('_', ' ', $permission)),
                'is_custom' => 1,
                'module_id' => 5
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
        Permission::where('module_id', 5)->where('is_custom', 1)->delete();

        Schema::table('tasks', function (Blueprint $table) {
            $table->dropForeign(['added_by']);
            $table->dropForeign(['last_updated_by']);
            $table->dropColumn(['added_by']);
            $table->dropColumn(['last_updated_by']);
        });

        Schema::table('task_category', function (Blueprint $table) {
            $table->dropForeign(['added_by']);
            $table->dropForeign(['last_updated_by']);
            $table->dropColumn(['added_by']);
            $table->dropColumn(['last_updated_by']);
        });

        Schema::table('task_files', function (Blueprint $table) {
            $table->dropForeign(['added_by']);
            $table->dropForeign(['last_updated_by']);
            $table->dropColumn(['added_by']);
            $table->dropColumn(['last_updated_by']);
        });

        Schema::table('sub_tasks', function (Blueprint $table) {
            $table->dropForeign(['added_by']);
            $table->dropForeign(['last_updated_by']);
            $table->dropColumn(['added_by']);
            $table->dropColumn(['last_updated_by']);
        });

        Schema::table('task_comments', function (Blueprint $table) {
            $table->dropForeign(['added_by']);
            $table->dropForeign(['last_updated_by']);
            $table->dropColumn(['added_by']);
            $table->dropColumn(['last_updated_by']);
        });

        Schema::table('task_notes', function (Blueprint $table) {
            $table->dropForeign(['added_by']);
            $table->dropForeign(['last_updated_by']);
            $table->dropColumn(['added_by']);
            $table->dropColumn(['last_updated_by']);
        });
    }

}
