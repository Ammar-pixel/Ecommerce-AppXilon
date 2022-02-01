<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use League\Flysystem\Adapter\Local;
use Exception;
use Artisan;
use Log;
use Session;
use Response;
use Illuminate\Support\Facades\Storage;

class BackupController extends Controller{
     public function index(){
          foreach (config('backup.backup.destination.disks') as $disk_name) {
               $disk = Storage::disk($disk_name);
               $files = $disk->allFiles();
               $backups = [];
               foreach ($files as $k => $f) {
                    if (substr($f, -4) == '.zip' && $disk->exists($f)) {
                         $backups[] = [
                              'file_path' => $f,
                              'file_name' => str_replace('backups/', '', $f),
                              'file_size' => $disk->size($f),
                              'last_modified' => $disk->lastModified($f),
                              'disk'          => $disk_name,
                         ];
                    }
               }
               $backups = array_reverse($backups);
               return view("backup.backups")->with(compact('backups'));
          }
     }

    public static function humanFileSize($size,$unit="") {
          if( (!$unit && $size >= 1<<30) || $unit == "GB")
               return number_format($size/(1<<30),2)."GB";
          if( (!$unit && $size >= 1<<20) || $unit == "MB")
               return number_format($size/(1<<20),2)."MB";
          if( (!$unit && $size >= 1<<10) || $unit == "KB")
               return number_format($size/(1<<10),2)."KB";
          return number_format($size)." bytes";
     }

    public function create(){
         try {
              /* only database backup*/
              Artisan::call('backup:run --only-db');
              /* all backup */
              /* Artisan::call('backup:run'); */
              $output = Artisan::output();
              Log::info("Backpack\BackupManager -- new backup started \r\n" . $output);
              session()->flash('success', 'Successfully created backup!');
              return redirect()->back();
          } catch (Exception $e) {
               session()->flash('danger', $e->getMessage());
               return redirect()->back();
          }
     }

     public function download($file_path) {
          /*$disk = Storage::disk(Request::input('disk'));
          $file = Request::input($file_name);
          $adapter = $disk->getDriver()->getAdapter();

          if ($adapter instanceof Local) {
               $storage_path = $disk->getDriver()->getAdapter()->getPathPrefix();
               console.log($storage_path) ;
               if ($disk->exists($file_name)) {
                    return response()->download($storage_path.$file_name);
               } else {
                    session()->flash('fail', 'Unable to download backup!');
                    error_log('Hotak ko.');
                    Log::info("message2");
               }
          } else {
               abort(404, "Only Local Downloads supported.");
          }*/
          /*$file = $file_path;
          $disk = Storage::disk(config('backup.backup.destination.disks'));

          if ($disk->exists($file)) {
               $fs = Storage::disk($disk)->getDriver();
               $stream = $fs->readStream($file);
               return Response::stream(function () use ($stream) {
                    fpassthru($stream);
               }, 600, [
                    "Content-Type" => $fs->getMimetype($file),
                    "Content-Length" => $fs->getSize($file),
                    "Content-disposition" => "attachment; filename=\"" . basename($file) . "\"",
               ]);
          } else {
               abort(404, "Backup file doesn't exist.");
          }*/
          $myFile = storage_path("folder/dummy_pdf.pdf");
          return response()->download($myFile);
     }
     public function delete($file_name){
          $disk = Storage::disk(config('backup.backup.destination.disks'));
          if ($disk->exists($file_name)) {
              $disk->delete($file_name);
              session()->flash('delete', 'Successfully deleted backup!');
              return redirect()->back();
          }else {
               return redirect()->back();
          }
     }
}
