<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table ='book';
    protected $primaryKey ='book_id';
    protected $useTimetamps = true;
}