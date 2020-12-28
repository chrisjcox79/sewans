<?php

function active_class($path, $active = 'active')
{
    return call_user_func_array('Request::is', (array)$path) ? $active : '';
}

function is_active_route($path)
{
    return call_user_func_array('Request::is', (array)$path) ? 'true' : 'false';
}

function show_class($path)
{
    return call_user_func_array('Request::is', (array)$path) ? 'show' : '';
}

if (!function_exists('get_cate_list')) {
    //递归函数 实现无限级分类列表
    function get_cate_list($list, $pid = 0, $level = 0)
    {
        static $tree = array();
        foreach ($list as $row) {
            if ($row['pid'] == $pid) {
                $row['level'] = $level;
                $tree[] = $row;
                get_cate_list($list, $row['id'], $level + 1);
            }
        }
        return $tree;
    }
}

if (!function_exists('get_tree_list')) {
    //引用方式实现 父子级树状结构
    function get_tree_list($list)
    {
        //将每条数据中的id值作为其下标
        $temp = [];
        foreach ($list as $v) {
            $v['son'] = [];
            $temp[$v['id']] = $v;
        }
        //获取分类树
        foreach ($temp as $k => $v) {
            $temp[$v['pid']]['son'][] = &$temp[$v['id']];
        }
        return isset($temp[0]['son']) ? $temp[0]['son'] : [];
    }
}

if (!function_exists('category_tree')) {

    function category_tree($status = false)
    {

        $categories = \App\Models\Category::select(['cate_name', 'pid', 'level', 'is_show','id','created_at'])
            ->when($status !== false, function ($query) use ($status) {
                $query->where('is_show', $status);
            })->where('pid', 0)->
            with(['children' => function ($query) use ($status) {
                $query->select(['cate_name', 'pid', 'level', 'is_show','id','created_at'])->when($status !== false, function ($query) use ($status) {
                    $query->where('is_show', $status);
                });
            },'children.children'=>function($query) use($status){
                $query->select(['cate_name', 'pid', 'level', 'is_show','id','created_at'])->when($status !== false, function ($query) use ($status) {
                    $query->where('is_show', $status);
                });
            }])->get();
        return  $categories;
    }


}

if(!function_exists('cache_category')){
    function cache_category(){
        return cache()->rememberForever('cache_category',function (){
            return category_tree(1);
        });
    }
}

if(!function_exists('cache_category_all')){
    function cache_category_all(){
        return cache()->rememberForever('cache_category',function (){
            return category_tree();
        });
    }
}

if(!function_exists('clear_cache_category')){
    function clear_cache_category(){
        cache()->forget('cache_category');
        cache()->forget('cache_category_all');
    }
}

if(!function_exists('get_db_config')){
    function get_db_config()
    {
        if (getenv('IS_IN_HEROKU')) {
            $url = parse_url("postgres://dcgxdubhdqxyhk:8c175bcc874a1eb0650fe0c549b3a38b99f9c875210001c347c1084725bafed8@ec2-3-213-106-122.compute-1.amazonaws.com:5432/dabfvus398sjch");

            return $db_config = [
                'connection' => 'pgsql',
                'host' => $url["host"],
                'database'  =>ltrim($url["path"], "/"),
                'username'  => $url["user"],
                'password'  => $url["pass"],
            ];
        } else {
            return $db_config = [
                'connection' => env('DB_CONNECTION', 'mysql'),
                'host' => env('DB_HOST', 'localhost'),
                'database'  => env('DB_DATABASE', 'forge'),
                'username'  => env('DB_USERNAME', 'forge'),
                'password'  => env('DB_PASSWORD', ''),
            ];
        }
    }

}
