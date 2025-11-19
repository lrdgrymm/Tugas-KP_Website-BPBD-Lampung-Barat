<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    // Halaman list gallery admin
    public function index()
    {
        $galleries = Gallery::latest()->paginate(12);
        return view('admin.gallery.index', compact('galleries'));
    }

    // Form tambah gallery
    public function create()
    {
        return view('admin.gallery.create');
    }


  

    // Simpan gallery baru
    public function store(Request $request)
    {
        function convertYouTubeToEmbed($url)
        {
            // Link panjang YouTube
            if (preg_match('/youtube\.com\/watch\?v=([a-zA-Z0-9_\-]+)/', $url, $matches)) {
                return 'https://www.youtube.com/embed/' . $matches[1];
            }

            // Link pendek YouTube
            if (preg_match('/youtu\.be\/([a-zA-Z0-9_\-]+)/', $url, $matches)) {
                return 'https://www.youtube.com/embed/' . $matches[1];
            }

            // Jika bukan YouTube, kembalikan apa adanya
            return $url;
        }
        
        $request->validate([
            'judul' => 'required|string|max:255',
            'tipe' => 'required|in:foto,video',
            'sumber_tipe' => 'required|in:upload,link',
            'keterangan' => 'nullable|string',
        ]);

        $path = null;

        if ($request->sumber_tipe == 'upload') {
            // Validasi file berdasarkan tipe
            if ($request->tipe == 'foto') {
                $request->validate([
                    'file_upload' => 'required|file|mimes:jpeg,png,jpg,gif|max:5120',
                ]);
            } else {
                $request->validate([
                    'file_upload' => 'required|file|mimes:mp4,mov,avi,wmv|max:5120',
                ]);
            }

            // Simpan file ke storage/app/public/gallery
            $path = $request->file('file_upload')->store('gallery', 'public');

        } else { 
            // Link eksternal
            $request->validate([
                'link_url' => 'required|url',
            ]);
            $path = convertYouTubeToEmbed($request->link_url    );
        }

        Gallery::create([
            'judul' => $request->judul,
            'tipe' => $request->tipe,
            'sumber_tipe' => $request->sumber_tipe,
            'path' => $path,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('admin.gallery.index')
            ->with('success', 'Item galeri berhasil ditambahkan.');
    }

    // Hapus gallery
    public function destroy(Gallery $gallery)
    {
        if ($gallery->sumber_tipe == 'upload' && $gallery->path) {
            Storage::disk('public')->delete($gallery->path);
        }

        $gallery->delete();

        return redirect()->route('admin.gallery.index')
            ->with('success', 'Item galeri berhasil dihapus.');
    }
}
