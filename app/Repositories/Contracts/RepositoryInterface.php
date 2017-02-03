<?php

namespace App\Repositories\Contracts;

interface RepositoryInterface
{
    /**
     * Function get all
     *
     * @param array $columns columns
     *
     * @return mixed
     */
    public function all($columns = array('*'));
 
    /**
     * Function get data with paginate
     *
     * @param int   $perPage perPage
     * @param array $columns columns
     *
     * @return mixed
     */
    public function paginate($perPage = 15, $columns = array('*'));
    
    /**
     * Function create
     *
     * @param array $data data
     *
     * @return mixed
     */
    public function create(array $data);
    
    /**
     * Function update
     *
     * @param array $data data
     * @param int   $id   id
     *
     * @return mixed
     */
    public function update(array $data, $id);
    
    /**
     * Function delete
     *
     * @param int $id id
     *
     * @return mixed
     */
    public function delete($id);
    
     /**
     * Function find
     *
     * @param int   $id      id
     * @param array $columns columns
     *
     * @return mixed
     */
    public function find($id, $columns = array('*'));
    
    /**
     * Funciton findBy key
     *
     * @param string $field   field
     * @param string $value   value
     * @param array  $columns columns
     *
     * @return mixed
     */
    public function findBy($field, $value, $columns = array('*'));
    
    /**
     * Load relations
     *
     * @param Relation $relations describle relations
     *
     * @return $this
     */
    public function with($relations);
}
