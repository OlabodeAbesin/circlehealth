<?php
declare(strict_types=1);


namespace App\Services;


use App\Models\User;

class UserService {

    public function create(string $type): string {
        return ucfirst(User::ENUM_TYPES_TO_LOWER_CASE[$type]);
    }

    public function store(array $data){
      $request = array_merge($data, ['type'=> 'PATIENT']);
      User::create($request);
    }

}
