<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
    {
        //dd(Parkir::get());
        $pendaftarans = Pendaftaran::get();

        $totalSoftware = Pendaftaran::where('pelatihan', 'Software')->count();
        $totalNetwork = Pendaftaran::where('pelatihan', 'Network')->count();
        $totalMultimedia = Pendaftaran::where('pelatihan', 'Multimedia')->count();

        return view('admin.dashboard', [
            'pendaftarans' => $pendaftarans,
            'totalSoftware' => $totalSoftware,
            'totalNetwork' => $totalNetwork,
            'totalMultimedia' => $totalMultimedia,
        ]);
    }

    public function multimedia()
    {
    return view('admin.multimedia', [
        'multimedias' => Pendaftaran::where('pelatihan', 'Multimedia')->get(),
    ]);
    }

    public function network()
    {
    return view('admin.network', [
        'networks' => Pendaftaran::where('pelatihan', 'Network')->get(),
    ]);
    }

    public function software()
    {
    return view('admin.software', [
        'softwares' => Pendaftaran::where('pelatihan', 'Software')->get(),
    ]);
    }

    public function login() {
        return view('admin.login');
    }

    public function total(){
        $totalSoftware = Pendaftaran::where('pelatihan', 'Software')->count();
        $totalNetwork = Pendaftaran::where('pelatihan', 'Network')->count();
        $totalMultimedia = Pendaftaran::where('pelatihan', 'Multimedia')->count();

        return view('admin.dashboard', [
            'totalSoftware' => $totalSoftware,
            'totalNetwork' => $totalNetwork,
            'totalMultimedia' => $totalMultimedia,
        ]);
    }

    public function updateStatus(Request $request, $id_peserta)
    {
        $pendaftaran = Pendaftaran::find($id_peserta);
    
        // Validate if the status is one of the allowed values
        $request->validate([
            'status' => ['required', 'in:Verify,Not Verify'],
        ]);
    
        $pendaftaran->status = $request->input('status');
        $pendaftaran->save();
    
        return redirect('admin')->with('success', 'Status updated successfully.');
    }

}
