<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
   // Extend with your methods
   public function all();

   public function find($id):?Model;

   public function create(array $data): Model;

   public function update($id, array $data): Model;
   
   public function delete($id);
}
