<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder;
use Cviebrock\EloquentSluggable\Sluggable;

class Event extends Model
{
    use HasFactory;
    protected $dates =[
      'created_at',
      'updated_at',
      'started_at'
    ];

//    public function getNameAttribute($value)
//    {
//        $ignore = ['a','and','at','but','for','in','the','to','with'];
//        $name = explode(" ,",$value);
//        $modifiedName =[];
//        foreach ($name as $word){
//            if (!in_array(strtolower($word),$ignore))
//            {
//                $modifiedName[]=ucfirst($word);
//            } else {
//                $modifiedName[] = strtolower($word);
//            }
//        }
//        return join('',$modifiedName);
//    }
//
//    protected static function boot()
//    {
//        parent::boot();
//        static::addGlobalScope('published',function (Builder $builder){
//            $builder->where('published','=',1);
//        });
//    }
    use Sluggable;
    public function sluggable(): array
    {
     return [
         'slug'=>[
             'source'=>'name'
         ]
     ];
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
