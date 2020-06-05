<?php
class Mailer
{
    function __construct()
    {
        $this->CI = &get_instance();
    }
    //=============================================================
    function registration_email($username, $email_verification_link)
    {
        $login_link = base_url('auth/login');
        $tpl =
            '<!DOCTYPE html>
         <html>
            <head>
            <meta name="viewport" content="width=device-width"/>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
            <title>Verifikasi Akun</title>
            </head>
            <body style="margin:0px; background: #f8f8f8; ">
                <div width="100%" style="background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%; width: 100%; color: #3f3844;">
                    <div style="max-width: 700px; padding:50px 0; margin: 0px auto; font-size: 14px">
                      <table border="0" cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 20px">
                        <tbody>
                        <tr>
                            <td style="vertical-align: top; padding-bottom:10px;" align="center">
                                 <a href="#"><br/></a>
                            </td>
                        </tr>
                         </tbody>
                            </table>
                            <div style="padding: 40px; background: #fff;">
                                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="https://riset.hallo.palembang.go.id/onjob/assets/img/Sinaga.png" alt="" title="" style="width:80px;" /><span><a href="index.html"></span><br>
                                                <hr>
                                                <b>Hai ' . strtoupper($username) . '</b>
                                                <p>
                                                  Selamat datang di Sinaga.
                                                </p>
                                                <p>
                                                    Aktifkan akun Anda dengan tautan di bawah dan mulailah Karir Anda.
                                                </p>
                                                <a href="' . $email_verification_link . '" style="display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #4fc3f7; border-radius: 60px; text-decoration:none;">Tombol Aktivasi</a>
                                                <br>
                                                <b>- Sistem Informasi Ketenagakerjaan Kota Palembang</b>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div style="text-align: center; font-size: 12px; color: #b2b2b5; margin-top: 20px">
                                <p>
                                    © Dinas Ketenagakerjaan Kota Palembang <br>
                                </p>
                        </div>
                    </div>
                </div>
            </body>
        </html>
        ';
        return $tpl;
    }

    //=============================================================
    function registration_emp($username, $email_verification_link)
    {
        $login_link = base_url('auth/login');
        $tpl =
            '<!DOCTYPE html>
         <html>
            <head>
            <meta name="viewport" content="width=device-width"/>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
            <title>Verifikasi Akun</title>
            </head>
            <body style="margin:0px; background: #f8f8f8; ">
                <div width="100%" style="background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%; width: 100%; color: #3f3844;">
                    <div style="max-width: 700px; padding:50px 0; margin: 0px auto; font-size: 14px">
                      <table border="0" cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 20px">
                        <tbody>
                        <tr>
                            <td style="vertical-align: top; padding-bottom:10px;" align="center">
                                 <a href="#"><br/></a>
                            </td>
                        </tr>
                         </tbody>
                            </table>
                            <div style="padding: 40px; background: #fff;">
                                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="https://riset.hallo.palembang.go.id/onjob/assets/img/Sinaga.png" alt="" title="" style="width:80px;" /><span><a href="index.html"></span><br>
                                                <hr>
                                                <b>Dear bapak/ibu ' . strtoupper($username) . '</b>
                                                <p>
                                                  Selamat datang di Sinaga.
                                                </p>
                                                <p>
                                                Terima kasih atas kepercayaan Bapak/Ibu dalam memilih Sinaga sebagai mitra perekrutan online Anda.
                                                </p>
                                                 
                                                <p>
                                                Sebelum memposting lowongan anda, Silahkan mengisi form yang tertera pada Profile dan Company.
                                                </p>
                                                <p>
                                                Klik tautan dibawah untuk mengaktifkan akun anda.
                                                </p>
                                                <a href="' . $email_verification_link . '" style="display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #4fc3f7; border-radius: 60px; text-decoration:none;">Tombol Aktivasi</a>
                                                <br>
                                                <b>- Sistem Informasi Ketenagakerjaan Kota Palembang</b>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div style="text-align: center; font-size: 12px; color: #b2b2b5; margin-top: 20px">
                                <p>
                                    © Dinas Ketenagakerjaan Kota Palembang <br>
                                </p>
                        </div>
                    </div>
                </div>
            </body>
        </html>
        ';
        return $tpl;
    }


    //=============================================================
    function pwd_reset_link($username, $reset_link)
    {
        $tpl =
            '<!DOCTYPE html>
     <html>
        <head>
            <meta name="viewport" content="width=device-width"/>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
            <title>Verifikasi Akun</title>
        </head>
        <body style="margin:0px; background: #f8f8f8; ">
            <div width="100%" style="background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%; width: 100%; color:#3f3844;">
                <div style="max-width: 700px; padding:50px 0; margin: 0px auto; font-size: 14px">
                    <table border="0" cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 20px">
                        <tbody>
                            <tr>
                                <td style="vertical-align: top; padding-bottom:10px;" align="center">
                                 <a href="#"><br/></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="padding: 40px; background: #fff;">
                        <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="https://riset.hallo.palembang.go.id/onjob/assets/img/Sinaga.png" alt="" title="" style="width:80px;" /><span><a href="index.html"></span><br>
                                        <hr>
                                                <b>Hai ' . strtoupper($username) . '</b>
                                                <p>
                                                   Kami telah menerima permintaan untuk mereset kata sandi Anda. Jika Anda tidak melakukan permintaan ini, Anda dapat mengabaikan pesan ini dan tidak ada tindakan yang akan diambil.
                                                </p>
                                                <p>
                                                    <p>Untuk mengatur ulang kata sandi Anda, silakan klik tautan di bawah ini:</p> 
                                                </p>
                                                <a  href="' . $reset_link . '" style="display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #4fc3f7; border-radius: 60px; text-decoration:none;">Reset Password</a>
                                                <br>
                                                <b>- Sistem Informasi Ketenagakerjaan Kota Palembang -</b>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div style="text-align: center; font-size: 12px; color: #b2b2b5; margin-top: 20px">
                                <p>
                                    © Dinas Ketenagakerjaan Kota Palembang <br>
                                </p>
                        </div>
                    </div>
                </div>
            </body>
        </html>
    ';
        return $tpl;
    }

    function interview($username, $bagian, $tempat)
    {
        $tpl =
            '<!DOCTYPE html>
     <html>
        <head>
            <meta name="viewport" content="width=device-width"/>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
            <title>Verifikasi Akun</title>
        </head>
        <body style="margin:0px; background: #f8f8f8; ">
            <div width="100%" style="background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%; width: 100%; color:#3f3844;">
                <div style="max-width: 700px; padding:50px 0; margin: 0px auto; font-size: 14px">
                    <table border="0" cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 20px">
                        <tbody>
                            <tr>
                                <td style="vertical-align: top; padding-bottom:10px;" align="center">
                                 <a href="#"><br/></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="padding: 40px; background: #fff;">
                        <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="https://riset.hallo.palembang.go.id/onjob/assets/img/Sinaga.png" alt="" title="" style="width:80px;" /><span><a href="index.html"></span><br>
                                        <hr>
                                                <b>Selamat ' . strtoupper($username) . '</b>
                                                <p>
                                                   Berdasarkan hasil seleksi administrasi, Anda memenuhi kualifikasi untuk mengikuti proses seleksi di <span><b>' . $tempat . '</b></span> untuk posisi <span><b>' . $bagian . '</b></span>
                                                    Panitia Seleksi akan segera menghubungi Anda untuk tahapan selanjutnya.
                                                </p>
                                                <p>
                                                    <p>Terima Kasih</p> 
                                                </p>
                                               
                                                <br>
                                                <b>- Sistem Informasi Ketenagakerjaan Kota Palembang -</b>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div style="text-align: center; font-size: 12px; color: #b2b2b5; margin-top: 20px">
                                <p>
                                    © Dinas Ketenagakerjaan Kota Palembang <br>
                                </p>
                        </div>
                    </div>
                </div>
            </body>
        </html>
    ';
        return $tpl;
    }

    function refused($username, $bagian, $tempat)
    {
        $tpl =
            '<!DOCTYPE html>
     <html>
        <head>
            <meta name="viewport" content="width=device-width"/>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
            <title>Verifikasi Akun</title>
        </head>
        <body style="margin:0px; background: #f8f8f8; ">
            <div width="100%" style="background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%; width: 100%; color:#3f3844;">
                <div style="max-width: 700px; padding:50px 0; margin: 0px auto; font-size: 14px">
                    <table border="0" cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 20px">
                        <tbody>
                            <tr>
                                <td style="vertical-align: top; padding-bottom:10px;" align="center">
                                 <a href="#"><br/></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div style="padding: 40px; background: #fff;">
                        <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="https://riset.hallo.palembang.go.id/onjob/assets/img/Sinaga.png" alt="" title="" style="width:80px;" /><span><a href="index.html"></span><br>
                                        <hr>
                                                <b>Mohon maaf kepada ' . strtoupper($username) . '</b>
                                                <p>
                                                   Berdasarkan hasil seleksi administrasi, Anda dinyatakan tidak lolos.
                                                </p>
                                                <p>
                                                    <p>Terima Kasih</p> 
                                                </p>
                                               
                                                <br>
                                                <b>- Sistem Informasi Ketenagakerjaan Kota Palembang -</b>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div style="text-align: center; font-size: 12px; color: #b2b2b5; margin-top: 20px">
                                <p>
                                    © Dinas Ketenagakerjaan Kota Palembang <br>
                                </p>
                        </div>
                    </div>
                </div>
            </body>
        </html>
    ';
        return $tpl;
    }
}
