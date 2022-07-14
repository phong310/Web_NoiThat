<?php 
include "Connect.php";
session_start();
if(isset($_GET['MASP'])){
    $MASP = $_GET['MASP'];
}
//session_destroy();
$action = (isset($_GET['action'])) ? $_GET['action'] :'add';
$soluong= (isset($_GET['soluong'])) ? $_GET['soluong'] :'1';
echo $action;
echo $MASP;
                                        $query = mysqli_query($conn,"Select * from sanpham where MASP ='$MASP'"); 
                                       
                                            $row = mysqli_fetch_array($query);
                                        $item =[
                                            'MASP'=>$row['MASP'],
                                            'TENSP'=>$row['TENSP'],
                                            'ANH'=>$row['ANH'],
                                            'GIABAN'=>$row['GIABAN'],
                                            'soluong'=> 1
                                        ];
                                        if($action =='add'){
                                            if(isset($_SESSION['cart'][$MASP])){
                                               $_SESSION['cart'][$MASP]['soluong'] += $soluong;
                                            }
                                            else{
                                                $_SESSION['cart'][$MASP]=$item;
                                            }
                                        }
                                         if($action == 'delete'){
                                             
                                            unset($_SESSION['cart'][$MASP]); 
                                         }                                     
                                        if($action == 'update'){
                                          $_SESSION['cart'][$MASP]['soluong']= $soluong;
                                        }
                                        header('location:cart.php');
                                       echo'<pre>';
                                        print_r($_SESSION['cart']);
                                       
?>