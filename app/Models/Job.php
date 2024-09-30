<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model {
  use HasFactory;

  protected $table = 'job_listings';

  // protected $fillable = ['type', 'title', 'salary', 'employer_id', 'location', 'description'];
  protected $guarded = []; // This will disable the Fillable fields feature seen in previous line.

  // Define the relationship with the Employer model
  public function employer() {
    return $this->belongsTo(Employer::class);
  }

  public function tags()
  {
    return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listing_id');
  }
}
