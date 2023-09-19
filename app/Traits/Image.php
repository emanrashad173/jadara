<?php

namespace App\Traits;


trait Image
{       
    public function upload_single_file($request_file, $path)
    {
        $name = time() . '_' . $this->randNumber() . '.' . $request_file->getClientOriginalExtension();
        $request_file->move(storage_path($path), $name);
        return $name;
    }
    
    
    public function delete_single_file($request_file, $path)
    {
        unlink(storage_path($path . "/" . $request_file));
    }
    
    public function randNumber($length = 12 )
    {
    
        $seed = str_split('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
    
        shuffle($seed);
    
        $rand = '';
    
        foreach (array_rand($seed, $length) as $k) $rand .= $seed[$k];
    
        return $rand;
    }
    
    

}