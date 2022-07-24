<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    public function hi(){
        echo "hellllo";
    }

    use SoftDeletes;
  
    protected $dates = ['deleted_at'];
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'intro', 'content','slug','image_main','images','extra_images','category_id','status','view'];
   
    /**
     * The has Many Relationship
     *
     * @var array
     */
    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
}
?>