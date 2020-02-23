<!DOCTYPE html>
<html lang="en" style="min-height:100%;height:100%;padding:0;margin:0;">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us | GNEC.com</title>
    <!--<link rel="stylesheet" type="text/css" href="stylesheets/email.css" /> -->
    <style type="text/css">
      @media screen {
            @font-face {
              font-family: 'Lato';
              font-style: normal;
              font-weight: 400;
              src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
            }
            }
    </style>
  </head>
  <body style="min-height:100%;height:100%;padding:0;margin:0;font-family: 'Lato', sans-serif; margin:0px; padding:0px;">
    
    <table style="width: 100%; max-width: 600px; margin: 0 auto; ">
      <tr style="padding:0;">
        <td style="padding:0;padding:0;">
          <table style="padding:15px 0px 0px 20px; width:100%;">
            <tr style="padding:0;">
              <td style="padding:0;">
                <h3 style="color:#333; font-weight:500; font-size: 13px;padding:0px 0 15px 0;"></h3>
                
                <p style="color:#333;font-size:13px;text-align:justify;padding:15px 0 15px 0;line-height:22px;">
                {{$user_msg}}</p>
                <p style="color:#333;font-size:13px;">{!! $user_name !!}
                </p>
                <p style="color:#333;font-size:13px;">{!! $user_email !!}
                </p>
                <p style="color:#333;font-size:13px;">{!! $user_mobile !!}
                </p>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>
