<?php

namespace App\Repositories;

use illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
   // Extend with your methods
   public function all();

   @return Model|null

   public function find($id):?Model;

   @param array
   @return Model

   public function create(array $data): Model;

   @param int
   @return void

   public function update($id, array $data): Model;

   @param int
   @return void

   public funtion delete($id);
}
