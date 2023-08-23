<?php

namespace App\Policies;

use App\Models\Bank;
use App\Models\Customer;
use App\Models\CustomerPayment;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class BankPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Bank $bank)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Bank $bank)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Bank $bank)
    {

        $has = CustomerPayment::query()->where('bank_id',$bank->id)->count();
        if($has){
            return Response::deny('Cannot Remove Bank Account Already Used'); 
        }else{
            return Response::allow(); 
        }
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Bank $bank)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Bank $bank)
    {
        //
    }
}
