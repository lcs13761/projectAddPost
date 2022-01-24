<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>teste</title>
    <style>
        body {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            font-family: Helvetica, sans-serif;
            margin: 0;
            padding: 0;
        }

        table {
            max-width: 500px;

        }

        a.active {
            color: #ccc;
        }

        .image {
            padding: 15px 0 15px 0;
        }

        .content {
            font-size: 16px;
        }

        .content p {
            margin: 25px 0;
            color: #fff;
        }

        p {
            color: #eee;
            font-size: 14px;
        }

        .footer {
            font-size: 14px;
            color: #888888;
            font-style: italic;
            padding-bottom: 10px;
        }

        .button {
            -webkit-text-size-adjust: none;
            border-radius: 4px;
            align-self: center;
            align-items: center;
            color: #fff !important;
            padding: 10px;
            display: inline-block;
            overflow: hidden;
            text-decoration: none;
        }


        .button-blue {
            background-color: rgb(0, 103, 254, 1);
            border-bottom: 8px solid rgb(0, 103, 254, 1);
            border-left: 18px solid rgb(0, 103, 254, 1);
            border-right: 18px solid rgb(0, 103, 254, 1);
            border-top: 8px solid rgb(0, 103, 254, 1);
        }

        .footer p {
            margin: 0 0 2px 0;
        }

    </style>
</head>

<body>
    <table align="center" role="presentation" border="0" cellpadding="0" width="100%" cellspacing="0">
        <tr bgcolor="#1A1919">
            <td style="padding: 10px 30px 20px 30px">
                @yield('content')
            </td>
        </tr>
        <tr bgcolor="#2B2B2B">
            <td style="padding: 10px 30px;">
                <div class="footer">

                </div>
            </td>
        </tr>
    </table>
</body>

</html>
