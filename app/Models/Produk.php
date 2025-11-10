<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = ['nama_produk', 'harga', 'stok'];
    protected $visible  = ['nama_produk', 'harga', 'stok'];

    public function transakis()
    {
        return $this->belongsToMany(Transaksi::class, 'detail_transaki', 'id_produk', 'id_transaki')
                    ->withPivot('jumlah', 'sub_total')
                    ->withTimestamps();
    }
}