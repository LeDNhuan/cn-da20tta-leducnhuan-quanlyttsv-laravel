<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ChuDe;
use App\Models\DaoTao;
use App\Models\SinhVien;
use App\Models\TuKhoa;
use Illuminate\Http\Request;
use App\Models\Lop;
class LopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lop = Lop::all();
        

        // $content = 'admin.lop.index';
        return view('admin.lop.index', compact(
            // 'content',
            'lop'
        ))->with('i', (request()->input('page', 1) -1) *5);
    }

    public function ttlop($malop)
    {
        $macd = ChuDe::all();
        $madt = TuKhoa::all();

        $lop = Lop::where('MaLop', $malop)->first();
        $sinhvien = SinhVien::where('MaLop', $malop)->get();
        

        // $content = 'admin.lop.index';
        return view('giangvien.thongtin.ttlop', compact(
            'macd',
            'madt',
            'lop',
            'sinhvien'
        ))->with('i', (request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $daotao = DaoTao::all();
        return view('admin.lop.form.themlop', compact('daotao'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Lop::create($request->all());
        return redirect()->route('lop.index')->with('thongbao', 'Thêm lớp học thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($malop)
    {
        $lop = Lop::where('MaLop', $malop)->first();
        return view('admin.lop.form.sualop', compact('lop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $malop)
    {
        $lop = Lop::where('MaLop', $malop)->first();
        
        $lop->update([
            'MaLop' => $request->input('MaLop'),
            'TenLop' => $request->input('TenLop'),
            'MaDaoTao' => $request->input('MaDaoTao'),
            
            //Thêm các trường khác nếu có
        ]);

        if (!$lop) {
            return redirect()->route('lop.index')->with('loi', 'Không thể cập nhật');
        }

        $lop->update($request->all());
        return redirect()->route('lop.index')->with('thongbao', 'Cập nhật lớp học thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($malop)
    {
        $lop = Lop::where('MaLop', $malop)->first();
        
        if (!$lop) {
            return redirect()->route('lop.index')->with('loi', 'Không thể xóa');
        }

        $lop->delete();
        return redirect()->route('lop.index')->with('thongbao', 'Xóa lớp thành công!');
    }
}
