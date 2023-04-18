<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Clients;
class InvestmantIdeas extends Model
{
    protected $table = 'investmant_ideas_tables';
    protected $primaryKey = 'id';
    protected $fillable = ['investmant_idea','abstract', 'product', 'risk','instruments','Currency', 'Major_Sector',
                           'Minor_Sector','Region','Country','rm_status'];

    // public function clients(){
    //     return $this->hasMany(Clients::class,'investment_suggestion','client_id');
    // }
}
