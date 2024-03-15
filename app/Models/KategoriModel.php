<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use PhpParser\Node\Stmt\Return_;

class KategoriModel extends Model
{
    protected $table = 'm_kategori';
    protected $primaryKey ='kategori_id';

    protected $fillable = [ 'kategori-kode', 'kategori_nama'];

    public function barang(): HasMany
    {
        return $this->hasMany(BarangModel::class, 'barang_id', 'barang_id');
    }

}
