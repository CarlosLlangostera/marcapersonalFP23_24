<?php

namespace App\Policies;

use App\Models\Reconocimiento;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ReconocimientoPolicy
{

    public function before(User $user, $ability)
    {
        if($user->esAdmin()) return true;
    }
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(?User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(?User $user, Reconocimiento $reconocimiento): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
<<<<<<< HEAD
        return ($user->esDocente() || $user->esEstudiante());
=======
        return $user->esEstudiante();
>>>>>>> 4858ad1419dc4b41c30838d13c505d2af49e92e6
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Reconocimiento $reconocimiento): bool
    {
        return ($user->esPropietario($reconocimiento,$reconocimiento->estudiante_id) || $user->esDocente() || $user->esEstudiante());
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Reconocimiento $reconocimiento): bool
    {
        return $user->esPropietario($reconocimiento,$reconocimiento->estudiante_id);

    }

    public function validar(User $user, Reconocimiento $reconocimiento)
    {
        return $user->esDocente();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Reconocimiento $reconocimiento): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Reconocimiento $reconocimiento): bool
    {
        //
    }
}
