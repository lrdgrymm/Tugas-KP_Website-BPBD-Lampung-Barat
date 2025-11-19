<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index()
    {
        $semua_berita = Berita::latest('tanggal_publikasi')->paginate(10);
        return view('admin.berita.index', compact('semua_berita'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi_berita' => 'required|string',
            'gambar' => 'required|image|max:2048',
            'penulis' => 'required|string',
            'tanggal_publikasi' => 'required|date',
            'external_link' => 'nullable|url',
        ]);

        $path = $request->file('gambar')->store('berita', 'public');

        Berita::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'external_link' => $request->external_link,
            'ringkasan' => Str::limit(strip_tags($request->isi_berita), 150),
            'isi_berita' => $request->isi_berita,
            'gambar' => basename($path),
            'penulis' => $request->penulis,
            'tanggal_publikasi' => $request->tanggal_publikasi,
        ]);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    public function edit(Berita $beritaAdmin)
    {
        return view('admin.berita.edit', ['berita' => $beritaAdmin]);
    }

    public function update(Request $request, Berita $beritaAdmin)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi_berita' => 'required|string',
            'gambar' => 'nullable|image|max:2048',
            'penulis' => 'required|string',
            'tanggal_publikasi' => 'required|date',
            'external_link' => 'nullable|url',
        ]);

        $data = [
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'external_link' => $request->external_link,
            'ringkasan' => Str::limit(strip_tags($request->isi_berita), 150),
            'isi_berita' => $request->isi_berita,
            'penulis' => $request->penulis,
            'tanggal_publikasi' => $request->tanggal_publikasi,
        ];

        if ($request->hasFile('gambar')) {
            if ($beritaAdmin->gambar && Storage::exists('public/berita/' . $beritaAdmin->gambar)) {
                Storage::delete('public/berita/' . $beritaAdmin->gambar);
            }

            $path = $request->file('gambar')->store('berita', 'public');
            $data['gambar'] = basename($path);
        }

        $beritaAdmin->update($data);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy(Berita $beritaAdmin)
    {
        try {
            if ($beritaAdmin->gambar) {
                $fullPath = 'public/berita/' . $beritaAdmin->gambar;

                if (Storage::exists($fullPath)) {
                    Storage::delete($fullPath);
                }
            }

            $beritaAdmin->delete();

            return redirect()->route('admin.berita.index')
                ->with('success', 'Berita berhasil dihapus.');

        } catch (\Exception $e) {
            return redirect()->route('admin.berita.index')
                ->with('error', 'Gagal menghapus berita: ' . $e->getMessage());
        }
    }
}
