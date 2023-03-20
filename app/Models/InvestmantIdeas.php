<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestmantIdeas extends Model
{
    protected $table = 'investmant_ideas_tables';
    protected $primaryKey = 'id';
    protected $fillable = ['investmant_idea', 'product', 'risk', 'sector'];
}
