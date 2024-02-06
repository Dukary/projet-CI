<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as BasicAuthenticatable;

class Users extends Model implements Authenticatable{
    use BasicAuthenticatable;
    public function  getAuthPassword(){
        return $this->password;
    }

    public function getRememberTokenName()
    {
        return '';
    }
}
?>
