<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\InvestmantIdeas;

class Clients extends Model
{
    protected $table = 'clients';
    protected $primaryKey = 'client_id';
    protected $fillable = ['client_id','name', 'email', 'age', 'investment_suggestion', 'risk_rate'];
    public $timestamps = false;


    public function investmentideas(){
        return $this->belongsTo(InvestmantIdeas::class)->withDefault();
    }
}
