<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="icon" href="../../assets/img/icons/foundation-favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/foundation-emails/2.2.1/foundation-emails.min.css"
        rel="stylesheet">
    <title>Contact Messenger - {{ $subject }}</title>
</head>

<body>
    <style type="text/css">
        .header {
            background: #f8DBBF;
        }

        .header .columns {
            padding-bottom: 0;
        }

        .header p {
            color: #fff;
            margin-bottom: 0;
        }

        .header .wrapper-inner {
            padding: 20px;
            /*controls the height of the header*/
        }

        .header .container {
            background: #8a8a8a;
        }

        .wrapper.secondary {
            background: #f3f3f3;
        }

        button {
            background-color: #0084FF;
            border: none;
            padding: 10px;
            border-radius: 15px;
            color: white;
            transition-duration: .2s;
        }

        button:focus {
            outline: none;
        }

        button:hover{
            background-color: rgb(76, 165, 248);
            transition-duration: .2s;
        }

    </style>

    <table align="center" bgcolor="#8A8A8A" class="wrapper header float-center">
        <tr>
            <td class="wrapper-inner">
                <table align="center" class="container">
                </table>
            </td>
        </tr>
    </table>
    <table align="center" class="container float-center">
        <tbody>
            <tr>
                <td>
                    <table class="spacer">
                        <tbody>
                            <tr>
                                <td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="row">
                        <tbody>
                            <tr>
                                <th class="small-12 large-12 columns first last">
                                    <table>
                                        <tr>
                                            <th>
                                                <h1>Hello, {{ $name }}</h1>
                                                <p> You have sent an email from our website with the message:</p>
                                                <p>{{ $content }}</p>
                                                <a href="{{ route('home') }}">
                                                    <button>Go back to website</button>
                                                </a>
                                            </th>
                                            <th class="expander"></th>
                                        </tr>
                                    </table>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                    <table align="center" class="wrapper secondary">
                        <tr>
                            <td class="wrapper-inner">
                                <table class="spacer">
                                    <tbody>
                                        <tr>
                                            <td height="16px" style="font-size:16px;line-height:16px;">&#xA0;</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="row">
                                    <tbody>
                                        <tr>
                                            <th class="small-12 large-6 columns last">
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- prevent Gmail on iOS font size manipulation -->
    <div style="display:none; white-space:nowrap; font:15px courier; line-height:0;"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </div>
</body>

</html>
