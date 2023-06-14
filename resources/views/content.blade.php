<p>
    <h2 class="text text-center">
        You have recieved a new inquiry:
    </h2>
    <h3 class="text text-center">
        {{date('d-m-Y')}} at {{date('h:i:sa')}}
    </h3>
</p>
<p>
    <table class="table table-info table-striped">
        <tbody>
            <tr>
                <td>Name:</td>
                <td>{{$name}}</td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>{{$semail}}</td>
            </tr>
            <tr>
                <td>Contact:</td>
                <td>{{$contact}}</td>
            </tr>
            <tr>
                <td>Message:</td>
                <td>{{$msg}}</td>
            </tr>
        </tbody>
    </table>
</p>
<p>
<h5 class="text text-center" style="color: red">This email is only used for @companyName to contact above inquiry</h5>
</p>