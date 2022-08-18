<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $url = '';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = Carbon::now()->toDateString() . $file->getClientOriginalName();
            $this->uploadPrivateFile($file, $name);
            $url = $this->generateFullUrlFile($name);
        }

        return view('welcome', compact('url'));

    }

    /**
     * @param UploadedFile $file
     * @param string $fileName
     * @return string
     */
    public
    function uploadPrivateFile(UploadedFile $file, string $fileName): string
    {
        $fileName = Storage::disk('s3')->put($fileName, $file->getContent(), 'private');

        return Storage::disk('s3')->url($fileName);
    }

    /**
     * Generate full url for file.
     *
     * @param string $fileName
     * @return string
     */
    public
    function generateFullUrlFile(string $fileName): string
    {
        return Storage::disk('s3')->temporaryUrl($fileName, now()->addMinutes(5));
    }
}
