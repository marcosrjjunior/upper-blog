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
}
