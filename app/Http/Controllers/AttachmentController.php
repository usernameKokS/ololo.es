<?php

namespace App\Http\Controllers;

use App\Attachment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\DocBlock\Tags\Method;

class AttachmentController extends Controller
{
    private $maxPhotos = 40;
    private $maxVideos = 6;
    private $extPhotos = ['jpg', 'jpeg', 'png', 'gif'];
    private $extVideos = ['mp4', 'avi', 'mov', 'wmv', 'flv', 'mkv'];

    public function isPhoto($file)
    {
        $ext = $file->getClientOriginalExtension();
        $ext = strtolower($ext);
        if ($ext == 'jpg' || $ext == 'jpeg' || $ext == 'png' || $ext == 'gif') {
            return true;
        }
        return false;
    }

    public function isVideo($file)
    {
        $ext = $file->getClientOriginalExtension();
        $ext = strtolower($ext);
        if ($ext == 'mp4' || $ext == 'avi' || $ext == 'mov' || $ext == 'wmv') {
            return true;
        }
        return false;
    }

    /**
     * Upload multiple files
     *
     * @param Request $request
     * @return false|string
     */
    public function store(Request $request)
    {
        $request->validate([
            'files' => 'required',
            'post_id' => 'required',
        ]);

        $files = $request->file('files');

        foreach ($files as $file) {
            $file_path = $file->store('public/attachments');
            $file_url = Storage::url($file_path);

            $countPhotos = Attachment::where('post_id', $request->post_id)->whereIn('extension', $this->extPhotos)->count();
            $countVideos = Attachment::where('post_id', $request->post_id)->whereIn('extension', $this->extVideos)->count();

            if ($this->isPhoto($file)) {
                if ($countPhotos >= $this->maxPhotos) {
                    Storage::delete($file_path);
                    return response()->json(['message' => 'Max photos reached'], 422);
                }
            }

            if ($this->isVideo($file)) {
                if ($countVideos >= $this->maxVideos) {
                    Storage::delete($file_path);
                    return response()->json(['message' => 'Max videos reached'], 422);
                }
            }

            Attachment::create([
                'name' => $file->getClientOriginalName(),
                'size' => $file->getSize(),
                'extension' =>$file->getClientOriginalExtension(),
                'mime' =>$file->getMimeType(),
                'url' => $file_url,
                'user_id' => auth()->user()->id,
                'post_id' => $request->post_id,
            ]);
        }

        return json_encode(['type' => 'success', 'post_attachments' => Attachment::where('post_id', $request->post_id)->get()]);
    }


    /**
     * Return attachments for post
     *
     * @param $post_id
     * @return false|string
     */
    public function get_attachments($post_id)
    {
        return json_encode(['type' => 'success', 'post_attachments' => Attachment::where('post_id', $post_id)->get()]);
    }

    /**
     * Delete attachment
     *
     * @param $id
     * @return false|string
     */
    public function delete($id)
    {
        $attachment = Attachment::find($id);
        $attachment->delete();

        Storage::delete(str_replace('/storage', 'public', $attachment->url));
        return json_encode(['type' => 'success', 'message' => 'Attachment deleted']);
    }


    /**
     * Set attachment as featured
     *
     * @param $id
     * @return false|string
     */
    function set_cover(Request $request)
    {
        $request->validate([
            'id' => 'required',
        ]);
        $attachment = Attachment::find($request->id);

        // set all attachments as not featured
        Attachment::where('post_id', $attachment->post_id)->update(['as_cover' => 0]);

        $attachment->as_cover = 1;
        $attachment->save();
        return json_encode(['type' => 'success', 'message' => 'Attachment set as cover']);
    }


}
