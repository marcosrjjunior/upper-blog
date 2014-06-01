<?php

class Post extends Eloquent
{    
    public function author() {
    	return $this->belongsTo('Author');
    }
    
    public function tags() {
        return $this->belongsToMany('Tag', 'post_tag');
    }
    
    protected $guarded = [
        'tag_id',
    ];
    
    public function getDateformAttribute($value)
    {
        return $this->attributes['date'];
    }
    
    public function getDateAttribute($value)
    {
        return date('d M Y', strtotime($value));
    }
}
