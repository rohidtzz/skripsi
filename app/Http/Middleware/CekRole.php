<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Absen;

use App\Models\SettingJam;
use App\Models\DataUser;

use App\Models\Penyuratan;


// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

class CekRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next,$jabatan)
    {



        if($request->user() && $request->user()->jabatan == $jabatan){
        //     $jammasuk = SettingJam::find(1)->jam_masuk;
        // $jamkeluar = SettingJam::find(1)->jam_keluar;

        // $date=date_create($jammasuk);
        // date_add($date,date_interval_create_from_date_string("+5 minutes"));
        // $jammasuklebih5 = date_format($date,"H:i:s");

        // $datu=date_create($jammasuk);
        // date_add($datu,date_interval_create_from_date_string("+10 minutes"));
        // $jammasuklebih10 = date_format($datu,"H:i:s");

        // $dati=date_create($jamkeluar);
        // date_add($dati,date_interval_create_from_date_string("-5 minutes"));
        // $jamkeluarkurang5 = date_format($dati,"H:i:s");

        // $user = User::all();


        // dd($user);



        // $all = Absen::where('user_id',$user)->whereTime('jam_masuk', '>=', $jammasuklebih10)->whereTime('jam_masuk', '<=', $jamkeluarkurang5)->get();

        // Penyuratan::create([
        //     'user_id' => $id,
        //     'tanggal' => Date('Y/m/d'),
        //     'alpha' => $all->count(),
        // ]);

            // $subjek = 'awakw';
            // $tujuan = "rohidtzz@gmail.com";
            // $pesan = "selamat";

            // require '/vendor/autoload.php';
            // require 'PHPMailerAutoload.php';

            // require 'class.phpmailer.php';
            // require 'class.smtp.php';

            // include_once(base_path().'/vendor/PHPMailer/src/PHPMailer.php');
            // include_once(base_path().'/vendor/PHPMailer/src/SMTP.php');
            // include_once(base_path().'/vendor/PHPMailer/src/Exception.php');

            //Create an instance; passing `true` enables exceptions
            // $mail = new PHPMailer();


            //     //Server settings
            //     $mail->SMTPDebug = 0;                      //Enable verbose debug output
            //     $mail->isSMTP();                                            //Send using SMTP
            //     $mail->Host       = env('MAIL_HOST');                     //Set the SMTP server to send through
            //     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            //     $mail->Username   = env('MAIL_USERNAME');                     //SMTP username
            //     $mail->Password   = env('MAIL_PASSWORD');                               //SMTP password
            //     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
            //     $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //     //Recipients
            //     $mail->setFrom('skripsi.hidtzz.my.id', 'Hrd');
            //     $mail->addAddress('rohidtzz@gmail.com', 'Joe User');  //Optional name

            //     //Content
            //     $mail->isHTML(true);                                  //Set email format to HTML
            //     $mail->Subject = 'Here is the subject';
            //     $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            //     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            //     $mail->send();


          return $next($request);



        }


        return redirect('/')->with('errors', 'silahkan login terlebih dahulu');

    }
}
