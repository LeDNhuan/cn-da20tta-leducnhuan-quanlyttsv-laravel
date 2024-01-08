<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CoVan;
use App\Models\GiangVien;
use Illuminate\Http\Request;
use App\Models\Lop;

class CoVanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $covan = CoVan::paginate(10);
        

        // $content = 'admin.covan.index';
        return view('admin.covan.index', compact(
            // 'content',
            'covan'
        ))->with('i', (request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {    
        $giangvien = GiangVien::all();
        $lop = Lop::all();
        return view('admin.covan.form.themcovan', compact(
            'lop',
            'giangvien'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        CoVan::create($request->all());
        return redirect()->back()->with('thongbao', 'Thêm cố vấn thành công!');//
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($magv, $malop)
    {
        // $covan = CoVan::where('MaGV', $magv)->where('MaLop', $malop)->firstOrFail();
        
        try {
            $covan = CoVan::where('MaGV', $magv)->where('MaLop', $malop)->firstOrFail();
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('covan.index')->with('loi', 'Không thể xóa, không tìm thấy cố vấn');
        }
            
        $covan->delete();
        return redirect()->route('covan.index')->with('thongbao', 'Xóa cố vấn thành công!');        
        
    }
}
