<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CompanyBilling extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'kana_name',
        'address',
        'tel',
        'BillingDepartment',
        'kana_BillingDepartment',
    ];
    
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}