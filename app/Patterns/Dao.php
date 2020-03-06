<?php namespace App;

interface DAO {
    public function remove($id);
    public function edit($data);
    public function find($property);
    public function create();

    public function findAll();
    public function isEmpty();
}