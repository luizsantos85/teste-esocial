<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'tld'];

    public function getDomains($filter = null)
    {
        if (!$filter) {
            return $this->get();
        }

        return $this->where('name', 'LIKE', "%{$filter}%")->get();
    }
}
