<div style=" width:600px;
    margin: 0 auto;
    padding: 15px;
    text-align: center">
    <h2>HI {{$customer->last_name}}</h2>
    <p>You forgot your pasword</p>
    <p>We sent this email to you for the wrong purpose to help you recover your account</p>
    <p>Please click the button below to send back to the password change page</p>
    <p>
        <a href="{{route('GetResetPass', ['customer' => $customer->id])}}" style="display:inline-block; background: green; color:#fff; padding: 7px 25px; font-weight:bold">Get Password</a>
    </p>
</div>