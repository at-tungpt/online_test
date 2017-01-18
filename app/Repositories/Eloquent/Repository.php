<?php

namespace App\Repositories\Eloquent;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Container\Container as App;
use App\Repositories\Contracts\RepositoryInterface;
use Exception;
use Carbon\Carbon;

/**
 * Class Repository
 *
 * @package Bosnadev\Repositories\Eloquent
 */
abstract class Repository implements RepositoryInterface
{
    /**
     * App
     *
     * @var App
     */
    private $app;
    /**
     * Model
     *
     * @var Model
     */
    protected $model;
    /**
     * Construct
     *
     * @param App $app app
     *
     * @throws \App\Repositories\Exceptions\RepositoryException
     */
    public function __construct(App $app)
    {
        $this->app = $app;
        $this->makeModel();
    }
    
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    abstract public function model();
    
    /**
     * Function get all
     *
     * @param array  $columns columns
     * @param string $field   field
     * @param string $sort    sort
     *
     * @return mixed
     */
    public function all($columns = array('*'), $field = 'id', $sort = 'desc')
    {
        return $this->model->select($columns)->orderBy($field, $sort)->get();
    }
    
    /**
     * Function get data with paginate
     *
     * @param int   $perPage perPage
     * @param array $columns columns
     *
     * @return mixed
     */
    public function paginate($perPage = 15, $columns = array('*'))
    {
        return $this->model->paginate($perPage, $columns);
    }
    
    /**
     * Function create
     *
     * @param array $data data
     *
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }
    
    /**
     * Function update
     *
     * @param array  $data      data
     * @param int    $id        id
     * @param string $attribute attribute
     *
     * @return mixed
     */
    public function update(array $data, $id, $attribute = "id")
    {
        return $this->model->where($attribute, '=', $id)->update($data);
    }
    
    /**
     * Function delete
     *
     * @param int $id id resource
     *
     * @return mixed
     */
    public function delete($id)
    {
        return $this->model->destroy($id);
    }
    
    /**
     * Function find
     *
     * @param int   $id      id
     * @param array $columns columns
     *
     * @return mixed
     */
    public function find($id, $columns = array('*'))
    {
        return $this->model->find($id, $columns);
    }
    
    /**
     * Funciton findBy key
     *
     * @param string $attribute attribute
     * @param string $value     value
     * @param array  $columns   columns
     * @param string $field     field
     * @param array  $sort      sort
     *
     * @return mixed
     */
    public function findBy($attribute, $value, $columns = array('*'), $field = 'id', $sort = 'desc')
    {
        return $this->model->where($attribute, '=', $value)->select($columns)->orderBy($field, $sort)->get();
    }
    
    /**
     * Load relations
     *
     * @param array|string $relations decrible relations
     *
     * @return $this
     */
    public function with($relations)
    {
        $this->model = $this->model->with($relations);
        return $this;
    }
    
    /**
     * Function makeModel
     *
     * @return \Illuminate\Database\Eloquent\Builder
     * @throws RepositoryException
     */
    private function makeModel()
    {
        $model = $this->app->make($this->model());
        if (!$model instanceof Model) {
            //return Exception
            throw new Exception("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
        }
        return $this->model = $model;
    }
    /**
     * Get count record
     *
     * @param int $offset offset
     * @param int $limit  limit
     *
     * @return mixed
     */
    public function getLimit($offset = 0, $limit = 12)
    {
        return $this->model->offset($offset)->limit($limit)->get();
    }
    /**
     * Get record limit order by id desc with relationship
     *
     * @param string  $relations relations
     * @param array   $columns   columns
     * @param string  $field     field
     * @param string  $sort      sort
     * @param integer $limit     limit
     *
     * @return mixed
     */
    public function getLimitOrderBy($relations, $columns = array('*'), $field = 'id', $sort = 'desc', $limit = 6)
    {
        $lists = $this->model->select($columns)->orderBy($field, $sort)->limit($limit)->get();
        return $lists->load($relations);
    }
}
