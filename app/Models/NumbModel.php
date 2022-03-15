<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class NumbModel extends Model
{
    public $timestamps = false;
    protected $table = 'numb';
    protected $fillable = ['number','categ','id'];
    use HasFactory;
    static function categorizeNumbers(){
        $allNumbers = NumbModel::all();
        foreach($allNumbers as $number){
            $array= str_split($number['number']);
            NumbModel::categorization(
                $array[0],
                $array[1],
                $array[2],
                $array[3],
                $array[4],
                $number
            );
        }
    }
    static function categorization($a,$b,$c,$d,$e,$number)
        {
            if ( ($a==$b)&&($b==$c)&&($c==$d)&&($d==$e))

            {
            	// echo ( " your number is platinum");
                if(is_null($number->categ)){
                    $number->categ= 'platinum';
                    $number->save();
                }

            }

            else if ( ($b==($a+1))&&($c==($b+1))&&($d==($c+1))&&($e==($d+1))) {
            	// echo( " your number is platinum");
                if(is_null($number->categ)){
                $number->categ= 'platinum';
                $number->save();
                }
            }
            else if ( ( ($b==($a-1))&&($c==($b-1))&&($d==($c-1))&&($e==($d-1))) ) {
            	// echo( " your number is platinum");
                if(is_null($number->categ)){
                $number->categ= 'platinum';
                $number->save();
                }
            }
            else if ( ($b!=($a+1))&&($c==($b+1))&&($d==($c+1))&&($e==($d+1))) {
            	// echo( " your number is golden");
                if(is_null($number->categ)){
                $number->categ= 'golden';
                $number->save();
                }
            }
            else if ( ($b==($a+1))&&($c==($b+1))&&($d==($c+1))&&($e!=($d+1))) {
            	// echo( " your number is golden");
                if(is_null($number->categ)){
                $number->categ= 'golden';
                $number->save();
                }
            }
            else if ( ( ($b!=($a-1))&&($c==($b-1))&&($d==($c-1))&&($e==($d-1))) ) {
            	// echo( " your number is golden");
                if(is_null($number->categ)){
                $number->categ= 'golden';
                $number->save();
                }
            }
            else if ( ( ($b ==($a-1))&&($c==($b-1))&&($d==($c-1))&&($e!=($d-1))) ) {
            	// echo( " your number is golden");
                if(is_null($number->categ)){
                $number->categ= 'golden';
                $number->save();
                }
            }else {
            	NumbModel::counting(str_split($number['number']),$number);
            }
    }
    static function counting($intArray,$number)
    {
        $totalcount= -1;
        for ($i=0 ; $i<=4 ; $i++)
        {
            $count = 0 ;
	        for ($j=0 ; $j<=4 ; $j++)
	        {
	            if ( $intArray[$i] == $intArray[$j])
	            {
                    $count++;
	                if ( $count > $totalcount){
   	                $totalcount=$count;
	                }

	            }
            }
        }

        if($totalcount==4)
        {
            // echo( " your number is golden");
            if(is_null($number->categ)){
            $number->categ= 'golden';
                $number->save();
            }
        }
        if($totalcount==3){
            // echo( " your number is silver");
            if(is_null($number->categ)){
            $number->categ= 'silver';
                $number->save();
            }
        }
        else  {
        // echo( " your number is bronze");
        if(is_null($number->categ)){
        $number->categ= 'bronze';
                $number->save();
        }
        }
    }
    static function generateNewNumbers(){
        for($a=1;$a<=1;$a++)
{
    for($b=1;$b<=1;$b++)
    {
        for ($c=1;$c<=2;$c++)
        {
    for ($d=0;$d<=9;$d++)
    {
    for ($e=0; $e<=9;$e++)
    {

       $num= ($e+($d*10)+($c*100)+($b*1000)+($a*10000));

       NumbModel::create([
           'number' => $num
       ]);


   }
}
}
}
}
    }
public function category(){
    return $this->belongsTo(CategoryModel::class,'categ','categ');
}

}
