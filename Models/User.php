<?php
/**
 * 
 * class User
 */
class User extends Model {

    protected $fillable = ['firstname', 'lastname', 'phone', 'email', 'profile', 'password'];

    // the password must be hash
    public static function create(array $attributes = [])
    {
        if(isset($attributes['password'])) 
            $attributes['password'] = sha1($attributes['password']);
        
        return parent::create($attributes);
    }

    public function update(array $attributes = [])
    {
        if(isset($attributes['password'])) 
            $attributes['password'] = sha1($attributes['password']);
        else {
            unset($attributes['password']);
        }

        return parent::update($attributes);
    }
    
}

?>