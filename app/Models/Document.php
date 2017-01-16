<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = "documents";

    protected $fillable = ['name', 'file_upload', 'image', 'description', 'user_id', 'subject_category_id'];

    /**
     * Method relationship
     *
     * @return relationship
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Menthod relationship
     *
     * @return relationship
     */
    public function subjectCategory()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
