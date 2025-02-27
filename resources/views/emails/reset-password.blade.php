<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <title>Reset Password | {{ env('APP_NAME') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <style type="text/css">
        body {
            width: 650px;
            font-family: Rubik, sans-serif;
            background-color: #f6f7fb;
            display: block;
        }

        a {
            text-decoration: none;
        }

        span {
            font-size: 14px;
        }

        p {
            font-size: 13px;
            line-height: 1.7;
            letter-spacing: 0.7px;
            margin-top: 0;
        }

        .text-center {
            text-align: center
        }

        h6 {
            font-size: 16px;
            margin: 0 0 18px 0;
        }

        @media only screen and (max-width: 767px) {
            body {
                width: auto;
                margin: 20px auto;
            }

            .logo-sec {
                width: 500px !important;
            }
        }

        @media only screen and (max-width: 575px) {
            .logo-sec {
                width: 400px !important;
            }
        }

        @media only screen and (max-width: 480px) {
            .logo-sec {
                width: 300px !important;
            }
        }

        @media only screen and (max-width: 360px) {
            .logo-sec {
                width: 250px !important;
            }
        }
    </style>
</head>

<body style="margin: 30px auto;">
    <table style="width: 100%">
        <tbody>
            <tr>
                <td>
                    <table style="background-color: #f6f7fb; width: 100%">
                        <tbody>
                            <tr>
                                <td>
                                    <table style="margin: 0 auto; margin-bottom: 30px">
                                        <tbody>
                                            <tr class="logo-sec"
                                                style="display: flex; align-items: center; justify-content: space-between; width: 650px;">
                                                <td><img class="img-fluid"
                                                        src="{{ asset('assets/images/other-images/logo-login.png') }}"
                                                        alt=""></td>
                                                {{-- <td style="text-align: right; color:#999"><span>Some Description</span>
                                                </td> --}}
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="margin: 0 auto; background-color: #fff; border-radius: 8px">
                        <tbody>
                            <tr>
                                <td style="padding: 30px">
                                    <h6 style="font-weight: 600">Reset Password</h6>
                                    <p>Kamu lupa password untuk {{ env('APP_NAME') }}. Jika ini benar, klik di bawah
                                        untuk
                                        mereset passwordmu.</p>
                                    <p style="text-align: center">
                                        <a href="{{ $resetLink }}"
                                            style="padding: 10px; background-color: #{{ env('APP_COLOR') }}; color: #fff; display: inline-block; border-radius: 4px">Reset
                                            Password</a>
                                    </p>
                                    <p>Jika kamu ingat passwordmu, kamu bisa mengabaikan email ini.</p>
                                    <p>Semoga berhasil!</p>
                                    <p style="margin-bottom: 0">
                                        Terima kasih,<br>Arunika Prawira</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="margin: 0 auto; margin-top: 30px">
                        <tbody>
                            <tr style="text-align: center">
                                <td>
                                    <p style="color: #999; margin-bottom: 0">Jl. Klayatan Gg.3 No.5, Sukun, Malang, Jawa
                                        Timur, Indonesia</p>
                                    <p style="color: #999; margin-bottom: 0">Dibuat oleh Technobit Indonesia</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>
