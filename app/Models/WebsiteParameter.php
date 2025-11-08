<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteParameter extends Model
{
    use HasFactory;

    public function logo()
    {
        return $this->logo ?: 'logo.gif';
    }
    
    public function logo_alt()
    {
        return $this->logo_alt ?: 'logo.gif';
    }


    public function favicon()
    {
        return $this->favicon ?: 'favicon.ico';
    }


}
