/**
 * Created by tranbaohuu on 5/22/2015.
 */





$(document).ready(function () {


    $('#example').dataTable().fnAddData( [
        sip.sip_number,
        sip.ipaddr,
        sip.sip_password,
        "<button class='btn btn-danger' onclick=\"ButtonTrash(this);\">"] );


});


