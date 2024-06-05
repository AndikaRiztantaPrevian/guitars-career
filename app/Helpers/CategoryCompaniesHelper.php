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
    public static function list()
    {
        return CategoryCompany::query()
            ->get();
    }
}
