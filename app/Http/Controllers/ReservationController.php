<?php

namespace App\Http\Controllers;

use App\Models\Reserve;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ReservationController extends Controller
{
    //STATUS 
// Pending -- yellow
// In Process  -- blue
// Completed  -- green
// Overdue  -- red


    public function show($id){
        $book = DB::table('books')->where('id',decrypt($id))->get()->value('title');
        
        $name = Auth::user()->name;

        return view('book.reservation', compact('book', 'id', 'name'));
    }

    public function view()
    {
<<<<<<< Updated upstream
        $reserves = DB::table('reserves')->where('user_id', Auth::user()->id)->get();
=======
        if (Auth::user()->role_id==1){
            $reserves = Reserve::all();
        }else{
            $reserves = Reserve::where('user_id', Auth::user()->id)->get();
        }
>>>>>>> Stashed changes
        return view('book.reservationView', compact('reserves'));
    }


    public function destroy($id)
    {
        $reserve = Reserve::findOrFail(decrypt($id));
        $reserve->delete();
        Session::flash('title', 'Hapus Data Berhasil!');
        Session::flash('message', '');
        Session::flash('icon', 'success');
        return redirect()->route('reserve.view');
    }

    public function submit(Request $request){
        
        $validatedata = $request->validate([
            'waktu_pinjam'=>'required|date|after_or_equal:today',
            'waktu_kembali' => 'required|date|after:waktu_pinjam', 
            'book_id' => 'required', 

        ], [
            'waktu_pinjam.required'=>'Reservation Date Harus diisi',
            'waktu_kembali.required'=>'Return Date Harus diisi',
            'waktu_kembali.after' => 'Return Date harus setelah Reservation Date',
            'waktu_pinjam.after_or_equal' => 'Reservation Date sudah lewat',
        ]);

        $waktu_pinjam = \Carbon\Carbon::parse($validatedata['waktu_pinjam']);
        $waktu_kembali = \Carbon\Carbon::parse($validatedata['waktu_kembali']);

        if($waktu_pinjam->diffInDays($waktu_kembali) > 7){
            return back()->withErrors(
                ['waktu_kembali' => 'Return Date harus dalam rentang maksimal satu minggu setelah Reservation Date.']);
        };

        try{
            $reserve = Reserve::create([
                'user_id' => Auth::user()->id,
                'book_id' => decrypt($validatedata['book_id']),
                'status' => "Pending",
                'waktu_pinjam' => $validatedata['waktu_pinjam'],
                'waktu_kembali' => $validatedata['waktu_kembali'],
            ]);
            Session::flash('title', 'Reserve Berhasil!');
            Session::flash('message', '');
            Session::flash('icon', 'success');
            return redirect('/book')->with('success', 'Reservation berhasil Diinput');

        }catch(\Exception $e) {
            Session::flash('title', 'Reserve Gagal!');
            Session::flash('message', '');
            Session::flash('icon', 'error');
            return back();
        }
        
    }
}
