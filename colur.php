<?php
$data = '';
$jam = 1;
$sisa = 2;
$total = 2;
$uid = 1;
$row['loket_name'] = 2;
$row['first_name'] = 'haidar';
$user['first_name'] = 'haidar';

$data .= '<div class="col-md-2 col-xs-2"><center><h1>'.$sisa.'</h1></center></div>';

						$data .= '<div class="col-md-10 col-xs-10" style="background-color:#4caf50; color:#fff">

						<center><h2><i class="fa fa-check"></i>Scan berhasil,  Silahkan Ambil</h2><hr />';

						$data .= '<center><small>'.$jam.' | '.$row['first_name'].'</small>';

                        $data .='</center></div>';
                        


                        $data .= '<div class="col-md-2 col-xs-2"><center><h1>'.$sisa.'</h1></center></div>';

                        $data .= '<div class="col-md-10 col-xs-10" style="background-color:#4caf50; color:#fff">

                        <center><h2><i class="fa fa-check"></i>Scan berhasil, Silahkan Ambil</h2><hr />';

                        $data .= '<center><small>'.$jam.' | '.$row['first_name'].'</small>';

                        $data .="</center></div>";


                        $data .= '<div class="col-md-2 col-xs-2"><center><h1>0</h1></center></div>';

							$data .= '<div class="col-md-10 col-xs-10" style="background-color:#F44336; color:#fff">

							<center><h2><i class="fa fa-check"></i>Sudah Habis, Coba Loket Lain</h2><hr />';

							$data .= '<center><small>'.$jam.' | '.$row['first_name'].'</small>';

							$data .='</center></div>';



                            $data .= '<div class="col-md-2 col-xs-2"><center><h1>'.$sisa.'</h1></center></div>';

                            $data .= '<div class="col-md-10 col-xs-10" style="background-color:#FFD700">
                            <center><h2><i class="fa fa-times"></i>Scan salah, silahkan antri di loket '.$row['loket_name'].'</h2><hr />';
        
                            $data .= '<center><small>'.$jam.' - '.$row['first_name'].'</small></div>';



                            $data .= '<div class="col-md-2 col-xs-2"><center><h1>'.$sisa.'</h1></center></div>';

                            $data .= '<div class="col-md-10 col-xs-10" style="background-color:#F44336;color:#fff;">
                            <center><h2><i class="fa fa-times"></i>Pesanan Sudah Diambil</h2>';
    
                            $data .= '<center><small>'.$jam.' - '.$row['first_name'].'</small></center></div>';


                            $data .= '<div class="col-md-2 col-xs-2"><center><h1>'.$total.'</h1></center></div>';

							$data .= '<div class="col-md-10 col-xs-10" style="background-color:#F44336;color:#fff">

										<center><h2><i class="fa fa-check"></i>Tidak order, Silahkan ambil menu unplan</h2><hr />';

							$data .= '<center><small>'.$jam.' | '.$user['first_name'].'</small>';

                            $data .= '</center></div>';     
                            
                            

                            $data .= '<div class="col-md-2 col-xs-2"><center><h1>'.$total.'</h1></center></div>';

							$data .= '<div class="col-md-10 col-xs-10" style="background-color:#4659c1; color:#fff">
							<center><h2><i class="fa fa-times"></i> Mohon Maaf Menu Sudah Habis</h2><hr />';

                            $data .= '<center><small></small></center></div>';
                            

                            $data .= '<div class="col-md-10 col-xs-10" style="background-color:#4caf50; color:#fff">

                            <center><h2><i class="fa fa-check"></i> Scan Berhasil, Silahkan Ambil</h2><hr />';

                $data .= '<center><small>'.$jam.' | '.$user['first_name'].'</small>';

                $data .= '</center></div>';                 


                $data .= '<div class="col-md-10 col-xs-10" style="background-color:#4659c1; color:#fff">

                <center><h2><i class="fa fa-check"></i>Sudah Habis, Coba Loket Lain</h2><hr />';

    $data .= '<center><small>'.$jam.' | '.$user['first_name'].'</small>';

    $data .= '</center></div>';  
    
    

    $data .= '<div class="col-md-2 col-xs-2"><center><h1>'.$total.'</h1></center></div>';

							$data .= '<div class="col-md-10 col-xs-10" style="background-color:#F44336; color:#fff">
							<center><h2><i class="fa fa-times"></i>Menu Sudah Dipesan</h2><hr />';

                            $data .= '<center><small></small></center></div>';
                            

                            $data .= '<center style="background-color:#F44336;color:#fff;">
                            <h2 class="text-white"><i class="fa fa-times"></i>Scan gagal, kartu tidak terdaftar</h2><hr />';
        
                            $data .= '<small>'.$jam.' '.$uid.'</small>';
        
                            $data .= '</center>';



                            $data .= '<center><h2><i class="fa fa-times"></i> TIDAK ADA MENU DI LINE INI</h2><hr />';

                            $data .= '<small>'.$jam.' '.$uid.'</small>';
                    
                            $data .= '</center>';

echo $data;