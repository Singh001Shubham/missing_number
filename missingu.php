<?php
// $arr=[];
// for($i=0;$i<=100;$i++)
// {
//     $arr[]=$i;
// }
// //print_r($arr);
// $arr2=[99,1,2,3,4,5,6,7,8];
// //$arr3=[];
// for($i=0;$i<count($arr);$i++)
// {
//     //echo $arr2[$i];
//    // print_r($arr);
//     if(in_array($i,$arr2))
//     {
//         // echo "match found";
//       // $arr3[]=$arr2[$i];
//     }
//     else
//     {
//         echo $i."</br>";
//     }
    
    // for($j=0;$j<count($arr);$j++)
    // {
    //     if(in_array($i, $arr))
    //     {
    //         //echo "found number"."---".$i;
    //     }
    //     else
    //     {
    //         echo $i."</br>";
    //         break;
    //     }
    // }
//}
$arr=[];
for($i=0;$i<=100;$i++)
{
    $arr[]=0;
}
$arr2=[99,1,2,3,4,5,6,7,8,45,45,0,0];
for($i=0;$i<count($arr2);$i++)
{
   $arr[$arr2[$i]]+=1;
}

for($i=0;$i<count($arr);$i++)
{
    if($arr[$i]==0)
    {
        echo $i."</br>";
    }
 
}
// print_r($arr);die;
?>