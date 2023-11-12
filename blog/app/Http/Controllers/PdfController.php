<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use PDF;

class PdfController extends Controller
{
    public function imprimirPost($id)
    {
        $post = Post::findOrFail($id);
        $pdf = PDF::loadView('pdf.post', compact('post')); // 'pdf.post' será tu vista Blade
        return $pdf->stream('post-' . $post->slug . '.pdf');
    }
}
