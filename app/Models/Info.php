<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = ['full_name', 'email', 'mobile', 'address', 'short_bio','facebook', 'twitter', 'instagram', 'linkedin', 'google', 'github', 'bitbucket', 'projects_done', 'happy_clients', 'experience_years','countries_served', 'map_pin'];
}
