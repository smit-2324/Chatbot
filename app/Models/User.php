<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
  protected $table = "chatbot_user_details";
    protected $fillable = [
    'id',
    'external_id',
    'selfie_path',
    'addr_proof',
    'id_proof',
    'period_of_stay',
    'residential_type',
    'address_type',
    'respondent_name_and_relation_with_candidate',
    'signature',
    'actual_data_lat',
    'actual_data_long'
    ];
}
