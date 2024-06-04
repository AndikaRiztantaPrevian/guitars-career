<?php

namespace App\Helpers;

use App\Models\CategoryCompany;

class CategoryCompaniesHelper
{

    /**
     * Helper untuk mendapatkan semua data dari model CategoryCompany
     *
     * @return void
     */
    public function list()
    {
        CategoryCompany::query()
            ->get();
    }
}
