<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Repository Interface Namespace
    |--------------------------------------------------------------------------
    |
    | This base namespace prefix will be used with each of the repositories listed
    | below to generate the full interface and implementation class names.
    |
    */
    'repository_namespace' => 'HMS\Repositories',

    /*
    |--------------------------------------------------------------------------
    | Entity Namespace
    |--------------------------------------------------------------------------
    |
    | This base prefix will be used with each repositories listed below to
    | generate the Entity full class name.
    |
    */
    'entity_namespace' => 'HMS\Entities',

   /*
    |--------------------------------------------------------------------------
    | Autoloaded Repositories
    |--------------------------------------------------------------------------
    |
    | The repositories listed here will be automatically loaded on the
    | request to your application.
    |
    */
    'repositories' => [
        'Link',
        'Meta',
        'Role',
        'User',
        'Invite',
        'Profile',
        'Banking\Account',
        'Email',
        'RoleUpdate',
        'LabelTemplate',
        'GateKeeper\Pin',
        'GateKeeper\RfidTag',
        'GateKeeper\Door',
        'GateKeeper\Zone',
        'GateKeeper\ZoneOccupant',
        'GateKeeper\ZoneOccupancyLog',
        'GateKeeper\AccessLog',
        'Banking\Bank',
        'Banking\BankTransaction',
        'Banking\MembershipStatusNotification',
        'Members\Project',
        'Members\Box',
        'Snackspace\Debt',
        'Snackspace\Product',
        'Snackspace\Transaction',
        'Snackspace\PurchasePayment',
        'Snackspace\VendingMachine',
        'Snackspace\VendingLocation',
        'Tools\Tool',
        'Tools\Booking',
        'Instrumentation\Service',
        'Instrumentation\Event',
        'Instrumentation\ElectricMeter',
        'Instrumentation\ElectricReading',
    ],
];
