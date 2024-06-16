<?php

namespace App\Http\Controllers;

use App\Models\Navigation;
use Illuminate\Http\Request;

class NavigationController extends Controller
{

    function buildTree(array $elements, $parentId = 0) {
        $branch = array();
    
        foreach ($elements as $element) {
            if ($element['parent_id'] == $parentId) {
                $children = $this->buildTree($elements, $element['id']);
                if ($children) {
                    $element['children'] = $children;
                }
                $branch[] = $element;
            }
        }
    
        return $branch;
    }

    public function TreeNavigation(Request $request){
        $nav = Navigation::get()->toArray();
        return ["nav"=> $nav, "tree" => $this->buildTree($nav)];
    }
}
