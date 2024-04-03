<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role; // Assuming you have a Role 


class RoleController extends Controller
{
    public function createForm()
    {
        return view('role');
    }

    public function manageRoles()
    {
        // Fetch all roles from the database
        $roles = Role::all();

        return view('role.manageroles', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:roles,title',
        ]);

        Role::create([
            'title' => $request->input('title'),
        ]);

        return redirect()->route('role')->with('success', 'Role added successfully!');
    }

    public function storeRoles(Request $request)
{
    $request->validate([
        'title' => 'required|unique:role,title', // Change 'roles' to 'role'
    ]);

    Role::create([
        'title' => $request->input('title'),
    ]);

    return redirect()->route('roles')->with('success', 'Role added successfully!');
}

public function edit(Role $role)
{
    // Assuming you have an 'editrole' view
    return view('role.edit', compact('role'));
}

public function destroy(Role $role)
{
    // Delete the role
    $role->delete();

    // Redirect back with a success message
    return redirect()->route('roles')->with('success', 'Role deleted successfully.');
}
public function update(Request $request, Role $role)
{
    $request->validate([
        'title' => 'required|string|max:255',
    ]);

//     $role->update([
//         'title' => $request->title,
//     ]);

//     return redirect()->route('roles')->with('success', 'Role updated successfully');
// }
$existingRole = Role::where('title', $request->title)->first();

if ($existingRole) {
    return redirect()->route('roles')->with('error', 'Role already exists');
}

$role->update([
    'title' => $request->title,
]);

return redirect()->route('roles')->with('success', 'Role updated successfully');


}}