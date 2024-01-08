<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ChuDe;
use Illuminate\Http\Request;

class ChuDeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chude = ChuDe::paginate(10);
        

        // $content = 'admin.chude.index';
        return view('admin.chude.index', compact(
            // 'content',
            'chude'
        ))->with('i', (request()->input('page', 1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.chude.form.themchude');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ChuDe::create($request->all());
        return redirect()->route('chude.index')->with('thongbao', 'Thêm chủ đề thành công!');
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
    public function edit($macd)
    {
        $chude = ChuDe::where('MaChuDe', $macd)->first();
        return view('admin.chude.form.suachude', compact('chude'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $macd)
    {
        $chude = ChuDe::where('MaChuDe', $macd)->first();
        
        $chude->update([
            'MaChuDe' => $request->input('MaChuDe'),
            'TenChuDe' => $request->input('TenChuDe'),
        ]);

        if (!$chude) {
            return redirect()->route('chude.index')->with('loi', 'Không thể cập nhật');
        }

        $chude->update($request->all());
        return redirect()->route('chude.index')->with('thongbao', 'Cập nhật chủ đề thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($macd)
    {
        $chude = ChuDe::where('MaChuDe', $macd)->first();
        
        if (!$chude) {
            return redirect()->route('chude.index')->with('loi', 'Không thể xóa');
        }

        $chude->delete();
        return redirect()->route('chude.index')->with('thongbao', 'Xóa chủ đề thành công!');
    }
}
