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
        return back();
    }

    public function action(Request $request) {
        try {
            // Recupera tutti i ruoli
            $roles = Role::all();

            if ($request->ajax()) {
                $output = '';
                $query = $request->get('query');

                // Costruzione della query per la ricerca di utenti
                if ($query != '') {
                    $users = DB::table('users')
                        ->where('nome', 'like', '%'.$query.'%')
                        ->orWhere('cognome', 'like', '%'.$query.'%')
                        ->orWhere('email', 'like', '%'.$query.'%')
                        ->orderBy('id', 'desc')
                        ->get();
                } else {
                    $users = DB::table('users')
                        ->orderBy('id', 'desc')
                        ->get();
                }

                $totalRows = $users->count();

                // Costruzione della tabella degli utenti
                if ($totalRows > 0) {
                    foreach ($users as $user) {
                        $output .= '<tr>';
                        $output .= '<td>'.$user->nome.'</td>';
                        $output .= '<td>'.$user->cognome.'</td>';
                        $output .= '<td>'.$user->email.'</td>';
                        $output .= '<td>'.$user->telefono.'</td>';
                        $output .= '<td>'.$user->numero_ufficio.'</td>';
                        $output .= '<td>'.$user->created_at.'</td>';
                        $output .= '<td>'.User::find($user->id)->roles->first()->name.'</td>'; // Ruolo attuale

                        // Form per cambiare il ruolo dell'utente
                        $output .= '<td style="text-align: center">';
                        $output .= '<form method="POST" action="'.route('updateUserRole').'">';
                        $output .= csrf_field();
                        $output .= '<select style="color:black; width:95%" id="role_'.$user->id.'" class="form-control" name="role" required>';
                        $output .= '<option value="" disabled selected>Select Role</option>';

                        // Aggiunta delle opzioni dei ruoli (admin, intern, researcher)
                        foreach ($roles as $role) {
                            $output .= '<option value="'.$role->name.'">'.$role->name.'</option>';
                        }

                        $output .= '</select>';
                        $output .= '<input type="hidden" name="user_id" value="'.$user->id.'">';
                        $output .= '<button type="submit" class="btn btn-primary">Change Role!</button>';
                        $output .= '</form>';
                        $output .= '</td>';
                        $output .= '</tr>';
                    }
                } else {
                    $output = '<tr><td align="center" colspan="7">No Data Found</td></tr>';
                }

                // Restituisce i dati della tabella
                $data = [
                    'table_data' => $output,
                    'total_data' => $totalRows
                ];
                echo json_encode($data);
            }
        } catch (\Exception $e) {
            // Log degli errori
            Log::error($e->getMessage());
            return response()->json(['error' => 'Error fetching user data: ' . $e->getMessage()], 500);
        }
    }
}
