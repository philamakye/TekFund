<?php

namespace App\Models;

use Attribute;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Types\Self_;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    protected $attributes = [
        'contribution_num' => 0,
        'campaign_num' => 0,
        'comments_num' => 0,
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $primaryKey = 'user_id';

    public static function uploadAvatar($image)
    {
        $filename = $image->getClientOriginalName();
        (new Self())->delOld();
        $image->storeAs('images', $filename, 'public');
        auth()->user()->update(['pro_image' => $filename]);
    }
    protected function delOld()
    {
        if (auth()->user()->pro_image) {
            Storage::delete('/public/images/' . auth()->user()->pro_image);
        }
    }
    public static function uploadImage($image)
    {
        $filename = $image->getClientOriginalName();
        (new Self())->delOldAvatar();
        $image->storeAs('images', $filename, 'public');
        auth()->user()->update(['avatar' => $filename]);
    }
    protected function delOldAvatar()
    {
        if (auth()->user()->avatar) {
            Storage::delete('/public/images/' . auth()->user()->avatar);
        }
    }


}
