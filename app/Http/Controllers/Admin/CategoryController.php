<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $category = Category::all();
        return view('admin.pages.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all()->toArray();
        $categories= get_cate_list($categories);
        return view('admin.pages.category.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        //
        $data =$request->validated();
        if($data['pid']==0){
            $data['level'] = 0;
            $data['pid_path']=0;
            $data['pid_path_name']='';
        }else{
            $info = Category::find($data['pid']);
            $data['pid_path'] = $info['pid_path'].'_'.$info['id'];
            $data['level'] = $info['level']+1;
            $data['pid_path_name'] = trim($info['pid_path_name'].'<span aria-hidden="true">|</span><span>'.$data["cate_name"].'</span>');
        }

        $category =  Category::create($data);
        if($category){
            session()->flash('success','添加成功');
            return redirect()->route('category.index');
        }else{
            session()->flash('danger','添加失败');
            return redirect()->route('category.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
        $categories = Category::all()->toArray();
        $categories= get_cate_list($categories);
        return view('admin.pages.category.edit',compact('category','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $category)
    {
        //
        $data =$request->validated();
        if($data['pid']==0){
            $data['level'] = 0;
            $data['pid_path']=0;
            $data['pid_path_name']='';
        }else{
            $info = Category::find($data['pid']);
            $data['pid_path'] = $info['pid_path'].'_'.$info['id'];
            $data['level'] = $info['level']+1;
            $data['pid_path_name'] = trim($info['pid_path_name'].'<span aria-hidden="true">|</span><span>'.$data["cate_name"].'</span>');
        }

        $category =  Category::where('id',$category)->update($data);
        if($category){
            session()->flash('success','更新成功');
            return redirect()->route('category.index');
        }else{
            session()->flash('danger','更新失败');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)

    {
        //
    
        $total = Category::where('pid', $category->id)->count();
    
        if ($total>0) {
          
            return response()->json(['code'=>400,'msg'=>'分类下有子分类,无法删除']);
        }
        $category->delete();
        return response()->json(['code'=>200,'msg'=>'删除成功']);
    }
    public function categoryapi(Request $request)
    {
        $data = Category::where('pid',$request->pid)->get();
        return response()->json(['code'=>200,'data'=>$data]);
    }
}

