<?php
declare(strict_types=1);


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'kana_name',
        'address',
        'tel',
        'representative',
        'kana_representative',
    ];


public function billing(): HasOne
    {
        return $this->hasOne(CompanyBilling::class);
    }
}