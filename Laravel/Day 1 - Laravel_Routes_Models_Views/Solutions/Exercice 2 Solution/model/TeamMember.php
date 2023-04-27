<?php

namespace App\Models;

class TeamMember
{
    private $teamMembers = [
        1 => ['name' => 'Alice', 'role' => 'Developer'],
        2 => ['name' => 'Bob', 'role' => 'Designer'],
        3 => ['name' => 'Carol', 'role' => 'Project Manager'],
    ];

    public function getTeamMember($id)
    {
        return $this->teamMembers[$id] ?? ['name' => 'Not found', 'role' => ''];
    }
}
