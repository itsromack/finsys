<!doctype html>
<html style="margin:0; padding:0;">
<head>
<meta charset="UTF-8">
<title>Knightcorp</title>
</head>
<body style="margin:0; padding:0; font-family: 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;">
  <table bgcolor="#FFFFFF" style="font-size: 100%; line-height: 1.6em; width: 100%; margin:0; padding:20px 0 0;">
   <tr>
     <td bgcolor="#FFFFFF" style="font-size: 100%; line-height: 1.6em; clear: both !important; display: block !important; max-width: 600px !important; margin: 0 auto; padding:20px;">
       <h1 style="height:auto; margin:0 auto; padding:20px 0; text-align:center;"><img src="{{ $app_logo_url }}" height="70" /></h1>
     </td>
   </tr>
 </table>
  <table bgcolor="#FFFFFF" style="font-size: 100%; line-height: 1.6em; width: 100%; margin: 0; padding:0 0 20px;">
    <tr style="width:100%; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0; border-bottom-width:1px;">
      <td class="container" bgcolor="#FFFFFF" style="font-size: 100%; line-height: 1.6em; clear: both !important; display: block !important; max-width: 600px !important; Margin: 0 auto; padding: 20px;">
        <table style="font-size: 100%; line-height: 1.6em; width: 100%; margin: 0; padding: 0;">
          <tr style="width:100%; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;">
            <td style="width:100%; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;">

                @yield('content')

                <h2 style="font-size: 16px; line-height: 1.2em; color: #111111; font-weight: normal; margin: 0 0 20px; padding: 0;">Sincerely,<br />Knightcorp Insurance Brokers</h2>
              
                <p style="border-bottom:1px solid #CCC; width:30%; margin:0 auto 50px; padding-top:50px;"></p>
                <p style="text-align:center; color:#999; font-size: 22px; line-height: 1.6em; font-weight: 300; margin: 0 0 10px; padding: 0;">Knightcorp Insurance Brokers have access to all major Australian and International insurance markets.</p>
            </td>
          </tr>
        </table>
        
      </td>
    </tr>
  </table>

  <table style="background:#222222; width:100%;">
    <tr>
      <td style="max-width: 600px !important; margin: 0 auto; padding: 0;">
        <p style="text-align:center; font-size: 12px; line-height: 1.6em; color: #999; font-weight: normal; margin:20px 0; padding: 0;">Don't like to receive emails? 
          <a href="#" style="font-size: 100%; line-height: 1.6em; color: #ccc; margin: 0; padding: 0;">Unsubscribe</a>.
        </p>
      </td>
    </tr>
  </table>
</body>
</html>