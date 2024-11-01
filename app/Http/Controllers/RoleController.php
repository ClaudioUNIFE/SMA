<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class RoleController extends Controller
{
    public function showRole() {
        // Recupera tutti gli utenti e i ruoli disponibili
        $users = User::all();
        $roles = Role::all();

        // Mostra la vista per gestire i ruoli
        return view('manage-roles', compact('users', 'roles'));
    }

    public function updateUserRole(Request $request) {
        // Valida i dati della richiesta
        $request->validate([
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'role' => ['required', 'string', 'exists:roles,name'],
        ]);

        // Trova l'utente
        $user = User::find($request->user_id);

        // Sincronizza il ruolo selezionato con l'utente
        $user->syncRoles([$request->role]);

        // Ritorna indietro alla vista precedente
        return back()->with('success', 'Ruolo aggiornato con successo!');
    }

    public function action(Request $request)
    {
        if ($request->ajax()) {
            $query = $request->get('query');

            // Filtra i risultati in base alla query (su nome, cognome, email, ruolo)
            $users = User::where('nome', 'LIKE', "%{$query}%")
                        ->orWhere('cognome', 'LIKE', "%{$query}%")
                        ->orWhere('email', 'LIKE', "%{$query}%")
                        ->orWhereHas('roles', function ($q) use ($query) {
                            $q->where('name', 'LIKE', "%{$query}%");
                        })
                        ->get();

            $total_row = $users->count(); // Numero totale di risultati

            // Recupera tutti i ruoli
            $roles = Role::all();

            if ($total_row > 0) {
                // Genera l'HTML per i risultati trovati
                $output = '';
                foreach ($users as $user) {
                    $output .= '
                    <tr>
                        <td>' . $user->nome . '</td>
                        <td>' . $user->cognome . '</td>
                        <td>' . $user->email . '</td>
                        <td>' . ($user->roles->first() ? $user->roles->first()->name : 'Nessun ruolo assegnato') . '</td>
                        <td style="text-align: center">
                            <form method="POST" action="' . route('role.updateUserRole') . '">
                                ' . csrf_field() . '
                                <select style="color:black; width:95%" id="role_' . $user->id . '" class="form-control" name="role" required>
                                    <option value="" disabled>Seleziona Ruolo</option>';
                                    foreach ($roles as $role) {
                                        $selected = ($user->roles->first() && $user->roles->first()->name == $role->name) ? 'selected' : '';
                                        $output .= '<option value="' . $role->name . '" ' . $selected . '>' . $role->name . '</option>';
                                    }
                    $output .= '</select>
                                <input type="hidden" name="user_id" value="' . $user->id . '">
                                <button type="submit" class="btn btn-primary">Cambia Ruolo!</button>
                            </form>
                        </td>
                    </tr>';
                }
            } else {
                $output = '<tr><td colspan="5">Nessun utente trovato</td></tr>';
            }

            // Restituisce il risultato come JSON
            return response()->json([
                'table_data' => $output,
                'total_data' => $total_row
            ]);
        }
    }
}
