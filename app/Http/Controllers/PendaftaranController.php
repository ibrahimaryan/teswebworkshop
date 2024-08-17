<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    public function index()
    {
        //dd(Parkir::get());
        return view('pendaftar.form_pendaftar', [
            'pendaftarans' => Pendaftaran::get(),
        ]);
    }

    public function create(Request $request)
    {
        // Check if the limit for the specific training is reached
        $limit = 3; // Set the limit for each training type
        $waitingListLimit = 2; // Set the maximum total waiting list count

        $pendingCount = Pendaftaran::where('pelatihan', $request->pelatihan)->where('status', 'Pending')->count();
        $waitingListCount = Pendaftaran::where('pelatihan', $request->pelatihan)->where('status', 'Waiting List')->count();

        $existingRecord = Pendaftaran::where('nama', $request->nama)
            ->orWhere('nim', $request->nim)
            ->first();

        if ($existingRecord) {
            return redirect()->back()->with('error', 'Sudah terdaftar!');
        }

        if ($pendingCount < $limit) {
            // Registration is within the limit, proceed with creating the registration
            $pendaftaran = new Pendaftaran();

            $pendaftaran->nama = $request->nama;
            $pendaftaran->nim = $request->nim;
            $pendaftaran->prodi = $request->prodi;
            $pendaftaran->jurusan = $request->jurusan;
            $pendaftaran->pelatihan = $request->pelatihan;
            $pendaftaran->nowa = $request->nowa;
            $pendaftaran->status = 'Pending';

            // Handle file uploads if provided
            if ($request->hasFile('ss_angtif')) {
                $file = $request->file('ss_angtif');
                $filename = $request->nama . '_ss_angtif.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('ss_angtif', $filename, 'public');
                $pendaftaran->ss_angtif = $path;
            }

            if ($request->hasFile('ss_pcc')) {
                $file = $request->file('ss_pcc');
                $filename = $request->nama . '_ss_pcc.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('ss_pcc', $filename, 'public');
                $pendaftaran->ss_pcc = $path;
            }

            if ($request->hasFile('ss_workshop')) {
                $file = $request->file('ss_workshop');
                $filename = $request->nama . '_ss_workshop.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('ss_workshop', $filename, 'public');
                $pendaftaran->ss_workshop = $path;
            }

            // Save the data to the database
            $pendaftaran->save();

            // Redirect or respond accordingly
            return redirect()->back()->with('success', 'Pendaftaran berhasil!');
        } elseif ($waitingListCount < $waitingListLimit) {
            // Registration exceeds the limit, set the status to 'Waiting List'
            $pendaftaran = new Pendaftaran();

            $pendaftaran->nama = $request->nama;
            $pendaftaran->nim = $request->nim;
            $pendaftaran->prodi = $request->prodi;
            $pendaftaran->jurusan = $request->jurusan;
            $pendaftaran->pelatihan = $request->pelatihan;
            $pendaftaran->nowa = $request->nowa;
            $pendaftaran->status = 'Waiting List';

            // Handle file uploads if provided
            if ($request->hasFile('ss_angtif')) {
                $file = $request->file('ss_angtif');
                $filename = $request->nama . '_ss_angtif.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('ss_angtif', $filename, 'public');
                $pendaftaran->ss_angtif = $path;
            }

            if ($request->hasFile('ss_pcc')) {
                $file = $request->file('ss_pcc');
                $filename = $request->nama . '_ss_pcc.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('ss_pcc', $filename, 'public');
                $pendaftaran->ss_pcc = $path;
            }

            if ($request->hasFile('ss_workshop')) {
                $file = $request->file('ss_workshop');
                $filename = $request->nama . '_ss_workshop.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('ss_workshop', $filename, 'public');
                $pendaftaran->ss_workshop = $path;
            }


            // Save the data to the database
            $pendaftaran->save();

            // Redirect or respond accordingly
            return redirect()->back()->with('success', 'Pendaftaran berhasil! (Waiting List)');
        } else {
            // Maximum waiting list count reached, handle accordingly
            return redirect()->back()->with('error', 'Maaf, kuota waiting list telah terpenuhi.');
        }
        //     $pendaftaran = new Pendaftaran();

        //     $pendaftaran->nama = $request->nama;
        //     $pendaftaran->nim = $request->nim;
        //     $pendaftaran->prodi = $request->prodi;
        //     $pendaftaran->jurusan = $request->jurusan;
        //     $pendaftaran->pelatihan = $request->pelatihan;
        //     $pendaftaran->nowa = $request->nowa;
        //     $pendaftaran->status = 'Pending';

        //     // Handle file uploads if provided
        //     if ($request->hasFile('ss_angtif')) {
        //         $file = $request->file('ss_angtif');
        //         $filename = $request->nama . '_ss_angtif.' . $file->getClientOriginalExtension();
        //         $path = $file->storeAs('ss_angtif', $filename, 'public');
        //         $pendaftaran->ss_angtif = $path;
        //     }

        //     if ($request->hasFile('ss_pcc')) {
        //         $file = $request->file('ss_pcc');
        //         $filename = $request->nama . '_ss_pcc.' . $file->getClientOriginalExtension();
        //         $path = $file->storeAs('ss_pcc', $filename, 'public');
        //         $pendaftaran->ss_pcc = $path;
        //     }

        //     if ($request->hasFile('ss_workshop')) {
        //         $file = $request->file('ss_workshop');
        //         $filename = $request->nama . '_ss_workshop.' . $file->getClientOriginalExtension();
        //         $path = $file->storeAs('ss_workshop', $filename, 'public');
        //         $pendaftaran->ss_workshop = $path;
        //     }

        // // Save the data to the database
        // $pendaftaran->save();

        // // Redirect or respond accordingly
        // return redirect()->back()->with('success', 'Pendaftaran berhasil!');
    }
}