<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'contract_id',
        'invoice_code',
        'period_month',
        'period_year',
        'amount_due',
        'due_date',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'amount_due' => 'decimal:2',
            'due_date' => 'date',
            'period_month' => 'integer',
            'period_year' => 'integer',
        ];
    }

    public function contract(): BelongsTo
    {
        return $this->belongsTo(RentalContract::class, 'contract_id');
    }

    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}
