$(document).ready(function(){
        // Countries
        var country_arr = new Array("AUSTRALIA","INDIA","NEW ZEALAND","USA","UAE","MAURITIUS");

        $.each(country_arr, function (i, item) {
            $('#country').append($('<option>', {
                value: i,
                text : item,
            }, '</option>' ));
        });

        // States
        var s_a = new Array();
        s_a[0]="Select State|QUEENSLAND|VICTORIA";
        s_a[1]="Select State|ANDHRAPRADESH|KARNATAKA|TAMILNADU|DELHI|GOA|W-BENGAL|GUJARAT|MADHYAPRADESH|MAHARASHTRA|RAJASTHAN";
        s_a[2]="Select State|AUCKLAND";
        s_a[3]="Select State|NEWJERSEY|ILLINOIS";
        s_a[4]="Select State|DUBAI";
        s_a[5]="Select State|MAURITIUS";

        // Cities
        var c_a = new Array();
        c_a['QUEENSLAND']="Select District|BRISBANE";
        c_a['VICTORIA']="|Select District|MELBOURNE";
        c_a['ANDHRAPRADESH']="Select District|HYDERABAD";
        c_a['KARNATAKA']="Select District|BANGLORE";
        c_a['TAMILNADU']="Select District|CHENNAI";
        c_a['DELHI']="Select District|DELHI";
        c_a['GOA']="Select District|GOA";
        c_a['W-BENGAL']="Select District|KOLKATA";
        c_a['GUJARAT']="Select District|AHMEDABAD1|AHMEDABAD2|AHMEDABAD3|BARODA|BHAVNAGAR|MEHSANA|RAJKOT|SURAT|UNA";
        c_a['MADHYAPRADESH']="Select District|INDORE";
        c_a['MAHARASHTRA']="Select District|MUMBAI|PUNE";
        c_a['RAJASTHAN']="Select District|ABU";
        c_a['AUCKLAND']="Select District|AUCKLAND";
        c_a['NEWJERSEY']="Select District|EDISON";
        c_a['ILLINOIS']="Select District|CHICAGO";
        c_a['MAURITIUS']="Select District|MAURITIUS";
        c_a['DUBAI']="Select District|DUBAI";


        $('#country').change(function(){
            var c = $(this).val();
            var state_arr = s_a[c].split("|");
            $('#state').empty();
            $('#district').empty();
            if(c==0){
                $('#state').append($('<option>', {
                    value: '0',
                    text: 'Select State',
                }, '</option>'));
            }else {
                $.each(state_arr, function (i, item_state) {
                    $('#state').append($('<option>', {
                        value: item_state,
                        text: item_state,
                    }, '</option>'));
                });
            }
            $('#district').append($('<option>', {
                value: '0',
                text: 'Select district',
            }, '</option>'));
        });

        $('#state').change(function(){
            var s = $(this).val();
            if(s=='Select State'){
                $('#district').empty();
                $('#district').append($('<option>', {
                    value: '0',
                    text: 'Select district',
                }, '</option>'));
            }
            var district_arr = c_a[s].split("|");
            $('#district').empty();

            $.each(district_arr, function (j, item_district) {
                $('#district').append($('<option>', {
                    value: item_district,
                    text: item_district,
                }, '</option>'));
            });


        });
    });
    $(document).ready(function(){
        // Countries
        var country_arr = new Array("AUSTRALIA","INDIA","NEW ZEALAND","USA","UAE","MAURITIUS");

        $.each(country_arr, function (i, item) {
            $('#country1').append($('<option>', {
                value: i,
                text : item,
            }, '</option>' ));
        });

        // States
        var s_a = new Array();
        s_a[0]="Select State|QUEENSLAND|VICTORIA";
        s_a[1]="Select State|ANDHRAPRADESH|KARNATAKA|TAMILNADU|DELHI|GOA|W-BENGAL|GUJARAT|MADHYAPRADESH|MAHARASHTRA|RAJASTHAN";
        s_a[2]="Select State|AUCKLAND";
        s_a[3]="Select State|NEWJERSEY|ILLINOIS";
        s_a[4]="Select State|DUBAI";
        s_a[5]="Select State|MAURITIUS";

        // Cities
        var c_a = new Array();
        c_a['QUEENSLAND']="Select District|BRISBANE";
        c_a['VICTORIA']="Select District|MELBOURNE";
        c_a['ANDHRAPRADESH']="Select District|HYDERABAD";
        c_a['KARNATAKA']="Select District|BANGLORE";
        c_a['TAMILNADU']="Select District|CHENNAI";
        c_a['DELHI']="Select District|DELHI";
        c_a['GOA']="Select District|GOA";
        c_a['W-BENGAL']="Select District|KOLKATA";
        c_a['GUJARAT']="Select District|AHMEDABAD1|AHMEDABAD2|AHMEDABAD3|BARODA|BHAVNAGAR|MEHSANA|RAJKOT|SURAT|UNA";
        c_a['MADHYAPRADESH']="Select District|INDORE";
        c_a['MAHARASHTRA']="Select District|MUMBAI|PUNE";
        c_a['RAJASTHAN']="Select District|ABU";
        c_a['AUCKLAND']="Select District|AUCKLAND";
        c_a['NEWJERSEY']="Select District|EDISON";
        c_a['ILLINOIS']="Select District|CHICAGO";
        c_a['MAURITIUS']="Select District|MAURITIUS";
        c_a['DUBAI']="Select District|DUBAI";


        $('#country1').change(function(){
            var c = $(this).val();
            var state_arr = s_a[c].split("|");
            $('#state1').empty();
            $('#district1').empty();
            if(c==0){
                $('#state1').append($('<option>', {
                    value: '0',
                    text: 'Select State',
                }, '</option>'));
            }else {
                $.each(state_arr, function (i, item_state) {
                    $('#state1').append($('<option>', {
                        value: item_state,
                        text: item_state,
                    }, '</option>'));
                });
            }
            $('#district1').append($('<option>', {
                value: '0',
                text: 'Select district',
            }, '</option>'));
        });

        $('#state1').change(function(){
            var s = $(this).val();
            if(s=='Select State'){
                $('#district1').empty();
                $('#district1').append($('<option>', {
                    value: '0',
                    text: 'Select district',
                }, '</option>'));
            }
            var district_arr = c_a[s].split("|");
            $('#district1').empty();

            $.each(district_arr, function (j, item_district) {
                $('#district1').append($('<option>', {
                    value: item_district,
                    text: item_district,
                }, '</option>'));
            });


        });
    });
    
    
    //ADDRESS
    
    function shipsame(form){

if(form.sameasbilling.checked){

     form.firstnameb.value = form.firstname.value;
     form.lastnameb.value = form.lastname.value;
     form.address1b.value = form.address1.value;
     form.address2b.value = form.address2.value;
     form.towncityb.value = form.towncity.value;
     form.stateb.value = form.state.value;
     form.zipcodeb.value = form.zipcode.value;
     
     }else{
     
     form.firstnameb.value = "";
     form.lastnameb.value = "";
     form.address1b.value = "";
     form.address2b.value = "";
     form.towncityb.value = "";
     form.stateb.value = "";
     form.zipcodeb.value = "";
     
     }
}