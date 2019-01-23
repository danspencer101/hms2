<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Permissions
    |--------------------------------------------------------------------------
    |
    | The permission strings for HMS
    |
    */
    'permissions' => [
        'profile.view.self',
        'profile.view.all',
        'role.view.all',
        'role.edit.all',
        'role.grant.all',
        'role.grant.team',
        'profile.edit.self',
        'profile.edit.all',
        'accessCodes.view',
        'meta.view',
        'meta.edit',
        'membership.approval',
        'membership.updateDetails',
        'link.view',
        'link.create',
        'link.edit',
        'labelTemplate.view',
        'labelTemplate.create',
        'labelTemplate.edit',
        'labelTemplate.print',
        'search.users',
        'project.create.self',
        'project.view.self',
        'project.view.all',
        'project.edit.self',
        'project.edit.all',
        'project.printLabel.self',
        'project.printLabel.all',
        'box.buy.self',
        'box.issue.all',
        'box.view.self',
        'box.view.all',
        'box.edit.self',
        'box.edit.all',
        'box.printLabel.self',
        'box.printLabel.all',
        'bankTransation.upload',
        'snackspaceTransaction.view.self',
        'snackspaceTransaction.view.all',
        'rfidTags.view.self',
        'rfidTags.view.all',
        'rfidTags.edit.self',
        'rfidTags.edit.all',
        'rfidTags.destroy',
        'pins.view.all',
        'pins.reactivate',
        'bankTransactions.view.self',
        'bankTransactions.view.all',
        'bankTransactions.reconcile',
        'tools.view',                       // can view tools
        'tools.create',                     // can add a new tool to the system
        'tools.edit',                       // can edit details of all tools
        'tools.destroy',                    // can remove a tool
        'tools.maintainer.grant',           // trustees can grant and revoke maintainer roles on all tools from hms
        'tools.inductor.grant',             // trustees can grant and revoke inductor roles on all tools from hms
        'tools.user.grant',                 // trustees can grant and revoke user roles on all tools from hms
        'gatekeeper.zoneEntry.upstairs',    // these are hard coded here for now, untill we have a GateKeeperManager to generate them
        'gatekeeper.zoneEntry.cncBlueRoom',
        'gatekeeper.zoneEntry.classRoomMetalworking',
        'gatekeeper.zoneEntry.teamStrorage',
        'gatekeeper.zoneEntry.downstairsMembersStrorage',
        'gatekeeper.zoneEntry.ouside',
    ],

    /*
    |--------------------------------------------------------------------------
    | Roles
    |--------------------------------------------------------------------------
    |
    | Default roles and the permissions to go with them
    |
    */
    'roles' => [
        'member.approval' => [
            'name' => 'Awaiting Approval',
            'description' => 'Member awaiting approval',
            'permissions' => [
                'profile.view.self',
                'profile.edit.self',
                'link.view',
                'membership.updateDetails',
            ],
        ],
        'member.payment' => [
            'name' => 'Awaiting Payment',
            'description' => 'Awaiting standing order payment',
            'permissions' => [
                'profile.view.self',
                'profile.edit.self',
                'link.view',
            ],
        ],
        'member.young' => [
            'name' => 'Young Hacker',
            'description' => 'Member between 16 and 18',
            'permissions' => [
                'profile.view.self',
                'profile.edit.self',
                'link.view',
                'project.create.self',
                'project.view.self',
                'project.edit.self',
                'project.printLabel.self',
                'box.buy.self',
                'box.view.self',
                'box.edit.self',
                'box.printLabel.self',
                'bankTransactions.view.self',
                'snackspaceTransaction.view.self',
                'rfidTags.view.self',
                'rfidTags.edit.self',
                'tools.view',
                'gatekeeper.zoneEntry.ouside',
                'gatekeeper.zoneEntry.upstairs',
                'gatekeeper.zoneEntry.cncBlueRoom',
                'gatekeeper.zoneEntry.classRoomMetalworking',
                'gatekeeper.zoneEntry.downstairsMembersStrorage',
            ],
        ],
        'member.ex' => [
            'name' => 'Ex Member',
            'description' => 'Ex Member',
            'permissions' => [
                'profile.view.self',
                'profile.edit.self',
                'link.view',
                'bankTransactions.view.self',
                'snackspaceTransaction.view.self',
                'rfidTags.view.self',
                'gatekeeper.zoneEntry.ouside',
            ],
        ],
        'member.current' => [
            'name' => 'Current Member',
            'description' => 'Current Member',
            'permissions' => [
                'profile.view.self',
                'profile.edit.self',
                'accessCodes.view',
                'link.view',
                'project.create.self',
                'project.view.self',
                'project.edit.self',
                'project.printLabel.self',
                'box.buy.self',
                'box.view.self',
                'box.edit.self',
                'box.printLabel.self',
                'bankTransactions.view.self',
                'snackspaceTransaction.view.self',
                'rfidTags.view.self',
                'rfidTags.edit.self',
                'tools.view',
                'gatekeeper.zoneEntry.ouside',
                'gatekeeper.zoneEntry.upstairs',
                'gatekeeper.zoneEntry.cncBlueRoom',
                'gatekeeper.zoneEntry.classRoomMetalworking',
                'gatekeeper.zoneEntry.downstairsMembersStrorage',
            ],
        ],
        'member.temporarybanned' => [
            'name' => 'Temporary Banned Member',
            'description' => 'Temporary Banned Member',
            'retained' => true,
            'permissions' => [
                'profile.view.self',
                'profile.edit.self',
                'link.view',
                'project.view.self',
                'box.view.self',
                'bankTransactions.view.self',
                'snackspaceTransaction.view.self',
                'rfidTags.view.self',
                'rfidTags.edit.self',
                'gatekeeper.zoneEntry.ouside',
            ],
        ],
        'member.banned' => [
            'name' => 'Banned Member',
            'description' => 'Banned Member',
            'retained' => true,
            'permissions' => [
                'profile.view.self',
                'profile.edit.self',
                'link.view',
                'project.view.self',
                'box.view.self',
                'bankTransactions.view.self',
                'snackspaceTransaction.view.self',
                'rfidTags.view.self',
                'gatekeeper.zoneEntry.ouside',
            ],
        ],
        'user.super' => [
            'name' => 'Super User',
            'description' => 'Full access to all parts of the system',
            'permissions' => [
                '*',
            ],
        ],
        'team.membership' => [
            'name' => 'Membership Team',
            'description' => 'Membership Team',
            'email' => 'membership@nottinghack.org.uk',
            'slackChannel' => '#membership',
            'permissions' => [
                'profile.view.all',
                'membership.approval',
                'search.users',
                'project.view.all',
                'project.edit.all',
                'project.printLabel.all',
                'box.view.all',
                'box.edit.all',
                'box.printLabel.all',
                'snackspaceTransaction.view.all',
                'rfidTags.view.self',
                'rfidTags.view.all',
                'rfidTags.edit.self',
                'rfidTags.edit.all',
                'pins.view.all',
                'pins.reactivate',
                'bankTransactions.view.all',
                'gatekeeper.zoneEntry.teamStrorage',
            ],
        ],
        'team.trustees' => [
            'name' => 'Nottingham Hackspace Trustees',
            'description' => 'The Trustees',
            'email' => 'trustees@nottinghack.org.uk',
            'slackChannel' => '#general',
            'permissions' => [
                'profile.view.all',
                'profile.edit.all',
                'meta.view',
                'meta.edit',
                'membership.approval',
                'search.users',
                'project.view.all',
                'project.edit.all',
                'project.printLabel.all',
                'box.issue.all',
                'box.view.all',
                'box.edit.all',
                'box.printLabel.all',
                'snackspaceTransaction.view.all',
                'rfidTags.view.self',
                'rfidTags.view.all',
                'rfidTags.edit.self',
                'rfidTags.edit.all',
                'rfidTags.destroy',
                'pins.view.all',
                'pins.reactivate',
                'bankTransactions.view.all',
                'tools.view',
                'tools.create',
                'tools.edit',
                'tools.maintainer.grant',
                'tools.inductor.grant',
                'tools.user.grant',
                'role.grant.team',
                'gatekeeper.zoneEntry.teamStrorage',
            ],
        ],
        'team.software' => [
            'name' => 'Software Team',
            'description' => 'Software Team',
            'email' => 'software@nottinghack.org.uk',
            'slackChannel' => '#software',
            'permissions' => [
                'profile.view.all',
                'profile.edit.all',
                'role.view.all',
                'role.edit.all',
                'meta.view',
                'meta.edit',
                'membership.approval',
                'search.users',
                'rfidTags.view.self',
                'rfidTags.view.all',
                'rfidTags.edit.self',
                'rfidTags.edit.all',
                'rfidTags.destroy',
                'pins.view.all',
                'pins.reactivate',
                'link.view',
                'link.create',
                'link.edit',
                'labelTemplate.view',
                'labelTemplate.create',
                'labelTemplate.edit',
                'labelTemplate.print',
                'gatekeeper.zoneEntry.teamStrorage',
            ],
        ],
        'team.finance' => [
            'name' => 'Finance Team',
            'description' => 'Finance Team',
            'email' => 'accounts@nottinghack.org.uk',
            'permissions' => [
                'gatekeeper.zoneEntry.teamStrorage',
            ],
        ],
        'team.network' => [
            'name' => 'Network Team',
            'description' => 'Network Team',
            'email' => 'network@nottinghack.org.uk',
            'slackChannel' => '#network',
            'permissions' => [
                'meta.view',
                'meta.edit',
                'tools.view',
                'tools.create',
                'tools.edit',
                'tools.destroy',
                'tools.maintainer.grant',
                'tools.inductor.grant',
                'gatekeeper.zoneEntry.teamStrorage',
            ],
        ],
    ],

];
