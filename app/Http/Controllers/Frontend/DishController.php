<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    //
    private function breadcrumbs()
    {
        $breadcrumbs = array(
            array(
                'url' => '',
                'title' => 'Каталог блюд'
            ),
        );

        return $breadcrumbs;
    }

    //

    public function index(Request $request)
    {
        //$catalogViewType = 'vertical';
        $catalogViewType = 'horizontal';
        $catalogViewLimit = 9;

        $dishes = Dish::where('active', true)->paginate($catalogViewLimit);


        $view_data = [
            'title' => 'Каталог блюд',
            'description' => 'В вашем каталоге доступно более 500 блюд',
            'breadcrumbs' => $this->breadcrumbs(),
            'dishes' => $dishes,
            'catalogViewType' => $catalogViewType,
        ];

        return view('site.frontend.dishes.layout', $view_data);
    }
}
