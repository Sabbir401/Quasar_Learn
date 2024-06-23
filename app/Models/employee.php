<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'Company_Id',
        'Employee_Id',
        'Card_No',
        'Full_Name',
        'Father_Name',
        'Mother_Name',
        'Spouse_Name',
        'Marital_Status',
        'DOB',
        'Place_of_Birth',
        'Present_Address',
        'Permanent_Address',
        'Contact_No',
        'Emergency_Contact',
        'Gender',
        'Personal_Email',
        'Official_Email',
        'Blood_Group_Id',
        'Religion_Id',
        'Nationality',
        'NID',
    ];

    public function company()
    {
        return $this->belongsTo(company::class, 'Company_Id');
    }
    public function blood()
    {
        return $this->belongsTo(blood_group::class, 'Blood_Group_Id');
    }
    public function religion()
    {
        return $this->belongsTo(religion::class, 'Religion_Id');
    }    
}
