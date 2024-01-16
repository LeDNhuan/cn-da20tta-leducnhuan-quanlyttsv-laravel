<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ChuDe;
use App\Models\DaoTao;
use App\Models\Lop;
use Illuminate\Http\Request;

class DaoTaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $daotao = DaoTao::all();
        

        // $content = 'admin.giangvien.index';
        return view('admin.daotao.index', compact(
            // 'content',
            'daotao'
        ))->with('i', (request()->input('page', 1) -1) *5);
    }

    public function hienthi($madaotao)
    {
        $macd = ChuDe::all();
        $madt = DaoTao::all();

        // $daotao = DaoTao::paginate(10);
        $daotao = DaoTao::where('MaDaoTao', $madaotao)->first();
        $lop = Lop::where('MaDaoTao', $madaotao)->get();
        
        return view('user.hienthi.daotao', compact(
            'macd',
            'madt',
            'daotao',
            'lop'
        ))->with('i', (request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.daotao.form.themdaotao');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DaoTao::create($request->all());
        return redirect()->route('daotao.index')->with('thongbao', 'Thêm chương trình đào tạo thành công!');//
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
    public function edit($madt)
    {
        $daotao = DaoTao::where('MaDaoTao', $madt)->first();
        return view('admin.daotao.form.suadaotao', compact('daotao'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $madt)
    {
        $daotao = DaoTao::where('MaDaoTao', $madt)->first();
        
        $daotao->update([
            'MaDaoTao' => $request->input('MaDaoTao'),
            'SoQuyetDinh' => $request->input('SoQuyetDinh'),
            'TCLyThuyet' => $request->input('TCLyThuyet'),
            'TCThucHanh' => $request->input('TCThucHanh'),
            'TinChi' => $request->input('TinChi'),
            //Thêm các trường khác nếu có
        ]);

        if (!$daotao) {
            return redirect()->route('daotao.index')->with('loi', 'Không thể cập nhật');
        }

        $daotao->update($request->all());
        return redirect()->route('daotao.index')->with('thongbao', 'Cập nhật chương trình đào tạo thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($madt)
    {
        $daotao = DaoTao::where('MaDaoTao', $madt)->first();
        
        if (!$daotao) {
            return redirect()->route('daotao$daotao.index')->with('loi', 'Không thể xóa');
        }

        $daotao->delete();
        return redirect()->route('daotao$daotao.index')->with('thongbao', 'Xóa chương trình đào tạo thành công!');
    }
}
