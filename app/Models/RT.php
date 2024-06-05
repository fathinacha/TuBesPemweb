// app/Models/RT.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RT extends Model
{
    use HasFactory;

    protected $table = 'rts';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'nama', 'alamat', 'ketua'];
    public $timestamps = true; // Ensure timestamps are managed
}
