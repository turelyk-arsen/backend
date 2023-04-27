<?php

namespace App\Models;

class TeamMember {
    public static function allMembers() {
        return [
            [
                'id'=>1,
                'name'=>'Artur',
                'role'=>'LOrem and loreM!',
            ], [
                'id'=>2,
                'name'=>'Arsen',
                'role'=>'LOREM LOREM or lorem',
            ]
        ];
    }

    public static function find($id) {
        $allMembers = self::allMembers();
        foreach ($allMembers as $member) {
            if ($member['id'] == $id){
                return $member;
            }
        }
    }
}