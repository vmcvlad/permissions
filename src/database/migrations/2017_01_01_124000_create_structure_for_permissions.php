<?php

use LaravelEnso\Core\app\Classes\StructureManager\StructureMigration;

class CreateStructureForPermissions extends StructureMigration
{
    protected $permissionGroup = [
        'name' => 'system.permissions', 'description' => 'Permissions Group',
    ];

    protected $permissions = [
        ['name' => 'system.permissions.index', 'description' => 'Permissions Groups Index', 'type' => 0, 'default' => false],
        ['name' => 'system.permissions.create', 'description' => 'Create Permissions Group', 'type' => 1, 'default' => false],
        ['name' => 'system.permissions.edit', 'description' => 'Edit Existing Permissions Group', 'type' => 1, 'default' => false],
        ['name' => 'system.permissions.store', 'description' => 'Save Permissions Group', 'type' => 1, 'default' => false],
        ['name' => 'system.permissions.update', 'description' => 'Update Permissions Group', 'type' => 1, 'default' => false],
        ['name' => 'system.permissions.destroy', 'description' => 'Delete Permissions Group', 'type' => 1, 'default' => false],
        ['name' => 'system.permissions.getTableData', 'description' => 'Get table data for permissionsgroups', 'type' => 0, 'default' => false],
        ['name' => 'system.permissions.initTable', 'description' => 'Init table data for permissiongroups', 'type' => 0, 'default' => false],
        ['name' => 'system.resourcePermissions.create', 'description' => 'Create Resource Permission', 'type' => 1, 'default' => false],
        ['name' => 'system.resourcePermissions.store', 'description' => 'Store Resource Permission', 'type' => 1, 'default' => false],
    ];

    protected $menu = [
        'name' => 'Permissions', 'icon' => 'fa fa-fw fa-exclamation-triangle', 'link' => 'system/permissions', 'has_children' => 0,
    ];

    protected $parentMenu = 'System';
}