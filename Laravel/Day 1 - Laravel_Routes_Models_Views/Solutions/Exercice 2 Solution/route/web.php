<?php

use App\Models\TeamMember;

Route::get('/about', function () {
    return view('team');
});

Route::get('/about/{id}', function ($id) {
    $teamMemberModel = new TeamMember();
    $teamMember = $teamMemberModel->getTeamMember($id);
    return view('team_member', ['name' => $teamMember['name'], 'role' => $teamMember['role']]);
});
