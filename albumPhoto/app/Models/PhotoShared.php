<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class PhotoShared extends Model
{
    use HasFactory;

    protected $fillable = ['owner_id', 'photo_id', 'shared_user_id'];


    public static function addPhotoShared($owner_id, $photo_id, $shared_user_id)
    {
        // Insert the photo data into the database using a raw SQL query
        $result = DB::insert('INSERT INTO photo_shared (owner_id, photo_id, shared_user_id,created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())', [
            $owner_id, $photo_id, $shared_user_id
        ]);
    }
}