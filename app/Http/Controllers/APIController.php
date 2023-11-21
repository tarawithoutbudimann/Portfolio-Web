<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;


 class APIController extends Controller
 {
     /**
      * @OA\Get(
      *   path="/api/gallery",
      *   tags={"gallery"},
      *   summary="Returns a Gallery API",
      *   description="API for accessing the Gallery",
      *   operationId="Get",
      *   @OA\Response(
      *     response="default",
      *     description="successful operation"
      *   )
      * )
      */
     public function index()
     {
         $post = Post::all();
 
         return response()->json([
             "data" => $post 
         ]);
     }
 
     /**
      * @OA\Post(
      *     path="/api/gallery",
      *     tags={"gallery"},
      *     summary="API Upload",
      *     description="API untuk mengirimkan data-data postingan",
      *     operationId="postGallery",
      *     @OA\RequestBody(
      *         required=true,
      *         description="Data untuk mengunggah gambar",
      *         @OA\MediaType(
      *             mediaType="multipart/form-data",
      *             @OA\Schema(
      *                 @OA\Property(
      *                     property="title",
      *                     description="Judul Upload",
      *                     type="string"
      *                 ),
      *                 @OA\Property(
      *                     property="description",
      *                     description="Deskripsi Gambar",
      *                     type="string"
      *                 ),
      *                 @OA\Property(
      *                     property="image",
      *                     description="File Gambar",
      *                     type="string",
      *                     format="binary"
      *                 ),
      *             )
      *         )
      *     ),
      *     @OA\Response(
      *         response="default",
      *         description="Successful operation"
      *     )
      * )
      */
     public function store(Request $request)
     {
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required',
            'picture' => 'image|nullable|max:1999'
        ]);
    
        $filenameSimpan = 'noimage.png';
    
        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $basename = uniqid() . time();
            $filenameSimpan = "{$basename}.{$image->getClientOriginalExtension()}";
    
            // Save the original image
            $path = $request->file('picture')->storeAs('posts_image/asli', $filenameSimpan);
    
            // Create and save thumbnail
            $thumbnailPath = public_path("storage/posts_image/resize/{$filenameSimpan}");
            $thumbnail = Image::make($image)->fit(400,200);
            $thumbnail->save($thumbnailPath);
        }
    
        $post = new Post;
        $post->picture = $filenameSimpan;
        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->save();
    
        return redirect()->route('gallery.web')->with('success', 'Berhasil menambahkan data baru');
    }
}  
