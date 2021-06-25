<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /*
    Fillable Example

    List of variables to allow mass assignment.
    protected $fillable = ['name', 'email', 'active'];

    Guarded Example
    $guarded = opposite of mass assignment.

    protected $guarded = ['created_at'];
    GOOD PRACTICE SINCE THIS ONE IS HACKED OFTEN

    */
    protected $guarded = [];

    protected $attributes = [
        'active' => 1
    ];

    /*
    Eloquent accessors

    Modify an attribute using:

    get___Attribute($attribute){}

    */

    public function activeOptions()
    {
        return [
            1 => 'Active',
            0 => 'Inactive',
            2 => 'In-Progress'
        ];
    }

    public function getActiveAttribute($attribute)
    {
        return $this->activeOptions()[$attribute];
    }

    /* QUERY SCOPE
    Local Scopes
    Local scopes allow you to define common sets of query constraints that you may easily re-use
     throughout your application. For example, you may need to frequently retrieve all users
    that are considered "popular". To define a scope, prefix an Eloquent model method with scope.

    Scopes should always return a query builder instance.

    The example below us static scope.

    */


    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeInactive($query)
    {
        return $query->where('active', 0);
    }

    /*
        ---- in CustomersController.php

        $activeCustomer= Customer::active()->get();
        $inactiveCustomer= Customer::inactive()->get();

        Dynamic Scopes

        Sometimes you may wish to define a scope that accepts parameters. To get started,
        just add your additional parameters to your scope method's signature. Scope parameters
        should be defined after the $query parameter:

        ---- in Customer.php

        public function scopeOfType($query, $type)
        {
            return $query->where('type', $type);
        }

        ---- in CustomersController.php
        $customers = Customer::ofType('admin')->get();

    */

    /*
    Establishing a has-many and belongs-to relationsip
    */

    public function company()
    {
        return $this->belongsTo(Company::class);
    }


}
